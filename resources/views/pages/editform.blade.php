<a href='#'>Reset Password</a>
<hr>
<div class="form-group">
    {!! Form::label('username', 'Username: ') !!}
    {!! Form::text('username', null, ['class'=>'form-control', 'data-validation'=>'alphanumeric-length', 'data-validation-allowing'=>'-_', 'data-validation-length'=>'3-50']) !!}
</div>

<div class="form-group">
    {!! Form::label('firstname', 'Firstname: ') !!}
    {!! Form::text('firstname', null, ['class'=>'form-control', 'data-validation'=>'alphanumeric-length', 'data-validation-length'=>'2-50']) !!}
</div>

<div class="form-group">
    {!! Form::label('lastname', 'Lastname: ') !!}
    {!! Form::text('lastname', null, ['class'=>'form-control', 'data-validation'=>'alphanumeric-length', 'data-validation-length'=>'2-50']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email: ') !!}
    {!! Form::text('email', null, ['class'=>'form-control', 'data-validation'=>'email']) !!}
</div>

<div class="form-group">
    {!! Form::label('phone', 'Phone Number: ') !!}
    {!! Form::text('phone', null, ['class'=>'form-control', 'data-validation'=>'number-length', 'data-validation-allowing'=>'+#', 'data-validation-length'=>'6-24']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>

