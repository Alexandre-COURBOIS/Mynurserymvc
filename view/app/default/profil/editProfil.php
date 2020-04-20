<?php if (!empty($_SESSION)) {
    if (!empty($_SESSION['login'])) {
        if ($_SESSION['login']['user'] === "particulier") { ?>
            <h1 id="titre">
                <?= $titre; ?>
            </h1>
            <h2 id="sousTitre"><?= $message ?></h2>
            <div class="container">
                <form method="post" class="form-style">
                    <div class="form-row">
                        <div class="col-md-6 mx-auto mt-3">
                            <div class="form-row">
                                <div class="col-md-11 mx-auto mt-3">
                                    <div class="form-group">

                                        <input type="text" class="form-control" name="tel" id="tel"
                                               placeholder="Tel: 02 11 22 33 44"
                                               value="<?php if (!empty($_POST['tel'])) {
                                                   echo $_POST['tel'];
                                               } else {
                                                   echo '0' . $profil[0]->Telephone;
                                               } ?>">
                                        <span class="input-highlight"></span>
                                        <?= $form->error('tel') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-3 mx-auto mt-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="num-rue" id="num-rue"
                                               placeholder="N° de rue"
                                               value="<?php if (!empty($_POST['num-rue'])) {
                                                   echo $_POST['num-rue'];
                                               } else {
                                                   echo $profil[0]->Num_rue;
                                               } ?>">

                                        <span class="input-highlight"></span>
                                        <?= $form->error('num-rue') ?>
                                    </div>
                                </div>
                                <div class="col-md-6 mx-auto mt-3">
                                    <div class="form-group">
                                        <select name="id-rue" id="id-rue" class="form-control">
                                            <option value="NULL">Supplément de numéro</option>
                                            <option value="bis">Bis</option>
                                            <option value="ter">Ter</option>
                                            <option value="quater">Quater</option>
                                        </select>
                                        <span class="input-highlight"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-11 mx-auto mt-3">
                                    <div class="form-group">
                                        <input type="search" name="street" class="form-control" id="street"
                                               placeholder="Nom de votre rue"
                                               value="<?php if (!empty($_POST['street'])) {
                                                   echo $_POST['street'];
                                               } else {
                                                   echo $profil[0]->Nom_rue;
                                               } ?>">

                                        <span class="input-highlight"></span>
                                        <?= $form->error('street') ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-3 mx-auto mt-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="code-postal" id="code-postal"
                                               placeholder="Code postal"
                                               value="<?php if (!empty($_POST['code-postal'])) {
                                                   echo $_POST['code-postal'];
                                               } else {
                                                   echo $profil[0]->Codepostal;
                                               } ?>">
                                        <span class="input-highlight"></span>
                                        <?= $form->error('code-postal') ?>
                                    </div>
                                </div>
                                <div class="col-md-7 mx-auto mt-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="city" id="city"
                                               placeholder="Nom de la ville"
                                               value="<?php if (!empty($_POST['city'])) {
                                                   echo $_POST['city'];
                                               } else {
                                                   echo $profil[0]->Ville;
                                               } ?>">
                                        <span class="input-highlight"></span>
                                        <?= $form->error('city') ?>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top: 75px;"></div>
                            <div class="col-md-10 mx-auto mt-5">
                                <input type="text" id="longitude" name="longitude" hidden>
                                <input type="text" id="lattitude" name="lattitude" hidden>
                                <input type="submit" name="submitted" class="btn btn-lg btn-success btn-block">
                            </div>
                        </div>
                    </div>
                </form>
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
