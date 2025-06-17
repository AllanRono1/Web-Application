<!DOCTYPE html>
<html lang="en" class ="h-full bg-gray-100">
<?php require base_path("views/partials/header.php") ?>
<body class ="h-full">
<div class="min-h-full">
  <?php require base_path("views/partials/nav.php"); ?>
  <?php require base_path("views/partials/banner.php"); ?>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    </div>
    <form method = "POST" action="/notes">
        <input type ="hidden" name="_method" value="PATCH">
        <input type ="hidden" name="id" value="<?= $note['id'] ?>">
        <div class="col-span-full">
          <label for="body" class="block text-sm/6 font-medium text-gray-900"></label>
          <div class="mt-2">
            <textarea name="body" id="body" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"><?php echo $note ['body']?></textarea>
            <?php if (isset($error['body'])) : ?>
            <p class = "text-red-700 text-xs mt-3"><?= $error ['body'] ?></p>
            <?php endif ; ?>
          </div>
          <p class="mt-3 text-sm/6 text-gray-600">Write a few sentences about yourself.</p>
        </div>
  <div class="mt-6 flex items-center justify-end gap-x-6 flex gap-x-4 justify-end">
    <a 
    href="/notes" <button type="submit" class="rounded-md bg-gray-500 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Cancel</button>
</a>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
  </div>
</form>

  </main>
  <?php require base_path("views/partials/footer.php"); ?>