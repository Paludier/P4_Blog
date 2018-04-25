<?php 
ob_start();
?>
<div class="col-lg-12">
    <h1>Administration</h1>
    <p>Commentaires</p>
    <a class="btn btn-primary btn-top-editor" href="?p=admin.post">Retour</a>
</div>
<table class="table table-sm table-striped table-dark table-bordered table-hover">
    <thead>
        <tr>
            <th scope="col" class="hidden-sm-down">Pseudo</th>
            <th scope="col" class="hidden-sm-down">Contenu</th>
            <th scope="col" class="hidden-sm-down">Date</th>
            <th scope="col" class="hidden-sm-down">Signalement</th>
            <th scope="col" class="hidden-sm-down">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?= $content ?>
    </tbody>
</table>
<script src="assets/js/ConfirmWin.js"></script>
<?php 
$content = ob_get_clean();
require(dirname(__DIR__).'/base.php');
