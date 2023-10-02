<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kupno i Sprzedaż - Logowanie</title>
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
    <section class="py-5">
        <form action="{{ route('store.store') }}" method="POST" class="registration-form" enctype="multipart/form-data">
            @csrf

            <label for="name">Nazwa</label>
            <input type="text" class="form-control" id="name" name="name" required><br>

            <label for="description">Opis</label>
            <textarea class="form-control" id="description" name="description" rows="4"></textarea><br>

            <label for="condition">Stan</label>
            <select class="form-control" id="condition" name="condition" required>
                <option value="new">Nowy</option>
                <option value="used">Używany</option>
            </select><br>

            <label for="category">Kategoria</label>
            <select class="form-control" id="category" name="category" required>
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select><br>


            <label for="image">Cena</label>
            <div class="input-group">
                <span class="input-group-text">Cena</span>
                <input type="number" class="form-control" id="price" name="price" step="0.01" required>
                <span class="input-group-text">zł</span>
            </div><br>

            <label for="image">Obrazek</label>
            <input type="file" class="form-control" id="image" name="image"><br>

            <input type="submit" value="Dodaj">
        </form>
    </section>
</body>
</html>
