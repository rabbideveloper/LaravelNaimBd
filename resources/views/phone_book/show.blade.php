@extends('layouts.master')

@section('content')

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
                    <td>{{ $phoneBook->created_at == $phoneBook->updated_at ? "Not updated yet" :
                        $phoneBook->updated_at->toDayDateTimeString() }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('phone-book.index') }}"><button class="btn mt-3 btn-success btn-sm">Back</button></a>
    </div>
</div>

@endsection