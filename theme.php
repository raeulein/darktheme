<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    	<title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>
	<meta name="description" content="<?= $Wcms->page('description') ?>">
	<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">

	<meta property="og:url" content="<?= $this->url() ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
	<meta property="og:title" content="<?= $Wcms->page('title') ?>" />
	<meta name="twitter:site" content="<?= $this->url() ?>" />
	<meta name="twitter:title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
	<meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<?= $Wcms->css()?>

	<link rel="stylesheet" href="<?= $Wcms->asset('css/style.css')?>">
</head>
<body>
	<?= $Wcms->settings() ?>
	<?= $Wcms->alerts() ?>
  
  
  <div id="all">
    <script> 
  function nav() {
  var x = document.getElementById("nav");
  var y = document.getElementById("menu");
  if (x.className === "hidden") {
    x.className = "visible";
    y.style.height="calc(100vh - 80px)";
  } else {
    x.className = "hidden";
    y.style.height="80px";
  }
}
    </script> 

            <div id="menu">
                <a href="index.php"><img id="logo" alt="Logo" src="bilder/logo.png"></a>
                <img id="menubutton" onclick="nav()" alt="Menü-Button" src="themes/wondercms-dark/bilder/menu.png">
                <nav class="hidden" id="nav">
                    <ul>
                        <?= $Wcms->menu() ?>
                    </ul>
                </nav>
            </div>
            <div id="content">
                <?= $Wcms->page('content') ?>
            </div>
            <div id="footer">
                <div id="footerbox">
                    <div id="left-footer">
                         <?= $Wcms->footer() ?>   
                    </div>
                    
                </div>
            </div>
        </div>
  
  <?= $Wcms->block('subside') ?>
  
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<?= $Wcms->js() ?>
</body>
</html>
