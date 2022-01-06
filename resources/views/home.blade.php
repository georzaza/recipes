@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">{{ __('Κατάσταση') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success text-center" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="alert alert-success text-center" role="alert">
                        {{ __('Είσαι ενεργός!') }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card d-flex justify-content-center">
                <div class="card-header">{{ __('Πρόσφατες Συνταγές?') }}</div>
                <div class="card-body d-flex row justify-content-center">
                    <div class="alert alert-success text-danger text-center w-75" role="alert">
                        {{ __('Μερικές συνταγές εδώ?') }}
                    </div>
                </div>
            </div>
            <div class="card d-flex justify-content-center mt-5">
                <div class="card-header">{{ __('Πρόσφατα προϊόντα?') }}</div>
                <div class="card-body d-flex row justify-content-center">
                    <div class="alert alert-success text-danger text-center w-75" role="alert">
                        {{ __('Μερικά προϊόντα εδώ?') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
