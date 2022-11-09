<b>Syahidah Nur Rahmah <br>
XI RPL<br></b>

<?php 
class Document {
    public $author;
    public $date;
    public $getAuthors;
    public $addAuthors;
    public $title;
    public $getsubject;

    public function author(){
        echo "<h3>DOCUMENT</h3>";
        return("Nama Author : ").$this->author;
    }
    public function date(){
        return("Tanggal Pembuatan :").$this->date;
    }
}
class Book extends Document{
    public function Title(){
        echo "<h3>BOOK</h3>";
        return("Judul Buku : ").$this->title;
    }

    public function GetAuthors(){
        return("Author karya : ").$this->getAuthors;
    }
}
class Email extends Document{
    public function Get(){
        return("Nama Subject : ").$this->getsubject;
    }

    public function AddAuthor(){
        return("Tambah Author : ").$this->addAuthors;
    }
}

$doc = new Document();
$doc -> author = "Sasya <br>";
echo $doc -> author();
$doc -> date = "10-10-2006 <br>";
echo $doc -> date();

$buku = new Book();
$buku -> title = "Mozart <br>";
echo $buku -> Title();
$buku -> getAuthors = "Deviana <br>";
echo $buku -> GetAuthors();

$email = new Email();
echo "<h3>EMAIL</h3>";
$email -> getsubject = "Sasya <br>";
echo $email -> Get();
$email -> addAuthors = "Husaini <br>";
echo $email -> AddAuthor(); 
?>