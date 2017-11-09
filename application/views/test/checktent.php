<!doctype html>
<html lang="en">
  <?php echo $header; ?>
  <body>
    <?php echo $nav_header; ?>
    
    <div class="clear" />
    <form class="container" id="needs-validation" novalidate action="/test/tent_entry_result" method="post" > 
      <div class="row">
        <div class="col-md-6 mb-3">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">@</span>
            <input type="text" class="form-control" id="passno" placeholder="Gate Pass #" name="passno" value="" pattern="[0-9]+" required>
          </div>
        </div>
      </div>
      <button class="btn btn-primary" type="submit">Submit form</button>
    </form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';

  window.addEventListener('load', function() {
    var form = document.getElementById('needs-validation');
    form.addEventListener('submit', function(event) {
      if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  }, false);
})();
</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>