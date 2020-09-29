<html>
<body>


{!!Form::open(['url' => route('product.create'), 'files' => true])!!}

{!!Form::text('title', 'Титл')->placeholder('Название продукта')->lg()->required()!!}

{!!Form::text('slug', 'Ссылка')->placeholder('Урл продукта')->lg()->required()!!}

{!!Form::text('text', 'Описание')->placeholder('Описание продукта')->lg()->required()!!}

{!!Form::number('expiration_date', 'Термин')->placeholder('Термин хранения в сутках')->lg()->required()!!}

{!!Form::text('packaging_option', 'Варианты упаковки')->placeholder('Варианты упаковки')->lg()->required()!!}

{!!Form::file('image')->placeholder('Картинка')->lg()->required()!!}

{!!Form::close()!!}

</body>
</html>
'title', 'slug', 'text', 'expiration_date', 'packaging_option',
