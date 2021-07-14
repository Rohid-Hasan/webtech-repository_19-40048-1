<?php include '../controller/form-validation.php'; ?>
<?php include '../controller/databaseController.php' ?>

<?php include '../includes/header.php'; ?>

<div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
            <label for="userName">UserName</label>
            <input type="text" class="form-control" name="userName" id="userName">
            <?php if(isset($nameErr)){ ?> <p style="color:red"><?php echo $nameErr ?></p> <?php } ?>
        </div>
        <div class="form-group">
            <label for="userName">password</label>
            <input type="text" class="form-control" name="password" id="password">
            <?php if(isset($passErr)){ ?> <p style="color:red"><?php echo $passErr ?></p> <?php } ?>
        </div>
        <button class="btn btn-primary">Register</button>
    </form>
</div>