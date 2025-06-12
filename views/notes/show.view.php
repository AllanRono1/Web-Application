<!DOCTYPE html>
<html lang="en" class ="h-full bg-gray-100">
<?php require base_path("views/partials/header.php") ?>

<body class ="h-full">
<div class="min-h-full">
  <?php require base_path("views/partials/nav.php"); ?>
  <?php require base_path("views/partials/banner.php"); ?>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <p class="mb-7">
      <a href = "/notes" class = "text-blue-400">go back</a>
</p>


    <?= htmlspecialchars($note['body']) ?>
    </div>
  </main>
  <?php require base_path("views/partials/footer.php"); ?>