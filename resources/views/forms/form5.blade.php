<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

</head>

<body>
    <div class="container my-5">
        <h1>Form 5 + Send Email</h1>
        {{-- @dump($errors->all()) --}}
        @include('forms.error')
        <form action="{{ route('form5') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="my-3">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter Your Name" class="form-control mt-2" value="{{ old('name') }}">
            </div>
            <div class="my-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter Your Email" class="form-control mt-2" value="{{ old('email') }}">
            </div>

            <div class="my-3">
                <label for="Subject">Subject</label>
                <input type="text" name="subject" id="Subject" placeholder="Enter Your Subject" class="form-control mt-2" value="{{ old('subject') }}">
            </div>

            <div class="my-3">
                <label>Subject Type</label><br>
                <label><input type="radio"  name="subject_type" value="Normal"
                    {{ old('subject_type')==='Normal'? 'checked':'' }}> Normal</label><br>
                <label><input type="radio" name="subject_type" value="Special"
                    {{ old('subject_type')==='Special'? 'checked':'' }}> Special</label><br>
            </div>

            {{-- @dump(old('hoppies')) --}}
            <div class="my-3">
                <label class="mb-2">Your Hoppies</label><br>
                <label><input type="checkbox" name="hoppies[]" value="Football"
                    {{ !is_null(old('hoppies')) && (in_array('Football',old('hoppies'))) ? 'checked' : '' }}> Football</label><br>
                <label><input type="checkbox" name="hoppies[]" value="bascetball"
                    {{ !is_null(old('hoppies')) && (in_array('bascetball',old('hoppies'))) ? 'checked' : '' }}> bascetball</label><br>
                <label><input type="checkbox" name="hoppies[]" value="Vollyball"
                    {{ !is_null(old('hoppies')) && (in_array('Vollyball',old('hoppies'))) ? 'checked' : '' }}> Vollyball</label><br>
                <label><input type="checkbox" name="hoppies[]" value="coding"
                    {{ !is_null(old('hoppies')) && (in_array('coding',old('hoppies'))) ? 'checked' : '' }}> coding</label><br>
            </div>
            {{-- @dump(old('study')) --}}
            <div class="my-3">
                <label class="mb-2">Your Study</label><br>
                <select class="form-control form-select" name="study">
                    <option value="Diplome"
                    {{ old('study') === 'Diplome' ? 'selected' : '' }}>Diplome</option>
                    <option  value="bachelor"
                    {{ old('study') === 'bachelor' ? 'selected' : '' }}>bachelor</option>
                    <option value="Master"
                    {{ old('study') === 'Master' ? 'selected' : '' }}>Master</option>
                    <option value="PHD"
                    {{ old('study') === 'PHD' ? 'selected' : '' }}>PHD</option>
                    <option value="Prof"
                    {{ old('study') === 'Prof' ? 'selected' : '' }}>Prof</option>
                </select>
            </div>

            <div class="my-3">
                <label for="">Message</label>
                <textarea name="message" id=""  rows="7" class="form-control">{{ old('message') }}</textarea>
            </div>

            <div class="my-3">
                <label for="">CV</label>
                <input type="file" name="cv" id="" class="form-control">
            </div>

            <button class="btn btn-dark w-25">Send</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
