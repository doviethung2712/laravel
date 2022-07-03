<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        $posts = $this->postRepository->getAll();
        // dd($posts);
        return view('backend.post.list', compact('posts'));
    }


    public function create()
    {
        return view('backend.post.create');
    }

    public function store(Request $request)
    {
        $data = $request->only('title', 'content', 'user_id');
        $this->postRepository->store($request);
        return redirect()->route('post.index');
    }

    public function show($id)
    {
        $post = $this->postRepository->getById($id);
        dd($post);
        return view('backend.post.detail', compact('post'));
    }


    public function edit($id)
    {
        $post = $this->postRepository->getById($id);
        return view('backend.post.update', compact('post'));
    }


    public function update(Request $request, $id)
    {
        $data = $request->only('title', 'content', 'user_id');
        $this->postRepository->update($data, $id);
        return redirect()->route('post.index');
    }

    public function destroy($id)
    {
        $this->postRepository->deleteById($id);
        return redirect()->route('post.index');
    }
}
