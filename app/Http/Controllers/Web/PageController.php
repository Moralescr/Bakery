<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Product;
use App\Category;
use App\Tag;

class PageController extends Controller
{
    public function index()
    {
        //Show main page of web page
        $posts = Product::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(4);
    
        return view('web.index', compact('posts'));
    }

    public function about()
    {
        return view('web.sections.about');
    }
   
    public function blog(Request $request)
    {   
         //$posts = Product::orderBy('created_at', 'DESC')->paginate(3);
        //Show the blog of web page. 
        $categories = Category::orderBy('id', 'DESC')->paginate(4);
        $tags = Tag::orderBy('created_at', 'DESC')->paginate(6);
        //$name = $request->get('name');
        $posts = Product::orderBy('id', 'DESC')
               ->where('status', 'PUBLISHED')
               //->name($name)
               ->paginate(3);

        return view('web.products', compact('posts', 'tags', 'categories'));
    }

    public function category($slug)
    {           
        $category = Category::where('slug', $slug)->pluck('id')->first();
        
        $posts = Product::where('category_id', $category)
            ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
        
        return view('web.products', compact('posts'));
    }
    
    public function tag($slug)
    {
        $posts = Product::whereHas('tags', function($query) use ($slug) {
            $query->where('slug', $slug);
        })
        ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

        return view('web.products', compact('posts'));
    }

    // Post detail
    public function product($slug)
    {
        //Queries from sidebar
        $posts      = Product::orderBy('created_at', 'DESC')->paginate(3);
        $tags       = Tag::orderBy('created_at', 'DESC')->paginate(6);
        $categories = Category::orderBy('id', 'DESC')->paginate(4);

        //Query to show a post detail about URL 
        $post  = Product::where('slug', $slug)->first();

        return view('web.product', compact('posts', 'post', 'categories', 'tags'));
    }
}
