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
                  <span class="text-gray-500" >Contracts</span>
                </li>
              </ol>
            </nav>



            <div class="flex justify-between items-center mt-4">

              <h1 class="text-2xl font-semibold text-gray-800">Contracts</h1>
              <div class="mt-8 flex flex-wrap justify-center space-x-6">
                <button
                  class="px-6 py-3 mt-3 bg-[#1A74E2] text-white font-semibold rounded-lg shadow-md hover:bg-[#155a8a] transition duration-300 ease-in-out transform hover:scale-105">
                  Views suppliers
                </button>

                <button
                  class="px-6 py-3 mt-3 bg-[#FF6B6B] text-white font-semibold rounded-lg shadow-md hover:bg-[#c74f4f] transition duration-300 ease-in-out transform hover:scale-105">
                  View vendors
                </button>

                <button
                  class="px-6 py-3 mt-3 bg-[#6BD0FF] text-white font-semibold rounded-lg shadow-md hover:bg-[#4aa0c2] transition duration-300 ease-in-out transform hover:scale-105">
                  View publishers
                </button>
              </div>
              <button class="px-4 py-2 bg-blue-500 text-white rounded-md">
                Add Contract
              </button>
            </div>
            <div class="flex flex-col mt-8">
              <div
                class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div
                  class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                  <table class="min-w-full">
                    <thead>
                      <tr>
                        <th
                          class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                          #
                        </th>
                        <th
                          class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                          Name
                        </th>
                        <th
                          class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                          Contact
                        </th>
                        <th
                          class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                          Items Supplied
                        </th>
                        <th
                          class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                          Status
                        </th>
                        <th
                          class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                          Actions
                        </th>
                      </tr>
                    </thead>

                    <tbody class="bg-white">
                      <tr>
                        <td
                          class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                          1
                        </td>
                        <td
                          class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                          <div class="flex items-center">
                            <div class="">
                              <div
                                class="text-sm font-medium leading-5 text-gray-900">
                                Contract A
                              </div>
                            </div>
                          </div>
                        </td>

                        <td
                          class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                          <div class="text-sm leading-5 text-gray-900">
                            +123456789
                          </div>
                        </td>

                        <td
                          class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                          Books
                        </td>

                        <td class="px-4 py-2 text-green-400">Active</td>

                        <td class="px-4 py-2">
                          <button
                            class="px-2 py-1 bg-blue-500 text-white rounded-md">
                            Edit
                          </button>
                          <button
                            class="px-2 py-1 bg-red-500 text-white rounded-md">
                            Delete
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
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