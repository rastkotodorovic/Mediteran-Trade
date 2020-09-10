@extends('admin.layout')

@section ('content')


        <div class="card-body">
            <div class="table-responsive">
                <h2>Dodaj uslugu</h2>
                <form method="POST" action="{{ route('service.store') }}">
                    @csrf
                    <input type="text" placeholder="Title" class="form-control" name="title"><br>
                    <input type="text" placeholder="Icon" class="form-control" name="icon"><br>
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
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($services as $service)
                <tr>
                    <th scope="row">{{ $service->title }}</th>
                        <td>
                            {{ $service->body }}
                        </div>
                            </td>
                            <td>
                                <a href="{{ route('service.edit', $service) }}">
                                    <button class="btn class-primary btn-primary">
                                        Uredi
                                    </button>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('service.destroy', $service) }}" method="POST">
                                @method('DELETE')
                                @CSRF
                                    <button class="btn class-primary btn-danger">
                                        Izbrisi
                                    </button>
                                </form>
                        </td>
                    </tr>
                </div>
            @endforeach
            </tbody>
        </table>



@endsection