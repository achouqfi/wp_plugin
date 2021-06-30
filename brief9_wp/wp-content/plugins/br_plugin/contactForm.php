<?php

if(isset($_POST['submit'])){

    wp_tab();
    insert_data();
}



function wp_tab(){

    $connection = mysqli_connect('localhost','user','user');
    mysqli_select_db($connection,"wp_brief9");

    $sql = "CREATE TABLE contactUs(id int NOT NULL PRIMARY KEY AUTO_INCREMENT, names varchar(255) NOT NULL,phone varchar(255) NOT NULL,email varchar(55) NOT NULL, messages varchar(255) NOT NULL)";
    $result = mysqli_query($connection, $sql);
    return $result;

}

function insert_data(){

    $connection = mysqli_connect('localhost','user','user');
    mysqli_select_db($connection,"wp_brief9");

    $name = $_POST['nom'];
    $phone = $_POST['telephone'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    if(empty($name) && empty($phone) && empty($email) && empty($message))
    {
     echo '<h1 style="color:red;">Remplir le formulaire</h1>';

    }
    else
    {
         $query="INSERT INTO contactUs(names,phone,email,messages)" . "VALUES ('$name','$phone','$email','$message')";
         $result=mysqli_query($connection,$query);
    }
}
?>

<div class="wrap">
 
  <h2>Plugin contact</h2>
 
  <div class="metabox-holder">
      <form method="post" action="">
            <input type="text" name="nom" value="" placeholder="First name " />
            <input type="text" name="telephone" value=""  placeholder="telephone " />
            <input type="email" name="email" value=""  placeholder="Email" />
            <textarea name="message" value=""  placeholder="Message"></textarea></br>
            <input type="submit" name="submit" value="Send"  />
      </form>
    </div>
  </div>
</div>