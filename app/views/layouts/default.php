<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>
    <?=$this->siteTitle(); ?>
  </title>
  <link rel="stylesheet" href="css/bootstrap4/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/custom.css" media="screen" title="no title" charset="utf-8">

  <?= $this->content('head'); ?>

</head>
<body>
  <?= $this->content('body') ?>
  <script src="js/jQuery-3.3.1.min.js"></script>
  <script src="js/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="js/bootstrap4/bootstrap.min.js"></script>
  <script src="js/alertMsg.min.js"></script>
</body>
</html>
