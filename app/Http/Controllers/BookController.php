<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Tr_Category;

class BookController extends Controller
{
    public function index(){
        $book = Book::get();
        $cat = Category::get();
        return view('home', ['books' => $book, 'cats' => $cat]);
    }

    public function detail($bookid){
        $book = Book::where('id', $bookid)->first();
        $cat = Category::get();
        return view('detail', ['book' => $book, 'cats' => $cat]);
    }

    public function cat($catid){
        $cat1 = Tr_Category::get();
        $cat1 = $cat1->where('categoryid', $catid);
        $cat = Category::get();
        return view('category', ['books' => $cat1, 'cats' => $cat]);
    }

    public function publisher(){
        $book = Book::get();
        $cat = Category::get();
        $pub = Publisher::get();
        return view('publisher', ['books' => $book, 'cats' => $cat, 'pubs' => $pub]);
    }

    public function contact(){
        $cat = Category::get();
        return view('contact', ['cats' => $cat]);
    }
}
