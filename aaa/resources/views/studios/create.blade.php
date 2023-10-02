<!doctype html>
<html lang="pl">

@include('shared.header')

<body>
    @include('shared.nav')

    <div class="container mt-5 mb-5">
        @if (session('error'))
            <div class="row d-flex justify-content-center">
                <div class="alert alert-danger">{{ session('error') }}</div>
            </div>
        @endif
        <div class="row mt-4 mb-4 text-center">
            <h1>Dodaj nowe studio</h1>
        </div>

        @if ($errors->any())
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif

        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{ route('studios.store') }}" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-group mb-2">
                        <label for="name">Nazwa</label>
                        <input id="name" name="name" type="text" class="form-control">
                        <div class="invalid-feedback">Nieprawidłowa nazwa!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="year">Rok</label>
                        <input id="year" name="year" type="text" class="form-control">
                        <div class="invalid-feedback">Nieprawidłowy rok!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="workers">Liczba Pracowników</label>
                        <input id="workers" name="workers" type="text" class="form-control">
                        <div class="invalid-feedback">Nieprawidłowa liczba pracowników!</div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="ceo">CEO</label>
                        <div class="input-group mb-3">
                            <input id="ceo" type="text" name="ceo" 
                                step="any" class="form-control">
                            <span class="input-group-text"> </span>
                        </div>
                        <div class="invalid-feedback">Nieprawidłowy ceo!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="country">Kraj pochodzenia</label>
                        <input id="country" name="country" type="text" class="form-control">
                        <div class="invalid-feedback">Nieprawidłowy Kraj pochodzenia!</div>
                    </div>
                    <div class="text-center mt-4 mb-4">
                    @can('is-admin') 
                        <input class="btn btn-success" type="submit" value="Wyślij">
                        @endcan
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('shared.footer')
</body>

</html>
