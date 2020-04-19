<div class="separator"></div>
<div class="container">
    <h2 class="text-center pt-4"><?= $titre; ?></h2>
    <div class="separator"></div>
    <form action="" method="post" class="form-style">
        <div class="form-row">

            <div class="col-md-3 mx-auto mt-3">
                <label name="time_start" for="time_start" class="form-control">Début</label>
                <div class="form-group">
                    <input name="debut_resa" id="time_start" type="text" class="form-control">
                </div>
            </div>

            <div class="col-md-3 mx-auto mt-3">
                <label name="time_end" for="time_end" class="form-control">Fin</label>
                <div class="form-group">
                    <input name="fin_resa" id="time_end" type="text" class="form-control">
                </div>
            </div>

            <div class="col-md-4 mx-auto mt-3">
                <label name="enfant_resa" for="enfant_resa" class="form-control">Enfant(s)</label>
                <div class="form-group">
                    <select name="enfant_resa" id="enfant_resa" class="form-control">
                        <option value="none">--Liste de vos enfants--</option>
                        <?php foreach ($enfants as $enfant) { ?>
                            <option value="<?= $enfant->id_enfant ?>"><?php echo $enfant->nom . ' ' . $enfant->prenom ?></option>
                        <?php } ?>
                    </select>
                    <?= $form->error('select') ?>

                    <span class="input-highlight"></span>
                </div>
            </div>
        </div>
        <div class="separator"></div>
        <div class="col-md-5 mx-auto mt-5">
            <input type="submit" name="submitted" class="btn btn-lg btn-success btn-block">
        </div>
    </form>
    <div class="separator"></div>
    <script>
        $('#time_start').datetimepicker({
            footer: true,
            modal: true,
            showOtherMonths: true,
            calendarWeeks: true,
            format: 'yyyy-mm-dd H:MM',
            value: '2020-00-00 09:00',
            uiLibrary: 'bootstrap4',
            locale: 'fr-fr',
        });
        $('#time_end').datetimepicker({
            footer: true,
            modal: true,
            showOtherMonths: true,
            calendarWeeks: true,
            format: 'yyyy-mm-dd H:MM',
            value: '2020-00-00 18:00',
            uiLibrary: 'bootstrap4',
            locale: 'fr-fr',
        });
    </script>
</div>