<?php

require 'connection.php';
$conn    = Connect();
$title    = $conn->real_escape_string($_POST['title']);
$release   = $conn->real_escape_string($_POST['release_date']);
$duration = $conn->real_escape_string($_POST['duration']);
$genre = $conn->real_escape_string($_POST['genre']);
$syn = $conn->real_escape_string($_POST['synopsis']);

$query   = "INSERT into aip (title,release_date,duration,genre,synopsis) VALUES('" . $title . "','" . $release . "','" . $duration . "','" . $genre . "','" . $syn . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}
else {
if( isset($_POST['title'] ) && isset( $_POST['duration'] )&& isset( $_POST['release_date'] )&& isset( $_POST['genre'] )&& isset( $_POST['synopsis'] ) )
{
    $txt= $_POST['title'].' , '.$_POST['duration'] . ','.$_POST['release_date'] .','.$_POST['genre'] .','.$_POST['synopsis']. '/'. PHP_EOL; 
    file_put_contents('fields.txt', $txt, FILE_APPEND);
}
	$myfile = fopen("fields.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("fields.txt"));
fclose($myfile);
}



$conn->close();

?>