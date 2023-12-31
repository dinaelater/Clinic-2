
@extends('adminlte::page')
@section('content')
<form action="{{ route ('doctor.store') }} " method="POST" enctype="multiport/form-data" >
    @csrf
    <div>
        <label for="name" class="form-label"> Name:</label>
        <input type="text" class="form-control w-50" name="name" id="name">
    </div>
    <div>
        <label for="city" class="form-label">City:</label>
        <input type="text" class="form-control w-50" name="city" id="city">
    </div>
    <div>
        <label for="email" class="form-label"> Email:</label>
        <input type="email" class="form-control w-50"name="email" id="email">
    </div>
    <div>
        <label for="password" class="form-label">password:</label>
        <input type="password" class="form-control w-50" name="password" id="password">
    </div>
    <div class="mb-3">
        @csrf
        <label for="formFile" class="form-label">Image:</label>
        <input class="form-control w-50" type="file" name="image" id="image">
      </div>
      <div>

    </div>
    <input type="submit" class="btn btn-primary" />

</form>
@endsection
