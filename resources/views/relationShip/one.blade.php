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
        <h1 class="mb-3">Relationship One</h1>
        <h2>User</h2>
        <table class="table table-bordered">
            <tr class="table-dark">
                <td>id</td>
                <td>name</td>
                <td>email</td>
            </tr>
            <tr class="">
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        </table>


        <h2 class="mt-5">Insurance User</h2>
        <table class="table table-bordered">
            <tr class="table-dark">
                <td>id</td>
                <td>start_date</td>
                <td>expire_date</td>
                <td>f_numbers</td>
                <td>wife_name</td>

            </tr>
            <tr class="">
                <td>{{ $insurance->id }}</td>
                <td>{{ $insurance->start_date }}</td>
                <td>{{ $insurance->expire_date }}</td>
                <td>{{ $insurance->f_numbers }}</td>
                <td>{{ $insurance->wife_name }}</td>

            </tr>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
