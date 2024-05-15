<?php
class Book {
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            return false;
        }
    }

    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function borrowBook($book) {
        return $book->borrowBook();
    }

    public function returnBook($book) {
        $book->returnBook();
    }
}


// Creates Book object
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Creates Member Object
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// BorrowBook method
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Displays no of Available Copies of each book
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}<br/>";
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}<br/>";

?>