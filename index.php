<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <main>
        <?php
        class Book
        {
            var $title;
            var $length;
        }

        $book1 = new Book();
        $book1->title = 'Harry Potter';
        $book1->length = 450;

        echo $book1->title;
        ?>
    </main>
</body>

</html>