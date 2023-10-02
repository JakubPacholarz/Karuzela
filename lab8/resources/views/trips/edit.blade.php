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
            <h1>Edytuj dane wycieczki</h1>
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
                <form method="POST" action="{{ route('trips.update', $t->id) }}" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-2">
                        <label for="name">Nazwa</label>
                        <input id="name" name="name" type="text" class="form-control" value="{{ $t->name }}">
                        <div class="invalid-feedback">Nieprawidłowe nazwa!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="continent">Kontynent</label>
                        <input id="continent" name="continent" type="text" class="form-control" value="{{ $t->continent }}">
                        <div class="invalid-feedback">Nieprawidłowy kontynent!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="period">Okres</label>
                        <input id="period" name="period" type="text" class="form-control" value="{{ $t->period }}">
                        <div class="invalid-feedback">Nieprawidłowa okres!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="description">Opis</label>
                        <textarea id="description" name="description" type="text" rows="5" class="form-control">
                            {{ $t->description }}
                        </textarea>
                        <div class="invalid-feedback">Nieprawidłowy opis!</div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="price">Cena</label>
                        <div class="input-group mb-3">
                            <input id="price" type="number" name="price" min="0" placeholder="0"
                                step="any" class="form-control" value="{{ $t->price }}">
                            <span class="input-group-text"> PLN</span>
                        </div>
                        <div class="invalid-feedback">Nieprawidłowa cena!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="img">Nazwa obrazka</label>
                        <input id="img" name="img" type="text" class="form-control" value="{{ $t->img }}">
                        <div class="invalid-feedback">Nieprawidłowa nazwa obrazka!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="country_id">Kraj</label>
                        <select id="country_id" name="country_id" class="form-select">
                            @foreach ($countries as $c)
                                <option value="{{$c->id}}" @if($c->name == $t->country->name) selected @endif>
                                    {{ $c->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="text-center mt-4 mb-4">
                        <input class="btn btn-success" type="submit" value="Wyślij">
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('shared.footer')
</body>

</html>

