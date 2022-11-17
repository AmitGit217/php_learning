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
            function __construct($aTitle, $price)
            {
                $this->title = $aTitle;
                $this->setPrice($price);
            }

            function showTitle()
            {
                echo $this->title;
                echo $this->price;
            }

            function setPrice($price)
            {
                $arr = [45, 47, 38];
                if (in_array($price, $arr)) {
                    return $this->price = $price;
                } else {
                    return $this->price = 10;
                }
            }
        }

        class CookBook extends Book
        {
        }
        $book1 = new Book('Harry Potter', 16);
        $book2 = new CookBook('Hello World', 43);
        $book1->showTitle();
        $book2->showTitle();
        ?>





    </main>
</body>

</html>