<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?= site_url('css/main.css')?>" />
    <link
    rel="stylesheet"
    href="https://unpkg.com/swiper/swiper-bundle.min.css"
  />
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
  rel="stylesheet"
/>
  </head>
  <body>
    <div>
      <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
        <div
          :class="sidebarOpen ? 'block' : 'hidden'"
          @click="sidebarOpen = false"
          class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"
        ></div>
        <div
          :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
          class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto bg-[#1F2123] lg:translate-x-0 lg:static lg:inset-0"
        >
          <?= view('branchlibrarian/sidemenu');?>
        </div>

        <div class="flex flex-col flex-1 overflow-hidden">
          <?= view('dashboard/header');?>
          <main
            class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 font-poppins"
          >
            <div class="container px-6 py-8 mx-auto">
              <div class="mt-4">
                <h1 class="text-[26px] font-[700] mb-6 text-[#1F2123]">
                  Media Inventory
                </h1>
                <div class="flex flex-wrap -mx-6">
                  <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                    <div
                      class="flex items-center px-6 py-8 bg-white rounded-lg shadow-xl hover:shadow-2xl transition duration-300 ease-in-out transform hover:scale-105"
                    >
                      <div class="p-4 bg-[#1A74E2] bg-opacity-80 rounded-full">
                        <svg
                          class="w-8 h-8 text-white"
                          viewBox="0 0 24 24"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M3 2C2.44772 2 2 2.44772 2 3V21C2 21.5523 2.44772 22 3 22H15C15.5523 22 16 21.5523 16 21V3C16 2.44772 15.5523 2 15 2H3ZM14 3V20H3V3H14Z"
                            fill="currentColor"
                          />
                          <path
                            d="M18 4C17.4477 4 17 4.44772 17 5V19C17 19.5523 17.4477 20 18 20H21C21.5523 20 22 19.5523 22 19V5C22 4.44772 21.5523 4 21 4H18Z"
                            fill="currentColor"
                          />
                        </svg>
                      </div>

                      <div class="ml-6">
                        <h4 class="text-2xl font-semibold text-[#1F2123]">
                          8,282
                        </h4>
                        <div class="text-[#6bD0FF] text-lg">Books</div>
                      </div>
                    </div>
                  </div>

                  <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                    <div
                      class="flex items-center px-6 py-8 bg-white rounded-lg shadow-xl hover:shadow-2xl transition duration-300 ease-in-out transform hover:scale-105"
                    >
                      <div class="p-4 bg-[#6BD0FF] bg-opacity-80 rounded-full">
                        <svg
                          class="w-8 h-8 text-white"
                          viewBox="0 0 24 24"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <circle
                            cx="12"
                            cy="12"
                            r="10"
                            stroke="currentColor"
                            stroke-width="2"
                          />
                          <circle
                            cx="12"
                            cy="12"
                            r="6"
                            stroke="currentColor"
                            stroke-width="2"
                          />
                          <path
                            d="M12 2V6M12 18V22"
                            stroke="currentColor"
                            stroke-width="2"
                          />
                          <path
                            d="M2 12H6M18 12H22"
                            stroke="currentColor"
                            stroke-width="2"
                          />
                        </svg>
                      </div>

                      <div class="ml-6">
                        <h4 class="text-2xl font-semibold text-[#1F2123]">
                          200,521
                        </h4>
                        <div class="text-[#6bD0FF] text-lg">CDs/DVDs</div>
                      </div>
                    </div>
                  </div>

                  <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
                    <div
                      class="flex items-center px-6 py-8 bg-white rounded-lg shadow-xl hover:shadow-2xl transition duration-300 ease-in-out transform hover:scale-105"
                    >
                      <div class="p-4 bg-[#3FA0EF] bg-opacity-80 rounded-full">
                        <svg
                          class="w-8 h-8 text-white"
                          viewBox="0 0 24 24"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M6 7C6 7.55228 6.44772 8 7 8H17C17.5523 8 18 7.55228 18 7C18 6.44772 17.5523 6 17 6H7C6.44772 6 6 6.44772 6 7Z"
                            fill="currentColor"
                          />
                          <path
                            d="M12 11C12.5523 11 13 11.4477 13 12V16C13 16.5523 12.5523 17 12 17C11.4477 17 11 16.5523 11 16V12C11 11.4477 11.4477 11 12 11Z"
                            fill="currentColor"
                          />
                          <path
                            d="M12 18C9.23858 18 7 15.7614 7 13C7 10.2386 9.23858 8 12 8C14.7614 8 17 10.2386 17 13C17 15.7614 14.7614 18 12 18Z"
                            fill="currentColor"
                          />
                        </svg>
                      </div>

                      <div class="ml-6">
                        <h4 class="text-2xl font-semibold text-[#1F2123]">
                          215,542
                        </h4>
                        <div class="text-[#6bD0FF] text-lg">Games</div>
                      </div>
                    </div>
                  </div>
                </div>
           
              </div>
              <form class="max-w-7xl mx-auto mt-6 flex items-center bg-white rounded-lg shadow" action="<?= base_url('search')?>" method="GET">
                <div class="flex-1 px-4 py-2">
                  <input type="text" name="q" class="w-full px-4 py-2 text-gray-700 bg-transparent border-none focus:outline-none" placeholder="Search...">
                </div>
                <button type="submit" class="px-4 py-2 bg-[#1A74E2] text-white rounded-lg hover:bg-[#1F2123] transition duration-300 ease-in-out">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </button>
              </form>
              <div class="max-w-7xl mx-auto mt-11 ">
                <h2 class="text-[26px] font-[700]  text-[#1F2123] mb-4 mt-4">Our Bestsellers</h2>
                <div class="swiper">
                  <div class="swiper-wrapper">
                    <!-- Card 1 -->
                    <div class="swiper-slide">
                      <div class="p-4 bg-white w-[200px] rounded-lg shadow">
                        <img src="<?= base_url('assets/images/book1.jpg')?>" alt="In Too Deep" class="w-[200px] h-[200px] rounded">
                        <h4 class="text-lg font-semibold mt-3">In Too Deep</h4>
                        <p class="text-gray-600">Lee Child</p>
                        <p class="text-red-500 font-bold">$13.00</p>
                      </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="swiper-slide">
                      <div class="p-4 bg-white w-[200px]  rounded-lg shadow">
                        <img src="<?= base_url('assets/images/book2.jpg')?>" alt="Simply Jamie" class="w-[200px] h-[200px] rounded">
                        <h4 class="text-lg font-semibold mt-3">Simply Jamie</h4>
                        <p class="text-gray-600">Jamie Oliver</p>
                        <p class="text-red-500 font-bold">$15.00</p>
                      </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="swiper-slide">
                      <div class="p-4 bg-white w-[200px]  rounded-lg shadow">
                        <img src="<?= base_url('assets/images/book4.jpg')?>" alt="Intermezzo" class="w-[200px] h-[200px] rounded">
                        <h4 class="text-lg font-semibold mt-3">Intermezzo</h4>
                        <p class="text-gray-600">Sally Rooney</p>
                        <p class="text-red-500 font-bold">$16.99</p>
                      </div>
                    </div>
                    <!-- Additional Cards -->
                    <div class="swiper-slide">
                      <div class="p-4 bg-white w-[200px]  rounded-lg shadow">
                        <img src="<?= base_url('assets/images/book9.jpg')?>" alt="Unleashed" class="w-[200px] h-[200px] rounded">
                        <h4 class="text-lg font-semibold mt-3">Unleashed</h4>
                        <p class="text-gray-600">Boris Johnson</p>
                        <p class="text-red-500 font-bold">$15.00</p>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="p-4 bg-white w-[200px]  rounded-lg shadow">
                        <img src="<?= base_url('assets/images/book9.jpg')?>" alt="Unleashed" class="w-[200px] h-[200px] rounded"><img src="assets/images/book9.jpg" alt="Unleashed" class="w-[200px] h-[200px] rounded">
                        <h4 class="text-lg font-semibold mt-3">Unleashed</h4>
                        <p class="text-gray-600">Boris Johnson</p>
                        <p class="text-red-500 font-bold">$15.00</p>
                      </div>
                    </div>
                  </div>
                  <!-- Navigation Buttons -->
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
              </div>
            </div>
          </main>
        </div>
      </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="<?= site_url('js/main.js')?>"></script>
  </body>
</html>
