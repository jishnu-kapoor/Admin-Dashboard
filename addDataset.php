<?php
include 'header.php';
include 'sidebar.php';
?>

    <!--main content start-->
    
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Add a data set to your panel</h3>
        <!-- BASIC FORM ELELEMNTS -->
        

        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i>Data set</h4>
              <form class="form-horizontal style-form" action="addDatasetToDatabase.php" method="post">
              	
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Enter company name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name=company>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Data description</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name=description>
                  </div>

                </div><div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">URL link</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name=link>
                  </div>

                </div>
              
                <div class="form-group">
                  <label class="col-lg-2 col-sm-2 control-label">Current status</label>
                  <div class="col-lg-10">
                    <p class="form-control-static">Status not set</p>
                  </div>
                </div>
                <input class="button" type="submit" value="Insert to table" />
              </form>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
        <!-- /row -->
     
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    	
    <?php 
        include 'footer.php';
        ?>