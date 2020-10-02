<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Catalog extends Component
{
    public $book;


    public function render()
    {
        $this->book = DB::table('catalog')->where('type','=','book')->get();
        return view('livewire.catalog');
    }
}
