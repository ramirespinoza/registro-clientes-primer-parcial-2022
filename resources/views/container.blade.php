@extends('layouts.app')

@section('content')
<div class="container">
    <!-- <div class="row justify-content-center"> -->
        <!-- <div class="col-md-8"> -->
                <nav class="navbar navbar-expand-lg bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/">Registro clientes</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link" href="/clients">Clients</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="/client_types">Client Types</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </nav>
            <div class="container">
                @yield("container")
            </div>
        <!-- </div> -->
    <!-- </div> -->
</div>
@endsection
