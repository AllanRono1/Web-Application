<!DOCTYPE html>
<html lang="en" class ="h-full bg-gray-100">
<?php require "partials/header.php" ?>
<body class ="h-full">
<div class="min-h-full">
  <?php require "partials/nav.php"; ?>
  <?php require "partials/banner.php"; ?>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <p>This is the notes page</p>
      <?php foreach ($notes as $notes) : ?>
        <li>
          <a href="/note?id=<?= $notes['id']?>" class="text-blue-500 hover:underline">
          <?php echo $notes['body'] ?>
      </a>
        </li>
        <?php endforeach ; ?>
    </div>
  </main>
  <?php require "partials/footer.php"; ?>