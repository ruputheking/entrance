@extends('layouts.app')

@section('style')
<style media="screen">
.main-footer{
    display: none;
}
</style>
@endsection

@section('content')
<section class="content-header" style="background-color:#ecf0f5">
  <div class="container">
    <div class="box">
      <div class="card">
          <div class="card-header" style="font-size:24px;border-bottom:1px solid #ddd;padding:10px;">{{ __('Reset Password') }}</div>

          <div class="card-body">
              @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
              @endif

              <form method="POST" action="{{ route('password.email') }}" style="padding:20px;">
                  @csrf

                  <div class="form-group row">
                      <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                      <div class="col-md-6">
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                  <div class="form-group row mb-0">
                      <div class="col-md-6 offset-md-4">
                          <button type="submit" class="btn btn-primary">
                              {{ __('Send Password Reset Link') }}
                          </button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
    </div>
  </div>
</section>
@endsection
