<!doctype html>
<html lang="pl">

@include('shared.header')

<body>
    @include('shared.nav')

    <div class="container mt-5 mb-5">
        <div class="row mb-1">
            <h1>Spis Studiów produkcji filmowej</h1>
        </div>
        <div class="row mb-2">
        @can('is-admin') 
            <a href="{{ route('studios.create') }}">Dodaj nowe studio</a>
            @endcan
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
                        <th scope="col">Rok Założenia</th>
                        <th scope="col">Liczba Pracowników</th>
                        <th scope="col">CEO</th>
                        <th scope="col">Kraj Pochodzenia</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($studios as $s)
                        <tr>
                            <th scope="row"><a href="{{ route('studios.show', $s->id) }}">{{ $s->id }}</a></th>
                            <td>{{ $s->name }}</td>
                            <td>{{ $s->year }}</td>
                            <td>{{ $s->workers }}</td>
                            <td>{{ $s->ceo }} </td>
                            <td>{{ $s->country }}</td>
                            @can('is-admin') 
                            <td><a href="{{route('studios.edit', $s->id)}}">Edytuj Studio</a></td>
                            @endcan
                            <td>
                                <form method="POST" action="{{ route('studios.destroy', $s->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    @can('is-admin') 
                                    <input type="submit" value="Usuń"></button>
                                    @endcan
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th scope="row" colspan="6">Brak Studiów.</th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    @include('shared.footer')
</body>

</html>
