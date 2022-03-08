<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
    <title>One_to_Many</title>
</head>

<body>
    {{-- {{ dd(session()) }} --}}
    @if (session('type'))
        <div class="alert alert-{{ session('type') }}">
            <small>{{ session('msg') }}</small>
        </div>
    @endif
    <div class="container my-5">


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        // Jquery
        setTimeout(() => {
        $('.alert').slideUp(1000);
        // $('.alert').fadeOut(1000);
        }, 1000);

        // @if ($errors->any())

        // $('body,html').animate({
        //     scrollTop:$('.form-wrapper').offset().top
        // },1000)
        // @endif
    </script>
</body>

</html>
