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
<div class="col-lg-10">

    <form method="post" action="{{ route('product.create')}}" enctype="multipart/form-data">

    <h1>Продукт</h1>
    {{ csrf_field() }}

    <div class="form-group">
        <div class="col-lg-10">

        {!! Form::text('title', 'Название')->placeholder('Название продукта')->lg()->required()->label( 'Титл:') !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-lg-10">
            {!! Form::text('slug', 'Ссылка')->placeholder('Урл продукта')->lg()->required() !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-lg-10">
            {!!Form::textarea('text', 'Описание продукта')->lg()->required()!!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-lg-10">
            {!!Form::text('expiration_date', 'Термин')->lg()->required()->type('number')!!}

        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-10">
            {!!Form::text('packaging_option', 'Варианты упаковки')->placeholder('Варианты упаковки')->lg()->required()!!}

        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-10">
            {!!Form::file('image')->lg()->required()!!}

        </div>
    </div>

    <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
            {!!Form::submit("Сохранить")!!}
            <a href="{{route('product.index')}}" class="btn-primary btn">назад</a>
        </div>
    </div>


    </form>

</div>
</body>
</html>
