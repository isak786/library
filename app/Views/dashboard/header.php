<header class="flex items-center justify-between px-6 py-4 bg-white border-b-4  ">
                    <div class="flex items-center">
                        <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="flex items-center">


                        <div x-data="{ dropdownOpen: false }" class="relative">
                            <button @click="dropdownOpen = ! dropdownOpen"
                                class="relative block w-8 h-8 overflow-hidden rounded-full shadow focus:outline-none">
                                <img class="object-cover w-full h-full"
                                    src="<?= base_url('assets/images/profile.jfif')?>"
                                    alt="Your avatar">
                            </button>

                            <div x-show="dropdownOpen" @click="dropdownOpen = false"
                                class="fixed inset-0 z-10 w-full h-full" style="display: none;"></div>

                            <div x-show="dropdownOpen"
                                class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl"
                                style="display: none;">
                                <!-- <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#6BD0FF]  hover:text-white">Profile</a> -->
                               
                                <a href="<?= base_url('login')?>"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#6BD0FF] hover:text-white">Logout</a>
                            </div>
                        </div>
                    </div>
                </header>
<header class="flex items-center justify-between px-6 py-4 bg-white border-b-4  ">
                    <div class="flex items-center">
                        <button @click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="flex items-center">


                        <div x-data="{ dropdownOpen: false }" class="relative">
                            <button @click="dropdownOpen = ! dropdownOpen"
                                class="relative block w-8 h-8 overflow-hidden rounded-full shadow focus:outline-none">
                                <img class="object-cover w-full h-full"
                                    src="<?= base_url('assets/images/profile.jfif')?>"
                                    alt="Your avatar">
                            </button>

                            <div x-show="dropdownOpen" @click="dropdownOpen = false"
                                class="fixed inset-0 z-10 w-full h-full" style="display: none;"></div>

                            <div x-show="dropdownOpen"
                                class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl"
                                style="display: none;">
                                <!-- <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#6BD0FF]  hover:text-white">Profile</a> -->
                               
                                <a href="<?= base_url('login')?>"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#6BD0FF] hover:text-white">Logout</a>
                            </div>
                        </div>
                    </div>
                </header>