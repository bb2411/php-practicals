
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
<form method="post">
    <input type="text" name="bookname" placeholder="book name">
    <input type="text" name="author" placeholder="author">
    <input type="text" name="price" placeholder="price">
    <button type="submit">submit</button>
</form>
<?php  
if($_SERVER['REQUEST_METHOD']=="POST"){    
class book{
    public $Author;
    public $name;
    public $price;
    function __construct($author,$name,$price){
        $this->Author=$author;
        $this->name=$name;
        $this->price=$price;
    }
    function printdata(){
        echo "author :".$this->Author."<br>";
        echo "name :".$this->name."<br>";
        echo "price :".$this->price."<br>";
    }
    function __destruct(){
        echo "<br>destructor called";
    }
    }
    
    $a=new book($_POST['author'],$_POST['bookname'],$_POST['price']);
    $a->printdata();
    
}
?>