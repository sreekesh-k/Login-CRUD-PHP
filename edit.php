<?php
include("db_connection.php");
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $id = $_GET['id'];
    $sql = "SELECT * FROM items WHERE id='{$id}'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uid = $_POST['id'];
    $name = $_POST['name'];
    $qnt = $_POST['qnt'];
    $price = $_POST['price'];

    $sql = "UPDATE items SET name='$name', quantity='$qnt',price='$price' WHERE id='{$uid}'";
    mysqli_query($conn, $sql);

    header("Location: welcome.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">id</label>
                <input type="text" class="form-control" name="id" value="<?php echo $row['id']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">USER NAME</label>
                <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="number" class="form-control" name="qnt" value="<?php echo $row['quantity']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="number" class="form-control" name="price" value="<?php echo $row['price']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>