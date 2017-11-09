<!doctype html>
<html lang="en">
  <?php echo $header; ?>
  <body>
    <?php echo $nav_header; ?>
    <div class="clear" />
    <?php if(isset($details)) { ?>
    <div class="container"> 
      <div class="row">
        <div class="col-md-6 mb-3">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Gate pass #</span>
            <input type="label" class="form-control bg-color-white" id="tent" name="tent" value="<?php echo $details['gnumber']; ?>"  disabled >
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Name</span>
            <input type="label" class="form-control bg-color-white" id="fname" name="fname" value="<?php echo $details['firstname']." ".$details['lastname']; ?>"  disabled >
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 mb-3">
          <div class="input-group date">
            <span class="input-group-addon" id="basic-addon1">from</span>
            <input type="label" class="form-control bg-color-white" id="fromdate" name="fromdate" value="<?php echo $details['fromdate']; ?>"  disabled >
          </div>      
        </div>
        <div class="col-md-3 mb-3">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">till</span>
            <input type="label" class="form-control bg-color-white" id="todate" name="todate" value="<?php echo $details['todate']; ?>"  disabled >
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">mobile #</span>
            <input type="label" class="form-control bg-color-white" id="mobile" name="mobile" value="<?php echo $details['mobile']; ?>"  disabled >
          </div>
        </div>
      </div>
        
      <div class="row">
        <div class="col-md-3 mb-3">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">state</span>
            <input type="label" class="form-control bg-color-white" id="state" name="state" value="<?php echo $details['state']; ?>"  disabled >
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">zone</span>
              <input type="label" class="form-control bg-color-white" id="zone" name="zone" value="<?php echo $details['zone']; ?>"  disabled >
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">branch</span>
              <input type="label" class="form-control bg-color-white" id="branch" name="branch" value="<?php echo $details['branch']; ?>"  disabled >
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">unit</span>
              <input type="label" class="form-control bg-color-white" id="unit" name="unit" value="<?php echo $details['unit']; ?>"  disabled >
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">luggage</span>
            <input type="label" class="form-control bg-color-white" id="luggage" name="luggage" value="<?php echo $details['luggage']; ?>"  disabled >
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">adhikari</span>
            <input type="label" class="form-control bg-color-white" id="adhikari" name="adhikari" value="<?php echo $details['adhikari']; ?>"  disabled >
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
    <div class="clear" />
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>