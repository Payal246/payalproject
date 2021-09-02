	<?php require_once("setup.php");  ?>

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>


<center>
<div class="form-group">
    <button class="btn btn-light" style="margin-top:20px;border:1px solid black;">
        <img src="logo.jpg" width="50px">
       <a href="<?php echo $google->createAuthUrl();  ?>">LOGIN WITH GOOGLE</a>
    </button>
</div>



</center>

</html>

