<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory </title>
    <link rel="stylesheet" href="<?= base_url('assets/style/main.css') ?>">
</head>

<body>
    <div>
        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
            <?= view('dashboard/sidemenu'); ?>


            <div class="flex flex-col flex-1 overflow-hidden">
                <!-- header -->
                <?= view('dashboard/header'); ?>
                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 font-poppins">
                    <div class="container px-6 py-8 mx-auto">
                        <div class="mt-4">
                     

                            <h1 class="text-4xl font-semibold mb-6 text-[#1F2123]">Inventory</h1>



                            <div class="flex flex-wrap -mx-6">

                                <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                                    <div
                                        class="flex items-center px-6 py-8 bg-white rounded-lg shadow-xl hover:shadow-2xl transition duration-300 ease-in-out transform hover:scale-105">
                                        <div class="p-4 bg-[#1A74E2] bg-opacity-80 rounded-full">
                                            <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M3 2C2.44772 2 2 2.44772 2 3V21C2 21.5523 2.44772 22 3 22H15C15.5523 22 16 21.5523 16 21V3C16 2.44772 15.5523 2 15 2H3ZM14 3V20H3V3H14Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M18 4C17.4477 4 17 4.44772 17 5V19C17 19.5523 17.4477 20 18 20H21C21.5523 20 22 19.5523 22 19V5C22 4.44772 21.5523 4 21 4H18Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </div>

                                        <div class="ml-6">
                                            <h4 class="text-2xl font-semibold text-[#1F2123]">8,282</h4>
                                            <div class="text-[#6bD0FF] text-lg">Books</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                                    <div
                                        class="flex items-center px-6 py-8 bg-white rounded-lg shadow-xl hover:shadow-2xl transition duration-300 ease-in-out transform hover:scale-105">
                                        <div class="p-4 bg-[#6BD0FF] bg-opacity-80 rounded-full">
                                            <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                                                <circle cx="12" cy="12" r="6" stroke="currentColor" stroke-width="2" />
                                                <path d="M12 2V6M12 18V22" stroke="currentColor" stroke-width="2" />
                                                <path d="M2 12H6M18 12H22" stroke="currentColor" stroke-width="2" />
                                            </svg>
                                        </div>

                                        <div class="ml-6">
                                            <h4 class="text-2xl font-semibold text-[#1F2123]">200,521</h4>
                                            <div class="text-[#6bD0FF] text-lg">CDs/DVDs</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full px-6 mt-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
                                    <div
                                        class="flex items-center px-6 py-8 bg-white rounded-lg shadow-xl hover:shadow-2xl transition duration-300 ease-in-out transform hover:scale-105">
                                        <div class="p-4 bg-[#3FA0EF] bg-opacity-80 rounded-full">
                                            <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6 7C6 7.55228 6.44772 8 7 8H17C17.5523 8 18 7.55228 18 7C18 6.44772 17.5523 6 17 6H7C6.44772 6 6 6.44772 6 7Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M12 11C12.5523 11 13 11.4477 13 12V16C13 16.5523 12.5523 17 12 17C11.4477 17 11 16.5523 11 16V12C11 11.4477 11.4477 11 12 11Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M12 18C9.23858 18 7 15.7614 7 13C7 10.2386 9.23858 8 12 8C14.7614 8 17 10.2386 17 13C17 15.7614 14.7614 18 12 18Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </div>

                                        <div class="ml-6">
                                            <h4 class="text-2xl font-semibold text-[#1F2123]">215,542</h4>
                                            <div class="text-[#6bD0FF] text-lg">Games</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-8 flex flex-wrap justify-center space-x-6">
                                <button
                                    class="px-6 py-3 mt-3 bg-[#1A74E2] text-white font-semibold rounded-lg shadow-md hover:bg-[#155a8a] transition duration-300 ease-in-out transform hover:scale-105">
                                    Add Book
                                </button>

                                <button
                                    class="px-6 py-3 mt-3 bg-[#FF6B6B] text-white font-semibold rounded-lg shadow-md hover:bg-[#c74f4f] transition duration-300 ease-in-out transform hover:scale-105">
                                    Remove Book
                                </button>

                                <button
                                    class="px-6 py-3 mt-3 bg-[#6BD0FF] text-white font-semibold rounded-lg shadow-md hover:bg-[#4aa0c2] transition duration-300 ease-in-out transform hover:scale-105">
                                    View Current Books
                                </button>
                            </div>
                        </div>

                        <h1 class="text-4xl mt-10 font-semibold text-[#1F2123]">Borrowing Trends</h1>
                        <div class="mt-8 bg-white rounded-md shadow-lg p-6">
                            <div id="chart" class="h-64"></div>
                        </div>

                    </div>
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