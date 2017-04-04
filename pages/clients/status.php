<?php
    if(!isset($_POST["id"])){
        # message flash
        header('location: index.php?p=home');
    }
?>

<div class="row">
    <div class="col-md-9">
        <h2>Liste des utilisateurs</h2>
        <hr class="my-separator">
        <table class="col-md-12 table table-hover">
            <thead>
                <tr>
                    <th>Prénom / Nom</th>
                    <th>Âge</th>
                    <th>Adresse / Code postal</th>
                    <th>Téléphone</th>
                    <th>Service</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach(App::getInstance()->getTable('client')->byStatusId($_POST['id']) as $client): ?>
                    <tr>
                        <td><?= $client->identity ?></td>
                        <td><?= $client->age ?></td>
                        <td><?= $client->adress .' - '. $client->postal_code ?></td>
                        <td><?= $client->phone ?></td>
                        <td><?= $client->statut ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="col-md-3">
        <h2>Trier par situation</h2>
        <hr class="my-separator">
        <form action="index.php?p=clients.status" method="post">
            <select class="form-control" name="id">
                <?php foreach(App::getInstance()->getTable('marital_statu')->all() as $statut): ?>
                    <option value="<?= $statut->id ?>" <?= ($_POST['id']==$statut->id)?'selected="selected"' : ''?>>
                        <?= $statut->status ?>
                    </option>
                <?php endforeach; ?>
            </select>
            </br>
            <input type="submit" class="btn btn-info size" value="Lancer le tri" />
        </form>
    </div> 
</div>