<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>php partie6</title>
</head>
<body>
  <a href="index.php?startDate=2/05/2016&endDate=27/11/2016">exercice3</a>
  <?php if (isset($_GET['startDate']) && ($_GET['endDate'])){ ?>
    <p>Date de début : <?= $_GET['startDate'] ?></p>
    <p>Date de fin : <?= $_GET['endDate'] ?></p>
  <?php }else{ ?>
    <p>Veuillez renseigner les champs manquants.</p>
  <?php } ?>
</body>
</html>
