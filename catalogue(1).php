<?php 
include 'header.php';
include 'sidebar.php';
require 'server.php';

$sql="SELECT * FROM catalogue";

$result=mysqli_query($conn,$sql);


?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Data Catalogue</h3>

        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Information about the scraped data</h4>
                <hr>
                <thead>
                  <tr>
                    <th><!-- <i class="fa fa-bullhorn"></i> -->Company</th>
                    <th class="hidden-phone"><!-- <i class="fa fa-question-circle"></i> --> Description</th>
                    <th><!-- <i class="fa fa-bookmark"></i> -->Data Link</th>
                    <th><!-- <i class=" fa fa-edit"></i>  -->Status</th>
                    <th>Actions</th>
                  </tr>

                </thead>
                

                      <?php

while($rows= mysqli_fetch_array($result))

{

?>  
                <tbody>

    
              
                    <tr>

                    <td>
                      <a href="<?php echo $rows ['link']; ?>"><?php echo $rows ['company'];?></a>
                    </td>

                    <td class="hidden-phone"><?php echo $rows ['description']; ?></td>

                    <td><?php echo $rows ['link']; ?></td>

                    <td>

                      <?php
                      if ($rows['status']=='approved')
                      {
?>
                        <span class="label label-success label-mini"><?php echo $rows ['status']; ?>
                          
                        </span>

                      <?php
                      } 

                      else if($rows['status']=='pending')
                      {
                        ?>
                        <span class="label label-warning label-mini">
                      
                        <?php echo $rows ['status'];?>
                          
                        </span>

<?php
           
                      } 
                      ?>
                       
                   
                    </td>
<td>
        




     <!--          <a><button class="btn btn-success btn-xs"><i class= "fa fa-check"></i></button></a>


                      <button class="btn btn-warning btn-xs"><i class= "fa fa-question-circle"></i></button> -->

                     
                        <a href="editDataset.php?toedit=
                     
                     <?php echo $rows ['sno'];?>">

                     <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>


                      
                       <a href="deleteDataset.php?todelete=
                     
                     <?php echo $rows ['sno'];?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>

  </td>                      
                        
                      

                    
                  </tr>


                </tbody>

                <?php
}
?>  
  

              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
<?php 
include 'footer.php'?>




