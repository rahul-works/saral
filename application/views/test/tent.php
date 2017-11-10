<!doctype html>
<html lang="en">
  <?php echo $header; ?>
  <body>
    <?php echo $nav_header; ?>
    
    <div class="clear" />
    <form class="container" id="needs-validation" novalidate action="/Delhi/save_tent_form" method="post" > 
      <div class="row">
        <div class="col-md-6 mb-3">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">@</span>
            <input type="text" class="form-control" id="fname" placeholder="First name" name="fname" value="" pattern="[A-Za-z]+" required>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">@</span>
            <input type="text" class="form-control" id="lname" placeholder="Last name" name="lname" value="" pattern="[A-Za-z]+" required>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">#</span>
            <input type="text" class="form-control" id="tent" placeholder="tent #" name="tent" value="" pattern="[A-Za-z0-9]+" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 mb-3">
          <div class="input-group date">
            <span class="input-group-addon" id="basic-addon1">in</span>
            <input type="date" class="form-control" id="fromdate" placeholder="from date" name="fromdate" value="" min='2017-11-01' max='2017-11-30' required>
          </div>      
        </div>
        <div class="col-md-3 mb-3">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">out</span>
            <input type="date" class="form-control" id="todate" placeholder="to date" name="todate" value="" min='2017-11-01' max='2017-11-30' required>
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">#</span>
            <input type="text" class="form-control" id="mobile" placeholder="mobile #" name="mobile" pattern="[0-9]+"required>
<!--
              <div class="invalid-feedback">
                Please provide a valid mobile #.
              </div>
-->
          </div>
        </div>
      </div>
        
      <div class="row">
        <div class="col-md-3 mb-3">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">S</span>
              <select class="form-control" name="state" >
                  <option value="" selected disabled>State</option>
                  <option value="Andhra Pradesh" >Andhra Pradesh</option>
                  <option value="Arunachal Pradesh" >Arunachal Pradesh</option>
                  <option value="Assam" >Assam</option>
                  <option value="Bihar" >Bihar</option>
                  <option value="Chhattisgarh" >Chhattisgarh</option>
                  <option value="Goa" >Goa</option>
                  <option value="Gujarat" >Gujarat</option>
                  <option value="Haryana" >Haryana</option>
                  <option value="Himachal Pradesh" >Himachal Pradesh</option>
                  <option value="Jammu and Kashmir" >Jammu and Kashmir</option>
                  <option value="Jharkhand" >Jharkhand</option>
                  <option value="Karnataka" >Karnataka</option>
                  <option value="Kerala" >Kerala</option>
                  <option value="Madya Pradesh" >Madya Pradesh</option>
                  <option value="Maharashtra" >Maharashtra</option>
                  <option value="Manipur" >Manipur</option>
                  <option value="Meghalaya" >Meghalaya</option>
                  <option value="Mizoram" >Mizoram</option>
                  <option value="Nagaland" >Nagaland</option>
                  <option value="Orissa" >Orissa</option>
                  <option value="Punjab" >Punjab</option>
                  <option value="Rajasthan" >Rajasthan</option>
                  <option value="Sikkim" >Sikkim</option>
                  <option value="Tamil Nadu" >Tamil Nadu</option>
                  <option value="Tripura" >Tripura</option>
                  <option value="Uttaranchal" >Uttaranchal</option>
                  <option value="Uttar Pradesh" >Uttar Pradesh</option>
                  <option value="West Bengal" >West Bengal</option>
                  <option value="Andaman and Nicobar Islands" >Andaman and Nicobar Islands</option>
                  <option value="Chandigarh" >Chandigarh</option>
                  <option value="Dadar and Nagar Haveli" >Dadar and Nagar Haveli</option>
                  <option value="Daman and Diu" >Daman and Diu</option>
                  <option value="Delhi" >Delhi</option>
                  <option value="Lakshadeep" >Lakshadeep</option>
                  <option value="Pondicherry" >Pondicherry</option>
              </select>
            </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">@</span>
              <input type="text" class="form-control" id="zone" placeholder="zone" name="zone" pattern="[A-Za-z0-9]+" required>
<!--
              <div class="invalid-feedback">
                Please provide a valid zone.
              </div>
-->
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">@</span>
              <input type="text" class="form-control" id="branch" placeholder="Branch" name="branch" pattern="[A-Za-z0-9]+" required>
<!--
              <div class="invalid-feedback">
                Please provide a valid branch.
              </div>
-->
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">@</span>
              <input type="text" class="form-control" id="unit" placeholder="Unit" name="unit" pattern="[A-Za-z0-9]+" required>
<!--
              <div class="invalid-feedback">
                Please provide a valid unit.
              </div>
-->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">@</span>
            <input type="text" class="form-control" id="luggage" placeholder="Luggage" name="luggage" pattern="[a-zA-Z0-9-_. ,]+" value="" required>
<!--
            <div class="invalid-feedback">
            Please provide a valid unit.
          </div>
-->
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">@</span>
            <input type="text" class="form-control" id="adhikari" placeholder="Sewadal Adhikari Name" name="adhikari" value="" pattern="[A-Za-z]+" required>
          </div>
        </div>
      </div>
      <button class="btn btn-primary" type="submit">Submit form</button>
    </form>

<?php echo $footer; ?>
  </body>
</html>