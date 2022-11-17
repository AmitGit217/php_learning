<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <main>
        <?php
        function getMax($num1, $num2)
        {
            return $num1 > $num2 ? $num1 : $num2;
        }
        echo getMax(17, 4);
        ?>
    </main>
</body>

</html>