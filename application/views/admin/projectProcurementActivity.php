<?php 

$pre_proc = convertDate($procActDate['pre_proc']);
$advertisement = convertDate($procActDate['advertisement']);
$pre_bid = convertDate($procActDate['pre_bid']);
$eligibility = convertDate($procActDate['eligibility_check']);
$openbid = convertDate($procActDate['open_bid']);
$bidevaluation = convertDate($procActDate['bid_evaluation']);
$postqual = convertDate($procActDate['post_qual']);
$awarddate = convertDate($procActDate['award_notice']);
$contractsigning = convertDate($procActDate['contract_signing']);
$proceednotice = convertDate($procActDate['proceed_notice']);
$completion = convertDate($procActDate['delivery_completion']);
$acceptance = convertDate($procActDate['acceptance_turnover']);


function convertDate($date){

  if ($date != null) {
    $actdate = date_create($date);
    $formateddate = date_format($actdate, 'Y-m-d');
  }else{
    $formateddate = null;
  }

  return $formateddate;

}

?>
<section class="content-header">
  
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="box">
        <div class="box-header">
          <h2 class="box-title">Manage Project Procurement Activity<small></small></h2>
        </div>
        <div class="box-body">
          <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success">
              <p class="text-center"><?php echo $_SESSION['success'] ?></p>
            </div>
          <?php endif ?>
          <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-warning">
              <p class="text-center"><?php echo $_SESSION['error'] ?></p>
            </div>
          <?php endif ?>
          <p>Steps for Procurement Activity: <b>(ABC more than 5M )</b></p>
          <div class="well text-center">
            <button class="btn btn-default activityBtn" type="button" data-toggle="collapse" data-target="#step-1" aria-expanded="false">Step 1</button>
            <button class="btn btn-default activityBtn" type="button" data-toggle="collapse" data-target="#step-2" aria-expanded="false">Step 2</button>
            <button class="btn btn-default activityBtn" type="button" data-toggle="collapse" data-target="#step-3" aria-expanded="false">Step 3</button>
            <button class="btn btn-default activityBtn" type="button" data-toggle="collapse" data-target="#step-4" aria-expanded="false">Step 4</button>
            <button class="btn btn-default activityBtn" type="button" data-toggle="collapse" data-target="#step-5" aria-expanded="false">Step 5</button>
            <button class="btn btn-default activityBtn" type="button" data-toggle="collapse" data-target="#step-6" aria-expanded="false">Step 6</button>
            <button class="btn btn-default activityBtn" type="button" data-toggle="collapse" data-target="#step-7" aria-expanded="false">Step 7</button>
            <button class="btn btn-default activityBtn" type="button" data-toggle="collapse" data-target="#step-8" aria-expanded="false">Step 8</button>
            <button class="btn btn-default activityBtn" type="button" data-toggle="collapse" data-target="#step-9" aria-expanded="false">Step 9</button>
            <button class="btn btn-default activityBtn" type="button" data-toggle="collapse" data-target="#step-10" aria-expanded="false">Step 10</button>
            <button class="btn btn-default activityBtn" type="button" data-toggle="collapse" data-target="#step-11" aria-expanded="false">Step 11</button>
            <button class="btn btn-default activityBtn" type="button" data-toggle="collapse" data-target="#step-12" aria-expanded="false">Step 12</button>
          </div>
          <div class="well text-center">
            <div class="collapse" id="step-1">
              <div class="well">
                <form id="pre_proc_form" method="POST" class="form-horizontal form-label-left" action="<?php echo base_url('admin/editProcActDate') ?>"> 
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Title & ABC <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" step="any" value="" name="project_title" disabled class="form-control col-md-7 col-xs-12 project_title">
                      <input type="text" name="activity_name" value="pre_proc" hidden>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Pre-Procurement Conference<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <p class="form-control col-md-7 col-xs-12"><?php echo $pre_proc ?></p>
                    </div>
                  </div>             
                </form>
              </div>
            </div>
            <div class="collapse" id="step-2">
              <div class="well">
                <form id="advertisement_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal form-label-left">
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Title & ABC <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" step="any" value="" name="project_title" disabled class="form-control col-md-7 col-xs-12 project_title">
                      <input type="text" name="activity_name" value="advertisement" hidden>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Ads/Post of IAEB<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="date" step="any"  id="advertisement" value="<?php echo $advertisement ?>" name="activity_date"  required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>          
                </form>
              </div>
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                  <button type="button" class="btn btn-primary pull-right procactsubmitbutton" value="advertisement,advertisement_form">Submit</button>
                </div>
              </div>
            </div>

            <div class="collapse" id="step-3">
              <div class="well">
                <form id="pre_bid_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal form-label-left">

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Title & ABC <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" step="any" value="" name="project_title" disabled class="form-control col-md-7 col-xs-12 project_title">
                      <input type="text" name="activity_name" value="pre_bid" hidden>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Pre-bid Conf<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="date" step="any"  id="pre_bid" value="<?php echo $pre_bid ?>" name="activity_date"  required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                </form>
              </div>
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                  <button type="button" class="btn btn-primary pull-right procactsubmitbutton" value="pre_bid,pre_bid_form">Submit</button>
                </div>
              </div>
            </div>

            <div class="collapse" id="step-4">
              <div class="well">
                <form id="open_bid_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal form-label-left">

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Title & ABC <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" value="" name="project_title" disabled class="form-control col-md-7 col-xs-12 project_title">
                      <input type="text" name="activity_name" value="open_bid" hidden>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Sub/Open of Bids<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="date" step="any"  id="openbid" value="<?php echo $openbid ?>" name="activity_date"  required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                </form>
              </div>
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                  <button type="button" class="btn btn-primary pull-right procactsubmitbutton" value="openbid,open_bid_form">Submit</button> 
                </div>
              </div>
            </div>

            <div class="collapse" id="step-5">
              <div class="well">
                <form id="eligibility_check_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal form-label-left">

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Title & ABC <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" step="any" value="" name="project_title" disabled class="form-control col-md-7 col-xs-12 project_title">
                      <input type="text" name="activity_name" value="eligibility_check" hidden>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Eligibility Check *
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="date" step="any"  id="eligibility" value="<?php echo $eligibility ?>" name="activity_date"  required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Contractor *
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select name="contactor" id="contractor" class="form-control">
                        <option hidden selected disabled>Choose Contractor</option>
                        <?php foreach ($contractors as $contractor): ?>
                          <option value="<?php echo $contactor['contractor_id'] ?>"><?php echo $contactor['businessname'] ?></option>
                        <?php endforeach ?>
                      </select>
                    </div>
                  </div>
                </form>
              </div>
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                  <button type="button" class="btn btn-primary procactsubmitbutton" value="eligibility,eligibility_check_form">Submit</button> 
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#rebid_svp_model">re-bid/another SVP</button>
                </div>
              </div>
            </div>

            <div class="collapse" id="step-6">
              <div class="well">
                <form id="bid_evaluation_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal form-label-left">

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Title & ABC <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" step="any" value="" name="project_title" disabled class="form-control col-md-7 col-xs-12 project_title">
                      <input type="text" name="activity_name" value="bid_evaluation" hidden>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Bid Evaluation<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="date" step="any"  id="bidevaluation" value="<?php echo $bidevaluation ?>" name="activity_date"  required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>      
                </form>
              </div>
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                  <button type="button" class="btn btn-primary pull-right procactsubmitbutton" value="bidevaluation,bid_evaluation_form">Submit</button> 
                </div>
              </div>
            </div>

            <div class="collapse" id="step-7">
              <div class="well">
                <form id="post_qual_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal form-label-left">

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Title & ABC <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" step="any" value="" name="project_title" disabled class="form-control col-md-7 col-xs-12 project_title">
                      <input type="text" name="activity_name" value="post_qual" hidden>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Post Qual<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="date" step="any"  id="postqual" value="<?php echo $postqual ?>" name="activity_date"  required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                </form>
              </div>
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                  <button type="button" class="btn btn-primary pull-right procactsubmitbutton" value="postqual,post_qual_form">Submit</button>
                </div>
              </div>
            </div>

            <div class="collapse" id="step-8">
              <div class="well">
                <form id="award_notice_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal form-label-left">

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Title & ABC <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" step="any" value="" name="project_title" disabled class="form-control col-md-7 col-xs-12 project_title">
                      <input type="text" name="activity_name" value="awar_notice" hidden>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Notice of Award<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="date" step="any"  id="awarddate" value="<?php echo $awarddate ?>" name="activity_date"  required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>


                </form>
              </div>
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                  <button type="button" class="btn btn-primary pull-right procactsubmitbutton" value="awarddate,award_notice_form">Submit</button>
                </div>
              </div>
            </div>

            <div class="collapse" id="step-9">
              <div class="well">
                <form id="contract_signing_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal form-label-left">

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Title & ABC <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" step="any" value="" name="project_title" disabled class="form-control col-md-7 col-xs-12 project_title">
                      <input type="text" name="activity_name" value="contract_signing" hidden>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Contract Signing<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="date" step="any"  id="contractsigning" value="<?php echo $contractsigning ?>" name="activity_date"  required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                </form>
              </div>
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                  <button type="button" class="btn btn-primary pull-right procactsubmitbutton" value="contractsigning,contract_signing_form">Submit</button>
                </div>
              </div>
            </div>

            <div class="collapse" id="step-10">
              <div class="well">
                <form id="proceed_notice_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal form-label-left">

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Title & ABC <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" step="any" value="" name="project_title" disabled class="form-control col-md-7 col-xs-12 project_title">
                      <input type="text" name="activity_name" value="proceed_notice" hidden>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Notice to Proceed<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="date" step="any"  id="proceednotice" value="<?php echo $proceednotice ?>" name="activity_date"  required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                </form>
              </div>
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                  <button type="button" class="btn btn-primary pull-right procactsubmitbutton" value="proceednotice,proceed_notice_form">Submit</button>
                </div>
              </div>
            </div>

            <div class="collapse" id="step-11">
              <div class="well">
                <form id="competion_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal form-label-left">

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Title & ABC <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" step="any" value="" name="project_title" disabled class="form-control col-md-7 col-xs-12 project_title">
                      <input type="text" name="activity_name" value="completion" hidden>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Delivery/Completion<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="date" step="any"  id="completion" value="<?php echo $completion ?>" name="activity_date"  required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>


                </form>
              </div>
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                  <button type="button" class="btn btn-primary pull-right procactsubmitbutton" value="completion,competion_form">Submit</button>
                </div>
              </div>
            </div>

            <div class="collapse" id="step-12">
              <div class="well">
                <form id="acceptance_form" method="POST" action="<?php echo base_url('admin/editProcActDate') ?>" class="form-horizontal form-label-left">

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Project Title & ABC <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" step="any" value="" name="project_title" disabled class="form-control col-md-7 col-xs-12 project_title">
                      <input type="text" name="activity_name" value="acceptance" hidden>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Acceptance/Turnover<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="date" step="any"  id="acceptance" value="<?php echo $acceptance ?>" name="activity_date"  required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>


                </form>
              </div>
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                  <button type="button" class="btn btn-primary pull-right procactsubmitbutton" value="acceptance,acceptance_form">Finish</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  

<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>public/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>public/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url() ?>public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>public/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>public/dist/js/adminlte.min.js"></script>

<!-- page script -->

<script>

  $('.activityBtn').click(function(e){
    $('.collapse.in').collapse('hide', function(){
      $(this).collapse('show');
    });

  })

  var planDates = {
    pre_proc : '<?php echo $pre_proc ?>',
    advertisement : '<?php echo $advertisement ?>',
    pre_bid : '<?php echo $pre_bid ?>',
    openbid : '<?php echo $openbid ?>',
    bidevaluation : '<?php echo $bidevaluation ?>',
    postqual : '<?php echo $postqual ?>',
    awarddate : '<?php echo $awarddate ?>',
    contractsigning : '<?php echo $contractsigning ?>',
    proceednotice : '<?php echo $proceednotice ?>',
    completion : '<?php echo $completion ?>',
    acceptance : '<?php echo $acceptance ?>'
  };

  $(document).ready(function(){
  var project_title = '<?php echo $project_title ?>';
  $('.project_title').val(project_title);
  $('#project_title_modal').text(project_title);
  });

  $('.procactsubmitbutton').click(function(event){
  var activityArray = $(this).val().split(",");
  var activity = activityArray[0];
  var activityForm = activityArray[1];
  inputElement = $('#' + activity);
  inputValue = inputElement.val();

  if (inputValue == null || inputValue == "") {
  showError(activity, '<p class="text-danger text-center">The input filed should not be empty!!</p>');
  }else if(inputValue == getValue(activity)){
  showError(activity, '<p class="text-danger text-center">No changes were made to the value!!</p>');
  }else{
  $('#myModal').modal('show');
  $('#actName').text('Pre-Procurement Conference');
  $('#actDateValue').text(inputValue);
  $('#formSubmitBtn').attr('form', activityForm);
  }

  });

  function showError(inputId, message){
  var element = $('#' + inputId);
  element.closest('div.form-group').removeClass('has-error').addClass('has-error').find('.text-danger').remove();
  element.after(message);
  }

  function getValue(activity){
  return planDates[activity];
  }

  </script>

      <!--Modal for confirmation -->

      <div id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">Confirm Input Values</h4>
            </div>
            <div class="modal-body">
              <table class='table table-striped table-bordered' style='font-size:13px;'>
                <thead>
                  <tr >
                    <th style='text-align: center'>Attributes</th>
                    <th style='text-align: center'>Values</th>
                  </tr> 
                </thead>
                <tbody>
                  <tr><td>Project Title</td>
                    <td><span id="project_title_modal"></span></td>
                  </tr>
                  <tr><td id="actName"></td>
                    <td><span id="actDateValue"></span></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button id="formSubmitBtn" type="submit" name="submit" class="btn btn-primary">Confirm</button>
            </div>
          </div>
        </div>
      </div>

      <!--Modal for confirmation -->

<div id="rebid_svp_model" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Schedule for re-bid/another SVP</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id="formSubmitBtn" type="submit" name="submit" class="btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div>