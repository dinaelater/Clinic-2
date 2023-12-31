@extends('adminlte::page')
@section('content')
    <form action="{{ route('major.update', $major->id) }}" method="POST">
        @method('put')
        @csrf
        <input type="text" value="{{ $major->title }}" class="form-control w-25 mt-2" name="title">
        <button class="btn btn-primary mt-2">Save</button>
    </form>
@endsection
