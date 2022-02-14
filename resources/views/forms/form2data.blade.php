<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <title>Form2</title>
</head>

<body>
    <div class="container my-5">
        <ul class="list-group">
            <li class="list-group-item"><b>Name: </b>{{ $name }}</li>
            <li class="list-group-item"><b>Email: </b>{{ $email }}</li>
            <li class="list-group-item"><b>Day: </b>{{ $day }}</li>
            <li class="list-group-item"><b>Month: </b>{{ $month }}</li>
            <li class="list-group-item"><b>Year: </b>{{ $year }}</li>

          </ul>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $('.datepicker').datepicker();
    </script>
</body>

</html>
