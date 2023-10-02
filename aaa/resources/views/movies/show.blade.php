<!doctype html>
<html lang="pl">

@include('shared.header')

<body>
    @include('shared.nav')

    <div id="wycieczka" class="container mt-5 mb-5">
        <div class="row mb-3 text-center">
            <h1>Polecamy:</h1>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card">
                    <img src="{{ asset('storage/img/' . $m->img) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $m->name }}</h5>
                        <p class="card-text">{{ $m->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('shared.footer')
</body>

</html>
