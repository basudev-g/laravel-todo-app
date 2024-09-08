<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <title>All Todos</title>
</head>

<body>

    <div class="container mt-3">
        <h1 class="text-center text-decoration-underline">All Todos</h1>
        <div class="d-flex justify-content-between align-items-center my-5"> <!-- Margin 5-->
            {{-- <div class="h2">Add Todo</div> --}}
            <a href="{{ route('todos.create') }}" class="btn btn-primary btn-lg">Add Todo</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <table class="table table-stripped mt-5">
            <tr>
                <th>Task Name</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            @foreach ($todos as $todo)
                <tr>
                    <td>{{ $todo->title }}</td>
                    <td>{{ $todo->description }}</td>
                    <td>{{ $todo->status }}</td>
                    <td>
                        <a href="{{ route('todos.show', $todo->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-success btn-sm">Update</a>
                        <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                        </form>
                        {{-- <a href="" class="btn btn-danger btn-sm">Delete</a> --}}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

</body>
<script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>

</html>
