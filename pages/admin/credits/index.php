<div class="row">
    <div class="col-md-12">
        <h2>Liste des crédits</h2>
        <hr class="my-separator">
        <table class="col-md-12 table table-hover">
            <thead>
                <tr>
                    <th>Organisme</th>
                    <th>Montant</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (App::getInstance()->getTable("credit")->all() as $credit): ?>
                    <tr>
                        <td><?= $credit->organization ?></td>
                        <td><?= $credit->amount .' €' ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>