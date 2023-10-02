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
                    <td>{{ $s->name }}</td>
                </tr>
                <tr>
                    <th scope="col">Rok</th>
                    <td>{{ $s->year }}</td>
                </tr>
                <tr>
                    <th scope="col">Liczba Pracowników</th>
                    <td>{{ $s->workers }}</td>
                </tr>
                <tr>
                    <th scope="col">CEO</th>
                    <td>{{ $s->ceo }} </td>
                </tr>
                <tr>
                    <th scope="col">Kraj Pochodzenia</th>
                    <td>{{ $s->country }}</td>
                </tr>
                <tr>
                    <th scope="col"></th>
                    <td><a href="{{ route('studios.edit', $s->id) }}">Edycja</a>
                        <form method="POST" action="{{ route('studios.destroy', $s->id) }}">
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
