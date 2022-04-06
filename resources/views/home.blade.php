@extends('layouts.app')

@section('content')

<div class="login container p-4 my-md-5" dir="ltr" id="login">
    <div class="row justify-content-center" style="margin-top: 35px">
        <div class="col-md-8" dir="rtl">
            <div class="card d-flex">
                <div class="card-header text-dark text-center fw-bold">{{ __('Dashboard') }}</div>
                <div class="card-body text-dark text-center my-2">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('سيتم معلالجة طلبك قريبا!') }}
                    <br><a href="{{ route('voyager.dashboard') }}" class="btn btn-outline-warning my-2">Dashboard</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
