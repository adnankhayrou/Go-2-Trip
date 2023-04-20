<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
        <div>
            @if (Auth()->user()->can('edit All product'))
            <div class="row items-center container">
                <h1 id="all-sellers" class="col fw-bold mt-5 ms-1 text-center text-lg-start">All Users</h1>  
                {{-- Search form  --}}
                <input class="form-control col-4 mt-3 mt-gl-5 w-auto ms-5 rounded border shadow" wire:model="search" placeholder="Search" >    
            </div>
        
            <div class="container pt-3 table-responsive">
                    
                <table class="table table-responsive shadow bg-white rounded text-center">
                    <thead>
                        <tr>
                        <th scope="col">#{{count($count)}}</th>
                        <th scope="col">User</th>
                        <th scope="col">Role</th>
                        <th scope="col">Time</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $count = 1;
                        @endphp
                    @foreach ($users as $user)
                    @foreach($user->roles as $role)
                    @if( $user->id != Auth::user()->id)
                        <tr>
                        <td>{{$count}}</td>
                        <td>{{ $user->name }}</td>
                        <td><p id="cmt-txt-{{$user->id}}" class="text-center text-wrap">{{$role->name}}</p>
                            <form id="form-{{$user->id}}" class="d-none"  wire:submit.prevent="update({{$user->id}})">                        
                                @if (session('alert'))
                                <small id="cmt-txt-{{$user->id}}" class="ms-1 text-danger">{{session('alert')}}</small>
                                @endif 
                                @foreach($Roles as $Role)
                                <div id="cmt-input-{{$user->id}}" class="form-check">
                                    <input class="form-check-input" wire:model.defer="roleId" {{$role->id != $Role->id ? 'checked' : ''}} type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="{{$Role->id}}">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        {{$Role->name}}
                                    </label>
                                </div>
                                @endforeach
                                    </div>
                                    <button onclick="showComment('')" class="edit-btn-dark" type="submit"><b class="text-success">Save</b></button> 
                             </form>
                        </td>
                        <td><i class="bi bi-clock-history"></i> {{$user->created_at->diffForHumans(null, false, false)}}</td>
                        <td><button onclick="showComment('{{ $user->id }}')" ><b class="text-primary">edit</b></button></td>
                        <td><button wire:click="destroy({{$user->id}})" class="text-decoration-none text-danger fw-bold" onclick="return confirm('Are you sure?')">delete</button></td>
                        @endif
                        @endforeach
                        </tr>
                    
                        @php
                        $count ++;
                        @endphp
                        @endforeach
                    </tbody>
                    </table> 
                </div>
                <div class="container">
                    {{$users->links()}}
                </div>
            @endif
            @livewireScripts
        </div>
    
</div>
