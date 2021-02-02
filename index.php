<?php  
           
   include 'linkler.php';
   
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>RandomLink</title>
</head>

<style>



body {

    background: rgb(0,120,117);
background: radial-gradient(circle, rgba(0,120,117,0.5690651260504201) 0%, rgba(2,0,36,1) 100%);
}



.mt-50 {
    margin-top:10em;
}


</style>


<body class=''>






<div class="container">

    <nav class="navbar navbar-dark ">
          <a class="navbar-brand text-info" href="#"><h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">RandomLink</h1><a>

   <div class=" ">
        <a href="öneri.php"><button class="btn border-bottom text-white"><h3>Öneri Yap</h3></button></a>
    </div>

    </nav>

    
    <div class="d-flex justify-content-center mt-50">

        <div class="m-5">
            <a href="<?= $linkler[array_rand($linkler)]; ?>"  id='link'   target='_blank'><button class="btn btn-outline-info "><h3>RandomLa</h3></button></a>
        </div>

        <div class="m-5">
            <a href="" id='yenileme'><button class="btn btn-outline-info"><h3>Yenile</h3></button></a>
        </div>

        
 
   </div>



  
   




</div>





<script type="text/javascript">
  document.getElementById("yenileme").onclick = function() {
    document.getElementById("link").window.location.reload(false) ; 
    return false;
  };
</script>






<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>