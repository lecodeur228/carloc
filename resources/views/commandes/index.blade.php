@extends('index')
@section('content')
    @include('sidebar')
    <div class="body-wrapper">
        @include('topbar')
        <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <h5 class="card-title fw-semibold mb-4">Commande</h5>
                                <div class="card">
                                    <div class="card-header">
                                        Featured
                                    </div>
                                    <img src="../assets/images/products/s4.jpg" class="card-img-center" alt="...">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="card-title">TOYOTA</h6>
                                            <h6 class="card-title">RAV 4</h6>
                                            <p class=""> 150 KM/H</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-md-4">
                                <h5 class="card-title fw-semibold mb-4">Header and footer</h5>
                                <div class="card">
                                    <div class="card-header">
                                        Featured
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional
                                            content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="col-md-4">
                                <h5 class="card-title fw-semibold mb-4">Titles, text, and links</h5>
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title and make up
                                            the bulk of
                                            the
                                            card's content.</p>
                                        <a href="#" class="card-link">Card link</a>
                                        <a href="#" class="card-link">Another link</a>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
