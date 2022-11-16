<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <main>

        <form action="index.php" method="post">
            <div style="display:flex; flex-direction: column;">
                Apple: <input type="checkbox" name="fruits[]" value="apple" />
                Orange: <input type="checkbox" name="fruits[]" value="orange" />
                Pear: <input type="checkbox" name="fruits[]" value="pears" />
            </div>
            <input type="submit" />
        </form>
        <?php
        $fruits = $_POST['fruits'];
        echo $fruits[0];
        ?>
    </main>
</body>

</html>