<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guest </title>
  <link rel="stylesheet" href="<?= base_url('assets/style/main.css') ?>">
</head>

<body>
  <div>
    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
      <?= view('guest/sidemenu'); ?>
      <div class="flex flex-col flex-1 overflow-hidden">
        <!-- header -->
        <?= view('dashboard/header'); ?>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 font-poppins">

        </main>
      </div>
    </div>
  </div>

  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>