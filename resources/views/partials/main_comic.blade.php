<div class="contenitore-comic">
@foreach ($fumetti as $key => $fumetto)
<a class="div-comic" href="{{ route("comic", ["id" => $key])}}">
    <div class="cont-img">
            <img src="{{ $fumetto["thumb"]}}" alt="copertina">        
    </div>
    <p>{{ $fumetto["title"]}}</p>
</a>
@endforeach
</div>
