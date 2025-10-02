<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Riepilogo Viaggio</title>
</head>
<body>

<?php
// Determina il metodo utilizzato
$metodo = $_SERVER['REQUEST_METHOD'];

if ($metodo === 'GET' && isset($_GET['docente']) && isset($_GET['classe']) && isset($_GET['meta'])) {
    echo "<h2>Riepilogo della richiesta di viaggio:</h2>";
    echo "Docente: " . htmlspecialchars($_GET['docente']) . "<br>";
    echo "Classe: " . htmlspecialchars($_GET['classe']) . "<br>";
    echo "Meta: " . htmlspecialchars($_GET['meta']) . "<br>";
} elseif ($metodo === 'POST' && isset($_POST['docente']) && isset($_POST['classe']) && isset($_POST['meta'])) {
    echo "<h2>Riepilogo della richiesta di viaggio:</h2>";
    echo "Docente: " . htmlspecialchars($_POST['docente']) . "<br>";
    echo "Classe: " . htmlspecialchars($_POST['classe']) . "<br>";
    echo "Meta: " . htmlspecialchars($_POST['meta']) . "<br>";
} else {
    echo "<p>Dati mancanti o metodo non valido.</p>";
}

if($metodo=="POST"){
         foreach($_POST as $k=>$v){
            echo "<p>".strtoupper(htmlspecialchars($k)).":".(is_array($v) ? print_r($v,true) : htmlspecialchars($v))."<p>";
        }
    }
?>



<hr>

<h3>Contenuto dell'array <code>\$_GET</code>:</h3>
<pre><?php print_r($_GET); ?></pre>

<h3>Contenuto dell'array <code>\$_POST</code>:</h3>
<pre><?php print_r($_POST); ?></pre>

</body>
</html>