<?php
/**
 * Created by PhpStorm.
 * User: vuquo
 * Date: 8/12/2017
 * Time: 3:04 PM
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Post;
use Request;

class PostController extends Controller
{
    public function __construct()
    {
    }

    public function lists(){
        $posts = Post::all();

        return view('admin.post.list', ['posts' => $posts]);
    }

    public function showAddForm(){
        return view('admin.post.add');
    }

    public function create(){
        $input = Request::all();

        $input['body'] = htmlentities($input['body']);

        Post::create($input);

        return redirect('admin/posts');
    }

    public function del($id){
        $post = Post::findOrFail($id);

        $post->delete();

        return redirect('admin/posts');
    }

    public function showEditForm($id){
        $post = Post::findOrFail($id);

        return view('admin.post.edit', ['post' => $post, 'id' => $id]);
    }

    public function update($id){
        $post = Post::findOrFail($id);

        $input = Request::all();

        $input['body'] = htmlentities($input['body']);

        $post->update($input);

        return redirect('admin/posts');
    }


}