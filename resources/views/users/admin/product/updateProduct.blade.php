@extends('users.admin.index')



@section('adminContent')

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 pt-5">
            <h3>Update Product</h3>
            <form action="{{ Route('product.update',$details->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-outline mb-4">
                    <label class="form-label" for="name">Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="{{ $details->name }}"/>
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="detail">Detail:</label>
                    <input type="text" name="detail" class="form-control" placeholder="{{ $details->detail }}" />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="price">Price:</label>
                    <input type="text" name="price" class="form-control" placeholder="{{ $details->price }}"/>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Update</button>
              </form>
        </div>
        <div class="col-lg-2"></div>
    </div>

@endsection
