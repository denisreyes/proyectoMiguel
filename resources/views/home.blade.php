@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card text-white bg-dark mb-3" style="max-width: 25rem;">
                <div class="card-header">{{ __('Bienvenid@') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Has iniciado sesión') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
