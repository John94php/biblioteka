<?php

namespace App\Http\Livewire;
use Illuminate\Http\Request;
use Livewire\Component;

class SearchBook extends Component
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


    public function render() {

        return view('livewire.search-book');
    }
}
