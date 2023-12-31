@extends('adminlte::page')
@section('content')
    <form action="{{ route('major.store') }}" method="POST">

        @csrf
        <input type="text" class="form-control w-25 mt-2" name="title">
        <button class="btn btn-primary mt-2">Save</button>
    </form>
@endsection
