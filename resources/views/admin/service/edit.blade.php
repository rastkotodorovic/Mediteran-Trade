@extends('admin.layout')

@section('content')

    <div class="card-body">
        <div class="table-responsive">
            <h2>Uredi vijest</h2>
            <form method="POST" action="{{ route('service.update', $services) }}" enctype="multipart/form-data">
                @method ('PATCH')
                @csrf
                <input
                    type="text"
                    placeholder="Title"
                    class="form-control"
                    name="title"
                    value="{{ $services->title }}"
                >
                <br>
                <input
                    type="text"
                    placeholder="Icon"
                    class="form-control"
                    name="icon"
                    value="{{ $services->icon }}"
                >
                <br>
                <input
                    type="text"
                    placeholder="Body"
                    class="form-control"
                    name="body"
                    value="{{ $services->body }}"
                >
                <button class="btn btn-primary">Uredi</button>
            </form>
        </div>
    </div>

@endsection