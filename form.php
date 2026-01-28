<form action="signin.php" class="container row g-2 border p-1 mt-3" method="POST">
    <div class="col-12">
        <div class="row">
            <div class="col">
                <label for="username" class="form-label">Username</label>
                <input id="username" name="username" type="text" class="form-control" value="<?=$username?>">
                <!-- <div class="invalid-feedback"></div> -->
            </div>
            <div class="col">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" name="password" class="form-control">
            </div>
        </div>
    </div>
    <div class="col-12">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" value="<?=htmlspecialchars($email)?>">
    </div>
    <div class="col-12">
        <div class="row justify-content-center">
            <div class="col-auto">
                <input type="submit" class="btn btn-primary" value="sign in">
            </div>
        </div>
    </div>
</form>