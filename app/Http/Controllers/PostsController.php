<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Routing\RedirectController;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts=posts::all();
        return view('posts.index',["posts"=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users=user::all();
        return view('posts.create',['users'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                "title"=>"required",
                // "image"=>"image|mimes:jpg,jpeg,png|max:2048",
                "content"=>"required|min:20"
            ]);

            $post=new posts;
    //         if ($request->hasfile('photo')) {
    //             $file = $request->file('photo');
    //             $extension = $file->getClientOriginalExtension(); // getting photo extension
    //             $filename = time() . '.' . $extension;
    //             $file->move('uploads/appsetting/', $filename);
    
    // //see above line.. path is set.(uploads/appsetting/..)->which goes to public->then create
    // //a folder->upload and appsetting, and it wil store the photos in your file.
    
    //         $post->image = $filename;
    //         } else {
    //             return $request;
    //             $post->image = '';
    //         }
            $post->title=$request->title;
            $post->content=$request->content;
            $post->user_id=$request->user_id;

            $post->save();

            return redirect('posts/create');






        
 





    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post=posts::find($id);

        return view('posts.show',['post'=>$post]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post=posts::findorfail($id);
        $users=user::all();
        return view("posts.edit",["post"=>$post,"users"=>$users]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $request->validate(
            [
                "title"=>"required",
                // "image"=>"image|mimes:jpg,jpeg,png|max:2048",
                "content"=>"required|min:20"
            ]);

            $post=posts::findorfail($id);
    //         if ($request->hasfile('photo')) {
    //             $file = $request->file('photo');
    //             $extension = $file->getClientOriginalExtension(); // getting photo extension
    //             $filename = time() . '.' . $extension;
    //             $file->move('uploads/appsetting/', $filename);
    
    // //see above line.. path is set.(uploads/appsetting/..)->which goes to public->then create
    // //a folder->upload and appsetting, and it wil store the photos in your file.
    
    //         $post->image = $filename;
    //         } else {
    //             return $request;
    //             $post->image = '';
    //         }
            $post->title=$request->title;
            $post->content=$request->content;
            $post->user_id=$request->user_id;

            $post->save();

            return redirect('/posts');







    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post=posts::findorfail($id);
        $post->delete();
        return redirect('/posts');
    }
}
