@extends('layouts.master')

@section('content')

<div class="card">
  <div class="card-header">
    <h4>Create New Contact</h4>
  </div>
  <div class="card-body">
    {!! Form::open(['method'=>'post','route'=>('phone-book.store')]) !!}

    {!! Form::label('name','Name') !!}
    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Enter Full Name']) !!}

    {!! Form::label('phone','Phone',['class'=>'mt-3']) !!}
    {!! Form::text('phone',null,['class'=>'form-control','placeholder'=>'Enter valid phone number']) !!}

    {!! Form::button('Add New Contact',['type'=>'submit','class'=>'btn btn-success mt-3 btn-sm']) !!}
    {!! Form::close() !!}
  </div>
</div>

@endsection