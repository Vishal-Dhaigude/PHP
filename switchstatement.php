<html>

<body>
    <h1>company employees</h1>
    <form action="http://localhost/tri.php" method="POST">
        userid:<input type="text" name="data"><br><br>
        
        <input type="submit" value="check">
    </form>
</body>
<?php
    
    $d=$_POST["data"];
    switch($d)
    {
        case 101:
            echo"rajesh[manager]";
        break;
        case 102:
            echo"raj[supervisor]";
        break;
        case 101:
            echo"ashok[staff]";
        break;
        case 101:
            echo"amit[employee]";
        break;
        default:
             echo"this id is not listed";
    }
        
    
   
?>
</html>