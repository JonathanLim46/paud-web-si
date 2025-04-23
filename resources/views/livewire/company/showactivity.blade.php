<div>
    <div class="logos container-fluid my-5 p-5">
        <div class="logos-slide">
            @foreach ($activitys as $activity)
            <img src="{{ asset('storage/aktivitas/'.$activity->foto_aktivitas) }}" alt="Activity 1">  
            @endforeach
        </div>
        <div class="logos-slide">
            @foreach ($activitys as $activity)
            <img src="{{ asset('storage/aktivitas/'.$activity->foto_aktivitas) }}" alt="Activity 1">  
            @endforeach
        </div>
    </div>
</div>
