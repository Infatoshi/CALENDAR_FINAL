<?php


if(isset($_POST['forward'])){
                    
    echo 'Why was this day a forward day?';
    ?>
<form action="index.php" method="POST">
<input type="text" name="forwardInput" value="">
<input type="submit" name="forwardSubmit" value="Confirm">
<input type='hidden' name='date' value='<?php echo $_POST['date'] ?>'>
 

</form>
<?php

        
} elseif (isset($_POST['backward'])){

    echo 'Why was this day a backward day?';
    ?>
<form action="index.php" method="POST">
<input type="text" name="backwardInput" value="">
<input type="submit" name="backwardSubmit" value="Confirm">
<input type='hidden' name='date' value='<?php echo $_POST['date'] ?>'>

</form>
<?php

  
}


?>