<?php


$name = "welt";
echo $name;

echo '<br>';

$a = 292;
$b = 22;
echo $a + $b;



// function
function multiply($a, $b) {
	return $a * $b;
}

echo multiply(234, 318);


// bedingungen
$note = 3.75;
if ($note >= 4) {
    echo 'bestanden';
} else if ($note < 4 && $note >= 3.5) {
    echo 'melde dich zur Nachprüfung an';
} else {
    echo 'nicht bestanden';
}


// arrays
$bananen = ['mama banane', 'papa banane', 'kind banane'];

echo '<pre>';
print_r($bananen[2]);
echo '</pre>';

foreach ($bananen as $banane) {
    echo $banane . '<br> ';
}

// assoziative arrays
$standorte = [
    Chur => 20.4,
    Zürich => 15.3,
    Bern => 10.2,
];

echo $standorte['Chur'];

foreach ($standorte as $ort => $temperatur) {
    echo $temperatur . '/' . $ort . '<br> ';
}
?>
