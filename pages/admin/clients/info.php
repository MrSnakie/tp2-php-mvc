<?php
    $app = App::getInstance();
    $id = $_GET['id'];

    $client = $app->getTable('client')->findClient($id);
    if ($client===false) {
        $app->notFound();
    }
    $credits = $app->getTable('credit')->all();
?>

<div class="row">
    <div class="col-md-12">
        <h2>Informations détaillés sur le client</h2>
        <hr class="my-separator">

        <p><strong>Nom:</strong> <?= $client->last_name ?></p>
        <p><strong>Prénom:</strong> <?= $client->first_name ?></p>
        <p><strong>Âge:</strong> <?= $client->age ?></p>
        <p><strong>Date de naissance:</strong> <?= $client->birthdatefr ?></p>
        <p><strong>Adresse:</strong> <?= $client->adress ?></p>
        <p><strong>Code postal:</strong> <?= $client->postal_code ?></p>
        <p><strong>Téléphone:</strong> <?= $client->phone ?></p>
        <p><strong>Situation familiale:</strong> <?= $client->statut ?></p>
        <p>
            <strong>Organisation:</strong>
            <?php
                foreach($credits as $credit){
                    if($credit->clients_id == $client->id){
                        echo $credit->organization;
                    }
                }
            ?>
        </p>
        <p>
            <strong>Montant:</strong>
            <?php
                foreach($credits as $credit){
                    if($credit->clients_id == $client->id){
                        echo $credit->amount.' €';
                    }
                }
            ?>
        </p>
    </div>
</div>