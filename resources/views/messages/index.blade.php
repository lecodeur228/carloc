@extends('index')
@section('content')
    @include('sidebar')
    <div class="body-wrapper">
        @include('topbar')
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">messages</h5>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Selectionner le client</label>
                        <select id="disabledSelect" class="form-select">
                            <option>Client</option>
                        </select>
                    </div>
                    <div class="form-floating pt-3">
                        <textarea class="form-control m-3" style="height: 300px" placeholder="" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea p-3">messages</label>
                    </div>
                    <div class=" fixed-right">
                        <button href="{{route('create_car')}}" class="btn btn-primary m-3 ">
                            <span>Envoyer </span> <i class="ti ti-send"></i>
                        </button>
                    </div>
                </div>
            </div>


        </div>

@endsection
