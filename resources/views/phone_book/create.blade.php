@extends('layouts.master')

@section('title','Create Phone Book')
@section('content')

<div class="card">
  <div class="card-header">
    <h4>Create New Contact</h4>
  </div>
  <div class="card-body">
    {!! Form::open(['method'=>'post','route'=>('phone-book.store')]) !!}

    @include('phone_book.form')

    {!! Form::button('Add New Contact',['type'=>'submit','class'=>'btn btn-success mt-3 btn-sm']) !!}
    {!! Form::close() !!}
  </div>
</div>

@endsection