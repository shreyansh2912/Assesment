<?php

$pass = 12345;
echo"Enter your Password";
if(isset($_REQUEST['submit']))
{
    if($pass == $_REQUEST['pass'])
    {
        header("location:menu.php");
    }
    else
    {
        echo "<script>alert(' password is incorrect')</script>";
    }
}


?>


<form action="" method="post" >

<input type="text" name="pass" placeholder="" >
<button name="submit" >Submit</button>


</form>