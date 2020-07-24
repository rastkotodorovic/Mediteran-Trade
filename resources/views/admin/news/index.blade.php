@extends ('admin.layout')

@section ('content')

    <div class="card-body">
        <div class="table-responsive">
            <h2>Dodaj vijesti</h2>
            <form method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">
                @csrf
                <input type="text" placeholder="Title" class="form-control" name="title"><br>
                <input type="text" placeholder="Body" class="form-control" name="body"><br>
                <input type="text" placeholder="Link" class="form-control" name="link"><br>
                <div class="custom-file" style="margin-top:22px;">
                    <input
                        type="file"
                        class="custom-file-input"
                        id="new-post-image"
                        name="image"
                    >
                    <label class="custom-file-label" for="new-post-image">Slika</label>
                </div><br>
                <button class="btn btn-primary">Dodaj</button>
            </form>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col">Link</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($news ?? '' as $article)
            <tr>
                <th scope="row">{{ $article->title }}</th>
                <td>{{ $article->body }}</td>
                <td>{{ $article->link }}</td>
                <td>{{ $article->image }}</td>
                <td>
                    <form action="{{ route('news.destroy', $article) }}" method="POST">
                        @method ('DELETE')
                        @csrf
                        <button class="btn btn-danger">Izbrisi</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('news.edit', $article) }}">
                        <button class="btn class-primary btn-primary">Uredi</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection