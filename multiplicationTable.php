<form method="POST">
    <input type="text" name="data">
    <input type="submit"value="table">




</form>
<?php
    $d=$_POST['data'];
    for($x=$d;$x<=$d*10;$x++)
        {
            if($x%$d==0)
                {
                    echo $x."<br>";
                }
            
        }

?>