@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Edit phoneBook</h4>
    </div>
    <div class="card-body">
        {!! Form::open(['method'=>'put','route'=>['phone-book.update', $phoneBook->id]]) !!}

        {!! Form::label('name','Name') !!}
        {!! Form::text('name',$phoneBook->name,['class'=>'form-control','placeholder'=>'Enter Full Name']) !!}

        {!! Form::label('phone','Phone',['class'=>'mt-3']) !!}
        {!! Form::text('phone',$phoneBook->phone,['class'=>'form-control','placeholder'=>'Enter valid phone number'])
        !!}

        {!! Form::button('Update phoneBook',['type'=>'submit','class'=>'btn btn-success mt-3 btn-sm'])
        !!}
        {!! Form::close() !!}
    </div>
</div>

@endsection