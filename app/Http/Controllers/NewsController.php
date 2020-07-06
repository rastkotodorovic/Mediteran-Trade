<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;

class NewsController extends Controller
{
    public function index()
    {
        return view('admin.news', [
            'news' => News::all(),
        ]);
    }

    public function store(NewsRequest $request)
    {
        News::create($request->validated());

        return back();
    }

    public function destroy(News $news)
    {
        $news->delete();

        return back();
    }
}
