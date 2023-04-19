<div>
    {{-- In work, do what you enjoy. --}}
    <div>
        @if (Auth()->user()->can('edit All product'))
        <div class="row items-center container">
            <h1 id="all-comments" class="col fw-bold mt-5 ms-1 text-center text-lg-start">All Comments</h1>  
            <!-- Search form -->
            <input class="form-control col-4 mt-3 mt-gl-5 w-auto ms-5 rounded border shadow" wire:model="search" placeholder="Search" >    
        </div>
    
        <div class="container pt-3 table-responsive">
                
            <table class="table table-responsive shadow bg-white rounded text-center">
                <thead>
                    <tr>
                    <th scope="col">#{{count($comments)}}</th>
                    <th scope="col">Comment</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Time</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $count = 1;
                    @endphp
                @foreach ($Comments as $comment)
                    <tr>
                    <td>{{$count}}</td>
                    <td><p id="cmt-txt-{{$comment->id}}" class="text-center text-wrap">{{ $comment->nameComment }}</p>
                        <form id="form-{{$comment->id}}" class="d-none"  wire:submit.prevent="update({{$comment->id}})">
                            <p>                                 
                                <input id="cmt-input-{{$comment->id}}" type="text" wire:model.defer="updateComment" class="p-1 coment-content-input rounded border" value="">
                            <button onclick="showComment('')" class="edit-btn-dark" type="submit"><b class="text-success">Save</b></button>
                            </p>
                        </form>
                    </td>
                    <td>{{$comment->user->name}}</td>
                    <td><i class="bi bi-clock-history"></i> {{$comment->created_at->diffForHumans(null, false, false)}}</td>
                    <td><button onclick="showComment('{{ $comment->id }}')" ><b class="text-primary">edit</b></button></td>
                    <td><button wire:click="destroy({{$comment->id}})" class="text-decoration-none text-danger fw-bold" onclick="return confirm('Are you sure?')">delete</button></td>
                    </tr>
                
                    @php
                    $count ++;
                    @endphp
                    @endforeach
                </tbody>
                </table> 
            </div>
            <div class="container">
                {{$Comments->links()}}
            </div>
        {{-- end of products --}}
        @endif
        @livewireScripts
    </div>
    
</div>
