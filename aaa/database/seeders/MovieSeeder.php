<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Studio;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Movie::truncate();
        Movie::insert(
            [
                [
                    'name' => 'Wiedźmin', 'Gatunek' => 'Akcja', 'Odcinki' => '8',
                    'description' => 'Wiedźmin Geralt, zmutowany łowca potworów, szuka swojego miejsca w świecie, gdzie ludzie często okazują się gorsi niż najstraszniejsze monstra.',
                    'price' => '11.00', 'img' => 'witcher.jpg', 'id_studia' => '6',
                ],
                [
                    'name' => 'Dragon Ball', 'Gatunek' => 'Shonen', 'Odcinki' => '153',
                    'description' => 'Gokuu Son jest młodym chłopcem, który mieszka sam w lesie – to znaczy, dopóki dziewczyna o imieniu Bulma nie natknęła się na niego w poszukiwaniu magicznych przedmiotów zwanych "Smoczymi Kulami". ',
                    'price' => '14.00', 'img' => 'dragonball.jpg', 'id_studia' => '1',
                ],
                [
                    'name' => 'One Piece', 'Gatunek' => 'Shonen', 'Odcinki' => '1065',
                    'description' => 'Gol D. Roger był znany jako "Król Piratów", najsilniejsza i najbardziej niesławna istota, która płynęła na Grand Line. Schwytanie i egzekucja Rogera przez rząd światowy przyniosły zmiany na całym świecie. Jego ostatnie słowa przed śmiercią ujawniły istnienie największego skarbu na świecie, One Piece. To właśnie to objawienie doprowadziło do Wielkiego Wieku Piratów, ludzi, którzy marzyli o znalezieniu Jednego Kawałka – który obiecuje nieograniczoną ilość bogactw i sławy – i być może szczyt chwały i tytuł Króla Piratów.',
                    'price' => '17.00', 'img' => 'onepiece.jpg', 'id_studia' => '1',
                ],
                [
                    'name' => 'Auta', 'Gatunek' => 'Familijny', 'Odcinki' => '1',
                    'description' => 'W świecie wypełnionym antropomorficznymi gadającymi samochodami i innymi pojazdami, śledzi on wyczynowy samochód wyścigowy o imieniu Lightning McQueen (Wilson), który w drodze do największego wyścigu swojego życia zostaje uwięziony w Radiator Springs, zrujnowanym mieście, które już dawno minęło, i uczy się kilku rzeczy o przyjaźni, rodzinie i rzeczach w życiu, na które naprawdę warto czekać.',
                    'price' => '12.00', 'img' => 'auta.jpg', 'id_studia' => '4',
                ],
                [
                    'name' => 'Jujutsu Kaisen', 'Gatunek' => 'Shonen', 'Odcinki' => '12',
                    'description' => 'Drugi sezon Jujutsu Kaisen.',
                    'price' => '9.00', 'img' => 'Jujutsu_Kaisen.jpg', 'id_studia' => '2',
                ],
                [
                    'name' => 'Mała Syrenka', 'Gatunek' => 'Familijny', 'Odcinki' => '1',
                    'description' => 'Pewnego dnia mała syrenka ratuje życie księcia Eryka. By go ponownie zobaczyć zastawia u podwodnej wiedźmy to, co ma najcenniejszego - swój głos.',
                    'price' => '12.00', 'img' => 'malasyrenka.jpg', 'id_studia' => '5',
                ],
                [
                    'name' => 'Jigokuraku', 'Gatunek' => 'Dramat', 'Odcinki' => '12',
                    'description' => 'Skazany na śmierć ninja Gabimaru the Hollow jest apatyczny. Po prowadzeniu przesiąkniętego krwią życia, Gabimaru wierzy, że zasługuje na śmierć. Jednak każda próba egzekucji go w niewytłumaczalny sposób zawodzi. W końcu Sagiri Yamada Asaemon, raczkujący członek słynnego klanu katów, zostaje poproszony o odebranie życia Gabimaru; jednak Sagiri nie robi żadnego ruchu, aby go zabić zgodnie z prośbą',
                    'price' => '22.00', 'img' => 'Jigokuraku.jpg', 'id_studia' => '2',
                ],
            ]
        );
    }
}
