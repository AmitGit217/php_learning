<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <main>

        <form action="index.php" method="get">
            <input type="number" name="num1" />
            <input type="number" name="num2" />
            <input type="submit" />
        </form>
        <br />
        Answer: <?php if (isset($_GET['num1']) && isset($_GET['num2'])) {
            echo $_GET['num1'] + $_GET['num2'];
        } else {
            echo 0;
        } ?>
    </main>
</body>

</html>