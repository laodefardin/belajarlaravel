<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ini sama seperti 
        // select * from posts;
        // $posts = DB::table("posts")->get();
        // select judul, konten from posts;‹‹›
        $posts = DB::table("posts")
                    ->select('id','judul', 'konten','created_at')
                    ->get();
        $view_data = [
            'posts' => $posts,
        ];

        // $posts = Storage::get('posts.txt');
        // $posts = explode("\n", $posts);
        // $view_data = [
        //     'posts' => $posts,
        // ];

        return view('posts.index', $view_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $judul = $request->input('judul');
        $konten = $request->input('konten');

        DB::table('posts')->insert([
            'judul'=> $judul,
            'konten'=> $konten,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        // $posts = Storage::get('posts.txt');
        // $posts = explode("\n", $posts);

        // $new_post = [
        //     count($posts) + 1,
        //     $judul,
        //     $konten,
        //     date('Y-m-d H:i:s')
        // ];
        // $new_post = implode(',', $new_post);
        // array_push($posts, $new_post);
        // $posts = implode("\n", $posts);

        // Storage::write('posts.txt', $posts);
        return redirect('posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $posts = Storage::get('posts.txt');
        // $posts = explode("\n", $posts);
        // $selected_post = Array();
        // foreach ($posts as $post) {
        //     $post = explode(",", $post);
        //     if ($post[0] == $id){
        //         $selected_post = $post;
        //     }
        // }

        // "SELECT ... from posts where id = $id"
        $post = DB::table('posts')
            ->select('id', 'judul', 'konten','created_at')
            ->where('id', '=', $id)
            ->first();
            
        $view_data = [
            "post" => $post,
        ];
        return view('posts.show', $view_data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
