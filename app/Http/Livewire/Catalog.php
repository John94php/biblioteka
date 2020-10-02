<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Catalog extends Component
{
    public $book;
    public $title;
    public $isbn;
    public $author;

    public function mount(Catalog $book) {
        $this->title = $book->title;
        $this->isbn = $book->isbn;
        $this->author = $book->author;
    }
    public function render()
    {
        return view('livewire.catalog');
    }
}
