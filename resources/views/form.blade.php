@extends("app")
@section("content")
    <form class="form card" method="post">
        @csrf
        <h2 class="card-header">Create Van</h2>

        <fieldset class="card-body">

            <div class="form-group">

                <label for="name">Name</label>
                <input 
                    id="name" 
                    name="name" 
                    class="form-control"
                    {{-- value="{{ old('name')}}"   --}}
                />

            </div>

            <div class="form-group">

                <label for="bio">Bio</label>
                <textarea 
                    id="bio" 
                    name="bio"
                    class="form-control"> 
                    {{-- {{ old('bio') }} --}}
                </textarea>

            </div>

            <div class="form-group">

                <label for="lat">Lat</label>
                <input 
                    id="lat" 
                    name="lat" 
                    class="form-control" 
                    {{-- value="{{ old('lat')}}" --}}
                />
            </div>

            <div class="form-group">

                <label for="lon">lon</label>
                <input 
                    id="lon" 
                    name="lon" 
                    class="form-control" 
                    {{-- value="{{ old('lon')}}" --}}
                />
            </div>

             <div class="form-group">

                <label for="priciness">Priciness</label>
                <input 
                    id="priciness" 
                    name="priciness" 
                    class="form-control"
                    {{-- value="{{ old('priciness')}}"   --}}
                />

            </div>

            <div class="form-group">

                <label for="rating">Rating</label>
                <textarea 
                    id="rating" 
                    name="rating"
                    class="form-control"> 
                    {{-- {{ old('rating') }} --}}
                </textarea>

            </div>

            <div class="form-group">

                <label for="imgUrl">imgUrl</label>
                <input 
                    id="imgUrl" 
                    name="imgUrl" 
                    class="form-control" 
                    {{-- value="{{ old('imgUrl')}}" --}}
                />
            </div>

        </fieldset>
        
        <div class="card-footer text-right">
            <button class="btn btn-success">Create</button>
        </div>
    </form>
@endsection