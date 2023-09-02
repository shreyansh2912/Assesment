

<h1>*************** SELECT CATEGORIES ***************</h1>
<h3>#########  1. Computer</h3>
<h3>#########  2. Electronics</h3>
<h3>#########  3. Electrical</h3>
<h3>#########  4. Civil</h3>
<h3>#########  5. Mechanical</h3>
<h3>#########  6. Architecture</h3>
<h3>#########  7. Back to main menu</h3>
<h1>*******************************************</h1>
<h3>Enter your category number: </h3>
<form action="" method="post" >
<input type="text" name= "data">
<button name= "submit" >Submit</button>
</form>


<?php


session_start();

if(isset($_REQUEST['submit']))   
{
    echo "<h2>Enter the Informtion Below</h2>";
    switch ($_REQUEST['data']) 
    {
        case 1:
            echo "<form action='' method='post'>";
            echo"<h3>Category : Computer </h3>";
            echo"<h3>Book Id : 1 </h3>";
            echo"<h3>Book Name: <input type='text' name='book_name' required ></h3>";
            echo"<h3>Author: <input type='text' name='author'required ></h3>";
            echo"<h3>Quantity: <input type='number' name='quantity' required></h3>";
            echo"<h3>Price: <input type='text' name='price'  required></h3>";
            echo"<button name='btn'>Submit</button>";
            echo "</form>";
            break;
            
        case 2:
            echo "<form action='' method='post'>";
            echo"<h3>Category : Electronics </h3>";
            echo"<h3>Book Id : 2 </h3>";
            echo"<h3>Book Name: <input type='text' name='book_name' required ></h3>";
            echo"<h3>Author: <input type='text' name='author'required ></h3>";
            echo"<h3>Quantity: <input type='number' name='quantity' required></h3>";
            echo"<h3>Price: <input type='text' name='price' required></h3>";
            echo"<button name='btn'>Submit</button>";
            echo "</form>";
            break;
        
        case 3:
            echo "<form action='' method='post'>";
            echo"<h3>Category : Electrical </h3>";
            echo"<h3 name= 'id' >Book Id : 3 </h3>";
            echo"<h3>Book Name: <input type='text' name='book_name' required ></h3>";
            echo"<h3>Author: <input type='text' name='author'required ></h3>";
            echo"<h3>Quantity: <input type='number' name='quantity' required></h3>";
            echo"<h3>Price: <input type='text' name='price' required></h3>";
            echo"<button name='btn'>Submit</button>";
            echo "</form>";
            break;
            
        case 4:
            echo "<form action='' method='post'>";
            echo"<h3>Category : Civil </h3>";
            echo"<h3>Book Id : 4 </h3>";
            echo"<h3>Book Name: <input type='text' name='book_name' required ></h3>";
            echo"<h3>Author: <input type='text' name='author'required ></h3>";
            echo"<h3>Quantity: <input type='number' name='quantity' required></h3>";
            echo"<h3>Price: <input type='text' name='price' required></h3>";
            echo"<button name='btn'>Submit</button>";
            echo "</form>";
            break;
         
        case 5:
            echo "<form action='' method='post'>";
            echo"<h3>Category : Mechanical </h3>";
            echo"<h3>Book Id : 5 </h3>";
            echo"<h3>Book Name: <input type='text' name='book_name' required ></h3>";
            echo"<h3>Author: <input type='text' name='author'required ></h3>";
            echo"<h3>Quantity: <input type='number' name='quantity' required></h3>";
            echo"<h3>Price: <input type='text' name='price' required></h3>";
            echo"<button name='btn'>Submit</button>";
            echo "</form>";
            break;
            
        case 6:
            echo "<form action='' method='post'>";
            echo"<h3>Category : Architecture </h3>";
            echo"<h3>Book Id : 6 </h3>";
            echo"<h3>Book Name: <input type='text' name='book_name' required ></h3>";
            echo"<h3>Author: <input type='text' name='author'required ></h3>";
            echo"<h3>Quantity: <input type='number' name='quantity' required></h3>";
            echo"<h3>Price: <input type='text' name='price' required></h3>";
            echo"<button name='btn'>Submit</button>";
            echo "</form>";
            break;
            
        case 7:
            header("location:menu.php");
            break;  
            
        default:
        {
            
            echo "<script>alert('Enter valid number')</script>";
        }
    }
}


    if (isset($_REQUEST['btn']))
    {
        $hi = array ($_SESSION['book'] = $_REQUEST['book_name'] , $_REQUEST['author'] ,$_REQUEST['quantity'] ,$_REQUEST['price'] );
        foreach ($hi as  $value) 
        { 
            echo"<pre>";
            print_r($value);
            echo"</pre>";
        }
    }

?>
