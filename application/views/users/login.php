<?php echo form_open('users/login'); ?>
    <div class="row">
        <div class="col-md-4 offset-md-4">
        <br>
            <h1 class="text-center">
                <?php echo $title; ?>
            </h1>
            <br>
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
            </div>
            <br>
            <button class="btn btn-info btn-block">Login</button>
        </div>
    </div>
<?php echo form_close(); ?>

