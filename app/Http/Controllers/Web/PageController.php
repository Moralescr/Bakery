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
        //Main page front-end
        $products = Product::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(4);
        return view('web.index', compact('products'));
    }
    //Muestra todos los posts
    public function blog(Request $request)
    {
        //$name = $request->get('name');
        $products = Product::orderBy('id', 'DESC')
               ->where('status', 'PUBLISHED')
               //->name($name)
               ->paginate(6);

        return view('web.products', compact('products'));
    }

    //Muestra los posts que pertenecen a una categoría
    public function category($slug)
    {
        $category = Category::where('slug', $slug)->pluck('id')->first();

        $products = Product::where('category_id', $category)
            ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

        return view('web.products', compact('products'));
    }

    //Muestra los posts que pertenecen a una etiqueta
    public function tag($slug)
    {
        $products = Product::whereHas('tags', function($query) use ($slug) {
            $query->where('slug', $slug);
        })
        ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

        return view('web.products', compact('products'));
    }

    //Muestra el detalle de un post
    public function product($slug)
    {
        //$categories = Category::orderBy('id', 'DESC')->paginate(4);
        //$posts      = Post::orderBy('created_at', 'DESC')->paginate(3);
        //$tags       = Tag::orderBy('created_at', 'DESC')->paginate(6);
        $product       = Product::where('slug', $slug)->first();

        return view('web.product', compact('product'));

    }
}
