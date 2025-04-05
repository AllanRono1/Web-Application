<!DOCTYPE html>
<html lang="en" class ="h-full bg-gray-100">
<?php require "partials/header.php" ?>

<body class ="h-full">
<div class="min-h-full">
  <?php require "partials/nav.php"; ?>
  <?php require "partials/banner.php"; ?>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <?php foreach ($note as $notes) : ?>
        <?= $notes['body'] ?>
        <?php endforeach; ?>
    </div>
  </main>
  <?php require "partials/footer.php"; ?>