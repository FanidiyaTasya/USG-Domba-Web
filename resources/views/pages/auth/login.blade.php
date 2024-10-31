@extends('layouts.main-auth')

@section('content-auth')    
<div class="card-body">
  <a href="" class="text-nowrap logo-img text-center d-block py-3 w-100">
    <img src="{{ asset('assets/images/logos/logo-gmf.png') }}" width="180" alt="">
  </a>
  <p class="text-center">CV Gumukmas Multi Farm</p>
  @if (session()->has('error'))
      <div id="error-alert" class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
          <strong>Error!</strong> {{ session('error') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  @endif
  <form method="POST" action="{{ route('auth') }}">
    @csrf
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror">
      @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-4">
      <label for="password" class="form-label">Password</label>
      <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
      @error('password')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="d-flex align-items-center justify-content-end mb-4">
      <a class="text-primary fw-bold" href="#">Forgot Password ?</a>
    </div>
    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Log In</button>
  </form>
</div>
@endsection  