@extends('layouts.master')

@section('title','Create Phone Book')
@section('content')

<div class="card">
  <div class="card-header">
    <h4>Create New Contact</h4>
  </div>
  <div class="card-body">

    {{-- @if($errors->any())
      <div class="alert alert-danger">
          <ul class="mb-0">
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif --}}

    {!! Form::open(['method'=>'post','route'=>('phone-book.store')]) !!}

    @include('phone_book.form')

    {!! Form::button('Add New Contact',['type'=>'submit','class'=>'btn btn-success mt-3 btn-sm']) !!}
    {!! Form::close() !!}
  </div>
</div>

@endsection