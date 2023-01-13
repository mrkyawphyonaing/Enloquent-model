<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public  function getPublishers(){
        //$publishers = Publisher::all();
        $publishers = Publisher::where(['name' => 'Wyman Group', 'phone' => '(959) 380-6730'])->get();

        return $publishers;
    }

    public function getPublishersDetail ($id) {
        $publisher = Publisher::with('books')->find($id);
        //$publisher['books'] = $publisher->books;
        return $publisher;
    }

    public function storePublishers() {
        $publisher = Publisher::create([
            'name' => 'K Group',
            'phone' =>  '(959) 380-6730',
            'address' => 'Yangon',
        ]);
        return $publisher;
    }
    public  function updatePublishers($id){
        $phone = '22222222';
        //$publisher = Publisher::findorfail($id);
        //$publisher -> phone = $phone;
        //$publisher->save();
        $publisher = Publisher::find($id)->update(['phone' => $phone]);
        return $publisher;
    }
    public  function deletePublisher($id){
        $publisher = Publisher::find($id)->delete();
        return $publisher;
    }

    public  function getBook(){
       $books = Book::where('price', '<', 200)->get();
       return $books;
    }

    public function detailBook($id){
        $books = Book::find($id);
        //return $books->additionalBookinfo;
        //return $books->publisher;
        return $books->categories;

    }

    public function storeCategory(Request $request) {
        //return 'Hello Post';
        $name=$request->category_name;
        Category::create([
            'name' => $name
        ]);
        return redirect('saveCategory');
        //return 'Sumbit data is '.$name;
    }

    public function createCategory(){
        $categories = Category::all();
        return view('create_category')->with([
            'categories'=>$categories
        ]);
    }
}
