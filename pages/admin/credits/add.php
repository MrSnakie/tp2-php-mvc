<?php
    $app = App::getInstance();

    if($_POST){
        if(!empty($_POST['organization'] && $_POST['amount'])){
            $res = $app->getTable('credit')->create([
                                                    'organization'=>$_POST['organization'],
                                                    'amount'=>$_POST['amount']
                                                    ]);
            if($res){
                // message flash
                header('location: admin.php?p=credits.list');
            }
        }
    }
?>

<div class="row">

    <h1>Créer un utilisateur</h1>

    <hr class="my-separator">

    <form class="form-horizontal" method="post" action="admin.php?p=credits.add">

        <!-- NOM DE L'ORGANISATION -->
        <div class="form-group">
            <label for="organization" class="col-sm-1 control-label">Organisation</label>
            <div class="col-sm-11">
                <input class="form-control" type="text" name="organization" placeholder="Veuillez entrer le nom de l'organisation" required maxlength="50" />
            </div>
        </div>

        <!-- MONTANT -->
        <div class="form-group">
            <label for="amount" class="col-sm-1 control-label">Montant</label>
            <div class="col-sm-11">
                <input class="form-control" type="number" name="amount" placeholder="Veuillez entrer le montant" required maxlength="10" />
            </div>
        </div>

        <!-- BOUTON SAUVEGARDER -->
        <div class="form-group">
            <div class="col-sm-offset-1 col-sm-11">
                <button type="submit" class="btn btn-info size">Ajouter</button>
            </div>
        </div>
    </form>

    <a href="admin.php" style="width:91.66666667%" class="btn btn-default pull-right" role="button">Retour</a>

    </br>
    </br>
    </br>
</div>