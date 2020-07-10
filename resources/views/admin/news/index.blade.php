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
    @foreach ($newss ?? '' as $news)
        <tr>
            <th scope="row">{{ $news->title }}</th>
            <td>{{ $news->body }}</td>
            <td>{{ $news->link }}</td>
            <td>{{ $news->image }}</td>
            <td>
                <form action="{{ route('news.destroy', $news) }}" method="POST">
                    @method ('DELETE')
                    @csrf
                    <button class="btn class-primary">Izbrisi</button>
                </form>
            </td>
            <td>
                <a href="{{ route('news.edit', $news) }}">
                    <button class="btn class-primary">Uredi</button>
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection