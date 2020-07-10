<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.news.index', [
            'newss' => News::latest()->get(),
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

    public function edit(News $news)
    {
        return view('admin.news.edit', [
            'news' => $news,
        ]);
    }

    public function update(News $news)
    {
        $validated = request()->validate([
            'title' => 'required',
            'body' => 'required',
            'link' => 'required',
            'image' => 'required|file',
        ]);

        $validated['image'] = request('image')->store('images');

        $news->update($validated);

        return redirect()->route('news.index');
    }
}
