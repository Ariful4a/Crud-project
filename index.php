<?php include "database-connection.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- tailwind and desyUi link  -->  
<link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
<style>
     /* Custom Arrow Icon for Select */
  .custom-select {
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='gray'%3E%3Cpath fill-rule='evenodd' d='M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z' clip-rule='evenodd'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 0.5rem center;
    background-size: 1.5em;
    padding-right: 2.5rem;
  }
</style>

</head>
<body>
    <h1 class="text-3xl font-bold underline text-center text-red-500 mb-8 pt-8">This is a CUARD Project</h1>
    <!-- This is from section  -->
   <div class="flex justify-center content-center bg-teal-400 py-10">
   <form action="" method="post" class="bg-white p-8 rounded-lg">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <div>
            <label for="username">Fast Name :</label><br>
            <input type="text" name="firstname" id="firstname" placeholder="Type your first name" class="w-full input input-bordered mt-3 focus:border-blue-500 focus:outline-none focus:shadow-lg"><br>
            </div>
            <div>
            <label for="username">Last Name :</label><br>
            <input type="text" name="lastname" id="lastname" placeholder="Type your last name" class="w-full input input-bordered mt-3 mb-3 focus:border-blue-500 focus:outline-none focus:shadow-lg"><br>  
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <div>
            <label for="email">Email :</label><br>
            <input type="email" name="email" id="email" placeholder="Type your email" class="w-full input input-bordered mt-3 focus:border-blue-500 focus:outline-none focus:shadow-lg"><br>
            </div>
            <div>
            <label for="password">Password :</label><br>
            <input type="password" name="pass" id="pass" placeholder="Type your password" class="w-full input input-bordered mt-3 mb-3 focus:border-blue-500 focus:outline-none focus:shadow-lg"><br>  
            </div>
        </div>
        <label for="password">Confirm Password :</label><br>
        <input type="password" name="conpass" id="conpass" placeholder="Type your Confirm password" class="w-full input input-bordered mt-3 mb-3 focus:border-blue-500 focus:outline-none focus:shadow-lg">
        <label for="password">Phone Number :</label><br>
        <input type="number" name="number" id="number" placeholder="Type your Number" class="w-full input input-bordered mt-3 mb-3 focus:border-blue-500 focus:outline-none focus:shadow-lg">
        <br>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <div>
            <label for="gender">Gender :</label><br>
            <select name="gender" id="gender" class="custom-select input input-bordered w-full max-w-xs mt-3 focus:border-blue-500 focus:outline-none focus:shadow-lg">
                <option value="" disabled selected>Select your gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            </div>
            <div>
            <label for="religion">Religion :</label><br>
            <select name="religion" id="religion" class="custom-select input input-bordered w-full max-w-xs mt-3 mb-3 focus:border-blue-500 focus:outline-none focus:shadow-lg">
                <option value="" disabled selected>Select your religion</option>
                <option value="Islam">Islam</option>
                <option value="Hinduism">Hinduism</option>
                <option value="Christian">Christian</option>
            </select>
            </div>
        </div>
        <div>
            <label for="relation">Relation :</label><br>
            <select name="relation" id="relation" class="custom-select input input-bordered w-full mt-3 mb-3 focus:border-blue-500 focus:outline-none focus:shadow-lg">
                <option value="" disabled selected>Select your relation</option>
                <option value="Single">Single</option>
                <option value="married">Married</option>
            </select>
            </div>
        <label for="date">Date of Birth :</label><br>
        <input type="date" name="date" id="date" class="w-full input input-bordered mt-3 mb-3 focus:border-blue-500 focus:outline-none focus:shadow-lg">
        <br>
        <label for="address">Address :</label><br>
        <textarea name="address" id="address" cols="30" rows="10" placeholder="Type your address" class="w-full h-32 resize-none input input-bordered mt-3 mb-3 focus:border-blue-500 focus:outline-none focus:shadow-lg"></textarea>
        <input type="submit" name="register" class="bg-red-500 text-white p-2 rounded-lg px-11 w-full focus:shadow-lg" value="Submit" class="btn">
        <!-- chack box  -->
         <div>
            <div>
            <input type="checkbox" id="terms" name="terms" value="agree" class="mt-4 mr-2">
            <label for="terms">I agree to the terms and conditions</label>
            </div>
        </div>
     </form>
   </div>
</body>
</html>

<!-- php  -->

<?php 


if(isset($_POST['register'])){
    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $email     = $_POST['email'];
    $password  = $_POST['pass'];
    $password2 = $_POST['conpass'];
    $number    = $_POST['number'];
    $gender    = $_POST['gender'];
    $religion  = $_POST['religion'];
    $relation  = $_POST['relation'];
    $date      = $_POST['date'];
    $address   = $_POST['address'];

    $query = "INSERT INTO my_form values ('$firstname', '$lastname', '$email', '$password', '$password2', '$number', '$gender', '$religion', '$relation', '$date', '$address' )";

    $data = mysqli_query ( $conn, $query);

    if($data){
        echo "Data inserted into Database";
    }
    else{
        echo "failed to insert";
    }
 

}







?>
