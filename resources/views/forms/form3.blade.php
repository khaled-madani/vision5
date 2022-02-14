<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
    <title>Form3</title>
</head>

<body>
    <div class="container my-5">
        {{-- @dump($errors->any()) --}}
        {{-- @dump($errors->all()) --}}
        <section style="height: 3000px"></section>
        <section class="form-wrapper">

        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </ul>

        </div>
    @endif


    <form action="{{ route('form3') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="mb-1">Name</label>
            <input type="text" name="name" id=" " placeholder="Name" class="form-control
            @error('name') is-invalid @enderror">
            @error('name')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="mb-1">Email</label>
            <input type="text" name="email" id=" " placeholder="Email" class="form-control
            @error('email')is-invalid @enderror">

            @error('email')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>

        <button class="btn btn-dark w-25">Send</button>
    </form>
        </section>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        // Jquery
        setTimeout(() => {
        $('.alert').slideUp(1000);
        // $('.alert').fadeOut(1000);
        }, 3000);

        @if ($errors->any())

        $('body,html').animate({
            scrollTop:$('.form-wrapper').offset().top
        },1000)
        @endif
    </script>
</body>

</html>
