<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category as Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Page as Page;


class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages=Page::paginate(5);
        $categories=Category::all();
        $lastPages=\DB::table('pages')
            ->latest()
            ->limit(5)
            ->get();
        //dd($pages);
        return view('index', ['pages'=>$pages,'categories'=>$categories,'lastPages'=>$lastPages]);


        //dd($categories);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function singlePost($slug)
    {
        $post=Page::all()->where('slug','=',$slug);
//        dd($post);
        $categories=Category::all();
        $lastPages=\DB::table('pages')
            ->latest()
            ->limit(5)
            ->get();
        //dd($lastPages);
        return view('singlePost', ['post'=>$post,'categories'=>$categories,'lastPages'=>$lastPages]);
    }

    public function categoryPost($id)
    {
        $pages=Page::where('category_id','=',$id)
            ->paginate(3);
        $categories=Category::all();
        $lastPages=\DB::table('pages')
            ->latest()
            ->limit(5)
            ->get();
        //dd($pages);
        return view('index', ['pages'=>$pages,'categories'=>$categories,'lastPages'=>$lastPages]);


        //dd($categories);
        //
    }
}
