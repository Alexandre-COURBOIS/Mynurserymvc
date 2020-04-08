<div class="container">
    <form method="post" class="form-style" autocomplete="off">
        <h2 class="text-center pt-4">Ajout enfant </h2>
        <h3 class="text-center pt-4"><?= $titre; ?></h3>
        <div class="form-row">
            <div class="col-md-6 mx-auto mt-3">
                <?= $form->error('sexe'); ?>
                <div class="form-row">
                    <div class="col-md-2 mx-auto mt-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexe" id="garçon" value="garçon" <?php  if (!empty($_POST['sexe']) && $_POST['sexe'] == 'garçon') echo "checked";?>>
                            <label class="form-check-label" for="garçon">Garçon</label>
                        </div>
                    </div>
                    <div class="col-md-3 mx-auto mt-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexe" id="autre" value="non-genré" <?php if (empty($_POST['sexe'])){echo 'checked';} elseif (!empty($_POST['sexe']) && $_POST['sexe'] == 'non-genré') echo "checked";?>>
                            <label class="form-check-label" for="autre">Non genré</label>
                        </div>
                    </div>
                    <div class="col-md-2 mx-auto mt-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexe" id="fille" value="fille" <?php  if (!empty($_POST['sexe']) && $_POST['sexe'] == 'fille') echo "checked";?>>
                            <label class="form-check-label" for="fille">Fille</label>
                        </div>
                    </div>

                </div>
                <div class="form-row">
                    <div class="col-md-5 mx-auto mt-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nom_enfant" id="nom_enfant"
                                   placeholder="Nom de l'enfant" value="<?php if (!empty($_POST['nom_enfant'])) echo $_POST['nom_enfant']; ?>">
                            <span class="input-highlight"></span>
                            <?= $form->error('nom_enfant') ?>
                        </div>
                    </div>
                    <div class="col-md-5 mx-auto mt-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="prenom_enfant" id="prenom_enfant" placeholder="Prénom de l'enfant"
                                   value="<?php if (!empty($_POST['prenom_enfant'])) echo $_POST['prenom_enfant']; ?>">
                            <span class="input-highlight"></span>
                            <?= $form->error('prenom_enfant') ?>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-11 mx-auto mt-3">
                        <div class="form-group">
                            <input class="form-control" name="birthdate" id="birthdate"
                                   placeholder="Date de naissance : jj/mm/aaaa"
                                   value="<?php if (!empty($_POST['birthdate'])) echo $_POST['birthdate']; ?>">
                            <span class="input-highlight"></span>
                            <?= $form->error('birthdate') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 mx-auto mt-5">
            <input type="submit" name="submitted" class="btn btn-lg btn-success btn-block">
        </div>
    </form>
    <div style="height: 75px;"></div>
</div>

<script>
    $('#birthdate').datepicker({
        uiLibrary: 'bootstrap4',
        calendarWeeks: false,
        format: 'dd/mm/yyyy',
        showOtherMonths: true,
        selectOtherMonths: false,
        showRightIcon: false,
        weekStartDay: 1,
        showWeek: false,
        locale: 'fr-fr',
        modal : true,
    });
</script>
