<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <main>

        <form action="index.php" method="post">
            num1: <input type="number" name="num1" />
            op: <input type="text" name="op" />
            num2: <input type="number" name="num2" />

            <input type="submit" />
        </form>
        <?php
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $op = $_POST['op'];

        if ($op == '+') {
            echo $num1 + $num2;
        } elseif ($op == '-') {
            echo $num1 + $num2;
        } elseif ($op == '*') {
            echo $num1 * $num2;
        }
        ?>
    </main>
</body>

</html>