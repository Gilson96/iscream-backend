@extends("app")

@section("content")

    <div class="card">

        <h2 class="card-header"> {{ $vans->name }} </h2>

        <article class="card-body">

            {{ $vans->bio }}
            
            <h3 class="card-header">Latitude
                <h4 class="card-header"> {{ $vans->lat }} 
            </h3>

             <h3 class="card-header">Longitude
                <h4 class="card-header"> {{ $vans->lon }} 
            </h3>

             <h3 class="card-header">Priciness
                <h4 class="card-header"> {{ $vans->priciness }}
            </h3>

             <h3 class="card-header">Rating
                <h4 class="card-header"> {{ $vans->rating }} </h4> 
            </h3>
            
            <h3 class="card-header">Img
                <h4 class="card-header"> {{ $vans->imgUrl }} </h4> 
            </h3>
             </h4>
            
           
        </article>

        <hr />
    </div>
@endsection

    {{-- <h3>Ice Creams</h3>

        @include("icecream/form")

    </div>

    <h3>Ice Cream</h3>

    @if($imen->icecream->isNotEmpty())
        <div class="list-group">
            @foreach ($icecreams as $icecream)

            <div class="d-flex w-100 justify-content-between">

                <h5 class="mb-1">{{ $icecream->icecream }}</h5>
            </div>

            @endforeach
        </div>
    @else
        <p class="alert alert-secondary">No comments found</p>
    @endif

    @include("icecream/form")--}}