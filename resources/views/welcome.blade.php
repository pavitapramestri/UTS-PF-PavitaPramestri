<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Project UTS</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <center class="mt-5">
        <div class="card" style="width: 18rem;">
            <div class="card-header bg-danger text-white text-center">
                <i class="bi bi-balloon-heart h3"></i>
            </div>
            <img src="{{ asset('img/pavitong.jpg') }}">
            <div class="card-body text-center">
                <h5 class="card-title">Pavita Pramestri</h5>
                <p class="card-text">1204220053 - IS 05 02</p>
                <a href="{{ route('product.index') }}" class="btn btn-secondary">Next</a>
            </div>
        </div>
    </center>
    @vite('resources/js/app.js')
</body>

</html>
