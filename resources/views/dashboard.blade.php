<x-app-layout >
        
    <div class="container-fluid" id="dashboard">
        <div class="row">
            <div class="col-2 col-md-3 col-lg-2 px-sm-2 px-0 bg-light shadow " style="min-height: 52rem">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt- text-white min-vh-100  position-fixed ">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline mb-3"></span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item mb-4">
                            <a href="/" class="nav-link align-middle px-0 text-dark">
                                <i class="bi bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <hr>
                        <li class="mb-4">
                            <a href="{{ url('landing') }}" class="nav-link px-0 align-middle text-dark">
                                <i class="bi bi-grid-3x3-gap"></i> <span class="ms-1 d-none d-sm-inline">All items</span> </a>
                        </li>
                        <hr>
                        <li class="mb-4">
                            @if (Auth()->user()->can('edit All product'))
                            <a href="#dashboard" class="nav-link px-0 align-middle text-dark">
                                <i class="bi bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                                @else
                                <a href="{{ url('/dashboard') }}" class="nav-link px-0 align-middle text-dark">
                                    <i class="bi bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Your items</span> </a>
                                @endif
                                
                        </li>
                        @if (Auth()->user()->can('edit All product'))
                        <hr>
                        <li class="mb-4">
                            <a href="#statistics" class="nav-link px-0 align-middle text-dark">
                                <i class="bi bi-bar-chart"></i> <span class="ms-1 d-none d-sm-inline">Statistics</span></a>
                        </li>
                        <hr>
                        <li class="mb-4">
                            <a href="#your-products" class="nav-link px-0 align-middle text-dark">
                                <i class="bi bi-box"></i> <span class="ms-1 d-none d-sm-inline">Your products</span></a>
                        </li>
                        <hr>
                        <li class="mb-4">
                            <a href="#all-products" class="nav-link px-0 align-middle text-dark">
                                <i class="bi bi-boxes"></i> <span class="ms-1 d-none d-sm-inline">All Products</span> </a>
                        </li>
                        <hr>
                        <li class="mb-4">
                            <a href="#categorys" class="nav-link px-0 align-middle text-dark">
                                <i class="bi bi-bookmark"></i> <span class="ms-1 d-none d-sm-inline">Categories</span> </a>
                        </li>
                        <hr>
                        <li class="mb-4">
                            <a href="#subcategory" class="nav-link px-0 align-middle text-dark">
                                <i class="bi bi-bookmarks"></i> <span class="ms-1 d-none d-sm-inline">SubCategories</span> </a>
                        </li>
                        <hr>
                        <li class="mb-4">
                            <a href="#citys" class="nav-link px-0 align-middle text-dark">
                                <i class="bi bi-houses"></i> <span class="ms-1 d-none d-sm-inline">Cities</span> </a>
                        </li>
                    </ul>
                    <hr>
                    @endif  
                </div>
            </div>

            <div class="col-10 col-md-9 col-lg-10 py-2" >
                    @if (Auth()->user()->can('edit All product'))
                <div class="container">
                    <!-- Minimal statistics section start -->
                <div class="row ">
                    <div class="col-12 mt-3 mb-1">
                    <h4 id="statistics" class="text-uppercase fw-bold">Statistics</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-xl-3 col-sm-10 col-12 mb-2 p-0">
                        <div class="card row border rounded">
                            <div class="text-center">
                                <i class="bi bi-people"></i>
                                <h3>{{count($user)}}</h3>
                                <p>Users</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3 col-sm-10 col-12 mb-2 p-0">
                        <div class="card row border rounded">
                            <div class="text-center">
                                <i class="bi bi-houses"></i>
                                <h3>{{count($citys)}}</h3>
                                <p>Cities</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3 col-sm-10 col-12 mb-2 p-0">
                        <div class="card row border rounded">
                            <div class="text-center">
                                <i class="bi bi-bookmarks"></i>
                                <h3>{{count($categorys)}}</h3>
                                <p>Catecories</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3 col-sm-10 col-12 mb-2 p-0">
                        <div class="card row border rounded">
                            <div class="text-center">
                                <i class="bi bi-chat-left-dots"></i>
                                <h3>{{count($comments)}}</h3>
                                <p>Comments</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3 col-sm-10 col-12 mb-2 p-0">
                        <div class="card row border rounded">
                            <div class="text-center">
                                <i class="bi bi-boxes"></i>
                                <h3>{{count($allProducts)}}</h3>
                                <p>All Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-3 col-sm-10 col-12 mb-2 p-0">
                        <div class="card row border rounded">
                            <div class="text-center">
                                <i class="bi bi-box"></i>
                                <h3>{{count($products)}}</h3>
                                <p>Your Products</p>
                            </div>
                        </div>
                    </div>
                        
                </div>


                <!-- // Minimal statistics section end -->
                </div>
                {{-- all products --}}
                @endif
                <div class="row items-center me-0">
                    <h1 id="your-products" class="col fw-bold ms-3 mt-5">Your Products</h1>  
                    <button class="col-4 me-3 mt-5 btn btn-dark w-auto shadow" href="" data-bs-toggle="modal"><a href="{{ url('add') }}"><b>+ </b> Add Product</a></button>
                </div>
            
                <div class="container pt-5 table-responsive">
                        @if (count($products) == 0)
                            <div id="message" class="text-secondary position-absolute bottom-50 end-50 fs-3">
                                <h1><b>You have no item yet!</b></h1>
                            </div>                            
                         @else
                        
                            <table class="table table-responsive bg-white shadow rounded text-center">
                                    @php
                                    $count = 1;
                                    @endphp
                                <thead>
                                    <tr>
                                    <th scope="col">#{{count($products)}}</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Descriptio</th>
                                    <th scope="col">City</th>
                                    <th scope="col">telephone</th>
                                    <th scope="col">price</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">SubCategory</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">View</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($products as $items)
                                    <tr>
                                    <td>{{$count}}</td>
                                    <td>{{$items->title}}</td>
                                    <td><img class="rounded" src="{{asset('/storage/'.$items->image)}}" width="80"></td>
                                    <td>{{$items->description}}</td>
                                    <td>{{$items->city->nameCity}}</td>
                                    <td>{{$items->telephone}}</td>
                                    <td>{{$items->prix}}{{$items->prix < 100 ? '.00dh' : 'dh'}}</td>
                                    <td>{{$items->category->nameCategory}}</td>
                                    <td>{{$items->subCategory->nameSubCategory}}</td>
                                    <td><i class="bi bi-clock-history"></i> {{$items->created_at->diffForHumans(null, false, false)}}</td>
                                    <td><a href="{{ route('product.show', $items->id) }}" class="text-decoration-none text-success fw-bold">view</a></td>
                                    <td><a href="{{ route('product.edit', $items->id) }}" class="text-decoration-none text-primary fw-bold">edit</a></td>
                                    <td><a href="{{ route('product.destroy', $items->id) }}" onclick="return confirm('Are you sure?')" class="text-decoration-none text-danger fw-bold">delete</a></td>
                                    </tr>
                                
                                    @php
                                    $count ++;
                                    @endphp
                                    @endforeach
                                </tbody>
                                </table> 
                                @endif
                            </div>
                            <div class="container">
                                {{$products->links('pagination::tailwind')}}
                            </div>
                        {{-- all products table --}}
                        @livewire('dashboard')  
                        {{-- end of products --}}
    
            {{-- categorys --}}

            @if (Auth()->user()->can('edit All product'))
            <div class="row items-center me-0">
                
                <h1 id="categorys" class="col-4 col-xl-8 fw-bold ms-3 mt-5">Categories</h1>  
            
                <form class="col" action="categorys" method="POST" id="" data-parsley-validate>
                    @csrf
                    <div class=" d-flex">
                    <input type="text" name="nameCategory" class="col ms-2 shadow form-control mb-2 mt-5 rounded @error('nameCategory') is-invalid @enderror" data-parsley-minlength="3" data-parsley-required/>
                    
                    <button type="submit" class="col-3 ms-2 rounded shadow text-light bg-black me-2 mt-5 mb-2 " id="category-add-btn">Add</button>
                    </div>
                    <small class="text-danger">
                        @error('nameCategory')
                        {{ $message }}
                    @enderror</small>
                </form>
                {{-- <button class="col-4 me-5 mt-5 btn btn-dark w-auto" href="#modal-meal" data-bs-toggle="modal"><b>+ </b> Add Product</button> --}}
                </div>
            <div class="container pt-3 table-responsive">
            
                <table class="table table-responsive bg-white shadow rounded text-center">
                    <thead>
                        <tr>
                        <th scope="col">#{{count($categorys)}}</th>
                        <th scope="col">Name</th>
                        <th scope="col">Time</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $count = 1;
                        @endphp
                    @foreach ($categorys as $category)
                        <tr>
                        <td>{{$count}}</td>
                        <td>{{$category->nameCategory}}</td>
                        <td><i class="bi bi-clock-history"></i> {{$category->created_at->diffForHumans(null, false, false)}}</td>
                        <td><a href="#modal-category" data-bs-toggle="modal" onclick="showModel('{{$category->nameCategory}}', {{$category->id}})" class="text-decoration-none text-primary fw-bold">edit</a></td>
                        <td><a href="{{ route('category.destroy', $category->id) }}" onclick="return confirm('Are you sure?')" class="text-decoration-none text-danger fw-bold">delete</a></td>
                        </tr>
                        @php
                        $count ++;
                        @endphp
                        @endforeach
                    </tbody>
                    </table>
                    
                </div>
                <div class="container">
                    {{$categorys->links('pagination::tailwind')}}
                </div> 
            @endif
            {{-- end of categorys --}}

            {{-- subcategorys --}}

            @if (Auth()->user()->can('edit All product'))
            <div class="row items-center me-0">
                
                <h1 id="subcategory" class="col-12 col-md-4 col-xl-8 fw-bold ms-3 mt-5 mb-4">SubCategories</h1>  
            
                <form class="col" action="subCategory" method="POST" id="" data-parsley-validate>
                    @csrf
                    <div class="d-flex">
                        <div class="col">
                            <select class="form-select shadow rounded border @error('category_id') is-invalid @enderror" name="category_id" aria-label="Default select example">
                                <option value="">Parent category</option>
                                @foreach ($categorys as $category)
                                <option value="{{$category->id}}">{{$category->nameCategory}}</option>
                                @endforeach
                              </select>
                        </div>
                    <input type="text" name="nameSubCategory" class="col ms-2 shadow form-control rounded @error('nameSubCategory') is-invalid @enderror" data-parsley-minlength="3" data-parsley-required/>
                    <button type="submit" class="col-3 ms-2 rounded shadow text-light bg-black " id="category-add-btn">Add</button>
                    </div>
                    <small class="text-danger">
                        @error('nameSubCategory')
                        {{ $message }}
                    @enderror</small>
                </form>
                {{-- <button class="col-4 me-5 mt-5 btn btn-dark w-auto" href="#modal-meal" data-bs-toggle="modal"><b>+ </b> Add Product</button> --}}
                </div>
            <div class="container pt-2 table-responsive">
            
                <table class="table table-responsive shadow bg-white rounded text-center">
                    <thead>
                        <tr>
                        <th scope="col">#{{count($categorys)}}</th>
                        <th scope="col">Parent</th>
                        <th scope="col">Name</th>
                        <th scope="col">Time</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $count = 1;
                        @endphp
                    @foreach ($subCategory as $sub)
                        <tr>
                        <td>{{$count}}</td>
                        <td>{{$sub->category->nameCategory}}</td>
                        <td>{{$sub->nameSubCategory}}</td>
                        <td><i class="bi bi-clock-history"></i> {{$sub->created_at->diffForHumans(null, false, false)}}</td>
                        <td><a href="#modal-subCategory" data-bs-toggle="modal" onclick="showSubModel('{{$sub->nameSubCategory}}', {{$sub->id}}, '{{$sub->category->nameCategory}}', {{$sub->category->id}})" class="text-decoration-none text-primary fw-bold">edit</a></td>
                        <td><a href="{{ route('subCategory.destroy', $sub->id) }}" onclick="return confirm('Are you sure?')" class="text-decoration-none text-danger fw-bold">delete</a></td>
                        </tr>
        
                        @php
                        $count ++;
                        @endphp
                        @endforeach
                    </tbody>
                    </table> 
                    
                </div>
                <div class="container">
                    {{$subCategory->links('pagination::tailwind')}}
                </div>
            @endif
            {{-- end of subcategorys --}}

            {{-- citys --}}
            @if (Auth()->user()->can('edit All product'))
            <div class="row items-center me-0">
            <h1 id="citys" class="col-4 col-xl-8 fw-bold ms-3 mt-5">Cities</h1>  
                
            <form class="col" action="citys" method="POST" id="" data-parsley-validate>
                @csrf
                <div class=" d-flex">
                <input type="text" name="nameCity" class="col ms-2 shadow form-control mb-2 mt-5 rounded @error('nameCity') is-invalid @enderror" data-parsley-minlength="3" data-parsley-required/>
                
                <button type="submit" class="col-3 ms-2 rounded shadow text-light bg-black me-2 mt-5 mb-2 " id="category-add-btn">Add</button>
                </div>
                <small class="text-danger">
                    @error('nameCity')
                    {{ $message }}
                @enderror</small>
            </form>
                </div>
        <div class="container pt-3 table-responsive">
        
            <table class="table table-responsive shadow bg-white rounded text-center">
                    @php
                    $count = 1;
                    @endphp
                <thead>
                    <tr>
                    <th scope="col">#{{count($citys)}}</th>
                    <th scope="col">Name</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($citys as $city)
                    <tr>
                    <td>{{$count}}</td>
                    <td>{{$city->nameCity}}</td>
                    <td><a href="#modal-city" data-bs-toggle="modal" onclick=" showModel('{{$city->nameCity}}', {{$city->id}})" class="text-decoration-none text-primary fw-bold">edit</a></td>
                    <td><a href="{{ route('city.destroy', $city->id) }}" onclick="return confirm('Are you sure?')" class="text-decoration-none text-danger fw-bold">delete</a></td>
                    </tr>
                    @php
                    $count ++;
                    @endphp
                    @endforeach
                </tbody>
                </table> 
            </div>
            <div class="container">
                {{$citys->links('pagination::tailwind')}}
            </div>
            @endif
            {{-- end of citys --}}
        </div>
    </div>
</div>
 <!-- edit city form -->
	<div  class="modal fade" id="modal-city">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="{{ route('city.update') }}" method="post" id="form" enctype="multipart/form-data">
                 @csrf
                 @method('PUT')
					<div class="modal-header">
						<h5 class="modal-title fw-bold">Edit City</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
                        <input type="hidden" name="id" id="cityId" value="">
							<div class="mb-3">
								<label class="form-label">City</label>
								<input type="text" name="nameCity" class="form-control rounded @error('nameCity') is-invalid @enderror" id="city" value=""/>
                                <small class="text-danger">
                                    @error('nameCity')
                                    {{ $message }}
                                @enderror
                               </small>
							</div>
                
					</div>
					<div class="modal-footer">
						<a href="#" data-bs-dismiss="modal" class="btn btn-white border" >Cancel</a>
						<button type="submit" class="btn btn-dark text-light bg-dark">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
    {{-- end form --}}

    <!-- edit category form -->
	<div  class="modal fade" id="modal-category">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="{{ route('category.update') }}" method="POST" id="form" enctype="multipart/form-data">
                 @csrf
                 @method('PUT')
					<div class="modal-header">
						<h5 class="modal-title fw-bold">Edit Category</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
			
							<input type="hidden" name="id" id="categoryId" value="">
							<div class="mb-3">
								<label class="form-label">Category</label>
								<input type="text" name="nameCategory" class="form-control rounded @error('nameCategory') is-invalid @enderror" id="category"/>
                                <small class="text-danger">
                                    @error('nameCategory')
                                    {{ $message }}
                                @enderror
                               </small>
							</div>
                
					</div>
					<div class="modal-footer">
						<a href="#" data-bs-dismiss="modal" class="btn btn-white border" >Cancel</a>
						<button type="submit" class="btn btn-dark text-light bg-dark">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
    {{-- end form --}}

    <!-- edit sub category form -->
	<div  class="modal fade" id="modal-subCategory">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="{{ route('subCategory.update') }}" method="POST" id="form" enctype="multipart/form-data">
                 @csrf
                 @method('PUT')
					<div class="modal-header">
						<h5 class="modal-title fw-bold">Edit subCategory</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
			
							<input type="hidden" name="id" id="subCategoryId" value="">
							<div class="mb-3">
								<label class="form-label">subCategory</label>
								<input type="text" name="nameSubCategory" class="form-control rounded @error('nameSubCategory') is-invalid @enderror" id="subCategory"/>
                                <small class="text-danger">
                                    @error('nameSubCategory')
                                    {{ $message }}
                                @enderror
                               </small>
							</div>
                            <div class="">
                                <select class="form-select rounded border @error('category_id') is-invalid @enderror" name="category_id" aria-label="Default select example">
                                    <option id="catId" value=""></option>
                                    @foreach ($categorys as $category)
                                    <option value="{{$category->id}}">{{$category->nameCategory}}</option>
                                    @endforeach
                                  </select>
                                <small class="text-danger">
                                    @error('category_id')
                                    {{ $message }}
                                @enderror</small>
                            </div>
                
					</div>
					<div class="modal-footer">
						<a href="#" data-bs-dismiss="modal" class="btn btn-white border" >Cancel</a>
						<button type="submit" class="btn btn-dark text-light bg-dark">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
   
<link rel="stylesheet" href="{{asset('css\app.css')}}">
<script src="{{ asset('js/script.js') }}"></script>
</x-app-layout>
