1. **Database Setup:**

Create a MySQL database and table using this SQL script:

```sql
CREATE DATABASE simple_website;

USE simple_website;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE
);
```



 **Homepage (index.php):**

```php
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Website</title>
</head>
<body>
    <h1>Welcome to My Simple PHP Website</h1>
    <a href="add_user.php">Add User</a> |
    <a href="users.php">View Users</a>
</body>
</html>
```





