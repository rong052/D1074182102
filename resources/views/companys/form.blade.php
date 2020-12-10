<div class="form-group">
    {!! Form::Label('cp_name', '製作公司:') !!}

    {!! Form::text('cp_name', null,['class'=> 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('country', '國家:') !!}

    {!! Form::text('country', null,['class'=> 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($companybutton,['class'=> 'btn btn-primary form-control']) !!}
</div>
