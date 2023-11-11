@extends('index')
@section('content')
    @include('sidebar')
    <div class="body-wrapper">
        @include('topbar')
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="card">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">Ajouter une voiture</h5>
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('create') }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="mb-3">
                                        <label for="input1" class="form-label">Marque</label>
                                        <input type="text" class="form-control" id="input1" name="marque"
                                            aria-describedby="emailHelp">
                                        @if ($errors->has('marque'))
                                            <span class="text text-danger mt-2">{{ $errors->first('marque') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="input2" class="form-label">Model</label>
                                        <input type="text" class="form-control" name="model" id="input2">
                                        @if ($errors->has('model'))
                                            <span class="text text-danger mt-2">{{ $errors->first('model') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="input3" class="form-label">Vitesse ( Km/H )</label>
                                        <input type="number" class="form-control" name="vitesse" id="input3">
                                        @if ($errors->has('vitesse'))
                                            <span class="text text-danger mt-2">{{ $errors->first('vitesse') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="input4" class="form-label">Prix</label>
                                        <input type="number" class="form-control" name="prix_location" id="input4">
                                        @if ($errors->has('vitesse'))
                                            <span class="text text-danger mt-2">{{ $errors->first('vitesse') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="input4" class="form-label">quantity</label>
                                        <input type="number" class="form-control" name="quantity" id="input4">
                                        @if ($errors->has('quantity'))
                                            <span class="text text-danger mt-2">{{ $errors->first('quantity') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="input4" class="form-label">plaque</label>
                                        <input type="text" class="form-control" name="plaque" id="input4">
                                        @if ($errors->has('plaque'))
                                            <span class="text text-danger mt-2">{{ $errors->first('plaque') }}</span>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="input4" class="form-label">Choisir image de la voiture </label>
                                        <input type="file" id="image-input" name="url_image" style="display:none;">
                                        @if ($errors->has('url_image'))
                                            <span class="text text-danger mt-2">( {{ $errors->first('url_image') }} )</span>
                                        @endif
                                        <div class="card" id="card">
                                            <center>
                                                <img id="default-image" src="{{ asset('assets/images/selectImage.png') }}"
                                                    width="300" alt="Default Image">

                                            </center>

                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Ajouter</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('card').addEventListener('click', function() {
            document.getElementById('image-input').click();
        });
        document.getElementById('image-input').addEventListener('change', function(e) {
            var file = e.target.files[0];

            if (file) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    var preview = document.getElementById('card');
                    preview.innerHTML = '<center> <img src="' + e.target.result +
                        '" alt="Image preview" width="500"> </center> ';
                };

                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection
