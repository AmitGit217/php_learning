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

            function showTitle()
            {
                echo $this->title;
            }
        }
        $book1 = new Book('Harry Potter');
        $book1->showTitle();
        ?>





    </main>
</body>

</html>