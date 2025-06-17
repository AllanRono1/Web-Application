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
<footer class="mt-6">
  <a href="/note/edit?id=<?= $note['id'] ?>" class="rounded-md bg-gray-500 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</a>
</footer>
  <form class ="mt-6" method="POST">
      <input type= "hidden" name ="_method" value="DELETE">
      <input type="hidden" name= "id" value="<?= $note['id'] ?>"></input>
      <button class="text-red-600 text-medium">Delete</button>
    </form>
    </div>
  </main>
  <?php require base_path("views/partials/footer.php"); ?>