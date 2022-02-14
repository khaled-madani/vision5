<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <title>Site1</title>
</head>

<body>
    <div class="container my-5">
        <form action="{{ route('form1') }}" method="POST" enctype="multipart/form-data">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name" class="form-control my-2">
            @csrf
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
            <label for="email">email</label>
            <input type="email" name="email" id="email" placeholder="email" class="form-control my-2">
            {{-- <label for="cv">cv</label> --}}
            {{-- <input type="file" name="cv" id="cv"  class="form-control my-2"> --}}
            <button class="btn btn-dark w-25 text-center py-2 my-3">Send</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
