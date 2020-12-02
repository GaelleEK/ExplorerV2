
<?php

use App\Auth;
use App\Connection;
use App\Table\FileTable;

Auth::check();

$pdo = Connection::getPDO();

[$files, $pagination]= (new FileTable($pdo))->findPaginated();
$link = $router->url('home');

?>
<h1>Liste des fichiers</h1>

<div class="row">
<?php foreach ($files as $file): ?>
<div class="col-md-3">
    <?php require 'card.php' ?>
</div>
<?php endforeach; ?>
</div>
<div class="d-flex justifiy-content-between my-4">
    <?= $pagination->previousLink($link) ?>
    <?= $pagination->nextLink($link) ?>
</div>