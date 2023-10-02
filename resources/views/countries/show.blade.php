<!doctype html>
<html lang="pl">

@include('shared.header')

<body>
    @include('shared.nav')

    <div class="container mt-5 mb-5">
        <div class="row mb-1">
            <h1>Kraj</h1>
        </div>
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">#</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="col">Nazwa</th>
                    <td>{{ $c->name }}</td>
                </tr>
                <tr>
                    <th scope="col">Kod</th>
                    <td>{{ $c->code }}</td>
                </tr>
                <tr>
                    <th scope="col">Waluta</th>
                    <td>{{ $c->currency }}</td>
                </tr>
                <tr>
                    <th scope="col">Powierzchnia</th>
                    <td>{{ $c->area }} km²</td>
                </tr>
                <tr>
                    <th scope="col">Język</th>
                    <td>{{ $c->language }}</td>
                </tr>
                <tr>
                    <th scope="col"></th>
                    <td><a href="{{ route('countries.edit', $c->id) }}">Edycja</a>
                        <form method="POST" action="{{ route('countries.destroy', $c->id) }}">
                            @csrf
                            @method('DELETE')
                            <div class="form-group mt-2">
                                <input type="submit" value="Usuń"></button>
                            </div>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    @include('shared.footer')
</body>

</html>
