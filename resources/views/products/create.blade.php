<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-uppercase" href="/">Product Manager</a>
                </li>
            </ul>
        </div>
    </nav>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="container mt-3">
    <div class='d-flex flex-row-reverse'>
            <a href="/" class="btn btn-dark">Back</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                    <form action="/store" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="title">Title</label>
                            <br>
                            <input type="text" class="form-control" name="title" id="title">
                            @if($errors->has('title'))
                            <span class="text-danger">{{$errors->first('title')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="title">Price</label>
                            <br>
                            <input type="text" class="form-control" name="price" id="price">
                            @if($errors->has('price'))
                            <span class="text-danger">{{$errors->first('price')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="description">Description</label>
                            <br>
                            <textarea class="form-control" name="description" id="description" cols="30"
                                rows="5"></textarea>
                            @if($errors->has('description'))
                            <span class="text-danger">{{$errors->first('description')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="title">Image</label>
                            <br>
                            <input type="file" class="form-control" name="image" id="image">
                            @if($errors->has('image'))
                            <span class="text-danger">{{$errors->first('image')}}</span>
                            @endif
                        </div>

                        <input type="submit" value="Submit" class="btn btn-primary mt-3">

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>