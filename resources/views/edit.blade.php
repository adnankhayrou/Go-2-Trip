<x-app-layout>
    <div class="container items-center">
        <h1 class="col fw-bold mt-3 mb-2 text-center fs-2">Edit Your item</h1>
        </div>
    <!-- edit meal form -->
    <div class="container pt-3 w-75 bg-white rounded">
        <form action="{{ route('product.update',$products) }}" method="POST" id="form" class=" pb-2" enctype="multipart/form-data">

            {{ csrf_field() }}
            @method('PUT') 
            <div class=" row modal-body">
            <div class="col-12 mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="title" class="form-control rounded border" name="title" value="{{$products->title}}"/>
                <small class="text-danger">
                    @error('title')
                    {{ $message }}
                @enderror</small>
            </div>
            <div class="rounded">
                <img class="rounded" src="{{asset('/storage/'.$products->image)}}" style="width: 7em;">
            </div>

           <div class="col-12 mb-5">
             <label for="image" class="col-form-label" id="image">Image</label>
             <input type="file" class="form-control border rounded" id="images" name="image" value="{{$products->image}}">
             <small class="text-danger">
                @error('image')
                {{ $message }}
            @enderror</small>
           </div>

           <div class="col-6 mb-3">
            <select class="form-select rounded border" name="city_id" aria-label="Default select example">
                <option selected>select your city</option>
                @foreach ($citys as $city)
                <option value="{{$city->id}}" {{$products->city_id == $city->id ? 'selected' : ''}}>{{$city->nameCity}}</option>
                @endforeach
              </select>
            <small class="text-danger">
                @error('city_id')
                {{ $message }}
            @enderror</small>
        </div>

        <div class="col-6 mb-3">
            <select class="form-select rounded border" name="category_id" aria-label="Default select example">
                <option selected>select your category</option>
                @foreach ($categorys as $category)
                <option value="{{$category->id}}" {{$products->category_id == $category->id ? 'selected' : ''}}>{{$category->nameCategory}}</option>
                @endforeach
              </select>
            <small class="text-danger">
                @error('category_id')
                {{ $message }}
            @enderror</small>
        </div>

            <div class="col-12 col-md-6 col-lg-6 mb-3">
                <label class="form-label">Prix</label>
                <input type="number" name="prix" any class="form-control rounded border"  value="{{$products->prix}}"/>
                <small class="text-danger">
                    @error('prix')
                    {{ $message }}
                @enderror</small>
            </div>

            <div class="col-lg-6 col-md-5 col-12">
                <label class="form-label">Phone number</label>
                <input type="tel" name="telephone" class="form-control rounded border" value="{{$products->telephone}}"/>
                <small class="text-danger">
                    @error('telephone')
                    {{ $message }}
                @enderror</small>
            </div>

            <div class="col-12 mb-0">
                <label class="form-label">Description</label>
                <textarea class="form-control border rounded" name="description" rows="3" >{{$products->description}}</textarea>
                <small class="text-danger">
                    @error('description')
                    {{ $message }}
                @enderror</small>
            </div>
                   
            </div>
            <div class="modal-footer mt-2">
                <a href="/dashboard" class="btn btn-white border" >Cancel</a>
                <button type="submit" class="btn btn-dark ms-2 text-light bg-dark">Save</button>
            </div>
         </form>   

           </div>
        </div>
</x-app-layout>