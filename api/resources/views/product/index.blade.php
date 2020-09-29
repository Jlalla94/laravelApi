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
</head>
<body>
<div class="container">
<a class="btn btn-primary" href="{{route('product.create')}}"> Новый продукт</a>
@foreach($products as $product)
    <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">{{ $product->title }}</h6>
        <div class="media text-muted pt-3">
            <img src="{{'storage/product/' .  $product->image_name }}">
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                {{ $product->text }}
                <strong class="d-block text-gray-dark"> {{ $product->expiration_date }}</strong>
                <strong class="d-block text-gray-dark"> {{ $product->packaging_option }}</strong>
                <button class="primary" href="{{ '/product/edit/' . $product->id }}"> Редактировать продукт</button>
                <button class="primary" href="{{ '/product/delete/' . $product->id }}"> Удалить продукт</button>
            </p>
        </div>
    </div>
@endforeach
@if($products)
    <div class="media text-muted pt-3">
    Нет продуктов
    </div>
@endif
</div>
</body>
</html>
