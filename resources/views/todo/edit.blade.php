<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <title>Edit Page</title>
</head>
<body>

    <div class="container mt-3">
        <div class="d-flex justify-content-between align-items-center my-5"> <!-- Margin 5-->
            <div class="h2">Update Todo</div>
            <a href="{{route("todos.index")}}" class="btn btn-primary btn-lg">Back</a>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{route("todos.update", $todo->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <label for="" class="form-label mt-4">Task Name</label><!-- mt-4 = margin 4 -->
                    <input type="text" name="title" class = "form-control" id="" value="{{$todo->title}}">
                    <label for="" class="form-label mt-4">Description</label>
                    <input type="text" name="description" class = "form-control" id="" value="{{$todo->description}}">
                    <label for="" class="form-label mt-4">Status</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="status" id="flexCheckDefault" {{$todo->status=="Completed"? "checked": ""}}>
                        <label class="form-check-label" for="flexCheckDefault" >
                          Mark as Completed
                        </label>
                    </div>

                    <input type="number" name="id" value="{{$todo->id}}" hidden>
                    <button class="btn btn-primary btn-lg mt-4">Update Todo</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
<script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
</html>