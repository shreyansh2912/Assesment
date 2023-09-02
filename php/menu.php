


<h1>*************** MAIN MENU ***************</h1>
<h3>#########  1. Add Books</h3>
<h3>#########  2. Delete Books</h3>
<h3>#########  3. Search Books</h3>
<h3>#########  4. View Book List</h3>
<h3>#########  5. Edit Book Record</h3>
<h3>#########  6. Change Password</h3>
<h3>#########  7. Close Appliction</h3>
<h1>*******************************************</h1>
<h3>Enter your choice: </h3>    
<form action="" method="post" >
<input type="text" name= "data">
<button name="submit" >Submit</button>

</form>




<?php 
session_start();

if(isset($_REQUEST['submit']))   
{
switch ($_REQUEST['data']) 
     {
        case 1:
            header("location:categories.php");
            break;
        
        case 2:
            // echo "<h3> Enter the Book ID to Delete </h3>";
            echo "<form action='' method='post'>";
            echo "<input type='number' name='del'>";
            echo "<button name= 'del' >Delete</button>";
            if(isset($_REQUEST['del']))
            {
                session_unset();
                session_destroy();       
            }
            echo "</form>";
            break;
        
        case 3:
            echo "<h3> Search the book </h3>";
            echo "<form action='' method='post'>";
            echo "<input type='number' name='ser'>";
            echo "<br>";
            echo"Available boooks are";
            echo "<br>";
            echo "<h3>*******Books list*******</h3>";
            echo"<h4>Name<h4>";
            print_r($_SESSION['book']);
            echo "</form>";
            break;  
            
        case 4:
            echo "<h3> Book list </h3>";
            echo "<form action='' method='post'>";
            echo "<input type='number' name='del'>";
            echo "<br>";
            echo"Available boooks are";
            echo "<br>";
            echo "<h3>*******Books list*******</h3>";
            echo"<h4>Name<h4>";
            print_r($_SESSION['book']);
            echo "</form>";
            break;
         
        case 5:
            header("location:categories.php");
            break;
            
        case 6:
            header("location:categories.php");
            break;
            
        case 7:
            header("location:library.php");
            break;  
            
        default:
        {
            
            echo "<script>alert('Enter valid number')</script>";
  
     }
    }
}

?>

