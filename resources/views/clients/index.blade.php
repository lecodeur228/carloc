@extends('index')

@section('content')
    @include('sidebar')
    <div class="body-wrapper">
        @include('topbar')
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">Clients</h5>
                        <div class="row">

                            <div class="col-lg-10 d-flex align-items-stretch">
                                <div class="w-100">
                                    <div class="card-body p-4">
                                        <div class="table-responsive">
                                            <table class="table text-nowrap mb-0 align-middle">
                                                <thead class="text-dark fs-4">
                                                    <tr>
                                                        <th class="border-bottom-0">
                                                            <h6 class="fw-semibold mb-0">ID</h6>
                                                        </th>
                                                        <th class="border-bottom-0">
                                                            <h6 class="fw-semibold mb-0">Image</h6>
                                                        </th>
                                                        <th class="border-bottom-0">
                                                            <h6 class="fw-semibold mb-0">Nom</h6>
                                                        </th>
                                                        <th class="border-bottom-0">
                                                            <h6 class="fw-semibold mb-0">Email</h6>
                                                        </th>
                                                        <th class="border-bottom-0">
                                                            <h6 class="fw-semibold mb-0">Telephone</h6>
                                                        </th>
                                                        <th class="border-bottom-0">
                                                            <h6 class="fw-semibold mb-0">verification</h6>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($clients as $client)
                                                        <tr>
                                                            <td class="border-bottom-0">
                                                                <h6 class="fw-semibold mb-0">{{$client->id}}</h6>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <img src="../assets/images/profile/user-1.jpg"
                                                                    alt="" width="35" height="35"
                                                                    class="rounded-circle">

                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <p class="mb-0 fw-normal">{{$client->firstname}} {{$client->lastname}}</p>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <h6 class="fw-semibold mb-0 fs-4">{{$client->email}}</h6>
                                                                </div>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <h6 class="fw-semibold mb-0 fs-4">{{$client->telephone}}</h6>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <span
                                                                    class="badge bg-secondary rounded-3 fw-semibold">{{$client->verification}}</span>

                                                            </td>
                                                        </tr>
                                                    @empty
                                                       <tr>
                                                        <div class="alert alert-warning">
                                                            <p>Pas de client Inscrire</p>
                                                        </div>
                                                       </tr>
                                                    @endforelse



                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
