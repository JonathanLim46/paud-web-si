<?php

namespace App\Livewire\Dashboard;

use App\Models\Kelas;
use Livewire\Component;
use App\Models\Pendaftar;
use App\Models\DataPribadi;
use Livewire\Notifications\Notification;

class PPDBDetail extends Component
{

    public $status, $pendaftar, $message_status_error, $all_kelas;

    public $error_status, $success_status = false;

    public function mount($id)
    {
        $this->pendaftar = Pendaftar::with('dataPribadi', 'dataOrangTua', 'dokumen', 'dataSekolah', 'kelas')->findOrFail($id);
        
        $this->all_kelas = Kelas::all();

        if (is_null($this->pendaftar->diterima)) {
            $this->status = "Tahap Verifikasi"; 
        } elseif ($this->pendaftar->diterima == 1) {
            $this->status = "Diterima"; 
        } elseif ($this->pendaftar->diterima == 0) {
            $this->status = "Ditolak"; 
        }
    }

    public function setKelas($kelas_id, $id_pendaftar){
        $pendaftar = Pendaftar::findOrFail($id_pendaftar);
        $pendaftar->update([
            'kelas_id' => $kelas_id,
        ]);

        $this->pendaftar = Pendaftar::with('kelas')->findOrFail($id_pendaftar);
        $this->success_status = true;
        $this->message_status_error = 'Status berhasil diperbarui.';
    }

    public function setStatus($newStatus, $id)
    {
        $this->status = $newStatus;

        $data_pendaftar = Pendaftar::findOrFail($id);
    
        $dataPribadi = $data_pendaftar->dataPribadi;
    
        if ($dataPribadi && !empty($dataPribadi->nis) && $newStatus === 'Tahap Verifikasi') {
            $this->success_status = false;
            $this->error_status = true;
            $this->message_status_error = 'Tidak bisa mengubah ke Tahap Verifikasi karena NIS sudah dibuat.';
        } elseif ($dataPribadi && !empty($dataPribadi->nis) && $newStatus === 'Ditolak') {
            $this->success_status = false;
            $this->error_status = true;
            $this->message_status_error = 'Tidak bisa mengubah ke Ditolak karena NIS sudah dibuat.';
        } else {
            $statusValue = match ($newStatus) {
                'Diterima' => 1,
                'Ditolak', 'Tahap Verifikasi' => 0,
            };
    
            $data_pendaftar->update([
                'diterima' => $statusValue,
                'status_verifikasi' => $statusValue,
            ]);
    
            if ($dataPribadi) {
                if ($newStatus === 'Diterima') {
                    if (empty($dataPribadi->nis)) {
                        $dataPribadi->update([
                            'nis' => $this->generateNis()
                        ]);
                    }
                } else {
                    $dataPribadi->update([
                        'nis' => null
                    ]);
                }
            }
    
            $this->error_status = false;
            $this->success_status = true;
            $this->message_status_error = 'Status berhasil diperbarui.';
        }
    }

    public function generateNis(): string
    {
        $tahunAwal = date('y');
        $tahunAkhir = $tahunAwal + 1;
        $kodeSekolah = '530';
        $prefixTahun = "{$tahunAwal}{$tahunAkhir}{$kodeSekolah}";
    
        $jumlahTahunIni = DataPribadi::where('nis', 'like', "{$prefixTahun}%")->count();
    
        $noUrut = str_pad($jumlahTahunIni + 1, 3, '0', STR_PAD_LEFT);
    
        $nis = "{$prefixTahun}{$noUrut}";
    
        return $nis;
    }

    public function render()
    {
        return view('livewire.dashboard.p-p-d-b-detail')->layout('components.layouts.app', [
            'title' => "Data Pribadi",
            'section_title' => "Data Pribadi",
        ]);
    }
}
