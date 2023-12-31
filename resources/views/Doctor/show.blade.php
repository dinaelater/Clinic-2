<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>




<body>
@extends('adminlte::page')
@section('content')
    <a href="{{ route('doctor.create') }}" class="btn btn-primary">create</a>
    <table class="table">
        <thead>
            <th>id</th>
            <th>name</th>
            <th>city</th>
            <th>email</th>
            <th>image</th>
            <th>major title</th>
            <th>created_at</th>
            <th>action</th>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $doctor->id }}</td>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->city }}</td>
                    <td>{{ $doctor->email }}</td>
                    <td><img src="{$doctor->image }}" width="40"></td>
                    <td>{{ $doctor->major->title }}</td>
                    <td>{{ $doctor->created_at }}</td>
                    <td class="d-flex">
                        <form action="{{ route('doctor.destroy', $doctor->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="delete-doctors btn btn-danger" type="submit">delete</button>
                        </form>
                    </td>
                </tr>

        </tbody>
    </table>

@endsection
</body>

</html>
