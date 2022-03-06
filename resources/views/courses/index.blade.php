<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        table td,
        table tr {
            vertical-align: middle;
        }

    </style>
</head>

<body>
    @if (session('msg'))
        <div class="alert alert-{{ session('type') }} alert-dismissible fade show" role="alert">
            {{ session('msg') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h1>Our Courses</h1>
                <a href="{{ route('courses.create') }}" class="btn btn-info">Add New</a>
            </div>
            <form action="" method="get" class="d-flex align-items-center" id="filter_form">
                Items Per Page
                @if (request()->page)
                    <input type="hidden" name="page" value="{{ request()->page }}">
                @endif
                <select name="items_count" id="items_count" class="mx-2">
                    <option value="5" {{ request()->items_count == 5 ? 'selected' : '' }}>5</option>
                    <option value="10" {{ request()->items_count == 10 ? 'selected' : '' }}>10</option>
                    <option value="15" {{ request()->items_count == 15 ? 'selected' : '' }}>15</option>
                    <option value="20" {{ request()->items_count == 20 ? 'selected' : '' }}>20</option>
                    <option value="25" {{ request()->items_count == 25 ? 'selected' : '' }}>25</option>
                    <option value="50" {{ request()->items_count == 50 ? 'selected' : '' }}>50</option>
                </select>
                {{-- <button class="btn btn-info">Filter</button> --}}
            </form>
        </div>

        <form action="" method="GET" class="my-4">
            <div class="my-3">
                <div class="row">
                    <div class="col-md-11">
                        <div class="row">
                            <div class="col-md-4"><input type="text" class="form-control" placeholder="Enter the Name" name="name" value="{{ request()->name }}"></div>
                            <div class="col-md-4"><input type="text" class="form-control" placeholder="Enter the Price" name="price" value="{{ request()->price }}"></div>

                            <div class="col-md-4"><input type="date" class="form-control" placeholder="Enter the created At" name="date"></div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-dark">Search</button>
                    </div>
                </div>
            </div>
        </form>
        <table class="table table-bordered table-striped my-3">
            <tr class="table-info">
                <td>id</td>
                <td>name</td>
                <td>price</td>
                <td>image</td>
                <td>created_at</td>
                <td>Actions</td>
            </tr>

            @forelse ($courses as $course)
            <tr>
                <td>{{ $course['id'] }}</td>
                <td>{{ $course['name'] }}</td>
                <td>{{ $course['price'] }}$</td>
                <td><img src="{{ asset('Uploads.Dash/'.$course['image']) }}" alt="" width="60"></td>
                <td>{{ $course['created_at'] }}</td>
                <td>
                    <a href="{{ route('courses.edit',$course['id']) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>

                    {{-- <a href="{{ route('courses.destroy',$course['id']) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a> --}}
                    <form action="{{ route('courses.destroy',$course['id']) }}" class="d-inline" method="POST">
                        @csrf
                        @method('delete')
                        <button onclick="return confirm('هل انت متاكد يا حمار')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @empty
                <tr>
                    <td class="text-center" colspan="6">No Data Found</td>
                </tr>
            @endforelse







{{--
            @if ($courses->count() > 0)
                @foreach ($courses as $course)
                <tr>
                    <td>{{ $course['id'] }}</td>
                    <td>{{ $course['name'] }}</td>
                    <td>{{ $course['price'] }}$</td>
                    <td><img src="{{ asset('Uploads.Dash/'.$course['image']) }}" alt="" width="60"></td>
                    <td>{{ $course['created_at'] }}</td>
                    <td>
                        <a href="edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="delete" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="6">No Data Found</td>
                </tr>

            @endif --}}

        </table>
        {{-- {{ $courses->appends('items_count',request()->items_count)->links() }} --}}
        {{ $courses->appends($_GET)->links() }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $('#items_count').change(function() {
            // alert($('#items_count').val())
            $('#filter_form').submit()
        })
        setTimeout(() => {
            $('.alert').fadeOut()
        }, 3000);

    </script>
</body>

</html>
