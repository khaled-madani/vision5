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
        <div class="mb-5">
            <div class="my-1">
               <h4> Name : {{ $user->name }}  &nbsp &nbsp     Email : {{ $user->email }}</h4>
            </div>


        </div>
        <h1>Add Product</h1>
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


    <form action="{{ route('one_to_many_submit') }}" method="POST">
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
            <label for="" class="mb-1">Price</label>
            <input type="text" name="price" id=" " placeholder="price" class="form-control
            @error('price')is-invalid @enderror">

            @error('price')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>

        <button class="btn btn-dark w-25">Add</button>
    </form>









    <div class="mt-5">
        <table class="table table-bordered table-striped table-hover">
            <tr class="table-dark" >
                <td>id</td>
                <td>name</td>
                <td>price</td>
                <td>created_at</td>
                <td>updated_at</td>
            </tr>
            @forelse ($products as $product)
                <tr class="">
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td>{{ $product->updated_at }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5"></td>
                </tr>
            @endforelse


        </table>
        {{ $products->links() }}
    </div>

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
