<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use Spatie\Permission\Models\Role;

class AllUsers extends Component
{
    public $roleId;
    
    use WithPagination;

    public $search = '';
 
    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function render()
    {
        return view('livewire.all-users',[
            'users' => User::where('name', 'like', '%'.$this->search.'%')->latest()->with('roles')->paginate(5),
           'count'=> User::all(),
           'Roles'=> Role::all(),
            
        ]);
    }

    public function update($id){

        $user = User::find($id);
        $user->syncRoles($this->roleId); 
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();
    }
}
