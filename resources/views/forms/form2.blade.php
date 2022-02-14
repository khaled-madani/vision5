<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"/>
    <title>Form2</title>
</head>

<body>
    <div class="container my-5">
        <form action="{{ route('form2') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="mb-1">Name</label>
                <input type="text" name="name" id=" " placeholder="Name"  class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="mb-1">Email</label>
                <input type="email" name="email" id=" " placeholder="Email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="mb-1">Dtae of Birth</label>
                {{-- <input type="date" name="date" id="" class="form-control"> --}}
                <input type="text" class="form-control datepicker" placeholder="Your Date" name="dob">

            </div>
            <button class="btn btn-dark w-25">Send</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script>
        $('.datepicker').datepicker();
    </script>
</body>
</html>
