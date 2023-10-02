<!doctype html>
<html lang="pl">

@include('shared.header')

<body>
    @include('shared.nav')

    <div class="container mt-5 mb-5">
        <div class="row mb-1">
            <h1>Kraje</h1>
        </div>
        <div class="row mb-2">
            <a href="{{ route('countries.create') }}">Dodaj nowy kraj</a>
        </div>
        @if (session('error'))
            <div class="row d-flex justify-content-center">
                <div class="alert alert-danger">{{ session('error') }}</div>
            </div>
        @endif
        <div class="row">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nazwa</th>
                        <th scope="col">Kod</th>
                        <th scope="col">Waluta</th>
                        <th scope="col">Powierzchnia</th>
                        <th scope="col">Język</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($countries as $c)
                        <tr>
                            <th scope="row"><a href="{{ route('countries.show', $c->id) }}">{{ $c->id }}</a></th>
                            <td>{{ $c->name }}</td>
                            <td>{{ $c->code }}</td>
                            <td>{{ $c->currency }}</td>
                            <td>{{ $c->area }} km²</td>
                            <td>{{ $c->language }}</td>
                            <td>
                                @can('update', $c) {{-- 9.16 --}}
                                    <a href="{{ route('countries.edit', $c->id) }}">Edycja</a>
                                @endcan
                            </td>
                            <td>
                                <form method="POST" action="{{ route('countries.destroy', $c->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Usuń"></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th scope="row" colspan="6">Brak krajów.</th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    @include('shared.footer')
</body>

</html>
