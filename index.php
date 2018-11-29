<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice 7</title>
</head>
<body>
  <?php
        if (empty($_GET['lastName'])){
          ?>
          <form method="get" enctype="multipart/form-data">
            <p><label for="lastName">Nom :</label>
              <input type="text" name="lastName" value="" placeholder="Entrez votre nom"></p>
              <p><label for="firstName">Prénom :</label>
                <input type="text" name="firstName" value="" placeholder="Entrez votre prénom"></p>
                <p><label for="gender"></label>
                  <select name="gender">
                    <option value="Mr">Mr</option>
                    <option value="Mme">Mme</option>
                  </select></p>
                  <label for="file"></label>
                  <input type="file" name="file">
                  <button type="submit">Clic</button>
                </form>
                <?php
              } else {
                ?>
                <?php
                $ext = new SplFileInfo($_GET['file']); //Sert à récupérer les informations d'un fichier envoyé
                $extension = $ext -> getExtension(); //Permet de récupérer uniquement l'extension du fichier envoyé
                $filename = $ext -> getBasename('.$extension'); //Permet de récupérer le nom du fichier, en précisant .$extension je dis que je souhaite avoir uniquement le nom du fichier sans son extension
                if ($extension == 'pdf') {
                  ?>
                  <p><?= 'L\'extension du fichier est bien .pdf';?></p>
                  <p><?= 'Vous vous appellez ' . $_GET['gender'] .' '. $_GET['lastName'] . ' ' . $_GET['firstName']?></p>
                  <?php
                } else {
                  ?>
                  <p><strong><?= 'L\'extension de votre fichier doit être .pdf' . ' ' . 'Veuillez remplir à nouveau le formulaire avec un fichier comportant la bonne extension'?></strong></p>
                  <form method="get" enctype="multipart/form-data">
                    <p><label for="lastName">Nom :</label>
                      <input type="text" name="lastName" value="" placeholder="Entrez votre nom"></p>
                      <p><label for="firstName">Prénom :</label>
                        <input type="text" name="firstName" value="" placeholder="Entrez votre prénom"></p>
                        <p><label for="gender"></label>
                          <select name="gender">
                            <option value="Mr">Mr</option>
                            <option value="Mme">Mme</option>
                          </select></p>
                          <label for="file"></label>
                          <input type="file" name="file">
                          <button type="submit">Clic</button>
                        </form>
                        <?php
                      }
                    }
                    ?>
</body>
