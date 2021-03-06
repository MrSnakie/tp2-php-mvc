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
                    <th>Options</th>
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
                        <td>
                            <a class="btn btn-info btn-xs" href="admin.php?p=clients.info&id=<?= $client->id ?>">Détail</a>
                            <form style="display: inline-block;" action="admin.php?p=clients.delete" method="post">
                                <input type="hidden" name="id" value="<?= $client->id; ?>">
                                <input type="submit" class="btn btn-xs btn-danger" name="OK" value="X">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="col-md-3">
        <h2>Trier par situation</h2>
        <hr class="my-separator">
        <form action="admin.php?p=clients.status" method="post">
            <select class="form-control" name="id">
                <?php foreach(App::getInstance()->getTable('marital_statu')->all() as $statut): ?>
                    <option value="<?= $statut->id ?>"><?= $statut->status ?></option>
                <?php endforeach; ?>
            </select>
            </br>
            <input type="submit" class="btn btn-info size" value="Lancer le tri" />
        </form>
    </div>
</div>