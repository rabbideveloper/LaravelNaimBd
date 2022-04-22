@extends('layouts.master')

@section('title','Phone Book List')
@section('content')

<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h4 class="mb-0">Phone Book List</h4>
            <a href="{{ route('phone-book.create') }}">
                <button class="btn btn-success btn-sm">Add Contact</button>
            </a>
        </div>
    </div>
    <div class="card-body">

        @if(session()->has('msg'))
            <div class="alert alert-{{ session('cls') }}">
                {!! session('msg') !!}
            </div>
        @endif

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
                    <td>{{ $contact->created_at == $contact->updated_at ? "Not updated yet" :
                        $contact->updated_at->toDayDateTimeString() }}</td>
                    <td class="d-flex justify-content-center">
                        <a href="{{ route('phone-book.show',$contact->id) }}"><button
                                class="btn btn-info btn-sm">View</button></a>
                        <a href="{{ route('phone-book.edit',$contact->id) }}"><button
                                class="btn btn-warning btn-sm">Edit</button></a>
                        {!!
                        Form::open(['method'=>'delete','route'=>['phone-book.destroy',$contact->id]])
                        !!}
                        {!! Form::button('Delete',['class'=>'btn btn-sm
                        btn-danger','type'=>'submit','onclick'=>'return confirm("Are you sure to
                        delete?")']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection