<?
include 'bd.php';

if($_POST){
    $title=$_POST['title'];
    $insert = mysqli_query($bd, "INSERT INTO `myadmin`(`title`) VALUES ('$title')");

    header("location:index.php");
}
?>