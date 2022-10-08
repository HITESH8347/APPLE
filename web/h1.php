<HTML>
    <head>
        <title>add products</title>
    </head>
    <body>
        <form action="#" method="POST">
        <label for="name">Title:</label>
        <input type="text" id="name" name="title"placeholder="title"><br><br>
        <label for="image">image</label> 
        <input type="file" id="image" name="image"placeholder=""><br><br> 
        <label for="price">Price</label>
        <input type="text" id="price" name="price"placeholder="price"><br><br>
        <label for="de">Description</label>
       
        <input type="text" id="de" name="de"placeholder="Description"><br><br>
        <label>fecturech</label>
        <input type="number" name="fe"><br>
       <input type="submit" value="add products">
        </form>
    </body>
    </HTML>
<?php
$title=$_POST['title'];
$image=$_POST['image'];
$price=$_POST['price'];
$de=$_POST['de'];
$fe=$_POST['fe'];


$con=mysqli_connect('localhost','root','');

$sql="INSERT INTO products(title,image,price,description,featured) VALUES('$title','$image','$price','$de','$fe')";
mysqli_select_db($con,'website');
$a=mysqli_query($con,$sql);
if(isset($a)){
    echo "add";
}
else{
    echo "not";
}
mysqli_close($con);

?>