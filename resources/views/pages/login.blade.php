@extends('layouts.index')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4 pt-5">
            <form action="{{ Route('loginCheck') }}" method="post">
                @csrf
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" name="email" class="form-control" />
                  <label class="form-label" for="email">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" name="password" class="form-control" />
                  <label class="form-label" for="password">Password</label>
                </div>


                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                <!-- Register buttons -->
                <div class="text-center">
                  <p><a href="{{ Route('register') }}">Register</a></p>
                </div>
              </form>
        </div>
        <div class="col-lg-4"></div>

    </div>
</div>

@endsection
