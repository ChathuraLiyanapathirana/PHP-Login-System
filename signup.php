<?php

include_once './header.php';
?>


<section>
    <div class="main-wrapper">
        <form action="include/signup.inc.php" method="POST">
            <h3 class="txt-cntr">Sign Up</h3>
            <div class="form-group">
                <input type="text" name="fname" placeholder="First Name" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="lname" placeholder="Last Name" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="email" placeholder="E-Mail" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="uname" placeholder="User Name" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" placeholder="Password" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="pwd" placeholder="Confirm Password" class="form-control">
            </div>
            <div class="form-group txt-cntr">
                <button type="submit" name="submit" class="btn btn-success">Sign Up!</button>
            </div>
        </form>
    </div>
</section>

<?php

include_once './footer.php';
?>