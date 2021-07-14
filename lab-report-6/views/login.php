<?php include '../controller/form-validation.php'; ?>

<?php include '../includes/header.php'; ?>

<div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
            <label for="userName">UserName</label>
            <input type="text" class="form-control" name="userName" id="userName" value="<?php if(isset($_COOKIE[$cuserName])){echo $cuserName;}  ?>">
            <?php if(isset($nameErr)){ ?> <p style="color:red"><?php echo $nameErr ?></p> <?php } ?>
        </div>
        <div class="form-group">
            <label for="userName">password</label>
            <input type="text" class="form-control" name="password" id="password" value="<?php if(isset($_COOKIE[$cpassword])){echo $cpassword;}  ?>">
            <?php if(isset($passErr)){ ?> <p style="color:red"><?php echo $passErr ?></p> <?php } ?>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="Check">
            <label class="form-check-label" for="Check">Remember Me</label>
        </div>
        <button class="btn btn-primary">Login</button>
    </form>
</div>