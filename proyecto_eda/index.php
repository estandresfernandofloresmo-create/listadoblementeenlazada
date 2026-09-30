<?php
declare(strict_types=1);
require_once "proyecto.php";
require_once "nodo.php";
require_once "listadoblementeenlazada.php";

$db = new database(); 
$pdo = $db-> getPDO();
$stmt = $pdo -> query("select * from productos order by precio desc");
$productos = $stmt -> FetchAll();
$lista = new listadoblementeenlazada();
foreach($productos as $p ){
    $nodo = new nodo((int)$p["id"],
    $p ["nombre"],
    (float)$p ["precio"],
    (int)$p ["stock"]);

    $lista -> agregaralfinal($nodo);
}
    echo "se inserto los registros " . implode(", ", $lista->obtenerid());
?>