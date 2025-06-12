<!DOCTYPE html>
<html lang="en" class ="h-full bg-gray-100">
<body class ="h-full">
<div class="min-h-full">
  <?php require base_path("views/partials/header.php"); ?>
  <?php require base_path("views/partials/nav.php"); ?>
  <?php require base_path("views/partials/banner.php"); ?>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

    <p>
    <p>This is the notes page</p>
        <a href="/create-note" class="text-blue-800">Create a new note?</a>
      </p>
      <p>This is the notes page</p>
      <?php foreach ($notes as $note) : ?>
        <li>
          <a href="/note?id=<?= $note['id']?>" class="text-blue-500 hover:underline">
          <?php echo htmlspecialchars($note['body']) ?>
      </a>
        </li>
        <?php endforeach ; ?>
    </div>
  </main>
  <?php require base_path("views/partials/footer.php"); ?>