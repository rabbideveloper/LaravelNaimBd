@extends('layouts.master')

@section('title','Edit Phone Book')
@section('content')
<div class="card">
    <div class="card-header">
        <h4>Edit phoneBook</h4>
    </div>
    <div class="card-body">
        {!! Form::model($phoneBook,['method'=>'put','route'=>['phone-book.update', $phoneBook->id]]) !!}
        @include('phone_book.form')

        {!! Form::button('Update phoneBook',['type'=>'submit','class'=>'btn btn-success mt-3 btn-sm'])
        !!}
        {!! Form::close() !!}
    </div>
</div>

@endsection