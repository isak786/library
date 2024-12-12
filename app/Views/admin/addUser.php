<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add User</title>
    <link rel="stylesheet" href="<?= base_url('assets/style/main.css') ?>">
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-poppins">
    <div>
        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
            <?= view('dashboard/sidemenu'); ?>

            <div class="flex flex-col flex-1 overflow-hidden">
                <?= view('dashboard/header'); ?>

                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
                    <div class="container px-6 py-8 mx-auto">
                        <nav class="text-sm text-gray-600 mb-4" aria-label="Breadcrumb">
                            <ol class="list-none p-0 inline-flex">
                                <li class="flex items-center">
                                    <a href="#" class="text-blue-500 hover:underline" onclick="window.location.href='<?= base_url('/admin') ?>'">Dashboard</a>
                                    <svg class="w-4 h-4 mx-2 text-gray-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M7.05 14.95a1 1 0 010-1.41L11.59 9 7.05 4.46a1 1 0 111.41-1.41l5 5a1 1 0 010 1.41l-5 5a1 1 0 01-1.41 0z" />
                                    </svg>
                                </li>
                                <li class="flex items-center">
                                    <a href="<?= base_url('/admin/users'); ?>" class="text-blue-500 hover:underline">Users</a>
                                    <svg class="w-4 h-4 mx-2 text-gray-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M7.05 14.95a1 1 0 010-1.41L11.59 9 7.05 4.46a1 1 0 111.41-1.41l5 5a1 1 0 010 1.41l-5 5a1 1 0 01-1.41 0z" />
                                    </svg>
                                </li>
                                <li class="flex items-center">
                                    <span class="text-gray-500">Add User</span>
                                </li>
                            </ol>
                        </nav>

                        <div class="bg-white rounded-lg shadow-lg p-6">
                            <h1 class="text-2xl font-semibold text-gray-800 mb-4">Add User</h1>
                            <form method="post" action="<?= base_url('auth/processStaffSignup'); ?>" class="space-y-4">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-gray-700">First Name</label>
                                        <input type="text" name="first_name" required
                                            class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                                    </div>

                                    <div>
                                        <label class="block text-gray-700">Surname</label>
                                        <input type="text" name="surname" required
                                            class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                                    </div>

                                    <div>
                                        <label class="block text-gray-700">Email</label>
                                        <input type="email" name="email" required
                                            class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                                    </div>

                                    <div>
                                        <label class="block text-gray-700">Phone</label>
                                        <input type="text" name="phone"
                                            class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                                    </div>

                                    <div>
                                        <label class="block text-gray-700">Date of Birth</label>
                                        <input type="date" name="dob"
                                            class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                                    </div>

                                    <div>
                                        <label class="block text-gray-700">Gender</label>
                                        <select name="gender" required
                                            class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label class="block text-gray-700">Role</label>
                                        <select name="role"
                                            class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                                            <option value="Guest">Guest</option>
                                            <option value="Admin">Admin</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label class="block text-gray-700">Password</label>
                                        <input type="password" name="password" required
                                            class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500 focus:border-blue-500">
                                    </div>
                                </div>

                                <button type="submit"
                                    class="px-6 py-2 mt-4 text-white bg-blue-500 rounded-lg hover:bg-blue-700 focus:ring-blue-500">
                                    Save User
                                </button>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <script
        src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
        defer></script>
</body>

</html>
