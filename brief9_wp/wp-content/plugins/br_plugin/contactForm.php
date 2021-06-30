<?php
//insertion a la DB
if(isset($_POST['submit'])){

  //include cnx with DB
  global $wpdb;
  //declaration de prefix
  $table_name=$wpdb->prefix."contactUs";

  $name = $_POST['nom'];
  $phone = $_POST['telephone'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  //verification des inputs 
  if(!empty($name) && !empty($phone) && !empty($email) && !empty($message))
  {
    //requette d'insertion a la table 
    $wpdb->insert(
      $table_name,
      array(
      "names"=>$name,
      "phone"=>$phone,
      "email"=>$email,
      "messages"=>$message
      ),
      array(
      "%s",
      "%s",
      "%s",
      "%s"
      ));
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