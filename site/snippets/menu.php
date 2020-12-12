<!doctype html><html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">


  <title>Playground p2</title>
  <meta name="description" content="p2">
  <meta name="author" content="SitePoint">

  <?= css('assets/css/mystyle.css') ?>
  <link rel="stylesheet" href="https://use.typekit.net/nct2ili.css">

</head>
<body>
<nav class="menu">
    <a class="logo" href="<?= $site->url() ?>"><image class="logo_image" src="<?= $site->image()->url() ?>"></a>
    <ul id="nav_eben1">
                <?php foreach ($site->children()->listed() as $item ): ?>
        <li><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
                <?php endforeach ?>
    </ul>
</nav>