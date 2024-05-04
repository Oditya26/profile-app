<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Profile;
use Livewire\Component;

class SearchUsers extends Component
{
    public $search = '';
    public $arr;

    public function render()
    {
        if($this->search=='') {
            $this->arr =['users'=>[]];
        } else {
            $this->arr = [
                'users' => Profile::where('name', 'like', '%'.$this->search.'%')->get(),
            ];
        }
        return view('livewire.search-users', $this->arr);
    }
}
