<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $record  =Post::all();
        // dd($record);
        // $data = compact($record);
        // return view('dashboard',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("add_post");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // echo"<pre>";
        // print_r($request);
        // echo $request->title;
        echo"<pre>";
        // print_r($_FILES);
        // dd($request->all());//
        // echo "<pre>";
        // print_r($request->all());
        // var_dump($request->all());
        // dd($request->file('post_image'));
            // print_r($request->file('post_image'));

        $request->validate([
            'title'=>'required',
            'description'=>'required',
            // 'image'=>'required',
        ]);
        // 1st
        // $imagePath = $request->file('post_image')->store('upload','public');
        // 2nd
        $postImage = time().'.'.$request->post_image->extension();
        $PostImageOriginalName = $request->post_image->getClientOriginalName();
        $request->post_image->move(public_path($path ='upload'), $postImage);
        // 3rd //error
        // $postImage = time() . '.' . $request->post_image->extension();
        // $PostImageOriginalName = $request->post_image->getClientOriginalName();
        // $request->post_image->storeAs('public/upload', $postImage);

        
        $post = new Post;
        $post->post_title = $request['title'] ;
        $post->post_description = $request['description'] ;
        $post->post_image = $postImage;
        $post->save();
        return redirect()->route('dashboard.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $id)
    {
        $data  = Post::find($id);
        // dd($edit_post);
        // dd($edit_post->all());
        // dd(Post::find($id)->toArray());
        // echo "<pre>";
        // var_dump($edit_post->toArray());
        // return redirect()->route('edit_post',['data'=>$edit_post]);
        // 1st 
        // return view('edit_post',['data'=>$edit_post]);   
        return view('edit_post')->with('data', $data);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        // echo "<pre>";
        // print_r($request->toArray());
        // print_r($request->file('post_image'));
        // die;

        // $request->validate([
        //     'title'=>'required',
        //     'description'=>'required',
        // ]);
        $Update_post_id = $request->post_id;
        $update_post  = Post::find($Update_post_id);
        if($request->hasFile('post_image')){
            $postImage = time().'.'.$request->post_image->extension();
            $PostImageOriginalName = $request->post_image->getClientOriginalName();
            $request->post_image->move(public_path($path ='upload'), $postImage);
            $update_post->post_title = $request['post_title'];
            $update_post->post_description = $request['post_description'];
            $update_post->post_image = $postImage;
            $update_post->save();
            return redirect()->route('dashboard.index');


        }
        else {
            
                $update_post->post_title = $request['post_title'];
                $update_post->post_description = $request['post_description'];
                // $update_post->post_image = $postImage;
                $update_post->save();
                return redirect()->route('dashboard.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $id)
    {
        $id->delete();
        return redirect()->route('dashboard.index');
    }
}
// 