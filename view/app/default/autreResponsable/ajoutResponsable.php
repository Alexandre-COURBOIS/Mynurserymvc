<div class="container">
    <form method="post" class="form-style" autocomplete="off">
        <h2 id="sousTitre" class="text-center pt-4">Ajouter une autre personne ayant le droit de venir chercher <?=ucfirst($enfant[0]->prenom);?> à la crèche</h2>
        <div class="form-row">
            <div class="col-md-6 mx-auto mt-3">
                <div class="form-row">
                    <div class="col-md-5 mx-auto mt-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nom_autreResp" id="nom_autreResp"
                                   placeholder="Nom de la personne" value="<?php if (!empty($_POST['nom_autreResp'])) echo $_POST['nom_autreResp']; ?>">
                            <span class="input-highlight"></span>
                            <?= $form->error('nom_autreResp') ?>
                        </div>
                    </div>
                    <div class="col-md-5 mx-auto mt-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="prenom_autreResp" id="prenom_autreResp" placeholder="Prénom de la personne"
                                   value="<?php if (!empty($_POST['prenom_autreResp'])) echo $_POST['prenom_autreResp']; ?>">
                            <span class="input-highlight"></span>
                            <?= $form->error('prenom_autreResp') ?>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-10 mx-auto mt-5"
                         <div class="form-group">
                             <select name="role_autreResp" class="form-control">
                                 <option value="">Séléctionnez le rôle de la personne</option>
                                 <option value="pere">Père</option>
                                 <option value="mere">Mère</option>
                                 <option value="grandMere">Grand-mère</option>
                                 <option value="grandPere">Grand-père</option>
                                 <option value="oncle">Oncle</option>
                                 <option value="tante">Tante</option>
                                 <option value="autreFamille">Autre membre de la famille</option>
                                 <option value="ami">Ami de la famille</option>
                             </select>
                             <?= $form->error('role_autreResp') ?>
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
