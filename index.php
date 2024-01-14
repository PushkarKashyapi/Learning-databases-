<?php
if(isset($_POST['fullname'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);

if(!$con){
    die("this connection is failed". mysqli_connect_error());
}
//echo "you succeded connection.";//
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$sql = "INSERT INTO `petx`.`petx_info` (`Full_name`, `Email`, `Password`, `Confirm_password`) VALUES ('$fullname ',' $email', '$password', '$confirm_password');";
//echo $sql;

if($con->query($sql)==true){
   
    $insert = true;
}
else{
    echo "error: $sql<br> $con -> error";
}
$con-> close();
}



?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <div class=" bg-cover bg-center bg-[url('https://www.pixground.com/wp-content/uploads/2023/02/Mountain-Lake-Reflection-in-Nature-Scenery-4K-Wallpaper.jpg')] min-h-screen flex flex-col">
    <div class="  bg-transparent  max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
        <div class="bg-transparent px-6 py-8 rounded shadow-md text-black w-full">
            <h1 class="mb-8 text-3xl text-center text-white font-black "> "Sign Up" </h1>
            <?php
            if($insert == true){

            
           echo "<h5 class = 'mb-8 text-3xl text-center text-black color-black'> Submitted succesfully</h5>";
            }
            ?>
            <input 
                type="text"
                class="block border border-grey-light w-full p-3 rounded mb-4 font-style:cursive"
                name="fullname"
                placeholder="Full Name" />

            <input 
                type="text"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="email"
                placeholder="Email" />

            <input 
                type="password"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="password"
                placeholder="Password" />
            <input 
                type="password"
                class="block border border-grey-light w-full p-3 rounded mb-4"
                name="confirm_password"
                placeholder="Confirm Password" />

            <button
                type="submit"
                class="w-full text-center py-3 rounded bg-gray text-white bg-violet-500 focus:outline-none my-1 font-bold "
            > Create Account</button>
        </form>
       

            <div class="text-center text-sm text-white mt-4 font-style:cursive font-bold" >
                By Signing Up, You Agree To The 
                <a class="no-underline border-b border-white text-white font-bold" href="#">
                    Terms of Service
                </a> and 
                <a class="no-underline border-b border-white text-white font-bold" href="#">
                    Privacy Policy
                </a>
            </div>
        </div>

        <div class="text-white mt-6 font-bold">
            Already have an account? 
            <a class="no-underline border-b border-blue text-blue font-bold" href="../login/">
                Log in
            </a>.
        </div>
    </div>
</div>
<!--INSERT INTO `petx_info` (`Full_name`, `Email`, `Password`, `Confirm_password`) VALUES ('cdedwwddw', 'weqdqwdwwewe', 'qwddwqdwqqwqwdwq', 'wqdqdqqwddd');-->
</body>
</html>


    
   