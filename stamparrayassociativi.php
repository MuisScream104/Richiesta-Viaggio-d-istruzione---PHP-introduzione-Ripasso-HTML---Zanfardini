<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Riepilogo Viaggio</title>
</head>
<body>
<?php
$metodo = $_SERVER['REQUEST_METHOD'];
if($metodo=="POST"){
         foreach($_POST as $k=>$v){
            echo "<p>".strtoupper(htmlspecialchars($k)).":".(is_array($v) ? print_r($v,true) : htmlspecialchars($v))."<p>";
        }
    }
    else{
        foreach($_GET as $k=>$v){
            echo "<p>".strtoupper(htmlspecialchars($k)).":".(is_array($v) ? print_r($v,true) : htmlspecialchars($v))."<p>";
        }
    }
?>
</body>
</html>