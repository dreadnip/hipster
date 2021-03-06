<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">
  <?= css('assets/css/index.css') ?>
</head>
<body>
  <?php $a = ["blue", "orange", "green"]; $c = rand(0,2); ?>
  <div class="orb <?= $a[$c] ?>"></div>
  <header class="sidebar" role="banner">
    <?php snippet('menu') ?>
  </header>