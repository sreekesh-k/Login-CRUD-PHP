<?php
include("db_connection.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">EDIT</th>
                <th scope="col">DELETE</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM items";

            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "    
                    <tr>
                    <th scope='row'>{$row['id']}</th>
                    <td> {$row['name']}</td>
                    <td> {$row['quantity']}</td>
                    <td> {$row['price']}</td>
                    <td><a href='edit.php?id={$row['id']}'>Edit</a></td>
                    <td><a href='delete.php?id={$row['id']}'>Delete</a></td>
                    </tr>
                ";
                }
            }
            ?>

        </tbody>
    </table>
    <a href='add.php'>add</a>
    <a href='logout.php'>logout <?php echo $_SESSION['email']; ?></a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>