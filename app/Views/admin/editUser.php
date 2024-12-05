<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form method="post" action="<?= base_url('admin/updateUser/'.$user['id']); ?>">
        <label>First Name:</label>
        <input type="text" name="first_name" value="<?= $user['first_name']; ?>" required><br>
        
        <label>Surname:</label>
        <input type="text" name="surname" value="<?= $user['surname']; ?>" required><br>
        
        <label>Email:</label>
        <input type="email" name="email" value="<?= $user['email']; ?>" required><br>
        
        <label>Phone:</label>
        <input type="text" name="phone" value="<?= $user['phone']; ?>"><br>
        
        <label>Date of Birth:</label>
        <input type="date" name="dob" value="<?= $user['dob']; ?>"><br>
        
        <label>Gender:</label>
        <select name="gender">
            <option value="Male" <?= $user['gender'] == 'Male' ? 'selected' : ''; ?>>Male</option>
            <option value="Female" <?= $user['gender'] == 'Female' ? 'selected' : ''; ?>>Female</option>
            <option value="Other" <?= $user['gender'] == 'Other' ? 'selected' : ''; ?>>Other</option>
        </select><br>
        
        <label>Password:</label>
        <input type="password" name="password" placeholder="Leave blank to keep existing password"><br>
        
        <label>Role:</label>
        <select name="role">
            <option value="Guest" <?= $user['role'] == 'Guest' ? 'selected' : ''; ?>>Guest</option>
            <option value="Admin" <?= $user['role'] == 'Admin' ? 'selected' : ''; ?>>Admin</option>
            </select><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
