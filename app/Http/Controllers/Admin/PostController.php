<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with(['tags'])->get();

//        dd($posts);
        return view('admin.pages.post.index',['posts'=> $posts] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tags::all();
        return view('admin.pages.post.create', ['tags'=>$tags] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        dd($request->all());

        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'image' => 'required',
        ]);
//        $data= $request->all();
        $data = collect($request->only(['title', 'body', 'image', 'tag_id']))->all();
//        dd($data);
        $slug=Str::slug($request->input('title'));

        $slug_count=Post::where('slug', $slug)->count();

        if ($slug_count>0){
            $slug = time(). '_'.$slug;
        }
        $data['slug']=$slug;
//        return $data;
        $status=Post::create([$data]);

//        dd($status);
        if ($status){
            return redirect()->route('post.index');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
