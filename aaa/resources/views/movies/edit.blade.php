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
            <h1>Edytuj dane polecanej produkcji</h1>
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
                <form method="POST" action="{{ route('movies.update', $m->id) }}" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-2">
                        <label for="name">Nazwa</label>
                        <input id="name" name="name" type="text" class="form-control" value="{{ $m->name }}">
                        <div class="invalid-feedback">Nieprawidłowe nazwa!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="Gatunek">Gatunek</label>
                        <input id="Gatunek" name="Gatunek" type="text" class="form-control" value="{{ $m->Gatunek }}">
                        <div class="invalid-feedback">Nieprawidłowy Gatunek!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="Odcinki">Odcinki</label>
                        <input id="Odcinki" name="Odcinki" type="text" class="form-control" value="{{ $m->Odcinki }}">
                        <div class="invalid-feedback">Nieprawidłowa ilość Odcinków!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="description">Opis</label>
                        <textarea id="description" name="description" type="text" rows="5" class="form-control">
                            {{ $m->description }}
                        </textarea>
                        <div class="invalid-feedback">Nieprawidłowy opis!</div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="price">Cena</label>
                        <div class="input-group mb-3">
                            <input id="price" type="number" name="price" min="0" placeholder="0"
                                step="any" class="form-control" value="{{ $m->price }}">
                            <span class="input-group-text"> PLN</span>
                        </div>
                        <div class="invalid-feedback">Nieprawidłowa cena!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="img">Nazwa obrazka</label>
                        <input id="img" name="img" type="text" class="form-control" value="{{ $m->img }}">
                        <div class="invalid-feedback">Nieprawidłowa nazwa obrazka!</div>
                    </div>
                    
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

