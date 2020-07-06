@extends ('admin.layout')

@section ('content')

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
        @foreach ($news as $new)
            <tr>
                <th scope="row">{{ $new->title }}</th>
                <td>{{ $new->body }}</td>
                <td>{{ $new->link }}</td>
                <td>{{ $new->image }}</td>
                <td>
                    <form action="{{ route('news.destroy', $new) }}" method="POST">
                        @method ('DELETE')
                        @csrf
                        <button>Delete</button>
                    </form>
                </td>
                <td>
                    <a href="#">
                        <button>Edit</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

<div class="card-body">
    <div class="table-responsive">
        <h2>Dodaj vijesti</h2>
        <form method="POST" action="{{ route('news.store') }}">
            @csrf
            <input type="text" placeholder="Title" class="form-control" name="title"><br>
            <input type="text" placeholder="Body" class="form-control" name="body"><br>
            <input type="text" placeholder="Link" class="form-control" name="link"><br>
            <input type="text" placeholder="Image" class="form-control" name="image"><br>
            <button class="btn btn-primary">Dodaj</button>
        </form>
    </div>
</div>

@endsection