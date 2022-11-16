<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <main>


        <form action="index.php" method="get">
            Name: <input type="text" name="name" />
            <input type="submit" />
        </form>
        <br />

        <?php    
        echo $_GET["name"]
    ?>
    </main>
</body>

</html>