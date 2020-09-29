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

    <form method="post" action="{{ '/product/update/' . $product->id }}" enctype="multipart/form-data">

        <h1>Продукт</h1>
        {{ csrf_field() }}

        <div class="form-group">
            <div class="col-lg-10">

                {!! Form::text('title', 'Название', $product->title)->placeholder('Название продукта')->lg()->required()->label( 'Титл:') !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-10">
                {!! Form::text('slug', 'Ссылка' , $product->slug)->placeholder('Урл продукта')->lg()->required() !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-10">
                {!!Form::textarea('text', 'Описание продукта', $product->text)->lg()->required()!!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-10">
                {!!Form::text('expiration_date', 'Термин', $product->expiration_date)->lg()->required()->type('number')!!}

            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10">
                {!!Form::text('packaging_option', 'Варианты упаковки', $product->packaging_option)->placeholder('Варианты упаковки')->lg()->required()!!}

            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10">
                {!!Form::file('image')->lg()!!}

            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                {!!Form::submit("Сохранить")!!}
                <a href="{{route('product')}}" class="btn-primary btn">назад</a>
            </div>
        </div>


    </form>

</div>
</body>
</html>
