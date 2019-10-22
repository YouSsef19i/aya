<?php
session_start();
if(isset($_SESSION["user"]))
{
    echo "you're signed in!"."<br>";
    echo "to update your data  ";
    echo "<a href='updateform.php'>update</a>";
    echo "to delete data";
    echo "<a href='delete.php'>delete</a>";


}
else
{
    echo "you're not signed in!";
}
?>