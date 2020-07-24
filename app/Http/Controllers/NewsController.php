<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        return view('admin.news.index', [
            'news' => News::latest()->get(),
        ]);
    }

    public function store(NewsRequest $request)
    {
        News::create($request->validated());

        return back()
            ->with('flash', "Uspjesno ste dodali vijest.");
    }

    public function destroy(News $news)
    {
        $news->delete();

        return back()
            ->with('flash', 'Izbrisano');
    }

    public function edit(News $news)
    {
        return view('admin.news.edit', [
            'news' => $news,
        ]);
    }

    public function update(NewsRequest $request, News $news)
    {
        $news->update($request->validated());

        Session::flash('flash', 'Uredjeno');

        return redirect()->route('news.index');
    }
}
