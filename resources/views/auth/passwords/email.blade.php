@extends('layouts.app')

@section('content')
<div class="login container p-4 my-md-5" dir="rtl">
    <div class="row justify-content-center" style="margin-top: 35px">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-dark text-center fw-bold">{{ __('إعادة تعيين كلمة المرور') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row justify-content-center mb-3">

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control text-center @error('email') is-invalid @enderror" name="email" placeholder="{{ __('الإيمايل ديالك') }}" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary d-flex justify-content-center align-items-center" style="width: 100px; height: 30px; border-radius: 5px;">
                                    {{ __('أرسل') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
