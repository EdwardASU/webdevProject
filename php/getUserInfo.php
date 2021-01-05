<?php
include_once 'login.php';
include_once 'config.php';
$username = $_POST['username'];
$sql = "SELECT * from user where username = '$username'";
$result = $conn->query($sql);
if(!$result) die('database');
if($result->num_rows>0){
    $data = $result->fetch_array(MYSQLI_ASSOC);
    $fName = $data['fName'];
    $address1 = $data['address1'];
    $address2 = $data['address2'];
    $address3 = $data['address3'];
    $postCode = $data['postCode'];
    $state = $data['state'];
    $phone = $data['phone'];
    $email = $data['email'];
    

    echo "
    <h3>Your Info</h3>
        <hr>
        <h6>Change Password</h6>
        <input type='password' name='password' id='Oldpassword' placeholder='Your Old Password' class='password' ><br>
        <input type='password' name='password' id='password1' placeholder='New password' class='password' ><br>
        <input type='password' name='password' id='password2' placeholder='Re type your new password' class='password' ><br>
        <hr>
        <h6>Address and personal info</h6>
        <input type='text' name='fullName' id='fullName' class='fName' placeholder='Full Name' value='$fName'  ><br>
        <input type='text' name='address1' id='address1' class='address' placeholder='Address 1' value='$address1'  ><br>
        <input type='text' name='address2' id='address2' class='address' placeholder='Address 2' value='$address2' ><br>
        <input type='text' name='address3' id='address3' class='address' placeholder='Address 3' value='$address3'><br>
        <input type='text' name='postCode' id='postCode' class='address' placeholder='Post Code' value='$postCode'><br>
        <input type='text' name='state' id='state' class='address' placeholder='State' value='$state'><br>
        <input type='text' name='phone' id='phone' class='address' placeholder='Phone' value='$phone'><br>
        <input type='text' name='email' id='email' class='address' placeholder='Email' value='$email'><br>
        <button onclick='UpdateInfo($username)' class='register'>Update</button><br>
        <hr>
        <button onclick='backHomepage()' class='back'>Back</button>";
}

?>