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
        <h1>Review Form + Upload File</h1>
        {{-- @dump($errors->all()) --}}
        @include('forms.error')
        <form action="{{ route('form4') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="" class="mb-1">Name</label>
                <input type="text" name="name" id=" " value="{{ old('name') }}" placeholder="Name"  class="form-control
                @error('name') is-invalid @enderror {{ old('name') ? 'is-valid' : '' }}">
                @error('name')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="" class="mb-1">Phone</label>
                <input type="Phone" name="phone" id=" " placeholder="Phone" value="{{ old('phone') }}" class="form-control
                @error('phone')is-invalid @enderror
                {{ old('phone') ? 'is-valid' : '' }}">
                @error('phone')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for=""  class="mb-1">Your CV</label>
                <input type="file" name="cv" id="cv" class="form-control
                @error('cv')is-invalid @enderror">
                @error('cv')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>

            <button class="btn btn-info w-25">Send</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
