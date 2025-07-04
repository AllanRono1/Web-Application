<!DOCTYPE html>
<html lang="en" class ="h-full bg-gray-100">
<body class ="h-full">
<div class="min-h-full">
  <?php require base_path("views/partials/header.php"); ?>
  <?php require base_path("views/partials/nav.php"); ?>
  <main>
  <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-white">
  <body class="h-full">
  ```
-->
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company" />
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Login</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="/session" method="POST">
      <div>
        <label for="email" class="block text-sm/6 font-medium text-gray-900">Email please</label>
        <div class="mt-2">
          <input type="email" 
          name="email"
           id="email"
           autocomplete="email"
           required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
           value="<?= old('email') ?>"

           />
          <?php if (isset($error['email'])) : ?>
            <p class = "text-red-700 text-xs mt-3"><?= $error ['email'] ?></p>
            <?php endif ; ?>
        </div>
        <div class="mt-2">
          <input type="password" name="password" id="password" autocomplete="current-password" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
        </div>
         <?php if (isset($error['password'])) : ?>
            <p class = "text-red-700 text-xs mt-3"><?= $error ['password'] ?></p>
            <?php endif ; ?>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
      </div>
    </form>
  </div>
</div>

  </main>
  <?php require base_path("views/partials/footer.php"); ?>