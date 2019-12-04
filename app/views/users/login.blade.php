<div class="gray-bg" style="height:400px;">
<div class="middle-box text-center loginscreen animated fadeInDown">
<div>
    <div>           
    </div>
    <p>ICFRE.</p>
{{ Form::open(array('url'=>'users/signin', 'class'=>'m-t')) }}
    <div class="form-group">
    {{ Form::text('username', null, array('class'=>'form-control', 'placeholder'=>'Username', 'required' => '')) }}
    </div>
    <div class="form-group">
    {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password', 'required' => '')) }}
    </div>
    {{ Form::submit('Login', array('class'=>'btn btn-primary block full-width m-b'))}}
{{ Form::close() }}
</div>
</div>
</div>