<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchUsers extends Component
{

    public $search = '';
    public $arr;

    public function render()
    {
        if($this->search=='') {
            $this->arr = ['users'=>[]];
        }
        else {
            $this->arr = [
                'users'=>User::where('name', 'like', '%'.$this->search.'%')->get(),
            ];
        }
        return view('livewire.search-users', $this->arr);
    }
}
