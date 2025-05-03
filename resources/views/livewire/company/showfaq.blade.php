<div>
    <div class="faq-container">
        <!-- FAQ Item -->
        @foreach ($faqs as $faq)
        <div class="faq-item">
            <div class="faq-question" onclick="toggleFaq(this)">
                <div>{{ $faq->judul_FAQ }}</div>
                <div class="arrow-icon">▼</div>
            </div>
            <div class="faq-answer">
                <p>{{$faq->isi_FAQ}}</p>
            </div>
            <div class="divider"></div>
        </div>
        @endforeach
    </div>
</div>
