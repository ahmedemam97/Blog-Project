<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostsController extends Controller
{

    public function index()
    {
        return view('blog.index')
        ->with('posts', Post::get());
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpg,png,jped|max:5048'
        ]);

        $newimagename = uniqid() .'-'. $request->title . '.' . $request->image->extension();
        $request->image->move(public_path('images'),$newimagename);

        $slug = Str::slug($request->title, '-');

        Post::create([
            'title'=> $request->input('title'),
            'description'=> $request->input('description'),
            'slug' => $slug,
            'image_path' =>$newimagename,
            'user_id' =>auth()->user()->id
        ]);

        return redirect('/blog');

    }

    public function show($slug)
    {
        return view('blog.show')
        ->with('post', Post::where('slug', $slug)->first());
    }

    public function edit($slug)
    {
        return view('blog.edit')
        ->with('post', Post::where('slug', $slug)->first());
    }

    public function update(Request $request, $slug )
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpg,png,jped|max:5048'
        ]);



        $newimagename = uniqid() .'-'. $request->title . '.' . $request->image->extension();
        $request->image->move(public_path('images'),$newimagename);


        Post::where('slug', $slug)->update([
            'title'=> $request->input('title'),
            'description'=> $request->input('description'),
            'slug' => $slug,
            'image_path' =>$newimagename,
            'user_id' =>auth()->user()->id
        ]);

        return redirect('/blog/' . $slug)->with('message', 'Update Done');
    }

    public function destroy($slug)
    {
        Post::where('slug', $slug)->delete();
        return redirect('/blog')->with('message', 'Post Deleted');
    }
}
