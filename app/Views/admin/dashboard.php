<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Admin Dashboard</h1>
    <a href="<?= base_url('/admin/addUser'); ?>">Add New User</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Surname</th>
            <th>Email</th>
            <th>role</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['id']; ?></td>
            <td><?= $user['first_name']; ?></td>
            <td><?= $user['surname']; ?></td>
            <td><?= $user['email']; ?></td>
            <td><?= $user['role']; ?></td>
            <td>
                <a href="<?= base_url('/admin/editUser/'.$user['id']); ?>">Edit</a>
                <a href="<?= base_url('/admin/deleteUser/'.$user['id']); ?>" onclick="return confirm('Are you sure?');">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
