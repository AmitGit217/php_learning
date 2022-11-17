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
            public $title;
            private $price;
            function __construct($aTitle, $aPrice)
            {
                $this->title = $aTitle;
                $this->price = $aPrice;
            }

            function showTitle()
            {
                echo $this->title;
                echo $this->price;
            }
        }
        $book1 = new Book('Harry Potter', 45);
        $book1->showTitle();
        ?>





    </main>
</body>

</html>