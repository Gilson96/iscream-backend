 <a href="/vans/{{ $vans->id }}"class="list-group-item list-group-item-action">
       
    <div class="list-group">

        <h5 class="mb-1">{{ $vans->name }}</h5>

        <h5 class="mb-1">{{ $vans->bio }}</h5>

        <h5 class="mb-1">Lat: {{ $vans->lat }}s</h5>
  
        <h5 class="mb-1">{{ $vans->lon }}</h5>

        <h5 class="mb-1">{{ $vans->priciness}}</h5>

        <h5 class="mb-1">{{ $vans->rating }}</h5>

        <h5 class="mb-1">{{ $vans->imgUrl }}</h5>
    </div>    
</a>