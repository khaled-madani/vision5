<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
</head>

<body>

    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Edit Course <span class="text-danger">{{ $course['name'] }}</span></h1>
            {{-- <a href="{{ route('courses.index') }}" class="btn btn-dark">Return Back</a> --}}
            <a onclick="history.back()" class="btn btn-dark">Return Back</a>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif


        <form action="{{ route('courses.update',$course['id']) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="my-3">
                <label for="">Name</label>
                <input type="text" name="name" placeholder="Name" class="form-control" value="{{ $course['name'] }}">
            </div>
            <div class="my-3">
                <label for="">Price</label>
                <input type="text" name="price" placeholder="price" class="form-control" value="{{ $course['price'] }}">
            </div>
            <div class="my-3">
                <label for="">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="my-3">
                <label for="">Description</label>
                <textarea name="description" id="description" rows="5" class="form-control">{{ $course['description'] }}</textarea>
            </div>
            <div class="my-3">
                <button class="btn btn-info btn-lg px-5 text-white">Update</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.3/tinymce.min.js" referrerpolicy="no-referrer">
    </script>

    <script>
        tinymce.init({
            selector: '#description',
            plugins : 'code'
        });


        setTimeout(() => {
            $('.alert').fadeOut()
        }, 3000);
    </script>
</body>

</html>
