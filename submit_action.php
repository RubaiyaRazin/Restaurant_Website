<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Order successfull.</title>
</head>

<body style="background-color: #202020; ">
        <p style="padding-left: 5%; padding-top: 5%; color: #EC4D37;font: 2.5rem italic;">
                <?php

                if (isset($_POST["submit"])) {

                        $name = $_POST["name"];
                        $email = $_POST["email"];
                        $phone_number = $_POST["phone_number"];
                        $food_name = $_POST["food_name"];
                        $address = $_POST["address"];

                        echo $name . "! Your order placed successfully!";
                }

                $conn = mysqli_connect("localhost", "root", "", "restaurant_website");         
                $sql = "Insert into order_info(name,email,phone_number,food_name,address) values('$name', '$email',$phone_number,'$food_name','$address')";
                
                if(mysqli_connect_errno()){
                        echo "failed to connect MYSQL : ".mysqli_connect_error();         //kono error thakle ekhane koto number line e ki error ache ta bole dibe.
                }

                if(mysqli_query($conn, $sql)){           // ei [ mysqli_querry() ] function diye connection channel r $conn variable & $sql variable k connect korlam. mane querry ta k connection channel e exicute korar jonno ekti function use korlam
                        // echo "sucessfully added";
               }      
               else{
                       echo "error: ". mysqli_connect($conn);   
               }
                
                ?>
        </p>
        <br>
        <p style="color: #fcc39b; padding-left: 10%; font: 2rem italic;"> Thank you for your order : ) </p>
        <p style="color: #daf7a6; padding-left: 15%; font: 2rem italic;"> We truly value our loyal customers. Thanks for making who we are!</p>

</body>

</html>