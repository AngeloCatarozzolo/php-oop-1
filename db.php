<?php
require_once __DIR__ . "/classes/Genre.php";
require_once __DIR__ . "/classes/Movie.php";
require_once __DIR__ . "/classes/Actor.php";
require_once __DIR__ . "/classes/Director.php";

$western = new Genre("western");
$drama = new Genre("drama");

$action = new Genre("action");

$leo = new Actor("Leonardo", "DiCaprio");

$john = new Actor("John", "Travolta");

$movies = [
    new Movie("Django Unchained", [$western, $action, $drama], [$leo], 205, "1858, da qualche parte nel Texas. Django, uno schiavo nero di proprietà dei fratelli Speck, viene rintracciato dal dottor King Schultz, un cacciatore di taglie originario della Germania e che fino a cinque anni prima lavorava come dentista. Schultz cerca di acquistare Django ma i fratelli Speck, Dicky e Ace, due mercanti di schiavi, non si dimostrano propensi alla cessione e gli intimano di andarsene: ne segue uno scontro a fuoco, durante il quale uno dei due fratelli, Ace, viene ucciso, mentre l'altro viene costretto a cedere lo schiavo, dopo essere stato ferito gravemente, firmando l'atto di vendita, per poi venire ucciso definitivamente dagli altri schiavi, appena liberati dal dottor Schultz, che si sono ribellati. Il dottore ha bisogno dell'aiuto di Django per riconoscere i fratelli Brittle, dei fuorilegge che sta cercando, garantendo in cambio allo schiavo la libertà e una percentuale sulla taglia.", "2012"),
    new Movie("Pulp Fiction", [$drama, ], [$john], 205, "Una giovane coppia di rapinatori e amanti, Zucchino (Ringo) e Coniglietta (Yolanda), stanno architettando il loro prossimo colpo, quando, su iniziativa di lui, decidono di operare proprio nello stesso locale in cui si trovano. Si alzano annunciando a gran voce l'inizio della rapina e puntando le pistole.", "1994"),
];