<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>
</head><body>
<div class="well">

    {!!Form::open(['url' => route('product.create'), 'files' => true])->post()!!}
    {!! Form::text('title', 'title')->placeholder('Название продукта')->lg()->required() !!}

    <h1>Продукт</h1>

    <div class="form-group">
        {!! Form::label('title', 'Титл:', ['class' => 'col-lg-2 control-label']) !!}

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
