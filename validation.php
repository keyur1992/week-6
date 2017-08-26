<?php // Initialize variables to null.
$title =""; // Sender title
$release_date =""; // Sender's release_date ID
$duration =""; // Subject of mail
$genre =""; // Subject of mail
$synopsis =""; // Subject of mail
$message =""; // Sender's Message
$titleError ="";
$release_dateError ="";
$durationError ="";
$genreError ="";
$synopsisError ="";
$messageError ="";
$successMessage =""; // On submittingform below function will execute.
if(isset($_POST['submit']))
 { // Checking null values in message.
			if (empty($_POST["title"]))
				{
								$titleError = "title is required";
				}
			else
 				{
					$title = test_input($_POST["title"]); // check title only contains letters and whitespace
				} // Checking null values inthe message.
			if (empty($_POST["release_date"]))
				{
					$release_dateError = "release_date is required";
				}
			else
 				{
					$release_date = test_input($_POST["release_date"]);
				} // Checking null values inmessage.
			if (empty($_POST["duration"]))
				{
					$durationError = "duration is required";
				}
			else
				{
					$duration = test_input($_POST["duration"]);
				}
//new

			if (empty($_POST["genre"]))
				{
					$genreError = "genre is required";
				}
			else
				{
					$genre = test_input($_POST["genre"]);
				}
//new2

			if (empty($_POST["synopsis"]))
				{
					$synopsisError = "synopsis is required";
				}
			else
				{
					$synopsis = test_input($_POST["synopsis"]);
				}

 // Checking null values inmessage.
// Checking null values inthe message.
if( !($title=='') && !($release_date=='') && !($duration=='')  &&!($genre=='') &&!($synopsis=='') )
			{ // Checking valid release_date.
 // Function for filtering input values.function test_input($data)
				{
					$data = trim($data);
					$data =stripslashes($data);
					$data =htmlspecialchars($data);
					return $data;
				}
			}
}
?>
