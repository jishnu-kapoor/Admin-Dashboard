<?php
include 'header.php';
include 'sidebar.php';
include 'server.php';


$urlsno= $_GET['toedit']; //sno from url is saved which was passed in manage users and will be sent further via url




$sql="SELECT * FROM catalogue

WHERE sno = $urlsno";

$result= mysqli_query($conn,$sql);

$data= mysqli_fetch_array($result);


$company=$data['company']; 

$description=$data['description']; 

$link=$data['link']; 

$status=$data['status']; 



// variables to display values in the input boxes





?>

    <!--main content start-->
    
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Edit the 
          <?php
echo $company;
        ?>
      dataset</h3>
        <!-- BASIC FORM ELELEMNTS -->
        

        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i>Data set</h4>



              <form class="form-horizontal style-form" action="updateDatasetInformationToDatabase.php?toupdate=<?php echo $urlsno;?>" method="post">
              	
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Enter company name</label>
                  <div class="col-sm-10">

                    <input type="text" class="form-control" name=company value = "<?php echo $company?>"
                    >


                  </div>
                </div>

                <div class="form-group">
                  
                  <label class="col-sm-2 col-sm-2 control-label">Data description</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name=description value = "<?php echo $description?>">
                  </div>

                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">URL link</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name=link
                    value = "<?php echo $link?>">
                  </div>

                </div>
                 <div class="form-group">
                  
                  <label class="col-sm-2 col-sm-2 control-label">Edit Status</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name=status value = "<?php echo $status?>" placeholder = 'Enter value approved/pending ONLY'>

          
                  </div>

                </div>

              
                <div class="form-group">
                  <label class="col-lg-2 col-sm-2 control-label">Current status</label>
                  <div class="col-lg-10">
                    <p class="form-control-static"><?php echo $status?></p>
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