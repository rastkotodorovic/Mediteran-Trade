@extends('admin.layout')

@section('content')

    <div class="card-body">
        <div class="table-responsive">
            <h2>Uredi vijest</h2>
            <form method="POST" action="{{ route('news.update', $news) }}" enctype="multipart/form-data">
                @method ('PATCH')
                @csrf
                <input
                    type="text"
                    placeholder="Title"
                    class="form-control"
                    name="title"
                    value="{{ $news->title }}"
                >
                <br>
                <input
                    type="text"
                    placeholder="Body"
                    class="form-control"
                    name="body"
                    value="{{ $news->body }}"
                >
                <br>
                <input
                    type="text"
                    placeholder="Link"
                    class="form-control"
                    name="link"
                    value="{{ $news->link }}"
                >
                <br>
                <div class="custom-file" style="margin-top:22px;">
                    <input
                        type="file"
                        class="custom-file-input"
                        id="new-post-image"
                        name="image"
                    >
                    <label class="custom-file-label" for="new-post-image">Slika</label>
                </div>
                <br>
                <button class="btn btn-primary">Dodaj</button>
            </form>
        </div>
    </div>

@endsection