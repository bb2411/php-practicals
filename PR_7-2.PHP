
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
<form method="post">
    <input type="text" name="bookname" placeholder="book name">
    <input type="text" name="author" placeholder="author">
    <input type="text" name="price" placeholder="price">
    <input type="text" name="sell" placeholder="selling price">
    <button type="submit">submit</button>
</form>
<?php  
if($_SERVER['REQUEST_METHOD']=="POST"){    
class book1{
    public $Author;
    public $name;
    public $price;
    public $sellingprice;
    function putdata($author,$name,$price,$sell){
        $this->Author=$author;
        $this->name=$name;
        $this->price=$price;
        $this->sellingprice=$sell;
    }
    function printdata(){
        echo "author :".$this->Author."<br>";
        echo "name :".$this->name."<br>";
        echo "price :".$this->price."<br>";
    }
    function profit(){
        echo "profit :".($this->sellingprice-$this->price);
    }
    }
    
    $a=new book1();
    $a->putdata($_POST['author'],$_POST['bookname'],$_POST['price'],$_POST['sell']);
    $a->printdata();
    $a->profit();
}
?>