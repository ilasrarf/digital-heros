@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card d-flex">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body border border-danger">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('سيتم معلالجة طلبك قريبا!') }}
                    <a href="{{ route('voyager.dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
