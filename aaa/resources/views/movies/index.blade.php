<!doctype html>
<html lang="pl">
  @include('shared.header')
  <body>
    @include('shared.nav')
    <script>
      function choosevideo1 () {
        var url = "https://www.youtube.com/embed/LGWhgkS0uls";
        document.getElementById("ramka1").src = url;

}
function choosevideo2 () {
  var url = "https://www.youtube.com/embed/lNMSqxQtO0w";
        document.getElementById("ramka1").src = url;

}
function choosevideo3 () {
  var url = "https://www.youtube.com/embed/SzS8Ao0H6Co";
        document.getElementById("ramka1").src = url;
}
      </script>
    <div id="start" class="mb-5">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/carousel1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1 >Animacje!</h1>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/carousel2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1 >Bajki!</h1>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/carousel3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1 >Filmy!</h1>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <div id="wycieczki" class="container mb-5">
      <div class="row">
          <h1>Polecane</h1>
      </div>
      <div class="row">
          @forelse ($random_movies as $m)
          <div class="col-12 col-sm-6 col-lg-3">
              <div class="card">
                  <img src="{{ asset('storage/img/'.$m->img) }}" class="card-img-top">
                  <div class="card-body">
                      <h5 class="card-title">{{ $m->name }}</h5>
                      <p class="card-text">{{ $m->description }}</p>
                      <a href="{{route('movies.show', ['id' => $m->id])}}" class="btn btn-primary">Więcej szczegółów...</a>
                  </div>
              </div>
          </div>
          @empty
                <p>Brak Poleceń.</p>
          @endforelse
      </div>
  </div>

  <div id="cennik" class="container mt-5 mb-5">
    <div class="row">
        <h1>Cennik</h1>
    </div>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nazwa</th>
                <th scope="col">Nazwa Studia</th>
                <th scope="col">Gatunek</th>
                <th scope="col">Odcinki</th>
                <th scope="col">Cena</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($movies as $m)
            <tr>
                <th scope="row">{{$m->id}}</th>
                <td>{{$m->name}}</td>
                <td>
                @php
                $studios = DB::table('studios')->where('id', $m->id_studia)->first();
                if ($studios) {
                   echo $studios->name;
                }
                @endphp
                </td>
                <td>{{$m->Gatunek}}</td>
                <td>{{$m->Odcinki}}</td>
                <td>{{$m->price}} PLN</td>
                @can('is-admin')
                <td><a href="{{route('movies.edit', $m->id)}}">Edycja</a></td>
                @endcan
            </tr>
            @empty
            <tr>
                <th scope="row" colspan="6">Brak Filmów.</th>
            </tr>
            @endforelse
        </tbody>
    </table>
  </div>

  <div id="inne" class="container mb-5">
    <div class="row">
        <div class="col-sm-12 col-md-6 mb-4">
            <h2>Nowości - Zobacz Trailery!</h2>
            <button onclick="choosevideo1()" class="btn btn-primary">Pierwsza Nowość</button>
            <button onclick="choosevideo2()" class="btn btn-primary">Druga Nowość</button>
            <button onclick="choosevideo3()" class="btn btn-primary">Trzecia Nowość</button>
            <div class="ratio ratio-16x9">
                <iframe id="ramka1" name="nowosci" src="https://www.youtube.com/embed/LGWhgkS0uls"></iframe>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <h2>Prośba o dodanie na strone:</h2>
            <form>
                <div class="form-group mt-2 mb-3">
                    <label for="exampleFormControlInput1">Nazwa Produkcji</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                        placeholder="Batman">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleFormSelect1">Rodzaj produkcji</label>
                    <select class="form-select" id="exampleFormControlSelect1">
                        <option selected>film</option>
                        <option>animacja</option>
                        <option>serial</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="exampleFormControlBudget">Rok Wydania</label>
                    <div class="input-group mb-3">
                      <input type="number" min="1900" placeholder="2023" step="any" class="form-control">
                      <span class="input-group-text">Rok</span>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="exampleFormControlTextarea1">Komentarz (Opcjonalnie)</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" optional="true"></textarea>
                </div>
                <div class="form-group mb-3 d-flex justify-content-center">
                    <a href="#" class="btn btn-primary">Prześlij Prośbę</a>
                </div>
            </form>
        </div>
    </div>
</div>
@include('shared.footer')
  </body>
</html>
