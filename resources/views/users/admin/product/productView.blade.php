@extends('users.admin.index')



@section('adminContent')

<a href="{{ Route('product.create') }}"><button type="submit" class="btn btn-success btn-block mb-4 m-4">Enroll new Product</button></a>

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
                <form action="{{ Route('product.destroy',$product->id) }}" method="post">
                    <a href="{{ Route('product.show',$product->id) }}"><button type="button" class="btn btn-info  btn-block btn-sm ">show</button></a>
                    <a href="{{ Route('product.edit',$product->id) }}"><button type="button" class="btn btn-primary btn-block btn-sm ">Edit</button></a>
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger btn-block btn-sm">Delete</button>
                </form>
            </td>

          </tr>
        @endforeach

    </tbody>
  </table>

@endsection
