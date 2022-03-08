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
    <div class="container my-5">
        <h1>Welcome <span class="text-danger">{{ $std->name }}</span> , Register your subjects</h1>
        <form action="{{ route('register_subject_submit') }}" method="POST">
            @csrf
            @foreach ($subjects as $subject)
                <label>
                    <input type="checkbox" name="subjects[]" id="" class="mx-2" {{ in_array($subject->id , $std_sub) ? 'checked' :'' }} value="{{ $subject->id }}"/>{{ $subject->name }}
                </label> <br>
            @endforeach
            {{-- <select name="subject" id="subject" class="form-control form-select">
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                @endforeach
            </select> --}}
            <button class="btn btn-info my-3 w-25 py-2">Register</button>
        </form>
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
