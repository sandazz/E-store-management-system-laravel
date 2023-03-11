@extends('users.customer.index')



@section('customerContent')

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 pt-5">
            <h3>Detail of Product</h3>
            <form action="{{ Route('order.store') }}" method="post">
                @csrf
                 <div class="form-outline mb-1">
                    <label class="form-label" for="name">Name:  {{ $details->name }}</label>
                </div>
                <div class="form-outline mb-1">
                    <label class="form-label" for="email">Details:
                            <select name="employeeId">
                                @foreach ($employees as $employee)
                                    <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                @endforeach
                            </select>
                    </label>

                </div>
                <div class="form-outline mb-1">
                    <label class="form-label" for="gender">Price:  {{ $details->price }}</label>
                </div>

                <input type="hidden" name="productId" value="{{ $details->id }}">
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Order</button>
            </form>
        </div>
        <div class="col-lg-2"></div>
    </div>
@endsection
