@extends ('admin.layout')

@section ('content')

    <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-toggle">
                    <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
                <a class="navbar-brand" href="#pablo">Profil</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/profile">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>
                                <span class="d-lg-none d-md-block">Account</span>
                            </p>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    <!-- End Navbar -->
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Uredi Profil</h5>
                    </div>
                    <div class="card-body">
                        <form
                            action="{{ route('user.update', $user) }}"
                            method="POST"
                            enctype="multipart/form-data"
                        >
                            @csrf
                            @method ('PATCH')
                            <div class="row">
                                <div class="col-md-3 px-1" style="margin-left:14px;">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Username"
                                            value="{{ $user->name }}"
                                            name="name"
                                        >
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input
                                            type="email"
                                            class="form-control"
                                            placeholder="Email"
                                            value="{{ $user->email }}"
                                            name="email"
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <div class="custom-file" style="margin-top:22px;margin-left:17px;">
                                            <input
                                                type="file"
                                                class="custom-file-input"
                                                id="new-post-image"
                                                name="avatar"
                                            >
                                            <label class="custom-file-label" for="new-post-image">Slika</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Opis</label>
                                        <textarea
                                            class="form-control"
                                            id="exampleFormControlTextarea1"
                                            rows="3"
                                            name="biography"
                                        >
                                            {{ $user->biography }}
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary">Uredi</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image">
                        <img src="../assets/img/bg5.jpg" alt="...">
                    </div>
                    <div class="card-body">
                        <div class="author">
                        <a href="#">
                            @if ($user->avatar != null)
                                <img
                                    class="avatar border-gray"
                                    src="{{ asset('storage/' . $user->avatar) }}"
                                    alt="..."
                                >
                            @else
                                <img
                                    class="avatar border-gray"
                                    src="../assets/img/bg5.jpg"
                                    alt="..."
                                >
                            @endif
                            <h5 class="title">{{ $user->name }}</h5>
                        </a>
                        <p class="description">
                            {{ $user->email }}
                        </p>
                        </div>
                        <p class="description text-center">
                        {{ $user->biography }}
                        </p>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @if (auth()->user()->admin = true)
                    <h5 class="title">Dodaj korisnika</h5>
                </div>
                <div class="card-body">
                    {{-- {{ dd(auth()->user()->admin) }} --}}
                    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-3 px-1" style="margin-left:14px;">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Username"
                                        name="name"
                                    >
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        placeholder="Email"
                                        name="email"
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <div class="custom-file" style="margin-top:22px;margin-left:17px;">
                                        <input
                                            type="file"
                                            class="custom-file-input"
                                            id="new-post-image"
                                            name="avatar"
                                        >
                                        <label class="custom-file-label" for="new-post-image">Slika</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label style="margin-left:10px;">Sifra</label>
                                    <input
                                        type="password"
                                        class="form-control"
                                        placeholder="Sifra"
                                        name="password"
                                        style="margin-left:10px;"
                                    >
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label style="margin-left:10px;">Admin</label>
                                    <input
                                        type="checkbox"
                                        name="admin"
                                        style="margin-top:40px;"
                                    >
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary">Dodaj</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection