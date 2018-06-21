<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PostsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index() {
        
        if(isset($_GET['month']) && isset($_GET['year'])) {
            $posts = \App\Post::latest();
            
            if ($month = request('month')) {
                $posts->whereMonth('created_at', Carbon::parse($month)->month);
            }

            if ($year = request('year')) {
                $posts->whereYear('created_at', $year);
            }
            
            $posts = $posts->get();
        } else {
            $posts = \App\Post::paginate(5);
        }
        $archives = \App\Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
                ->groupBy('year', 'month')
                ->orderByRaw('min(created_at) desc')
                ->get();

        return view('posts.index', compact('posts', 'archives'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validatedData = $this->validate($request, [
            'title' => 'required|min:2',
            'description' => 'required|min:8'
        ]);

        $post = new \App\Post();

        $post->title = $request->title;
        $post->description = $request->description;
        $post->user()->associate(auth::id());

        if ($post->save()) {
            return redirect()->route('posts.show', ['id' => $post->id]);
        } else {
            return redirect()->route('posts.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $post = \App\Post::find($id);
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
