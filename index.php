<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="it" xml:lang="it">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>PHP Snacks</title>


<body>
<?php
/*
## Snack 1

Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. Olimpia Milano - Cantù | 55-60
*/

$team1 = ['Milan', 'Rome', 'Paris', 'Manchester', 'London', 'Moscow', 'Lisboa', 'Berlin'];

$basketMatches = [];

for ($i = 0; $i < count($team1); $i++) {

    if ($i < (count($team1) - 1)) {
        $indexSecondTeam = $i+1;
    } else {
        $indexSecondTeam = 0;
    }

    $randomTeam1Score = rand(1, 100);
    $randomTeam2Score = rand(1, 100);
    $basketMatches[] = [
        "team1" => $team1[$i],
        "team2" => $team1[$indexSecondTeam],
        "team1Score" => $randomTeam1Score,
        "team2Score" => $randomTeam2Score
    ];

    echo '<p>' . $basketMatches[$i]['team1'] . ' - ' . $basketMatches[$i]['team2'] . ' | ' . $basketMatches[$i]['team1Score'] . '-' . $basketMatches[$i]['team2Score'] . '</p>';
}


/*
## Snack 2

Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
*/

extract($_GET);

if ((strlen($name) > 3) && str_contains($mail, '@') && str_contains($mail, '.') && is_numeric($age)) {
    echo '<div>Accesso riuscito</div>';
} else {
    echo '<div>Accesso negato</div>';
}

/*
## Snack 3

Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z
*/

$posts = [];

while (count($posts) < 5) {
    $day = rand(1, 31);
    $month = rand(1, 12);
    $year = rand(2000, 2021);

    $fullDate = $day . '-' . $month . '-' . $year;

    $posts[$fullDate] =
        [
            'title' => 'title1',
            'author' => 'author',
            'content' => 'content'
        ];
    
    echo '<p>' . $fullDate . ': Post Title: ' . $posts[$fullDate]['title'] . ', Post Author: ' . $posts[$fullDate]['author'] . ', Post Content: ' . $posts[$fullDate]['content'] . '</p>';
}

/*
## Snack 4

Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta
*/

$randomNumbers = [];

while (count($randomNumbers) < 15) {
    $randomNumber = rand(1, 100);
    if(!in_array($randomNumber, $randomNumbers)) {
        $randomNumbers[] = $randomNumber;
        echo $randomNumber . '<br>';
    }
}

/*
-------------------------------------------------------[OPZIONALI]-------------------------------------------------------

## Snack 5

Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

## Snack 6

Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

## Snack 7

Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/
?>
</body>

</html>