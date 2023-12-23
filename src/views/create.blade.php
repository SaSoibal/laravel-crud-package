<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container bg-white pb-3">
    <div class="d-flex justify-content-between pt-4 mb-3">
        <h3>Create new post</h3>
        <div>
            <a href="{{route('crud.index')}}" class="btn btn-info  btn-sm text-white">Entry List</a>
        </div>
    </div>

    <form action="{{route('crud.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}" placeholder="Enter title">
            @if($errors->has('title'))
            <small class="text-danger">! {{ $errors->first('title') }}</small>
            @endif
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" id="author" name="author" value="{{old('author')}}" placeholder="Enter author name">
            @if($errors->has('author'))
            <small class="text-danger">! {{ $errors->first('author') }}</small>
            @endif
        </div>
        <div class="form-group">
            <label for="details">Details</label>
            <textarea  class="form-control" id="details" name="details" placeholder="Enter details">{{old('details')}}</textarea>
            @if($errors->has('details'))
            <small class="text-danger">! {{ $errors->first('details') }}</small>
            @endif
        </div>
        <button type="submit" class="btn btn-success btn-sm text-white">Submit</button>
    </form>
</div>

</body>
</html>
