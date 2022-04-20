<!doctype html>
<html lang="en">

<head>
    <title>phoneBook Details</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>phoneBook Details</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $phoneBook->id }}</td>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <td>{{ $phoneBook->name }}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{ $phoneBook->phone }}</td>
                                </tr>
                                <tr>
                                    <th>Created At</th>
                                    <td>{{ $phoneBook->created_at->toDayDateTimeString() }}</td>
                                </tr>
                                <tr>
                                    <th>Updated At</th>
                                    <td>{{ $phoneBook->created_at == $phoneBook->updated_at ? "Not updated yet" : $phoneBook->updated_at->toDayDateTimeString() }}</td>
                                </tr>
                            </tbody>
                        </table>
                       <a href="{{ route('phone-book.index') }}"><button class="btn mt-3 btn-success btn-sm">Back</button></a> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>