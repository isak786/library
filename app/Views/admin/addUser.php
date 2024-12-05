<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
</head>
<body>
    <h1>Add User</h1>
    <form method="post" action="<?= base_url('admin/saveUser'); ?>">
        <label>First Name:</label>
        <input type="text" name="first_name" required><br>

        <label>Surname:</label>
        <input type="text" name="surname" required><br>

        <label>Email:</label>
        <input type="email" name="email" required><br>

        <label>Phone:</label>
        <input type="text" name="phone"><br>

        <label>Date of Birth:</label>
        <input type="date" name="dob"><br>

        <label>Gender:</label>
        <select name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br>

        <label>Role:</label>
        <select name="role">
            <option value="Guest">Guest</option>
            <option value="Admin">Admin</option>
        </select><br>

        <label>Password:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Save</button>
    </form>
</body>
</html>
