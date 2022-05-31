<div class="contenitore-singolo-fumetto">
     
    
        <img src="{{ $fumetto_singolo["thumb"]}}" alt="copertina" class="img-class">

        <div class="sbarretta-blu"> </div>
        <div class="pannello-sopra-singolo">
                    <div class="schermata">
                    <h1>{{$fumetto_singolo["title"]}}</h1>
                    <div class="verde-barra">
                        <div class="verde1">
                            <span>US Price: <span style="font-weight: 800">{{$fumetto_singolo["price"]}}</span></span>
                        <span>Available</span>
                        </div>
                        <div class="verde2">
                            <p>Check availability <i class="fa-solid fa-square-caret-down"></i></p>
                        </div>
                        
                    </div>
                    <p>
                    <p class="descrizione">{{$fumetto_singolo["description"]}}</p>  
                    </p>
                </div>

                <div class="publicita">
                    <p>Advertisment</p>
                    <img src="{{asset("images/adv.jpg")}}" alt="">
                </div>
        </div>

        <div class="tabella">

        </div>
        
        
    
   {{-- <p>{{$fumetto_singolo["description"]}}</p>
    <h1>{{$fumetto_singolo["title"]}}</h1>
    <p>Prezzo: {{$fumetto_singolo["price"]}}</p>
    <p>Serie: {{$fumetto_singolo["series"]}}</p>
    <p>Data di uscita: {{$fumetto_singolo["sale_date"]}}</p>
    <p>Tipo: {{$fumetto_singolo["type"]}}</p>
    <p>Disegnatori: 
    @foreach ($fumetto_singolo["artists"] as $item)
    <span>{{$item}}, </span> 
    @endforeach 
    </p>
    <p>Sceneggiatori: 
    @foreach ($fumetto_singolo["writers"] as $item)
    <span>{{$item}}, </span> 
    @endforeach 
    </p> --}}
   
</div>
