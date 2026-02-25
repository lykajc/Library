
<?php

class Books {

public $title;
public $author;
public $year;
public $isAvailable;
    


    public function __construct($title, $author, $year, $isAvailable){
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->isAvailable = $isAvailable;
    }

    public function borrowBook(){
        if($this->isAvailable){
            $this->isAvailable = false;
            echo "You have borrowed the book: " . $this->title;
            echo "<br>";
        } else {
            echo "The book: " . $this->title. " has been borrowed ";
            echo "<br>";
            
        }


        }

    public function returnBook(){
        if(!$this->isAvailable){
            $this->isAvailable = true;
            echo "The book title: {$this->title} has been returned <br>";
            echo "<br>";
        } else {
            echo "The book title: {$this->title}  is now available <br>";
            echo "<br>";
        }
        }

    public function displaybookinfo(){
        echo "Book Title: " . $this->title;
        echo "Author: " .$this->author;
        echo "Year: " . $this->year;
        if($this->isAvailable){
            echo "Status: this book is available";
        }else {
            echo "Status: this book is not available";
        }
        }
    }

    $sample1 = new Books("The Summer I turned pretty", "Jenny Han", 2009, true);
    $sample2 = new Books("To all the boys I've loved before", "Jenny Han", 2014, false);

    echo $sample1->displaybookinfo()."<br>";
    echo $sample1->borrowBook()."<br>";
    echo $sample1->returnBook()."<br>";
    echo "<br>";

    echo $sample2->displaybookinfo()."<br>";
    echo $sample2->borrowBook()."<br>";
    echo $sample2->returnBook()."<br>";

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