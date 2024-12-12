<div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
  class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>
<div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
  class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto bg-[#1F2123] lg:translate-x-0 lg:static lg:inset-0">
  <div class="flex items-center px-6 py-4 bg-[#1F2123]">
    <a href="<?= base_url('inventory') ?>">
      <div class="flex items-center">
        <img src="<?= base_url('assets/images/logo.png') ?>" style="height: 40px;width: 40px;" alt="">
        <span class="mx-2 text-3xl font-semibold text-white uppercase tracking-wide">LMS</span>
      </div>
    </a>
  </div>
  <nav class="mt-10">

    <div x-data="{ open: false }">
      <a href="#" @click.prevent="open = !open"
        class="flex items-center px-6 py-3 mt-4 text-gray-100 transition duration-300 ease-in-out rounded-md">
        <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 20l-9-7 9-7 9 7-9 7z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 20V4" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M3 12h18" />
        </svg>
        <span class="mx-3" onclick="window.location.href='<?= base_url('/guest') ?>'">My Books</span>
      </a>
    </div>


    <div x-data="{ open: false }">
      <a href="#" @click.prevent="open = !open"
        class="flex items-center px-6 py-3 mt-4 text-gray-100 transition duration-300 ease-in-out rounded-md">
        <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M5.121 17.804A6 6 0 1112 18m9 3a9 9 0 10-18 0 9 9 0 0018 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M15 10l4.5 4.5M15 14.5L19.5 10" />
        </svg>
        <span class="mx-3" onclick="window.location.href='<?= base_url('/accountmanagement') ?>'">Account Management</span>
      </a>
    </div>
  </nav>
</div>