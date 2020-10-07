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
        $products = Product::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(4);
        return view('web.index', compact('products'));
    }
   
    public function blog(Request $request)
    {
        $posts = Product::orderBy('created_at', 'DESC')->paginate(3);
        $categories = Category::orderBy('id', 'DESC')->paginate(4);
        $tags = Tag::orderBy('created_at', 'DESC')->paginate(6);
        //$name = $request->get('name');
        $products = Product::orderBy('id', 'DESC')
               ->where('status', 'PUBLISHED')
               //->name($name)
               ->paginate(3);

        return view('web.products', compact('products', 'tags', 'categories', 'posts'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->pluck('id')->first();

        $products = Product::where('category_id', $category)
            ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

        return view('web.products', compact('products'));
    }
    
    public function tag($slug)
    {
        $products = Product::whereHas('tags', function($query) use ($slug) {
            $query->where('slug', $slug);
        })
        ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

        return view('web.products', compact('products'));
    }

    // Post detail
    public function product($slug)
    {
        $posts      = Product::orderBy('created_at', 'DESC')->paginate(3);
        $categories = Category::orderBy('id', 'DESC')->paginate(4);
        $tags       = Tag::orderBy('created_at', 'DESC')->paginate(6);
        $product = Product::where('slug', $slug)->first();

        return view('web.product', compact('product', 'posts', 'categories', 'tags'));
    }
}
