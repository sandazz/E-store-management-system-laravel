@extends('users.customer.index')



@section('customerContent')

<table class="table table-bordered m-2">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Detail</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($products as $key => $product )

        <tr>
            <th scope="row">{{ ++$key }}</th>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <form action="{{ Route('user.customer.productOrder') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <button type="submit" class="btn btn-success btn-block btn-sm ">Place order</button>
                </form>
            </td>

          </tr>
        @endforeach

    </tbody>
  </table>

@endsection
