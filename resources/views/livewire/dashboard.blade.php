<div>
    @if (Auth()->user()->can('edit All product'))
    <div class="row items-center container">
        <h1 id="all-products" class="col fw-bold mt-5 ms-1 text-center text-lg-start">All Products</h1>  
        <!-- Search form -->
        <input class="form-control col-4 mt-3 mt-gl-5 w-auto ms-5 rounded border shadow" wire:model="search" placeholder="Search" >    
    </div>

    <div class="container pt-3 table-responsive">
            
        <table class="table table-responsive shadow bg-white rounded text-center">
            <thead>
                <tr>
                <th scope="col">#{{count($products)}}</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Descriptio</th>
                <th scope="col">City</th>
                <th scope="col">Telephone</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">SubCategory</th>
                <th scope="col">Time</th>
                <th scope="col">View</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @php
                $count = 1;
                @endphp
            @foreach ($product as $item)
                <tr>
                <td>{{$count}}</td>
                <td>{{$item->title}}</td>
                <td><img class="rounded" src="{{asset('/storage/'.$item->image)}}" width="80"></td>
                <td>{{$item->description}}</td>
                <td>{{$item->city->nameCity}}</td>
                <td>{{$item->telephone}}</td>
                <td>{{$item->prix}}{{$item->prix < 100 ? '.00dh' : 'dh'}}</td>
                <td>{{$item->category->nameCategory}}</td>
                <td>{{$item->subCategory->nameSubCategory}}</td>
                <td><i class="bi bi-clock-history"></i> {{$item->created_at->diffForHumans(null, false, false)}}</td>
                <td><a href="{{ route('product.show', $item->id) }}" class="text-decoration-none text-success fw-bold">view</a></td>
                <td><a href="{{ route('product.edit', $item->id) }}" class="text-decoration-none text-primary fw-bold">edit</a></td>
                <td><a href="{{ route('product.destroy', $item->id) }}" class="text-decoration-none text-danger fw-bold" onclick="return confirm('Are you sure?')">delete</a></td>
                </tr>
            
                @php
                $count ++;
                @endphp
                @endforeach
            </tbody>
            </table> 
        </div>
        <div class="container">
            {{$product->links()}}
        </div>
    {{-- end of products --}}
    @endif
    @livewireScripts
</div>
