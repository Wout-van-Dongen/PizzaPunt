<!DOCTYPE html>
<html>

    <h1>PizzaPunt MD5 Password Generator</h1>

    <p>This is a password generator for if you wish to add or change users directly into the data base for testing purposes</p>

      <?php
      $pass;
        if (!empty($_GET["pass"])) {
        $pass = $_GET["pass"];
        }else{
            $pass = "";
        }
            ?>

    <form action="PasswordGenerator.php" method="get">
        <label>Type here your password in plain text</label>
        <input type="text" name="pass" value="<?php print $pass ?>"/><input type="submit" value="Convert to md5"/>
        <?php
        if ($pass!="") {
            ?>

        <div>
        <label>MD5 Output:</label>
        <span>
            <?php print md5($pass);?>            
        </span>
        </div>
            <?php
        }
        ?>

    </form>


</html>