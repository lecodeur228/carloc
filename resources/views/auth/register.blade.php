@extends('index')

@section('content')
    <form action="{{route('doRegister')}}" method="post">
        @csrf
        <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
            data-sidebar-position="fixed" data-header-position="fixed">
            <div
                class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
                <div class="d-flex align-items-center justify-content-center w-100">
                    <div class="row justify-content-center w-100">
                        <div class="col-md-8 col-lg-6 col-xxl-3">


                            <div class="card mb-0">
                                <div class="card-body">
                                    <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                        <img src="{{ asset('assets/images/logos/favicon.png') }}" width="100"
                                            alt="">
                                    </a>
                                    <p class="text-center">Creer les administrateurs</p>
                                    <form method="POST" action="{{route('doRegister')}}">
                                        <div class="mb-3">
                                            <label for="exampleInputtext1" class="form-label">Nom de utilisateur</label>
                                            <input type="text" class="form-control" name="name" id="exampleInputtext1"
                                                aria-describedby="textHelp">
                                                @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email de utilisateur</label>
                                            <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                                @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                                            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                                            @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                        </div>
                                        <button
                                            class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">S'inscire</button>
                                            @if (session('success'))
                                            <div class="alert alert-success m-2">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                        <div class="d-flex align-items-center justify-content-center">
                                            <p class="fs-4 mb-0 fw-bold">J'ai déjà un compte?</p>
                                            <a class="text-primary fw-bold ms-2" href="./authentication-login.html">Se
                                                connecter</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
