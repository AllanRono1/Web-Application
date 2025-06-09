<!DOCTYPE html>
<html lang="en" class ="h-full bg-gray-100">
<?php require "views/partials/header.php" ?>

<body class ="h-full">
<div class="min-h-full">
  <?php require "views/partials/nav.php"; ?>
  <?php require "views/partials/banner.php"; ?>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <p class="mb-7">
      <a href = "/notes" class = "text-blue-400">go back</a>
</p>


    <?= htmlspecialchars($note['body']) ?>
    </div>
  </main>
  <?php require "views/partials/footer.php"; ?>