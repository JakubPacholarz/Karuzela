<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kupno i Sprzedaż - Rejestracja</title>
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
    <form action="{{ route('register') }}" method="POST" class="registration-form">
        @csrf

        <label for="username">Nazwa użytkownika:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Hasło:</label>
        <input type="password" id="password" name="password" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="phone_number">Numer telefonu:</label>
        <input type="tel" id="phone_number" name="phone_number" required><br>

        <label for="address">Adres:</label>
        <input type="text" id="address" name="address" required><br>

        <input type="submit" value="Zarejestruj">
    </form>
</section>
</body>
</html>



