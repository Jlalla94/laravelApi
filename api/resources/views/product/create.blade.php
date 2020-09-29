<html>
<body>


{!!Form::open(['url' => route('product.create'), 'files' => true])->post()!!}

{!!Form::text('title', 'Титл')->placeholder('Название продукта')->lg()->required()!!}

{!!Form::text('slug', 'Ссылка')->placeholder('Урл продукта')->lg()->required()!!}

{!!Form::text('text', 'Описание')->placeholder('Описание продукта')->lg()->required()!!}

{!!Form::text('expiration_date', 'Термин')->placeholder('Термин хранения в сутках')->lg()->required()->type('number')!!}

{!!Form::text('packaging_option', 'Варианты упаковки')->placeholder('Варианты упаковки')->lg()->required()!!}

{!!Form::file('image')->placeholder('Картинка')->lg()->required()!!}

{!!Form::close()!!}

</body>
</html>
