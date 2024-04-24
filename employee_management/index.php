<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Management System</title>
</head>
<body>
    <h2>Add Employee</h2>
    <form action="add_employee.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" required><br>
        <label for="department">Department:</label><br>
        <input type="text" id="department" name="department" required><br><br>
        <input type="submit" value="Add Employee">
    </form>

    <h2>Employees</h2>
    <div id="employeeList">
        <?php include 'display_employees.php'; ?>
    </div>
</body>
</html>
