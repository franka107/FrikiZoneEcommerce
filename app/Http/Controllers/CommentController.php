<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Comment;

class CommentController extends Controller
{
    public function __contruct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request,Product $product)
    {
        $request->validate([
            'content' => 'required:max:250',
        ]);
        $comment = new Comment();
        $comment->user_id = Auth::id();
        $comment->content = $request->get('content');
        
        $product =Product::find($request->get('product_id'));
        $product->comments()->save($comment);

        return redirect()->route('product-detail', $product->slug);
    }
}
