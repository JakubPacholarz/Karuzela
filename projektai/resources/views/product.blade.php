<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Product Details - Projekt AI</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <!-- Google font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Indie+Flower">
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand">Kup lub Sprzedaj</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="javascript:history.back()">Powrót</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Portal ogłoszeniowy</h1>
                <p class="lead fw-normal text-white-50 mb-0">Projekt Aplikacje Internetowe</p>
            </div>
        </div>
    </header>
    <!-- Product Details Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-6">
                    <img class="img-fluid" src="{{ $product ? asset('storage/images/' . $product->id . '.jpg') : asset('path/to/placeholder.jpg') }}" alt="Product Image">

                </div>
                <div class="col-md-6">
                    <h1 class="fw-bolder">{{ $product->name ?? 'Brak nazwy produktu' }}</h1>
                    <p class="lead">{{ $product->price ?? 'Brak informacji o cenie' }} zł</p>
                    <p>{{ $product->description ?? 'Brak opisu' }}</p>
                    <!-- Add any other product details here -->
                    <a class="btn btn-outline-dark mt-3" href="#">Kup</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <!-- Footer code here... -->
    </footer>

    <!-- Bootstrap core JS and Core theme JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
