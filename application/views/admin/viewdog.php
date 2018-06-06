<?php
  session_start();
    if (isset($_SESSION['user'])) {
      $user = $_SESSION['user'];
        include 'databaseconnect.php';
        include 'static\head.html';
        include 'static\nav.html';
    }else
    {
      header("location:..\index.php");
    }

    ?>
<!DOCTYPE html>
<html lang="en">
  <?php include 'static\dashboard.html'; ?>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>View Data for Dog <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

      <?php
                include 'databaseconnect.php';
                $result = mysql_query("SELECT * FROM dog") or die(mysql_error());
   

    echo "<table class='datatable-1 table table-striped table-bordered' style='font-size:13px;'>";
    echo "<thead>
                    <tr>
                      <th style='text-align: center; font-size: 12px;'>Municipality</th>
                      <th style='text-align: center; font-size: 12px;'>Barangay</th>
                      <th style='text-align: center; font-size: 12px;'>Sitio</th>
                      <th style='text-align: center; font-size: 12px;'>HSN</th>
                      <th style='text-align: center; font-size: 12px;'>Household Head</th>
                      <th style='text-align: center; font-size: 12px;'>Respondent</th>
                      <th style='text-align: center; font-size: 12px;'>HM</th>
                      <th style='text-align: center; font-size: 12px;'>Complete Details</th>
                      <th style='text-align: center; font-size: 12px;'>Edit</th>
                      <th style='text-align: center; font-size: 12px;'>Delete</th>
                    </tr>
                  </thead>
         
                  <tfoot>
                    <tr>
                      <th style='text-align: center; font-size: 12px;'>Municipality</th>
                      <th style='text-align: center; font-size: 12px;'>Barangay</th>
                      <th style='text-align: center; font-size: 12px;'>Sitio</th>
                      <th style='text-align: center; font-size: 12px;'>HSN</th>
                      <th style='text-align: center; font-size: 12px;'>Household Head</th>
                      <th style='text-align: center; font-size: 12px;'>Respondent</th>
                      <th style='text-align: center; font-size: 12px;'>HM</th>
                      <th style='text-align: center; font-size: 12px;'>Complete Details</th>
                      <th style='text-align: center; font-size: 12px;'>Edit</th>
                      <th style='text-align: center; font-size: 12px;'>Delete</th>
                    </tr>
                  </tfoot>";
    while($row = mysql_fetch_array( $result )) {
      
      echo "<tr><td>".$row['municipality']."</td>";
      echo "<td>".$row['barangay']."</td>";
      echo "<td>".$row['sitio']."</td>";
      echo "<td>".$row['HSN']."</td>";
      echo "<td>".$row['househead']."</td>";
      echo "<td>".$row['respondent']."</td>";
      echo "<td>".$row['hmember']."</td>";
      echo "<td style='text-align: center'>
      <a href='viewdogcompletedetail.php?id=".$row['id']."' class='shortcut'>
      <i style='font-size: 20px' class='btn btn-info fa fa-file-text-o'></a></td>";
      echo "<td style='text-align: center'>
      <a href='editdog.php?id=".$row['id']."' class='shortcut'>
      <i style='font-size: 20px' class='btn btn-success fa fa-edit'>";
      echo "<td style='text-align: center'>
      <a href='myModal".$row['id']."' data-toggle='modal' data-target='#myModal".$row['id']."' class='shortcut'>
      <i style='font-size: 20px' class='btn btn-danger fa fa-trash' ></a></td></tr>


      <div id='myModal".$row['id']."' class='modal fade bs-example-modal-lg' tabindex='-1' role='dialog' aria-hidden='true'>
                    <div class='modal-dialog modal-lg'>
                      <div class='modal-content'>

                        <div class='modal-header'>
                          <button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>×</span>
                          </button>
                          <h4 class='modal-title' id='myModalLabel'>Are sure you want to delete this data permanently?</h4>
                        </div>
                        <div class='modal-body'>

                                
                                <div class='form-group'>
                                <label class='control-label col-md-6 col-sm-6 col-xs-12'>Municipality</label>
                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                    <p>".$row['municipality']."</p>
                                </div>
                                </div>
                                
                                <div class='form-group'>
                                <label class='control-label col-md-6 col-sm-6 col-xs-12'>Barangay</label>
                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                    <p>".$row['barangay']."</p>
                                </div>
                                </div>
                                
                                <div class='form-group'>
                                <label class='control-label col-md-6 col-sm-6 col-xs-12'>Sitio</label>
                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                    <p>".$row['sitio']."</p>
                                </div>
                                </div>

                                <div class='form-group'>
                                <label class='control-label col-md-6 col-sm-6 col-xs-12'>Household Serial Number(HSN)</label>
                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                    <p>".$row['HSN']."</p>
                                </div>
                                </div>
                               
                                <div class='form-group'>
                                <label class='control-label col-md-6 col-sm-6 col-xs-12'>Name of Household Head/ Cooperative/ Establishment</label>
                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                    <p>".$row['househead']."</p>
                                </div>
                                </div>
                                
                                <div class='form-group'>
                                <label class='control-label col-md-6 col-sm-6 col-xs-12'>Respondent</label>
                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                    <p>".$row['respondent']."</p>
                                </div>
                                </div>
                                
                                <div class='form-group'>
                                <label class='control-label col-md-6 col-sm-6 col-xs-12'>Number of Household Member</label>
                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                    <p>".$row['hmember']."</p>
                                </div>
                                </div>
                               
                                <div class='form-group'>
                                <label class='control-label col-md-6 col-sm-6 col-xs-12'>No. of Cats Owned (3 mos & above) </label>
                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                    <p>".$row['dogs3u']."</p>
                                </div>
                                </div>
                              
                                <div class='form-group'>
                                <label class='control-label col-md-6 col-sm-6 col-xs-12'>No. of Cats Owned (below 3 mos.)</label>
                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                    <p>".$row['dogs3d']."</p>
                                </div>
                                </div>

                                <p>.</p>





                        </div>
                        <div class='modal-footer'>
                          <a href='deleteDog.php?id=".$row['id']."' class='btn btn-primary'>Yes</a>
                          <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                        </div>

                      </div>
                    </div>
                  </div>";
      

    } 
  echo "</table>";

                    ?>
                    
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

              
        <!-- /page content -->
      </div>
    </div>
    </div>
    <?php  include 'static\footer.html';?>
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <script>
      $(document).ready(function() {
        $('.datatable-1').dataTable();
        });
    </script>
    
  </body>
</html>