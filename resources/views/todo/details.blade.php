<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <title>Details Page</title>
</head>

<body>

    <div class="container mt-3">
        <h1 class="text-center text-decoration-underline">All Todos</h1>
        <div class="d-flex justify-content-between align-items-center my-5"> <!-- Margin 5-->
            <div class="h2">Details</div>
            <a href="{{ route('todos.index') }}" class="btn btn-primary btn-lg">Home</a>
        </div>
        <hr>
        <p><b>Title:</b> {{ ucfirst($todo->title) }}</p>
        <p><b>Description:</b> {{ $todo->description }}</p>
        <p><b>Status:</b> {{ $todo->status }}</p>
        <p><b>Created At:</b> {{ $todo->created_at }}</p>
        <p><b>Updated At:</b> {{ $todo->updated_at }}</p>
        <hr>

       
    </div>

</body>
<script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>

</html>
