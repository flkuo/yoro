<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name=$_post["name"];
$email=$_post["email"];
$phone=$_phone["phone"];
$msg=$_post["msg"];

echo "Name: " . $name . "<br>" ;
echo "Email: " . $email. "<br>" ;
echo "phone: " . $phone. "<br>" ;
echo "Msg: " . $msg;
 // Process the data (e.g., save it to a text file).

 $data = "Name: $name\nEmail: $email\n";

// Define the path to the text file
$filePath = "/home/ec2-user/form_data.txt";

// Save the data to the text file
    if (file_put_contents($filePath, $data, FILE_APPEND | LOCK_EX)) {
        echo "Form data has been saved successfully!";
    } else {
        echo "Failed to save form data.";
    }
}

?>
