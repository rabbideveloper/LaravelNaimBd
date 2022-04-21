

{!! Form::label('name','Name') !!}
{!! Form::text('name',null,['class'=>'form-control'.($errors->has('name')?' is-invalid':null),'placeholder'=>'Enter Full Name']) !!}
@error('name')
    <p class="text-danger mb-0"><small>{{ $message }}</small></p>
@enderror


{!! Form::label('phone','Phone',['class'=>'mt-3']) !!}
{!! Form::text('phone',null,['class'=>'form-control'.($errors->has('phone')?' is-invalid':null),'placeholder'=>'Enter valid phone number']) !!}
@error('phone')
<p class="text-danger mb-0"><small>{{ $message }}</small></p>
@enderror
