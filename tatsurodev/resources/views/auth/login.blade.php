@extends('layouts.app')
@section('content')
<div>
    <div class="card card-body bg-dark text-white py-5">
        <h2 class="text-capitalize">{{ __('admin') . ' ' . __('login') }}</h2>
    </div>
</div>
<div class="card card-body py-5">
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="form-group">
            <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-dark text-white">
                        <i class="fas fa-envelope"></i>
                    </span>
                </div>
                <input type="text" name="email" class="form-control bg-dark text-white{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" value="{{ old('email') }}" />
                @if($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-dark text-white">
                        <i class="fas fa-key"></i>
                    </span>
                </div>
                <input type="password" name="password" class="form-control bg-dark text-white{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" />
                @if($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <input type="submit" value="{{ __('login') }}" class="btn btn-dark btn-block btn-lg text-capitalize" />
    </form>
</div>
@endsection