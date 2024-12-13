<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Edit User</title>
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

        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 font-poppins">
          <div class="container px-6 py-8 mx-auto">
            <h1 class="text-2xl font-semibold text-gray-800 mb-4">Edit User</h1>
            <form method="post" action="<?= base_url('admin/updateUser/'.$user['id']); ?>" class="space-y-6">
              <div class="flex flex-col">
                <label for="first_name" class="text-sm font-medium text-gray-700">First Name</label>
                <input type="text" name="first_name" value="<?= $user['first_name']; ?>" required
                  class="mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
              </div>

              <div class="flex flex-col">
                <label for="surname" class="text-sm font-medium text-gray-700">Surname</label>
                <input type="text" name="surname" value="<?= $user['surname']; ?>" required
                  class="mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
              </div>

              <div class="flex flex-col">
                <label for="email" class="text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" value="<?= $user['email']; ?>" required
                  class="mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
              </div>

              <div class="flex flex-col">
                <label for="phone" class="text-sm font-medium text-gray-700">Phone</label>
                <input type="text" name="phone" value="<?= $user['phone']; ?>"
                  class="mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
              </div>

              <div class="flex flex-col">
                <label for="dob" class="text-sm font-medium text-gray-700">Date of Birth</label>
                <input type="date" name="dob" value="<?= $user['dob']; ?>"
                  class="mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
              </div>

              <div class="flex flex-col">
                <label for="gender" class="text-sm font-medium text-gray-700">Gender</label>
                <select name="gender"
                  class="mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                  <option value="Male" <?= $user['gender'] == 'Male' ? 'selected' : ''; ?>>Male</option>
                  <option value="Female" <?= $user['gender'] == 'Female' ? 'selected' : ''; ?>>Female</option>
                  <option value="Other" <?= $user['gender'] == 'Other' ? 'selected' : ''; ?>>Other</option>
                </select>
              </div>

              <div class="flex flex-col">
                <label for="password" class="text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" placeholder="Leave blank to keep existing password"
                  class="mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
              </div>

              <div class="flex flex-col">
                <label for="role" class="text-sm font-medium text-gray-700">Role</label>
                <select name="role"
                  class="mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                  <option value="Guest" <?= $user['role'] == 'Guest' ? 'selected' : ''; ?>>Guest</option>
                  <option value="Admin" <?= $user['role'] == 'Admin' ? 'selected' : ''; ?>>Admin</option>
                </select>
              </div>

              <button type="submit"
                class="w-full mt-6 px-6 py-3 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-700 transition duration-300">
                Update User
              </button>
            </form>
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

