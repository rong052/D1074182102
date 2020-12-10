<div class="form-group">
    {!! Form::Label('g_name', '遊戲作品:') !!}

    {!! Form::text('g_name', null,['class'=> 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('g_company', '製作公司:') !!}

    {!! Form::text('g_company', null,['class' =>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('g_producer', '製作人:') !!}

    {!! Form::text('g_producer', null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($gamesbutton, ['class' => 'btn btn-primary form-control'])!!}
</div>
