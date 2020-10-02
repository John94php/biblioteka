<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Catalog extends Component
{
    public $book;
    public $article;
    public $magazine;
    public $media;

    public function render()
    {
        $this->article = DB::table('catalog')->where('type','=','article')->get();
        $this->book = DB::table('catalog')->where('type','=','book')->get();
        return view('livewire.catalog');
    }
}
