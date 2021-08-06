<?php include '../include/header.php'; ?>

<?php include '../Controller/loginController.php'; ?>


<link rel="stylesheet" href="../assests/CSS/login.css">
<div class="container">
    <div class="my-content">
        <h5 class="font-weight-bold">Account Login</h5>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="form-group">
                <label for="email">Phone/Email</label>
                <input type="text" class="form-control form-control-sm" name="email">
                <?php if(isset($emailErr)){ ?>
                    <p style="color: red;"><?php echo $emailErr ?></p>
                <?php   } ?>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control form-control-sm" name="password">
                <?php if(isset($passErr)){ ?>
                    <p style="color: red;"><?php echo $passErr ?></p>
                <?php   } ?>
            </div>
            <button class="btn btn-primary">Log In</button>
        </form>
        <h6 class="font-weight-bold" style="color: red; text-align:center">
            <?php if(isset($exist)){
                echo $exist;
            } ?>
        </h6>
        <p style="text-align: center;">I don't have an Account</p>
        <button class="btn btn-success"><a href="registration.php" style="color: white;">Create Your Own</a></button>
    </div>
</div>

<?php include '../include/footer.php'; ?>