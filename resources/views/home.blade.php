@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">{{ __('Status') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success text-center" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="alert alert-success text-center" role="alert">
                        {{ __('You are logged in!') }}
                    </div>
                </div>
                <!--
                <div class="card-body">
                    <button class="btn-primary">{{ __('Add a new Recipe') }} </button>
                </div>
                <div class="card-body">
                    <button class="btn-primary">{{ __('Add a new Product') }} </button>
                </div>
                -->
            </div>
        </div>
        <div class="col-md-3">
            <div class="card d-flex justify-content-center">
                <div class="card-header">{{ __('Recent Recipes?') }}</div>
                <div class="card-body d-flex row justify-content-center">
                    <div class="alert alert-success text-danger text-center w-50" role="alert">
                        {{ __('Show some recipes here') }}
                    </div>
                </div>
            </div>
            <div class="card d-flex justify-content-center mt-5">
                <div class="card-header">{{ __('Recent Products?') }}</div>
                <div class="card-body d-flex row justify-content-center">
                    <div class="alert alert-success text-danger text-center w-50" role="alert">
                        {{ __('Show some products here') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
