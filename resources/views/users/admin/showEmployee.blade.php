@extends('users.admin.index')



@section('adminContent')

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 pt-5">
            <h3>Detail of Employee</h3>
                <div class="form-outline mb-1">
                    <label class="form-label" for="name">Name:  {{ $details->name }}</label>
                </div>
                <div class="form-outline mb-1">
                    <label class="form-label" for="email">Email:    {{ $details->email }}</label>
                </div>
                <div class="form-outline mb-1">
                    <label class="form-label" for="gender">Gender:  {{ $details->gender }}</label>
                </div>
                <div class="form-outline mb-1">
                    <label class="form-label" for="address">Address:    {{ $details->address }}</label>
                </div>
                <div class="form-outline mb-1">
                    <label class="form-label" for="mobile">Mobile No:   {{ $details->mobile }}</label>
                </div>
                <!-- Submit button -->
                <a href="{{ route('user.showEmployee') }}"><button type="button" class="btn btn-primary btn-block mb-4">Back</button></a>
        </div>
        <div class="col-lg-2"></div>
    </div>

@endsection
