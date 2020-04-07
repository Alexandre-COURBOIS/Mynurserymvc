<h1 style="text-align: center;font-size:33px;margin-top: 100px;">
    <?= $titre;
    $session = $_SESSION['login'];
    echo '<br>' . ucfirst($_SESSION['login']['sexe']) . ' ' . ucfirst($session['nom']) . ' ' . ucfirst($session['prenom']);
    ?>
</h1>
<h2><?=$msg?></h2>
<p>Votre nom et prénom : <?= ucfirst($session['nom'])  . ' ' . ucfirst($session['prenom']) ?></p>
<p>Votre date de naissance : <?= $session['birthdate'] ?></p>
<p>Votre email : <?=$session['email']?></p>
<p>Votre numéro de téléphone : 0<?=$session['telephone']?></p>
<p>Votre adresse : <?= $session['num_rue'] . ' ' . $session['supp_rue'] . ' ' . $session['nom_rue'] . ' ' . $session['codepostal'] . ' ' . $session['ville'] ?></p>
</br><a href="editProfil">Editer le profil</a>
