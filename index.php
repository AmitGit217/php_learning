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
            function __construct($aTitle)
            {
                $this->title = $aTitle;
            }
        }
        $book1 = new Book('Harry Potter');
        echo $book1->title;
        ?>
    </main>
</body>

</html>