<?php
if (!empty($_SESSION)) {
    if (!empty($_SESSION['login'])) {
        if ($_SESSION['login']['user'] === "particulier") {

            use App\Model\EnfantModel;

            ?>
            <div class="container">

                <div class="separator"></div>

                <?php echo $titre; ?>

                <div class="separator"></div>

                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Réservations</th>
                        <th scope="col">Du</th>
                        <th scope="col">Au</th>
                        <th scope="col">Prénom/Nom</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;
                    foreach ($reservations as $reservation) {
                        $enfants = EnfantModel::findById($reservation->getenfant_id_enfant(), 'id_enfant');
                        foreach ($enfants as $enfant) {
                            ?>


                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?= $reservation->getdate_resa(); ?></td>
                                <td><?= $reservation->getfin_resa(); ?></td>
                                <td><?= $enfant->getPrenom() . ' ' . $enfant->getNom(); ?></td>
                            </tr>

                        <?php }
                        $i++;
                    } ?>
                    </tbody>
                </table>

            </div>

        <?php } else {
            header('Location: http://localhost/mynursery');
        }
    } else {
        header('Location: http://localhost/mynursery');
    }
} else {
    header('Location: http://localhost/mynursery');
}
