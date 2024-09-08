<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <title>Create Page</title>
</head>
<body>

    <div class="container mt-3">
        <div class="d-flex justify-content-between align-items-center my-5"> <!-- Margin 5-->
            <div class="h2">Add Todo</div>
            <a href="{{route("todos.index")}}" class="btn btn-primary btn-lg">Back</a>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{route("todos.store")}}" method="post">
                    @csrf
                    <label for="" class="form-label mt-4">Task Name</label><!-- mt-4 = margin 4 -->
                    <input type="text" name="title" class = "form-control" id="">
                        <div class="text-danger">
                            
                        </div>
                    <label for="" class="form-label mt-4">Description</label>
                    <input type="text" name="description" class = "form-control" id="">
                    <div class="text-danger">
                            {{-- @error('work')
                                {{$message}}
                            @enderror --}}
                        </div>
                    <label for="" class="form-label mt-4">Status</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="status">
                        <label class="form-check-label" for="flexCheckDefault">
                          Mark as Completed
                        </label>
                    </div>
                    <div class="text-danger">
                            {{-- @error('duedate')
                                {{$message}}
                            @enderror --}}
                        </div>
                    <button class="btn btn-primary btn-lg mt-4">Add Todo</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
<script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
</html>