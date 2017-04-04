<div class="row">
    <div class="col-md-9">
        <h2>Liste des clients</h2>
        <hr class="my-separator">
        <table class="col-md-12 table table-hover">
            <thead>
                <tr>
                    <th>Nom / Prénom</th>
                    <th>Âge</th>
                    <th>Adresse / Code postal</th>
                    <th>Téléphone</th>
                    <th>Situation</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach(App::getInstance()->getTable('client')->byStatutName() as $client): ?>
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
</div>