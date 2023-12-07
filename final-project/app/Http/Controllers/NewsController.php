<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    //construction
    public $news;
    public function __construct() {
        $this->news = new News;
    }

    public function index()
    {
        $news = $this->news->getAllNews();

        $data = 
        [
            'message' => 'showing all news',
            'data' => $news
        ];

        return response()->json($data, 200);
    }

    public function store(Request $request)
    {
        $input = 
        [
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'content' => $request->content,
            'url' => $request->url,
            'url_image' => $request->url_image,
            'published_at' => $request->url_image,
            'category' => $request->category,
        ];

        $news = News::create($input);

        $data = 
        [
            'message' => 'News is created',
            'data' => $news
        ];

        return response()->json($data, 201);
    }
}
