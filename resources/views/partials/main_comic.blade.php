<div class="contenitore-comic">
@foreach ($fumetti as $fumetto)
<div class="div-comic">
    <div class="cont-img">
            <img src="{{ $fumetto["thumb"]}}" alt="copertina">        
    </div>
    <p>{{ $fumetto["title"]}}</p>
</div>
@endforeach
</div>