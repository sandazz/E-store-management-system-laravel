@extends('layouts.index')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 pt-5">
            <h3 class="text-center">Customer Registration</h3>
            <form action="{{ Route('user.store') }}" method="post">
                @csrf
                <div class="form-outline mb-4">
                    <label class="form-label" for="name">Name:</label>
                    <input type="text" name="name" class="form-control" />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="email">Email:</label>
                    <input type="email" name="email" class="form-control" />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="gender">Gender:</label>
                    <input type="text" name="gender" class="form-control" />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="address">Address:</label>
                    <input type="text" name="address" class="form-control" />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="mobile">Mobile No:</label>
                    <input type="text" name="mobile" class="form-control" />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password:</label>
                    <input type="password" name="password" class="form-control" />
                </div>

                    <!-- hidden value of role -->
                    <input type="hidden" name="role" class="form-control"  value="customer"/>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>
              </form>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>

@endsection
