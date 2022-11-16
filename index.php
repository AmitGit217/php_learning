<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <main>

        <form action="index.php" method="post">
            <input type="password" name="password" />

            <input type="submit" />
        </form>
        <br />
        Answer: <?php echo $_POST['password']; ?>
    </main>
</body>

</html>