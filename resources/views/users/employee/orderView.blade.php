@extends('users.employee.index')

@section('employeeContent')
<div class="container">
    <h4 class="m-3">Order Details</h4>
    <table class="table table-bordered m-2">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Product Name</th>
            <th scope="col">Detail</th>
            <th scope="col">Price</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Customer Address</th>
            <th scope="col">Customer Mobile</th>
            <th scope="col">Date</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($orders as $key => $order )

            <tr>
                <th scope="row">{{ ++$key }}</th>
                <td>{{ $order->productName }}</td>
                <td>{{ $order->detail }}</td>
                <td>{{ $order->price }}</td>
                <td>{{ $order->customerName }}</td>
                <td>{{ $order->customerAddress }}</td>
                <td>{{ $order->customerMobile }}</td>
                <td>{{ $order->create_at }}</td>
              </tr>
            @endforeach

        </tbody>
      </table>

</div>

@endsection
