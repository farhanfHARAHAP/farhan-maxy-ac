<?php
#Header
include 'assets/header.php';
initHeader('Login | Buku Topi Jerami');
#Navbar
include 'assets/navbar.html';
?>

<!--Content-->
<div class="container-fluid ps-5 pt-5 pe-5 content" style="height: 100%;">
    <h1>Login</h1>
    <hr>
    <form action="dashboard.php" method="get">        
        <h3>ID</h3>
        <input class="form-control" type="text" name="id" id="id" style="width:40%">
        <hr>
        <input type="submit" value="Login" class="btn btn-primary">
    </form>
</div>

<?php
#Footer
include 'assets/footer.html';
?>