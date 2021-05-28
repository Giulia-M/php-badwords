<?php
$paragraph = "è una funzione PHP che stampa il contenuto della variabile indicata";
$search = $_GET["badWords"];
$paragraphFull = "<p>" .$search . " " .$paragraph. "</p>";
echo $paragraphFull;

$messageChange = str_replace( $search, "* * *", $paragraphFull);
echo $messageChange;

echo strlen($messageChange);

?>