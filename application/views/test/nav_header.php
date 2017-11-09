
<!-- Navigation -->
<div class="navbar-header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src='//www.nirankari.org/images/nirankari_logo.png' width="170" height="30" class="img-responsive pad-top-loggo-left-10" alt="Home">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php if(isset($type) && $type=='1') { echo "active"; } ?>">
              <a class="nav-link" href="/Delhi/tent_form">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item <?php if(isset($type) && $type=='2') { echo 'active'; } ?>">
              <a class="nav-link" href="/Delhi/check_tent">Check</a>
            </li>
            <li class="nav-item <?php if(isset($type) && $type=='3') { echo 'active'; } ?>">
              <a class="nav-link" href="/Delhi/contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</div>
<div class="navbar-header padding">
    <div class="container">
        <h2>70th Nirankari Sant Samagam 2017</h2>
        <?php if(isset($type) && $type=='1') { ?>
            <h4>Gate pass</h4>
        <?php } else if(isset($type) && $type=='2') { ?>
            <h4>Check pass</h4>
        <?php } else if(isset($type) && $type=='3') { ?>
            <h4>Contact</h4>
        <?php } else if(isset($type) && $type=='4') { ?>
            <h4 style="color: green;">Gate pass details</h4>
        <?php } else if(isset($type) && $type=='5') { ?>
            <h4 style="color: red;">No gate pass details found</h4>
        <?php } ?>
    </div>
</div>
<!--
<div class="navbar-header">
      <img src='<?php echo SITEURL; ?>/media/images/sewa/symbol.png'; alt="Nirankari Mission" width= '6%'; class="thumbnail fleft" >
        <h2>70th Nirankari Sant Samagam 2017</h2>
        <h2><?php echo $type; ?></h2>
    </div>-->
