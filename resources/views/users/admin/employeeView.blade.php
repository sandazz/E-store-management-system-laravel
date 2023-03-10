@extends('users.admin.index')



@section('adminContent')

<a href="{{Route('user.create')}}"><button type="submit" class="btn btn-success btn-block mb-4 m-4">Enroll new Employee</button></a>

<table class="table table-bordered m-2">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Mobile</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($employees as $key => $employee )

        <tr>
            <th scope="row">{{ $key }}</th>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->mobile }}</td>
            <td>
                <form action="{{ Route('user.destroy',$employee->id) }}" method="post">
                    <a href="{{ Route('user.show',$employee->id) }}"><button type="button" class="btn btn-info  btn-block btn-sm ">show</button></a>
                    <a href="{{ Route('user.edit',$employee->id) }}"><button type="button" class="btn btn-primary btn-block btn-sm ">Edit</button></a>
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
