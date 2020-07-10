@extends('admin.layout')

@section ('content')

<div class="card-body">
    <div class="table-responsive">
        <h2>Dodaj uslugu</h2>
        <form method="POST" action="{{ route('service.store') }}">
            @csrf
            <input type="text" placeholder="Title" class="form-control" name="title"><br>
            <input type="text" placeholder="Body" class="form-control" name="body"><br>
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
    @foreach ($services as $service)
        <tr>
            <th scope="row">{{ $service->title }}</th>
            <td>{{ $service->body }}</td>
            <td>
                <form action="{{ route('service.destroy', $service) }}" method="POST">
                    @method ('DELETE')
                    @csrf
                    <button class="btn class-primary">Izbrisi</button>
                </form>
            </td>
            <td>
                <a href="{{ route('news.edit', $service) }}">
                    <button class="btn class-primary">Uredi</button>
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection