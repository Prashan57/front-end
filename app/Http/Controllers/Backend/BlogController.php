<?php

namespace App\Http\Controllers\Backend;

use App\blog;
use App\Http\Requests;
use Illuminate\Http\Request;

class BlogController extends BackendController
{
    protected  $uploadPath;

    public function  __construct()
    {
        parent::__construct();
        $this->uploadPath = public_path("img");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $blog = blog::latest()
          ->paginate(6);
      $blogCount = blog::count();
      return view("back-end.blog.index", compact("blog","blogCount"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog = new blog();
        return view("back-end.blog.create",compact("blog"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\BlogRequest $request)
    {
     //   $data = $this->handleRequest($request);
       // $request->user()->admin->create($data);

      //  return redirect("/backend/blog")->with("message","Your post has been successfully created.");

        }
/*
    public function handleRequest($request){
        $data = $request->all();
        if ($request->hasFile("image")){
            $image = $request->file("image");
            $fileName = $image->getClientOriginalName();
            $destination = $this->uploadPath;

            $image->move($destination,$fileName);

            $data["image"] = $fileName;
        }
        return $data;
    }
*/
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
        dd("edit");
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
      $blogs = blog::findOrFail($id);
      $blogs->delete();

      return redirect('backend/blog');
    }
}
