<!doctype html>
<html lang="en">
  <?php echo $header; ?>
  <body>
    <div class="container">
      <h1 class="form-signin-heading text-center">Delhi nirankari samagam 2017</h1>
      <form class="form-signin" action='/login/loggedin' method="post">
        <?php if(isset($invalid)){ ?>
          <div class="bg-warning text-black"><?php echo $invalid; ?></div>
        <?php } else { ?>
            <h3 class="form-signin-heading">please sign in </h3>
        <?php } ?>
        <label for="inputEmail" class="sr-only">username</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="username" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required="">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me" name="checked">Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>