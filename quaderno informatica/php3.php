<html>
<body>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nomeutente = $_POST['nomeutente'];
    $password = $_POST['password'];

    if ($nomeutente == "Mario" && $password == "123") {
        echo "Benvenuto $nomeutente nella pagina riservata del sito!";
    } else {
        echo "Attenzione: credenziali non corrette.";
    }
}

?>

<br>

	<form action="esercizio3.html">
	<button type="submit">Indietro</button>
	</form>
	
</body>
</html>
