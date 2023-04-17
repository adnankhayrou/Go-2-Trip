<x-app-layout>
    <div class="container items-center">
        <h1 class="col fw-bold mt-3 mb-2 text-center fs-2">Add Your item</h1>
    </div>
    <!-- edit meal form -->
    <div class="container pt-3 w-75 bg-white rounded">
        <form action="products" method="POST" id="form" class=" pb-2" enctype="multipart/form-data">
            @csrf

            <div class=" row modal-body">

                <div class="col-12 mb-3">
                    <label class="form-label">Name</label>
                    <input placeholder="item name..." type="text" name="title"
                        class="form-control rounded border @error('title') is-invalid @enderror" name="title" />
                    <small class="text-danger">
                        @error('title')
                            {{ $message }}
                        @enderror
                    </small>
                </div>

                <div class="rounded">
                    <img id="preview-image" src="http://via.placeholder.com/640x360" alt="Preview image" class="rounded" style="width: 7em;">
                  </div>

                <div class="col-xl-6 col-md-6 col-12 mb-3">
                    <label for="image" class="col-form-label" id="image">Image</label>
                    <input type="file" class="form-control border rounded" id="images" name="image" value="">
                    <small class="text-danger">
                       @error('image')
                       {{ $message }}
                   @enderror</small>
                  </div>
       
                  <div class="col-xl-6 col-md-6 col-12 mb-3 mt-1">
                   <label class="form-label">Cities</label><br>
                   <select class="selectpicker rounded border @error('city_id') is-invalid @enderror" name="city_id"
                       data-live-search="true">
                       <option value="">select your city</option>
                       @foreach ($citys as $city)
                           <option value="{{ $city->id }}" >{{ $city->nameCity }}</option>
                       @endforeach
                   </select>
                   <small class="text-danger">
                       @error('city_id')
                           {{ $message }}
                       @enderror
                   </small>
               </div>
       
                   <div class="col-xl-6 col-md-6 col-12 mb-3">
                       <label class="form-label">Category</label>
                       <select id="categoryList" class="form-control @error('category_id') is-invalid @enderror"
                           name="category_id" required>
                           <option selected>select your category</option>
                           @foreach ($categorys as $category)
                               <option value="{{ $category->id }}" >{{ $category->nameCategory }}</option>
                           @endforeach
                       </select>
                       @error('category_id')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                   </div>
       
                   <div class="col-xl-6 col-md-6 col-12 mb-3">
                       <label class="form-label">Subcategory</label>
                       <select id="subcategoryList" class="form-control @error('subcategory') is-invalid @enderror"
                           name="subCategory_id" required>
                           <option value=""> </option>
                       </select>
                   </div>
       
       
               <div class="col-xl-6 col-md-6 col-12 mb-3">
                   <label class="form-label">Phone number</label>
                   <input placeholder="+212XXXXXXXXX" type="tel" name="telephone" class="form-control rounded border" value=""/>
                   <small class="text-danger">
                       @error('telephone')
                       {{ $message }}
                   @enderror</small>
               </div>
       
       
                   <div class="col-12 col-md-6 col-lg-6 mb-3">
                       <label class="form-label">Price</label>
                       <input type="number" name="prix" any class="form-control rounded border"  value=""/>
                       <small class="text-danger">
                           @error('prix')
                           {{ $message }}
                       @enderror</small>
                   </div>
       
                   
       
                   <div class="col-12 mb-0">
                       <label class="form-label">Description</label>
                       <textarea placeholder="your description here..." class="form-control border rounded" name="description" rows="3" ></textarea>
                       <small class="text-danger">
                           @error('description')
                           {{ $message }}
                       @enderror</small>
                   </div>

            </div>
            <div class="modal-footer mt-2">
                <a href="/dashboard" class="btn btn-white border">Cancel</a>
                <button type="submit" class="btn btn-dark ms-2 text-light bg-dark">Save</button>
            </div>
        </form>

    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#images').on('change', function() {
        var input = $(this)[0];
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
            $('#preview-image').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
        });
    });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">

        $("document").ready(function() {
            $('select[name="category_id"]').on('change', function() {
                var catId = $(this).val();
                if (catId) {
                $.ajax({
                    url: '/subcatories/' + catId,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                    $('select[name="subCategory_id"]').empty();
                    for(i =0 ; i < data.length ; i++){ 
                        $('select[name="subCategory_id"]').append(
                            '<option value="' + data[i].id + '">' + data[i].nameSubCategory +
                            '</option>');
                    }
                    }
                })
                } else {
                    $('select[name="subCategory_id"]').empty();
                }
            });


        });
    </script>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>


</x-app-layout>
