<?php 
if(isset($_POST['gönder'])){
    $to = ""; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $link = $_POST['link'];
    $message = 'Bulunmasını İstediğim Link: '.$link;

    echo '<h3 style="color:blue;margin-top:15em;margin-left:25em;" >Linkiniz İncelenip En Kısa Sürede Eklenecektir...</h3>';

    header('Refresh:2.5;url=index.php');


}
    
?>