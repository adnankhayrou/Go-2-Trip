<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 col-md-3 col-lg-2 px-sm-2 px-0 bg-light shadow">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline mb-5"></span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0 text-dark">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-dark">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                        </li>
                        <hr>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle text-dark">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                        </li>
                        <hr>
                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-dark">
                                <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                        </li>
                        <hr>
                        <li>
                            <a href="{{ url('landing') }}" class="nav-link px-0 align-middle text-dark">
                                <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">All Products</span> </a>
                        </li>
                        <hr>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle text-dark">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                        </li>
                    </ul>
                    <hr>
                    
                </div>
            </div>

            <div class="col-10 col-md-9 col-lg-10 py-2">
                    @if (Auth()->user()->can('edit All product'))
                <div class="container">
                    <!-- Minimal statistics section start -->
                <div class="row ">
                    <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Statistics</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-xl-3 col-sm-10 col-12 mb-2 p-0">
                        <div class="card row">
                            <div class="text-center">
                                <i class="bi bi-list-ul"></i>
                                <h3>156</h3>
                                <p>Comments</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-xl-3 col-sm-10 col-12 mb-2 p-0">
                        <div class="card row">
                            <div class="text-center">
                                <i class="bi bi-list-ul"></i>
                                <h3>156</h3>
                                <p>Comments</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-xl-3 col-sm-10 col-12 mb-2 p-0">
                        <div class="card row">
                            <div class="text-center">
                                <i class="bi bi-list-ul"></i>
                                <h3>156</h3>
                                <p>Comments</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-xl-3 col-sm-10 col-12 mb-2 p-0">
                        <div class="card row">
                            <div class="text-center">
                                <i class="bi bi-list-ul"></i>
                                <h3>156</h3>
                                <p>Comments</p>
                            </div>
                        </div>
                    </div>
                        
                </div>


                <!-- // Minimal statistics section end -->
                </div>
                {{-- all products --}}
                @endif
                <div class="row items-center me-0">
                    <h1 class="col fw-bold ms-3 mt-5">Your Products</h1>  
                    <button class="col-4 me-3 mt-5 btn btn-dark w-auto" href="" data-bs-toggle="modal"><a href="{{ url('add') }}"><b>+ </b> Add Product</a></button>
                </div>
            
                <div class="container pt-5 table-responsive">
            
                            <table class="table table-responsive bg-white rounded">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Descriptio</th>
                                    <th scope="col">City</th>
                                    <th scope="col">telephone</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $count = 1;
                                    @endphp
                                @foreach ($products as $items)
                                    <tr>
                                    <td>{{$count}}</td>
                                    <td>{{$items->title}}</td>
                                    <td><img class="rounded" src="{{asset('/storage/'.$items->image)}}" width="80"></td>
                                    <td>{{$items->description}}</td>
                                    <td>{{$items->city->nameCity}}</td>
                                    <td>{{$items->telephone}}</td>
                                    <td>{{$items->category->nameCategory}}</td>
                                    <td>{{$items->created_at->diffForHumans(null, false, false)}}</td>
                                    <td><a href="{{ route('product.edit', $items->id) }}" class="text-decoration-none text-primary fw-bold">edit</a></td>
                                    <td><a href="" class="text-decoration-none text-danger fw-bold">delete</a></td>
                                    </tr>
                                
                                    @php
                                    $count ++;
                                    @endphp
                                    @endforeach
                                </tbody>
                                </table> 
                        </div>
                        {{-- all products table --}}
                        @livewire('dashboard')  
                        {{-- end of products --}}
    
            {{-- categorys --}}

            @if (Auth()->user()->can('edit All product'))
            <div class="row items-center me-0">
                
                <h1 class="col-4 col-xl-8 fw-bold ms-3 mt-5">Categorys</h1>  
            
                <form class="col" action="categorys" method="POST" id="" data-parsley-validate>
                    @csrf
                    <div class=" d-flex">
                    <input type="text" name="nameCategory" class="col ms-2 form-control mb-2 mt-5 rounded" data-parsley-minlength="3" data-parsley-required/>
                    
                    <button type="submit" class="col-3 ms-2 rounded text-light bg-black me-2 mt-5 mb-2 " id="category-add-btn">Add</button>
                    </div>
                    <small class="text-danger">
                        @error('nameCategory')
                        {{ $message }}
                    @enderror</small>
                </form>
                {{-- <button class="col-4 me-5 mt-5 btn btn-dark w-auto" href="#modal-meal" data-bs-toggle="modal"><b>+ </b> Add Product</button> --}}
                </div>
            <div class="container pt-3 table-responsive">
            
                <table class="table table-responsive bg-white rounded items-center">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Time</th>
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
                        <td>{{$category->created_at->diffForHumans(null, false, false)}}</td>
                        <td><a href="#modal-category" data-bs-toggle="modal" onclick=" showModel('{{$category->nameCategory}}')" class="text-decoration-none text-primary fw-bold">edit</a></td>
                        <td><a href="" class="text-decoration-none text-danger fw-bold">delete</a></td>
                        </tr>
                        @php
                        $count ++;
                        @endphp
                        @endforeach
                    </tbody>
                    </table> 
                
            </div>
            @endif
            {{-- end of categorys --}}

            {{-- citys --}}
            @if (Auth()->user()->can('edit All product'))
            <div class="row items-center me-0">
            <h1 class="col-4 col-xl-8 fw-bold ms-3 mt-5">Citys</h1>  
                
            <form class="col" action="citys" method="POST" id="" data-parsley-validate>
                @csrf
                <div class=" d-flex">
                <input type="text" name="nameCity" class="col ms-2 form-control mb-2 mt-5 rounded" data-parsley-minlength="3" data-parsley-required/>
                
                <button type="submit" class="col-3 ms-2 rounded text-light bg-black me-2 mt-5 mb-2 " id="category-add-btn">Add</button>
                </div>
                <small class="text-danger">
                    @error('nameCity')
                    {{ $message }}
                @enderror</small>
            </form>
                </div>
        <div class="container pt-3 table-responsive">
        
            <table class="table table-responsive bg-white rounded">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Time</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $count = 1;
                    @endphp
                @foreach ($citys as $city)
                    <tr>
                    <td>{{$count}}</td>
                    <td>{{$city->nameCity}}</td>
                    <td>{{$city->created_at->diffForHumans(null, false, false)}}</td>
                    <td><a href="#modal-city" data-bs-toggle="modal" onclick=" showModel('{{$city->nameCity}}')" class="text-decoration-none text-primary fw-bold">edit</a></td>
                    <td><a href="" class="text-decoration-none text-danger fw-bold">delete</a></td>
                    </tr>
                    @php
                    $count ++;
                    @endphp
                    @endforeach
                </tbody>
                </table> 
            
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
				<form action="citys/{{$citys}}" method="PUT" id="form" enctype="multipart/form-data">
                 @csrf
					<div class="modal-header">
						<h5 class="modal-title fw-bold">Edit item</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
							<div class="mb-3">
								<label class="form-label">City</label>
								<input type="text" name="nameCity" class="form-control rounded" id="city" value=""/>
                                <small class="text-danger">
                                    @error('nameCity')
                                    {{ $message }}
                                @enderror
                               </small>
							</div>
                
					</div>
					<div class="modal-footer">
						<a href="/dashboard" class="btn btn-white border" >Cancel</a>
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
				<form action="" method="POST" id="form" enctype="multipart/form-data">
                 @csrf
                 @method('PUT')
					<div class="modal-header">
						<h5 class="modal-title fw-bold">Edit item</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
			
							<input type="hidden" name="id" >
							<div class="mb-3">
								<label class="form-label">Category</label>
								<input type="text" name="nameCategory" class="form-control rounded" id="category"/>
                                <small class="text-danger">
                                    @error('nameCategory')
                                    {{ $message }}
                                @enderror
                               </small>
							</div>
                
					</div>
					<div class="modal-footer">
						<a href="/dashboard" class="btn btn-white border" >Cancel</a>
						<button type="submit" class="btn btn-dark text-light bg-dark">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
    {{-- end form --}}

    <!-- add product form -->
	{{-- <div  class="modal fade" id="modal-meal">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="SaveProduct" method="POST" id="form" enctype="multipart/form-data">
                 @csrf
					<div class="modal-header">
						<h5 class="modal-title fw-bold">New item</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
			
							<input type="hidden" name="id" >
							<div class="mb-3">
								<label class="form-label">Name</label>
								<input type="text" name="name" class="form-control rounded" />
                                <small class="text-danger">
                                    @error('name')
                                    {{ $message }}
                                @enderror
                               </small>
							</div>

                            <div class="mb-3">
                                <label for="image" class="col-form-label" id="image">Image</label>
                                <input type="file" class="form-control border rounded" id="images" name="image" >
                                <small class="text-danger"> 
                                    @error('image')
                                    {{ $message }}
                                @enderror
                                </small>
                            </div>
                
							<div class="mb-0">
								<label class="form-label">Description</label>
								<textarea class="form-control border rounded" name="description" rows="7"></textarea>
                                <small class="text-danger">
                                    @error('description')
                                    {{ $message }}
                                @enderror
                                </small>
							</div>

                            <div class="mb-3">
								<label class="form-label">Date</label>
								<input type="date" name="date" class="form-control rounded" />
                                <small class="text-danger">
                                    @error('date')
                                    {{ $message }}
                                @enderror</small>
							</div>
						
					</div>
					<div class="modal-footer">
						<a href="/dashboard" class="btn btn-white border" >Cancel</a>
						<button type="submit" class="btn btn-primary text-light bg-primary">Add Meal</button>
					</div>
				</form>
			</div>
		</div>
	</div> --}}
    {{-- end form --}}
 {{-- @livewireScripts --}}
<script src="{{ asset('js/script.js') }}"></script>
</x-app-layout>
