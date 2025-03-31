 **Display Users (users.php):**

```php
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>
</head>
<body>
    <h2>Users List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM users");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
```
