<?php

namespace App\Http\Controllers;

use App\BookCategory;
use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ManagerController extends Controller
{
//-------------------------------------------------MANAGER AUTHENTICATION--------------------------------------------------------------    
    //Middleware for Auth
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    //Acount must be Manager
    public function checkAccount() {
        if(auth()->user()->role_id != 1) return redirect()->route('home')->with('status','[err] Please login with manager account');
    }

//-------------------------------------------------CATEGORIES--------------------------------------------------------------------------

    //View Categories for Manager
    public function viewCategories() {
        if($this->checkAccount()) return $this->checkAccount();

        $categories = BookCategory::orderBy('category_name')->get();

        return view('manager.manage-categories',['categories'=>$categories]);
    }

    //Update Categories
    public function viewCategory($id) {
        if($this->checkAccount()) return $this->checkAccount();

        $category = BookCategory::where('id',$id)->first();
        return view('manager.update-category',['category'=>$category]);
    }

    //Delete Categories
    public function deleteCategory(Request $request) {
        if($this->checkAccount()) return $this->checkAccount();

        $data = BookCategory::find($request->id)->first();
        $data->delete();
        return back()->with('status','[scc] Success delete category');
    }

    //Update Categories Form
    public function updateFormCategories($id){
        $category = BookCategory::where('id',$id)->first();
        return view('updateCategory',['category'=>$category]);
    }

    //Update Categories
    public function updateCategory(Request $request, $id) {
        $message = [
            'category_name.min'         => 'New category name with minimum 5 characters',
            'category_name.required'    => 'New category name must be filled',
        ];	
        
        $validator = Validator::make($request->all(), [
            'category_name' => 'required|min:5'
        ], $message);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $categories                = BookCategory::find($id);
        $categories->category_name = $request->category_name;

        if($request->file('category_img') != null)
        {
            $file = $request->file('category_img');
            $destinationPath = 'assets/categories/';
            $filename = date('YmdHis')."_".$request->category_name.".".$file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);

            $categories->category_img = $destinationPath.$filename;
    	}

        $categories->save();
        $categories = BookCategory::orderBy('category_name')->get();

        return view('index',compact('categories'));
    }

//-------------------------------------------------BOOK----------------------------------------------------------------------


    //Form Add Book
    public function FormAddBook(){ 
        $book = Book::with('category')->paginate();
        $category=BookCategory::all();
        return view('manager.add-book',compact('book','category'));
    }

    //Add Book
    public function addBook(Request $request){

        $book = Book::create($request->all());

        if($request->hasFile('book_img')){
            $request->file('book_img')->move('assets/categories/',$request->file('book_img')->getClientOriginalName());
            $filenames= "assets/categories/";
            $book->book_img = $filenames.$request->file('book_img')->getClientOriginalName();
        }
        $book->save();
        return redirect('/');
    }

    //Update Book Form
    public function edit($id) {
        if($this->checkAccount()) return $this->checkAccount();
        $category = BookCategory::all();
        $data = Book::with('category')->paginate();
        $data = Book::find($id);

        return view('manager.edit-product', compact('data','category'));
    }

    //Update Book
    public function update(Request $request, $id){

        $book = Book::find($id);
        $book->book_category_id     = $request->book_category_id;
        $book->book_name            = $request->book_name;
        $book->book_price           = $request->book_price;
        $book->book_img             = $request->book_img;
        $book->book_desc            = $request->book_desc;


        if($request->hasFile('book_img')){
            $request->file('book_img')->move('assets/categories/',$request->file('book_img')->getClientOriginalName());
            $filenames= "assets/categories/";
            $book->book_img = $filenames.$request->file('book_img')->getClientOriginalName();
        }
        $book->save();

        return redirect('/');
    }

    //Delete Book
    public function delete($id){
        $book = Book::find($id);
        $book->delete($book);
        return redirect()->back();
    }   

}
