@extends('index')
@section('content')
    @include('sidebar')
    <div class="body-wrapper">
        @include('topbar')
        <div class="container-fluid">
            <div class="fixed-bottom fixed-right  " id="bottom-right-button">
                <a href="{{ route('create_car') }}" id="bottom-right-button" class="btn btn-primary m-3 ">
                    <span>Ajouter une voiture</span> <i class="ti ti-plus"></i>
                </a>
            </div>
            <div class="row">


                @forelse ($cars as $car)
                    <div class="col-sm-6 col-xl-4">

                        <div class="card overflow-hidden rounded-2">
                            <div class="position-relative">
                                <img src="{{ asset('storage/' . $car->car_image) }}" class="card-img-top rounded-0"
                                    alt="{{ $car->marque . $car->model }}">
                            </div>
                            <div class="card-body pt-3 p-4">
                                <div class="">

                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-semibold fs-4 ">Modele : {{ $car->model }}</h6>
                                    <h6 class="fw-semibold fs-4 ">quantité : {{ $car->quantity }}</h6>
                                    </div>

                                        <h6 class="fw-semibold fs-4"> Marque : {{ $car->marque }}</h6>
                                        <h6 class="fw-semibold fs-4 ">plaque : {{ $car->plaque }}</h6>



                                    <h6 class="fw-semibold fs-4 ">Prix : {{ $car->prix_location }}</h6>
                                    <h6 class="fw-semibold fs-4 mb-1">vitesse : {{ $car->vitesse }} KM/H</h6>

                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>


    </div>
@endsection
