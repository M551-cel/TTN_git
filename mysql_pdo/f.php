<?php
//include("config.php");
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$contact = $_POST['con'];
echo $fname;
echo $lname;
try {

    // $sql = "INSERT INTO form (fname, lname, email,contact) 
    // VALUES ('John2', 'Doe2', 'john2@example.com',9260407448)";
    // // use exec() because no results are returned
    // $conn->exec($sql);
    // echo "New record created successfully";
    $con = new PDO('mysql:host=127.0.0.1;dbname=bootcamp','debian-sys-maint','CjYm4CRMdGNEbMCi');
    var_dump($con);
    $sql1 =$con->exec("INSERT INTO EMP (f_name,l_name,email,contact_no) values ('$fname','$lname','$email','$contact')");
    //$sql = "INSERT INTO emp (f_name,l_name,email,contact_no) 
    //values (:fname, :lname, :email, :contact)";
    //$stmt = $conn->prepare($sql);
    //$stmt->bindParam(':f_name',$fname);
    //$stmt->bindParam(':l_name',$lname);
    //$stmt->bindParam(':email',$email);
    //$stmt->bindParam(':contact_no',$contact);
    // $fname = "raman";
    // $lname = "dhaliwal";
    // $email = "raman@example.com";
    // $contact="988845233";
    // $stmt->execute();
    echo "records added";
    $con = null;
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

   
?>