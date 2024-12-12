<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="<?= base_url('assets/style/main.css') ?>">
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    rel="stylesheet" />
</head>

<body>
  <div id="loader">
    <div class="spinner"></div>
  </div>
  <div>
    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
      <?= view('dashboard/sidemenu'); ?>

      <div class="flex flex-col flex-1 overflow-hidden">
        <?= view('dashboard/header'); ?>
        <main
          class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 font-poppins">
          <div class="container px-6 py-8 mx-auto">
            <nav class="text-sm text-gray-600 mb-4" aria-label="Breadcrumb">
                <ol class="list-none p-0 inline-flex">
                  <li class="flex items-center">
                    <a href="#" class="text-blue-500 hover:underline" onclick="window.location.href='<?= base_url('/inventory') ?>'">Inventory</a>
                    <svg class="w-4 h-4 mx-2 text-gray-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M7.05 14.95a1 1 0 010-1.41L11.59 9 7.05 4.46a1 1 0 111.41-1.41l5 5a1 1 0 010 1.41l-5 5a1 1 0 01-1.41 0z" />
                    </svg>
                  </li>
                  <li class="flex items-center">
                    <span class="text-gray-500" >Branches</span>
                  </li>
                </ol>
              </nav>
            <div class="mt-4">
              <h1 class="text-4xl font-semibold mb-6 text-[#1F2123]">
                Branches
              </h1>
              <div class="flex flex-wrap -mx-6">
                <!-- Branch 1 Card -->
                <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                  <div class="flex items-center px-6 py-8 bg-white rounded-lg shadow-xl hover:shadow-2xl transition duration-300 ease-in-out transform hover:scale-105">
                    <div class="p-4 bg-[#1A74E2] bg-opacity-80 rounded-full">
                      <!-- Branch 1 Icon -->
                      <svg class="w-8 h-8 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-4h6v4m2 0h-8m10 0v-4a4 4 0 10-8 0v4M4 17h16m-6-7a4 4 0 01-8 0m8-4V5a2 2 0 00-2-2H8a2 2 0 00-2 2v1" />
                      </svg>
                    </div>
                    <div class="ml-6">
                      <h4 class="text-2xl font-semibold text-[#1F2123]">Branch 1</h4>
                      <div class="text-[#6bD0FF] text-lg">Budget: $1000</div>
                      <div class="text-[#1F2123] text-sm">Media Inventory: 123,000</div>
                      <div class="text-[#1F2123] text-sm">
                        <button class="px-6 py-3 mt-3 bg-[#FF6B6B] text-white font-semibold rounded-lg shadow-md hover:bg-[#c74f4f] transition duration-300 ease-in-out transform hover:scale-105">
                          View
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Branch 2 Card -->
                <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                  <div class="flex items-center px-6 py-8 bg-white rounded-lg shadow-xl hover:shadow-2xl transition duration-300 ease-in-out transform hover:scale-105">
                    <div class="p-4 bg-[#6BD0FF] bg-opacity-80 rounded-full">
                      <!-- Branch 2 Icon -->
                      <svg class="w-8 h-8 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21V3m0 0L5 7m4-4l4 4" />
                      </svg>
                    </div>
                    <div class="ml-6">
                      <h4 class="text-2xl font-semibold text-[#1F2123]">Branch 2</h4>
                      <div class="text-[#6bD0FF] text-lg">Budget: $2000</div>
                      <div class="text-[#1F2123] text-sm">Media Inventory: 456,000</div>
                      <div class="text-[#1F2123] text-sm">
                        <button class="px-6 py-3 mt-3 bg-[#FF6B6B] text-white font-semibold rounded-lg shadow-md hover:bg-[#c74f4f] transition duration-300 ease-in-out transform hover:scale-105">
                          View
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Branch 3 Card -->
                <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
                  <div class="flex items-center px-6 py-8 bg-white rounded-lg shadow-xl hover:shadow-2xl transition duration-300 ease-in-out transform hover:scale-105">
                    <div class="p-4 bg-[#3FA0EF] bg-opacity-80 rounded-full">
                      <!-- Branch 3 Icon -->
                      <svg class="w-8 h-8 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l4-4 4 4m0 0v6m-8-6v6M8 4h8" />
                      </svg>
                    </div>
                    <div class="ml-6">
                      <h4 class="text-2xl font-semibold text-[#1F2123]">Branch 3</h4>
                      <div class="text-[#6bD0FF] text-lg">Budget: $3000</div>
                      <div class="text-[#1F2123] text-sm">Media Inventory: 789,000</div>
                      <div class="text-[#1F2123] text-sm">
                        <button class="px-6 py-3 mt-3 bg-[#FF6B6B] text-white font-semibold rounded-lg shadow-md hover:bg-[#c74f4f] transition duration-300 ease-in-out transform hover:scale-105">
                          View
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <h1 class="text-4xl mt-10 font-semibold text-[#1F2123]">
              Borrowing Trends
            </h1>
            <div class="mt-8 bg-white rounded-md shadow-lg p-6">
              <div id="chart" class="h-64"></div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </div>

  <script src="https://cdn.tailwindcss.com"></script>
  <script
    src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
    defer></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>

</html>