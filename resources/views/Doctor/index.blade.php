
    @extends('adminlte::page')
    @section('content')
        <a href="{{ route('doctor.create') }}" class="btn btn-primary">create</a>
        <table class="table">
            <thead>
                <th>id</th>
                <th>name</th>
                <th>city</th>

                <th>image</th>
                <th>action</th>
            </thead>
            <tbody>
                @foreach ($doctors as $doctor)
                    <tr>
                        <td>{{ $doctor->id }}</td>
                        <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->city }}</td>
                        <td>{{ $doctor->email }}</td>
                        <td>{{ $doctor->major->title ?? 'general' }}</td>
                        <td><img src="{$doctor->image }}" width="40"></td>

                        <td class="d-flex">
                            <form action="{{ route('doctor.destroy', $doctor->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="delete-doctors btn btn-danger" type="submit">delete</button>
                            </form>
                            <a href="{{ route('doctor.edit', $doctor->id) }}" class="btn btn-warning">Update</a>
                            <a href="{{ route('doctor.show', $doctor->id) }}" class="btn btn-primary">show</a>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    @endsection
    @section('js')
        <script>
            document.querySelectorAll('.delete-doctor').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    const Action = confirm('are you sure you want to delete');
                    if (!Action) e.preventDefault();
                })
            })
        </script>
    @endsection
</body>

</html>
