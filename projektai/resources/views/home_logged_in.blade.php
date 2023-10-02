@php
    use Illuminate\Support\Facades\Auth;
@endphp

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Kupno i Sprzedaż - Projekt AI</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <!-- Google font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Indie+Flower">

        <script src="{{ asset('js/script.js') }}"></script>
    </head>

    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand">Kup lub Sprzedaj</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('home_logged_in') }}">Strona główna</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kategorie</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach($categories as $category)
                            <li><a class="dropdown-item category-btn" href="#" data-category="{{ $category->id }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
                    <form class="d-flex">
                        <div class="me-2">
                            <a class="btn btn-outline-dark" href="{{ route('store.create') }}">
                                Dodaj ogłoszenie
                            </a>
                        </div>
                        <div class="me-2">
                            <a class="btn btn-outline-dark" href="{{ route('home') }}">
                                Moje oferty
                            </a>
                        </div>
                        <div class="me-2">
                            <a class="btn btn-outline-dark" href="{{ route('logout') }}">
                                Wyloguj
                            </a>

                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Portal ogłoszeniowy</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Projekt Aplikacje Internetowe</p>
                    <p class="lead fw-normal text-white-50 mb-0">Zalogowany jako: {{ Auth::user()->username }}</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach($products as $product)
                    <div class="col mb-5" data-category="{{ $product->category_id }}">
                        <div class="card h-100">
                            @if($product->product_condition === 'new')
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Nowy</div>
                            @endif
                            <img class="card-img-top" src="{{ asset('storage/images/' . $product->id . '.jpg') }}" alt="Obraz" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">{{ $product->name }}</h5>
                                    {{ $product->price }}zł
                                </div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-outline-dark mt-auto" href="{{ route('product', ['id' => $product->id]) }}">Zobacz</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Michał Pasiecznik | Informatyka i Ekonometria</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- JavaScript -->
         <script>
             document.addEventListener('DOMContentLoaded', function() {
                  const categoryButtons = document.querySelectorAll('.category-btn');
                  const productCards = document.querySelectorAll('.col');

                 categoryButtons.forEach(button => {
                        button.addEventListener('click', function(event) {
                           event.preventDefault();
                           const selectedCategory = this.getAttribute('data-category');

                         productCards.forEach(card => {
                                const productCategory = card.getAttribute('data-category');
                             card.style.display = productCategory === selectedCategory || selectedCategory === 'all' ? 'block' : 'none';
                           });
                     });
                  });
             });
         </script>
        </body>
        </html>
