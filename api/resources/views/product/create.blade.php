<html>
<body>
<div class="well">

    {!!Form::open(['url' => route('product.create'), 'files' => true])->post()!!}


    <h1>Продукт</h1>

    <div class="form-group">
        {!! Form::label('title', 'Титл:', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
            {!! Form::text('title', 'title')->placeholder('Название продукта')->lg()->required() !!}
        </div>

    </div>

    <div class="form-group">
        {!! Form::label('slug', 'Ссылка:', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
            {!! Form::text('slug', 'Ссылка')->placeholder('Урл продукта')->lg()->required() !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('textarea', 'Textarea', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
            {!! Form::textarea('textarea', $value = null, ['class' => 'form-control', 'rows' => 3]) !!}
            {!!Form::textarea('text', null,['class' => 'form-control', 'rows' => 3])->placeholder('Описание продукта')->lg()->required()!!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('expiration_date', 'Термин хранения в сутках:', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
            {!!Form::text('expiration_date', 'Термин')->lg()->required()->type('number')!!}

        </div>
    </div>
    <div class="form-group">
        {!! Form::label('packaging_option', 'Варианты упаковки:', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
            {!!Form::text('packaging_option', 'Варианты упаковки')->placeholder('Варианты упаковки')->lg()->required()!!}

        </div>
    </div>
    <div class="form-group">
        {!! Form::label('image', 'Картинка:', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
            {!!Form::file('image')->lg()->required()!!}

        </div>
    </div>

    <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
            {!! Form::submit('Сохранить', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
        </div>
    </div>


    {!! Form::close()  !!}

</div>
</body>
</html>
