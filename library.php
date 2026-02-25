
<?php

class Books {

    public $title;
    public $author;
    public $year;
    public $isAvailable;

    public function __construct($title, $author, $year, $isAvailable) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->isAvailable = $isAvailable;
    }

    public function borrowBook() {
        if ($this->isAvailable) {
            $this->isAvailable = false;
            echo "You have borrowed the book: {$this->title}<br><br>";
        } else {
            echo "The book '{$this->title}' has already been borrowed.<br><br>";
        }
    }

    public function returnBook() {
        if (!$this->isAvailable) {
            $this->isAvailable = true;
            echo "The book '{$this->title}' has been returned.<br><br>";
        } else {
            echo "The book '{$this->title}' is already available.<br><br>";
        }
    }

    public function displayBookInfo() {
        echo "Book Title: {$this->title}<br>";
        echo "Author: {$this->author}<br>";
        echo "Year: {$this->year}<br>";
        echo "Status: " . ($this->isAvailable ? "Available" : "Not Available") . "<br><br>";
    }
}

$sample1 = new Books("The Summer I Turned Pretty", "Jenny Han", 2009, true);
$sample2 = new Books("To All the Boys I've Loved Before", "Jenny Han", 2014, false);

$sample1->displayBookInfo();
$sample1->borrowBook();
$sample1->returnBook();

$sample2->displayBookInfo();
$sample2->borrowBook();
$sample2->returnBook();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>

</html>
