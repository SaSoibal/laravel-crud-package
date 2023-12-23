<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container bg-white pb-3">
        <div class="d-flex justify-content-between pt-4 mb-3">
            <h3>Post List</h3>
            <div>
                <a href="{{route('crud.create')}}" class="btn btn-info btn-sm text-white">Add New Post</a>
            </div>
        </div>
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
        <table class="table mb-3">
            <thead>
            <tr>
                <th scope="col">SL</th>
                <th scope="col">Post Title</th>
                <th scope="col">Author Name</th>
                <th scope="col">Post Details</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($post_list as $key=>$post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->author}}</td>
                <td>{{$post->details}}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{route('crud.edit',$post->id)}}" class="btn btn-info btn-sm text-white">Edit</a>
                        <a href="{{route('crud.delete',$post->id)}}" class="btn btn-danger btn-sm text-white">Delete</a>
                    </div>

                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {!! $post_list->links() !!}
    </div>
</body>
</html>
