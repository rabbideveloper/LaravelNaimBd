<!doctype html>
<html lang="en">

<head>
    <title>Phone Book List</title>
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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Phone Book List</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <tr>
                                <thead>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </thead>
                            </tr>
                            <tbody>
                                @php
                                    $sl = 1;
                                @endphp
                                @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{ $sl++ }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>{{ $contact->created_at->toDayDateTimeString() }}</td>
                                    <td>{{ $contact->created_at == $contact->updated_at ? "Not updated yet" : $contact->updated_at->toDayDateTimeString() }}</td>
                                    <td class="d-flex justify-content-center">
                                        <a href="{{ route('phone-book.show',$contact->id) }}"><button class="btn btn-info btn-sm">View</button></a>
                                        <a href="{{ route('phone-book.edit',$contact->id) }}"><button class="btn btn-warning btn-sm">Edit</button></a> 
                                        {!! Form::open(['method'=>'delete','route'=>['phone-book.destroy',$contact->id]]) !!}
                                        {!! Form::button('Delete',['class'=>'btn btn-sm btn-danger','type'=>'submit','onclick'=>'return confirm("Are you sure to delete?")']) !!}
                                        {!! Form::close() !!} 
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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