<?php if ($_SESSION['user_type'] !== 'BAC_SEC'){
  header('Location: ..\index.php');
} ?>
      <div class="col-lg-9 col-md-9 col-sm-9">
        <h3>Project Timeline:</h3>
        <form action="<?php echo base_url('admin/updateProcurementTimeline') ?>" method="POST" id="updateProcurementTimelineForm">

        </form>
        <div class="well">
          <div class="row">
            <div class="form-horizontal col-lg-5">
              <div class="form-group">
                <label class="control-label col-lg-7">Select date to begin with:</label>
                <div class="col-lg-5">
                  <input type="text" class="form-control text-center" id="startDate" name="startDate" form="updateProcurementTimelineForm" placeholder="mm/dd/yyyy" autocomplete="off">
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <button id="timeLineComputeBtn" type="button" class="btn btn-default btn-block">Compute/Reset to Earliest Possible Time</button>
            </div>
            <div class="col-lg-3">
              <button class="btn btn-default btn-block" type="button" id="startOverBtn" disabled="true">Start Over</button>
            </div>
          </div>
          <div class="row">
            <div id="timeLineTableContainer">
              <table id="timeLineTable" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th class="text-center">Procurement Stage</th>
                    <th class="text-center">Start Date</th>
                    <th class="text-center">End Date</th>
                    <th class="text-center">Add Days</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="left-col"><b class="pull-right">ADS/Post:</b></td>
                    <td class="center"><input type="text" class="form-control text-center timelinedateinput" id="advertisement_start" name="advertisement_start" form="updateProcurementTimelineForm" autocomplete="off"></td>
                    <td class="center"><input type="text" class="form-control text-center timelinedateinput" id="advertisement_end" name="advertisement_end" form="updateProcurementTimelineForm" autocomplete="off"></td>
                    <td class="reight-col">
                      <div style="padding-left: 20px; padding-right: 20px">
                        <button class="btn btn-block bg-olive" id="repapulate_date_btn">
                        Repopulate Dates
                      </button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="left-col">
                      <div class="row">
                        <div class="col-lg-12">
                          <b class="pull-right">Pre-bid Conference:</b>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <p class="text-right"><i>Conduct?</i></p>
                        </div>
                        <div class="col-md-4">
                          <label for="yesPreBid" class="text-center">Yes</label>
                          <input type="radio" name="pre-bid" id="yesPreBid" class="text-center rad-dates" disabled="true" checked="checked">
                        </div>
                        <div class="col-md-4">
                          <label for="noPreBid" class="text-center">No</label>
                          <input type="radio" name="pre-bid" id="noPreBid" class="text-center rad-dates" disabled="true">
                        </div>
                      </div>
                    </td>
                    <td class="center"><input type="text" class="form-control text-center timelinedateinput" id="preBidStart" name="preBidStart" form="updateProcurementTimelineForm" autocomplete="off"></td>
                    <td class="center"><input type="text" class="form-control text-center timelinedateinput" id="preBidEnd" name="preBidEnd" form="updateProcurementTimelineForm" autocomplete="off"></td>
                    <td class="row-col">
                      <div class="col-lg-6">
                        <input type="number" class="form-control inpt-no-days" id="preBidNumber" min="1" autocomplete="off">
                      </div>
                      <div class="col-lg-6">
                        <button class="btn btn-info btn-block btn-dates" id="preBidUpdateBtn" type="button" disabled="true">Update</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><b class="pull-right">Submission of bid:</b></td>
                    <td><input type="text" class="form-control text-center timelinedateinput" id="bidSubmissionStart" name="bidSubmissionStart" form="updateProcurementTimelineForm" autocomplete="off"></td>
                    <td><input type="text" class="form-control text-center timelinedateinput" id="bidSubmissionEnd" name="bidSubmissionEnd" form="updateProcurementTimelineForm" autocomplete="off"></td>
                    <td>
                      <div class="col-lg-6">
                        <input type="number" class="form-control inpt-no-days" id="bidSubmissionNumber" min="1" autocomplete="off">
                      </div>
                      <div class="col-lg-6">
                        <button class="btn btn-info btn-block btn-dates" id="bidSubmissionUpdateBtn" type="button" disabled="true">Update</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><b class="pull-right">Bid Evaluation:</b></td>
                    <td><input type="text" class="form-control text-center timelinedateinput" id="bidEvaluationStart" name="bidEvaluationStart" form="updateProcurementTimelineForm" autocomplete="off"></td>
                    <td><input type="text" class="form-control text-center timelinedateinput" id="bidEvaluationEnd" name="bidEvaluationEnd" form="updateProcurementTimelineForm" autocomplete="off"></td>
                    <td>
                      <div class="col-lg-6">
                        <input type="number" class="form-control inpt-no-days" id="bidEvaluationNumber" min="1" autocomplete="off">
                      </div>
                      <div class="col-lg-6">
                        <button class="btn btn-info btn-block btn-dates" id="bidEvaluationUpdateBtn" type="button" disabled="true">Update</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><b class="pull-right">Post Qualification:</b></td>
                    <td><input type="text" class="form-control text-center timelinedateinput" id="postQualificationStart" name="postQualificationStart" form="updateProcurementTimelineForm" autocomplete="off"></td>
                    <td><input type="text" class="form-control text-center timelinedateinput" id="postQualificationEnd" name="postQualificationEnd" form="updateProcurementTimelineForm" autocomplete="off"></td>
                    <td>
                      <div class="col-lg-6">
                        <input type="number" class="form-control inpt-no-days" id="postQualificationNumber"  min="1" autocomplete="off">
                      </div>
                      <div class="col-lg-6">
                        <button class="btn btn-info btn-block btn-dates" id="postQualificationUpdateBtn" type="button" disabled="true">Update</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><b class="pull-right">Issuance of Notice of Awards:</b></td>
                    <td><input type="text" class="form-control text-center timelinedateinput" id="awardNoticeIssuanceStart" name="awardNoticeIssuanceStart" form="updateProcurementTimelineForm" autocomplete="off"></td>
                    <td><input type="text" class="form-control text-center timelinedateinput" id="awardNoticeIssuanceEnd" name="awardNoticeIssuanceEnd" form="updateProcurementTimelineForm" autocomplete="off"></td>
                    <td>
                      <div class="col-lg-6">
                        <input type="number" class="form-control inpt-no-days" id="awardNoticeIssuanceNumber"  min="1" autocomplete="off">
                      </div>
                      <div class="col-lg-6">
                        <button class="btn btn-info btn-block btn-dates" id="awardNoticeIssuanceUpdateBtn" type="button" disabled="true">Update</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><b class="pull-right">Contract Preparation and Signing:</b></td>
                    <td><input type="text" class="form-control text-center timelinedateinput" id="contractSigningStart" name="contractSigningStart" form="updateProcurementTimelineForm" autocomplete="off"></td>
                    <td><input type="text" class="form-control text-center timelinedateinput" id="contractSigningEnd" name="contractSigningEnd" form="updateProcurementTimelineForm" autocomplete="off"></td>
                    <td>
                      <div class="col-lg-6">
                        <input type="number" class="form-control inpt-no-days" id="contractSigningNumber"  min="1" autocomplete="off">
                      </div>
                      <div class="col-lg-6">
                        <button class="btn btn-info btn-block btn-dates" id="contractSigningUpdateBtn" type="button" disabled="true">Update</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="row">
                        <div class="col-lg-12">
                          <b class="pull-right">Approval by Higher Authority:</b>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <p class="text-right"><i>Necessary?</i></p>
                        </div>
                        <div class="col-md-4">
                          <label for="yesPreBid" class="text-center">Yes</label>
                          <input type="radio" name="approval" id="yesApproval" class="text-center rad-dates" disabled="true" checked="checked">
                        </div>
                        <div class="col-md-4">
                          <label for="noPreBid" class="text-center">No</label>
                          <input type="radio" name="approval" id="noApproval" class="text-center rad-dates" disabled="true">
                        </div>
                      </div>
                    </td>
                    <td><input type="text" class="form-control text-center timelinedateinput" id="authorityApprovalStart" name="authorityApprovalStart" form="updateProcurementTimelineForm" autocomplete="off"></td>
                    <td><input type="text" class="form-control text-center timelinedateinput" id="authorityApprovalEnd" name="authorityApprovalEnd" form="updateProcurementTimelineForm" autocomplete="off"></td>
                    <td>
                      <div class="col-lg-6">
                        <input type="number" class="form-control inpt-no-days" id="authorityApprovalNumber" min="1" autocomplete="off">
                      </div>
                      <div class="col-lg-6">
                        <button class="btn btn-info btn-block btn-dates" id="authorityApprovalUpdateBtn" type="button" disabled="true">Update</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><b class="pull-right">Notice to Proceed:</b></td>
                    <td><input type="text" class="form-control text-center timelinedateinput" id="proceedNoticeStart" name="proceedNoticeStart" form="updateProcurementTimelineForm" autocomplete="off"></td>
                    <td><input type="text" class="form-control text-center timelinedateinput" id="proceedNoticeEnd" name="proceedNoticeEnd" form="updateProcurementTimelineForm" autocomplete="off"></td>
                    <td>
                      <div class="col-lg-6">
                        <input type="number" class="form-control inpt-no-days" id="proceedNoticeNumber" min="1" autocomplete="off">
                      </div>
                      <div class="col-lg-6">
                        <button class="btn btn-info btn-block btn-dates" id="proceedNoticeUpdateBtn" type="button" disabled="true">Update</button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#timelineModal" id="timelineModalConfirmBtn" disabled="disabled">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
  <script src="<?php echo base_url() ?>public/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url() ?>public/bower_components/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url() ?>public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <script src="<?php echo base_url() ?>public/bower_components/raphael/raphael.min.js"></script>
  <script src="<?php echo base_url() ?>public/bower_components/morris.js/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="<?php echo base_url() ?>public/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="<?php echo base_url() ?>public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="<?php echo base_url() ?>public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?php echo base_url() ?>public/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?php echo base_url() ?>public/bower_components/moment/min/moment.min.js"></script>
  <script src="<?php echo base_url() ?>public/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="<?php echo base_url() ?>public/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="<?php echo base_url() ?>public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="<?php echo base_url() ?>public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url() ?>public/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() ?>public/dist/js/adminlte.min.js"></script>
  <!-- DataTables -->
  <script src="<?php echo base_url() ?>public/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url() ?>public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


  <!-- modal for data confirmation -->
  <div id="timelineModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
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
              <tr>
                <th class="text-center">Activity</th>
                <th class="text-center">Start Date</th>
                <th class="text-center">End Date</th>
              </tr> 
            </thead>
            <tbody>
              <tr>
                <td>Advertisement</td>
                <td id="addStart"></td>
                <td id="addEnd"></td>
              </tr>
              <tr>
                <td>Pre-bid Conference</td>
                <td id="pbcStart"></td>
                <td id="pbcEnd"></td>
              </tr>
              <tr>
                <td>Submission of Bids</td>
                <td id="sbStart"></td>
                <td id="sbEnd"></td>
              </tr>
              <tr>
                <td>Bid Evaluation</td>
                <td id="beStart"></td>
                <td id="beEnd"></td>
              </tr>
              <tr>
                <td>Post Qualification</td>
                <td id="pqStart"></td>
                <td id="pqEnd"></td>
              </tr>
              <tr>
                <td>Issuance of Notice of Award</td>
                <td id="inaStart"></td>
                <td id="inaEnd"></td>
              </tr>
              <tr>
                <td>Contract Preparation and Signing</td>
                <td id="cpsStart"></td>
                <td id="cpsEnd"></td>
              </tr>
              <tr>
                <td>Approval by Higher Authority</td>
                <td id="ahaStart"></td>
                <td id="ahaEnd"></td>
              </tr>
              <tr>
                <td>Notice to Proceed</td>
                <td id="ntpStart"></td>
                <td id="ntpEnd"></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" form="updateProcurementTimelineForm" name="submit" class="btn btn-primary">Confirm</button>
        </div>
      </div>
    </div>
  </div>
      <!-- end of modal -->

<div class="modal fade" id="update_warning" tabindex="-1" role="dialog" aria-labelledby="update_warning" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Warning</h5>
        <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p>Input Number of days to add before pressing UPDATE button!</p>
        <p>Number must be higher than 0!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="missing_startdate_warning" tabindex="-1" role="dialog" aria-labelledby="update_warning" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Alert!</h5>
        <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p>Select Start Date First!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php 
  function convertDateTextual($date){
    if ($date != null) {
      $timelineDate = date_create($date);
      $formatedTimelineDate = date_format($timelineDate, 'M-d-Y');
    }else{
      $formatedTimelineDate = 'None';
    }

    return $formatedTimelineDate;
  }
?>
  <script>

    $(document).ready(function(){

      $('#startDate').datepicker({
        autoclose: true,
      });

      /**
      |---------------------------
      |Prevents user to type on the timeline date input fields
      |---------------------------
      ***/
      $('.timelinedateinput').keypress(function(e) {
          e.preventDefault();
      });


      //------------------------------------------------

      var abc = '<?php echo $projectDetails['abc'] ?>';

      var repapulateStartDate = '<?php echo date_format(date_create($timeLine['advertisement_start']), 'm/d/Y') ?>'
      var advertisement_start = '<?php echo $timeLine['advertisement_start'] ?>';
      var advertisement_end = '<?php echo $timeLine['advertisement_end'] ?>';
      var preBidStart = '<?php echo $timeLine['pre_bid_start'] ?>';
      var preBidEnd = '<?php echo $timeLine['pre_bid_end'] ?>';
      var bidSubmissionStart = '<?php echo $timeLine['bid_submission_start'] ?>';
      var bidSubmissionEnd = '<?php echo $timeLine['bid_submission_end'] ?>';
      var bidEvaluationStart = '<?php echo $timeLine['bid_evaluation_start'] ?>';
      var bidEvaluationEnd = '<?php echo $timeLine['bid_evaluation_end'] ?>';
      var postQualificationStart = '<?php echo $timeLine['post_qualification_start'] ?>';
      var postQualificationEnd = '<?php echo $timeLine['post_qualification_end'] ?>';
      var awardNoticeIssuanceStart = '<?php echo $timeLine['award_notice_start'] ?>';
      var awardNoticeIssuanceEnd = '<?php echo $timeLine['award_notice_end'] ?>';
      var contractSigningStart = '<?php echo $timeLine['contract_signing_start'] ?>';
      var contractSigningEnd = '<?php echo $timeLine['contract_signing_end'] ?>';
      var authorityApprovalStart = '<?php echo $timeLine['authority_approval_start'] ?>';
      var authorityApprovalEnd = '<?php echo $timeLine['authority_approval_end'] ?>';
      var proceedNoticeStart = '<?php echo $timeLine['proceed_notice_start'] ?>';
      var proceedNoticeEnd = '<?php echo $timeLine['proceed_notice_end'] ?>';

      var pre_proc_status = '<?php echo $actStatus['pre_proc'] ?>';
      var advertisement_status = '<?php echo $actStatus['advertisement'] ?>';
      var pre_bid_status = '<?php echo $actStatus['pre_bid'] ?>';
      var eligibility_status = '<?php echo $actStatus['eligibility_check'] ?>';
      var open_bid_status = '<?php echo $actStatus['open_bid'] ?>';
      var bid_evaluation_status = '<?php echo $actStatus['bid_evaluation'] ?>';
      var post_qual_status = '<?php echo $actStatus['post_qual'] ?>';
      var award_notice_status = '<?php echo $actStatus['award_notice'] ?>';
      var contract_signing_status = '<?php echo $actStatus['contract_signing'] ?>';
      var authority_approval_status = '<?php echo $actStatus['authority_approval'] ?>';
      var proceed_notice_status = '<?php echo $actStatus['proceed_notice'] ?>';
      var delivery_completion_status = '<?php echo $actStatus['delivery_completion'] ?>';
      var acceptance_turnover_status = '<?php echo $actStatus['acceptance_turnover'] ?>';

      var timeline_status = '<?php echo $timeLine['timeline_status'] ?>';

      if (abc < 1000000) {
        $('#noPreBid').attr('checked', true);
        $('#preBidStart').prop('value', '');
        $('#preBidEnd').prop('value', '');
        $('#preBidStart').prop('disabled', true);
        $('#preBidEnd').prop('disabled', true);
        $('#preBidNumber').prop('disabled', true);
        $('#preBidUpdateBtn').prop('disabled', true);  
      }

      if (timeline_status == 'set') {
        $('#advertisement_start').attr('placeholder', "<?php echo convertDateTextual($timeLine['advertisement_start']) ?>");
        $('#advertisement_end').attr('placeholder', "<?php echo convertDateTextual($timeLine['advertisement_end']) ?>");
        $('#preBidStart').attr('placeholder', "<?php echo convertDateTextual($timeLine['pre_bid_start']) ?>");
        $('#preBidEnd').attr('placeholder', "<?php echo convertDateTextual($timeLine['pre_bid_end']) ?>");
        $('#bidSubmissionStart').attr('placeholder', "<?php echo convertDateTextual($timeLine['bid_submission_start']) ?>");
        $('#bidSubmissionEnd').attr('placeholder', "<?php echo convertDateTextual($timeLine['bid_submission_end']) ?>");
        $('#bidEvaluationStart').attr('placeholder', "<?php echo convertDateTextual($timeLine['bid_evaluation_start']) ?>");
        $('#bidEvaluationEnd').attr('placeholder', "<?php echo convertDateTextual($timeLine['bid_evaluation_end']) ?>");
        $('#postQualificationStart').attr('placeholder', "<?php echo convertDateTextual($timeLine['post_qualification_start']) ?>");
        $('#postQualificationEnd').attr('placeholder', "<?php echo convertDateTextual($timeLine['post_qualification_end']) ?>");
        $('#awardNoticeIssuanceStart').attr('placeholder', "<?php echo convertDateTextual($timeLine['award_notice_start']) ?>");
        $('#awardNoticeIssuanceEnd').attr('placeholder', "<?php echo convertDateTextual($timeLine['award_notice_end']) ?>");
        $('#contractSigningStart').attr('placeholder', "<?php echo convertDateTextual($timeLine['contract_signing_start']) ?>");
        $('#contractSigningEnd').attr('placeholder', "<?php echo convertDateTextual($timeLine['contract_signing_end']) ?>");
        $('#authorityApprovalStart').attr('placeholder', "<?php echo convertDateTextual($timeLine['authority_approval_start']) ?>");
        $('#authorityApprovalEnd').attr('placeholder', "<?php echo convertDateTextual($timeLine['authority_approval_end']) ?>");
        $('#proceedNoticeStart').attr('placeholder', "<?php echo convertDateTextual($timeLine['proceed_notice_start']) ?>");
        $('#proceedNoticeEnd').attr('placeholder', "<?php echo convertDateTextual($timeLine['proceed_notice_end']) ?>");

        if (pre_bid_status != 'pending') {
          $('#preBidNumber').attr('disabled', 'disabled');
          $('#preBidUpdateBtn').attr('disabled', 'disabled');
        }

        if (open_bid_status != 'pending') {
          $('#bidSubmissionNumber').attr('disabled', 'disabled');
          $('#bidSubmissionUpdateBtn').attr('disabled', 'disabled');
        }

        if (bid_evaluation_status != 'pending') {
          $('#bidEvaluationNumber').attr('disabled', 'disabled');
          $('#bidEvaluationUpdateBtn').attr('disabled', 'disabled');
        }

        if (post_qual_status != 'pending') {
          $('#postQualificationNumber').attr('disabled', 'disabled');
          $('#postQualificationUpdateBtn').attr('disabled', 'disabled');
        }

        if (award_notice_status != 'pending') {
          $('#awardNoticeIssuanceNumber').attr('disabled', 'disabled');
          $('#awardNoticeIssuanceUpdateBtn').attr('disabled', 'disabled');
        }

        if (contract_signing_status != 'pending') {
          $('#contractSigningNumber').attr('disabled', 'disabled');
          $('#contractSigningUpdateBtn').attr('disabled', 'disabled');
        }

        if (authority_approval_status != 'pending') {
          $('#authorityApprovalNumber').attr('disabled', 'disabled');
          $('#authorityApprovalUpdateBtn').attr('disabled', 'disabled');
        }

        if (proceed_notice_status != 'pending') {
          $('#proceedNoticeNumber').attr('disabled', 'disabled');
          $('#proceedNoticeUpdateBtn').attr('disabled', 'disabled');
        }
      }

      if (timeline_status == 'pending') {
        $('#advertisement_start').attr('placeholder', "None");
        $('#advertisement_end').attr('placeholder', "None");
        $('#preBidStart').attr('placeholder', "None");
        $('#preBidEnd').attr('placeholder', "None");
        $('#bidSubmissionStart').attr('placeholder', "None");
        $('#bidSubmissionEnd').attr('placeholder', "None");
        $('#bidEvaluationStart').attr('placeholder', "None");
        $('#bidEvaluationEnd').attr('placeholder', "None");
        $('#postQualificationStart').attr('placeholder', "None");
        $('#postQualificationEnd').attr('placeholder', "None");
        $('#awardNoticeIssuanceStart').attr('placeholder', "None");
        $('#awardNoticeIssuanceEnd').attr('placeholder', "None");
        $('#contractSigningStart').attr('placeholder', "None");
        $('#contractSigningEnd').attr('placeholder', "None");
        $('#authorityApprovalStart').attr('placeholder', "None");
        $('#authorityApprovalEnd').attr('placeholder', "None");
        $('#proceedNoticeStart').attr('placeholder', "None");
        $('#proceedNoticeEnd').attr('placeholder', "None");
      }

      $('#repapulate_date_btn').click(function(){
        $('#startDate').val(repapulateStartDate);
        $('#advertisement_start').val(advertisement_start);
        $('#advertisement_end').val(advertisement_end);
        $('#preBidStart').val(preBidStart);
        $('#preBidEnd').val(preBidEnd);
        $('#bidSubmissionStart').val(bidSubmissionStart);
        $('#bidSubmissionEnd').val(bidSubmissionEnd);
        $('#bidEvaluationStart').val(bidEvaluationStart);
        $('#bidEvaluationEnd').val(bidEvaluationEnd);
        $('#postQualificationStart').val(postQualificationStart);
        $('#postQualificationEnd').val(postQualificationEnd);
        $('#awardNoticeIssuanceStart').val(awardNoticeIssuanceStart);
        $('#awardNoticeIssuanceEnd').val(awardNoticeIssuanceEnd);
        $('#contractSigningStart').val(contractSigningStart);
        $('#contractSigningEnd').val(contractSigningEnd);
        $('#authorityApprovalStart').val(authorityApprovalStart);
        $('#authorityApprovalEnd').val(authorityApprovalEnd);
        $('#proceedNoticeStart').val(proceedNoticeStart);
        $('#proceedNoticeEnd').val(proceedNoticeEnd);

        advertisementMinBase = 0;
        advertisementMaxBase = getDateDiff(repapulateStartDate, advertisement_end);
        prebidMinBase = getDateDiff(repapulateStartDate, preBidStart);
        prebidMaxBase = getDateDiff(repapulateStartDate, preBidEnd);
        bidSubmissionMinBase = getDateDiff(repapulateStartDate, bidSubmissionStart);
        bidSubmissionMaxBase = getDateDiff(repapulateStartDate, bidSubmissionEnd);
        bidEvaluationMinBase = getDateDiff(repapulateStartDate, bidEvaluationStart);
        bidEvaluationMaxBase = getDateDiff(repapulateStartDate, bidEvaluationEnd);
        postQualificationMinBase = getDateDiff(repapulateStartDate, postQualificationStart);
        postQualificationMaxBase = getDateDiff(repapulateStartDate, postQualificationEnd);
        awardNoticeIssuanceMinBase = getDateDiff(repapulateStartDate, awardNoticeIssuanceStart);
        awardNoticeIssuanceMaxBase = getDateDiff(repapulateStartDate, awardNoticeIssuanceEnd);
        contractSigningMinBase = getDateDiff(repapulateStartDate, contractSigningStart);
        contractSigningMaxBase = getDateDiff(repapulateStartDate, contractSigningEnd);
        authorityApprovalMinBase = getDateDiff(repapulateStartDate, authorityApprovalStart);
        authorityApprovalMaxBase = getDateDiff(repapulateStartDate, authorityApprovalEnd);
        proceedNoticeMinBase = getDateDiff(repapulateStartDate, proceedNoticeStart);
        proceedNoticeMaxBase = getDateDiff(repapulateStartDate, proceedNoticeEnd);

        $('#timelineModalConfirmBtn').prop('disabled', false);
        $('#startOverBtn').prop('disabled', false);
        $('.btn-dates').prop('disabled', false);
        $('.rad-dates').prop('disabled', false);
        $('.inpt-no-days').val('');
        $(this).prop('disabled', true);
      })

      function getDateDiff(startDate, date){
        var date1 = new Date(startDate);
        var date2 = new Date(date);
        // The number of milliseconds in one day
        var ONEDAY = 1000 * 60 * 60 * 24;
        // Convert both dates to milliseconds
        var date1_ms = date1.getTime();
        var date2_ms = date2.getTime();
        // Calculate the difference in milliseconds
        var difference_ms = Math.abs(date1_ms - date2_ms);

        // Convert back to days and return
        return Math.round(difference_ms/ONEDAY);
      }    
    });

    

  var advertisementMinBase;
  var advertisementMaxBase;
  var prebidMinBase;
  var prebidMaxBase;
  var bidSubmissionMinBase;
  var bidSubmissionMaxBase;
  var bidEvaluationMinBase;
  var bidEvaluationMaxBase;
  var postQualificationMinBase;
  var postQualificationMaxBase;
  var awardNoticeIssuanceMinBase;
  var awardNoticeIssuanceMaxBase;
  var contractSigningMinBase;
  var contractSigningMaxBase;
  var authorityApprovalMinBase;
  var authorityApprovalMaxBase;
  var proceedNoticeMinBase;
  var proceedNoticeMaxBase;

  function setMinAndMaxDates(){
    advertisementMinBase = 0;
    advertisementMaxBase = 7;
    prebidMinBase = 8;
    prebidMaxBase = 8;
    bidSubmissionMinBase = 20;
    bidSubmissionMaxBase = 20;
    bidEvaluationMinBase = 21;
    bidEvaluationMaxBase = 21;
    postQualificationMinBase = 22;
    postQualificationMaxBase = 22;
    awardNoticeIssuanceMinBase = 23;
    awardNoticeIssuanceMaxBase = 23;
    contractSigningMinBase = 24;
    contractSigningMaxBase = 24;
    authorityApprovalMinBase = 25;
    authorityApprovalMaxBase = 25;
    proceedNoticeMinBase = 26;
    proceedNoticeMaxBase = 26;
  }

  function setMinAndMaxDatesWithoutPBC(){
    advertisementMinBase = 0;
    advertisementMaxBase = 7;
    bidSubmissionMinBase = 8;
    bidSubmissionMaxBase = 8;
    bidEvaluationMinBase = 9;
    bidEvaluationMaxBase = 9;
    postQualificationMinBase = 10;
    postQualificationMaxBase = 10;
    awardNoticeIssuanceMinBase = 11;
    awardNoticeIssuanceMaxBase = 11;
    contractSigningMinBase = 12;
    contractSigningMaxBase = 12;
    authorityApprovalMinBase = 13;
    authorityApprovalMaxBase = 13;
    proceedNoticeMinBase = 14;
    proceedNoticeMaxBase = 14;
  }

  function setMinAndMaxDatesWithoutAHA(){
    advertisementMinBase = 0;
    advertisementMaxBase = 7;
    prebidMinBase = 8;
    prebidMaxBase = 8;
    bidSubmissionMinBase = 20;
    bidSubmissionMaxBase = 20;
    bidEvaluationMinBase = 21;
    bidEvaluationMaxBase = 21;
    postQualificationMinBase = 22;
    postQualificationMaxBase = 22;
    awardNoticeIssuanceMinBase = 23;
    awardNoticeIssuanceMaxBase = 23;
    contractSigningMinBase = 24;
    contractSigningMaxBase = 24;
    proceedNoticeMinBase = 25;
    proceedNoticeMaxBase = 25;
  }

  function setMinAndMaxDatesWithoutPBCandAHA(){
    advertisementMinBase = 0;
    advertisementMaxBase = 7;
    bidSubmissionMinBase = 8;
    bidSubmissionMaxBase = 8;
    bidEvaluationMinBase = 9;
    bidEvaluationMaxBase = 9;
    postQualificationMinBase = 10;
    postQualificationMaxBase = 10;
    awardNoticeIssuanceMinBase = 11;
    awardNoticeIssuanceMaxBase = 11;
    contractSigningMinBase = 12;
    contractSigningMaxBase = 12;
    proceedNoticeMinBase = 13;
    proceedNoticeMaxBase = 13;
  }

  $('#noPreBid').click(function(event) {
    $('#preBidStart').prop('value', '');
    $('#preBidEnd').prop('value', '');
    $('#preBidStart').prop('disabled', true);
    $('#preBidEnd').prop('disabled', true);
    $('#preBidNumber').prop('disabled', true);
    $('#preBidUpdateBtn').prop('disabled', true);   
    var startDate = $('#startDate').val();
    if ($('#noApproval').is(":checked")) {
      setDatesToEarliestPossibleTimeWithoutPBCandAHA(startDate);
    }else{
      setDatesToEarliestPossibleTimeWithoutPBC(startDate);
    }
  });

  $('#yesPreBid').click(function(event) {
    $('#preBidStart').prop('disabled', false);
    $('#preBidEnd').prop('disabled', false);
    $('#preBidNumber').prop('disabled', false);
    $('#preBidUpdateBtn').prop('disabled', false);
    var startDate = $('#startDate').val();
    if ($('#yesApproval').is(":checked")) {
      setDatesToEarliestPossibleTime(startDate);
    }else{
      setDatesToEarliestPossibleTimeWithoutAHA(startDate);
    }
  });

  $('#noApproval').click(function(event) {
    $('#authorityApprovalStart').prop('value', '');
    $('#authorityApprovalEnd').prop('value', '');
    $('#authorityApprovalStart').prop('disabled', true);
    $('#authorityApprovalEnd').prop('disabled', true);
    $('#authorityApprovalNumber').prop('disabled', true);
    $('#authorityApprovalUpdateBtn').prop('disabled', true);
    var startDate = $('#startDate').val();
    if ($('#noPreBid').is(":checked")) {
      setDatesToEarliestPossibleTimeWithoutPBCandAHA(startDate);
    }else{
      setDatesToEarliestPossibleTimeWithoutAHA(startDate);
    }
  });

  $('#yesApproval').click(function(event) {
    $('#authorityApprovalStart').prop('disabled', false);
    $('#authorityApprovalEnd').prop('disabled', false);
    $('#authorityApprovalNumber').prop('disabled', false);
    $('#authorityApprovalUpdateBtn').prop('disabled', false);
    var startDate = $('#startDate').val();
    if ($('#yesPreBid').is(":checked")) {
      setDatesToEarliestPossibleTime(startDate);
    }else{
      setDatesToEarliestPossibleTimeWithoutPBC(startDate);
    }
  });


  $('#preBidUpdateBtn').click(function(event){
    var startDate = $('#startDate').val();
    var daysToAdd = $('#preBidNumber').val();
    prebidMaxBase = prebidMinBase + (parseFloat(daysToAdd)-1);
    bidSubmissionMinBase = prebidMaxBase + 12;
    bidSubmissionMaxBase = prebidMaxBase + 12;
    bidEvaluationMinBase = bidSubmissionMaxBase + 1;
    bidEvaluationMaxBase = bidSubmissionMaxBase + 1;
    postQualificationMinBase = bidEvaluationMaxBase + 1;
    postQualificationMaxBase = bidEvaluationMaxBase + 1;
    awardNoticeIssuanceMinBase = postQualificationMaxBase + 1;
    awardNoticeIssuanceMaxBase = postQualificationMaxBase + 1;
    contractSigningMinBase = awardNoticeIssuanceMaxBase + 1;
    contractSigningMaxBase = awardNoticeIssuanceMaxBase + 1;
    authorityApprovalMinBase = contractSigningMaxBase + 1;
    authorityApprovalMaxBase = contractSigningMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    proceedNoticeMaxBase = authorityApprovalMaxBase + 1;
    if (daysToAdd && daysToAdd > 0) {
      setDatesWithAdditions(startDate);
    }else{  
      $('#update_warning').modal('show');
    }
  });

  $('#bidSubmissionUpdateBtn').click(function(event){
    var startDate = $('#startDate').val();
    var daysToAdd = $('#bidSubmissionNumber').val();
    bidSubmissionMaxBase = bidSubmissionMinBase + (parseFloat(daysToAdd)-1);
    bidEvaluationMinBase = bidSubmissionMaxBase + 1;
    bidEvaluationMaxBase = bidSubmissionMaxBase + 1;
    postQualificationMinBase = bidEvaluationMaxBase + 1;
    postQualificationMaxBase = bidEvaluationMaxBase + 1;
    awardNoticeIssuanceMinBase = postQualificationMaxBase + 1;
    awardNoticeIssuanceMaxBase = postQualificationMaxBase + 1;
    contractSigningMinBase = awardNoticeIssuanceMaxBase + 1;
    contractSigningMaxBase = awardNoticeIssuanceMaxBase + 1;
    authorityApprovalMinBase = contractSigningMaxBase + 1;
    authorityApprovalMaxBase = contractSigningMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    proceedNoticeMaxBase = authorityApprovalMaxBase + 1;
    if (daysToAdd && daysToAdd > 0) {
      setDatesWithAdditions(startDate);
    }else{
      $('#update_warning').modal('show');
    }
  });

  $('#bidEvaluationUpdateBtn').click(function(event){
    var startDate = $('#startDate').val();
    var daysToAdd = $('#bidEvaluationNumber').val();
    bidEvaluationMaxBase = bidEvaluationMinBase + (parseFloat(daysToAdd)-1);
    postQualificationMinBase = bidEvaluationMaxBase + 1;
    postQualificationMaxBase = bidEvaluationMaxBase + 1;
    awardNoticeIssuanceMinBase = postQualificationMaxBase + 1;
    awardNoticeIssuanceMaxBase = postQualificationMaxBase + 1;
    contractSigningMinBase = awardNoticeIssuanceMaxBase + 1;
    contractSigningMaxBase = awardNoticeIssuanceMaxBase + 1;
    authorityApprovalMinBase = contractSigningMaxBase + 1;
    authorityApprovalMaxBase = contractSigningMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    proceedNoticeMaxBase = authorityApprovalMaxBase + 1;
    if (daysToAdd && daysToAdd > 0) {
      setDatesWithAdditions(startDate);
    }else{
      $('#update_warning').modal('show');
    }
  });

  $('#postQualificationUpdateBtn').click(function(event){
    var startDate = $('#startDate').val();
    var daysToAdd = $('#postQualificationNumber').val();
    postQualificationMaxBase = postQualificationMinBase + (parseFloat(daysToAdd)-1);
    awardNoticeIssuanceMinBase = postQualificationMaxBase + 1;
    awardNoticeIssuanceMaxBase = postQualificationMaxBase + 1;
    contractSigningMinBase = awardNoticeIssuanceMaxBase + 1;
    contractSigningMaxBase = awardNoticeIssuanceMaxBase + 1;
    authorityApprovalMinBase = contractSigningMaxBase + 1;
    authorityApprovalMaxBase = contractSigningMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    proceedNoticeMaxBase = authorityApprovalMaxBase + 1;
    if (daysToAdd && daysToAdd > 0) {
      setDatesWithAdditions(startDate);
    }else{
      $('#update_warning').modal('show');
    }
  });

  $('#awardNoticeIssuanceUpdateBtn').click(function(event){
    var startDate = $('#startDate').val();
    var daysToAdd = $('#awardNoticeIssuanceNumber').val();
    awardNoticeIssuanceMaxBase = awardNoticeIssuanceMinBase + (parseFloat(daysToAdd)-1);
    contractSigningMinBase = awardNoticeIssuanceMaxBase + 1;
    contractSigningMaxBase = awardNoticeIssuanceMaxBase + 1;
    authorityApprovalMinBase = contractSigningMaxBase + 1;
    authorityApprovalMaxBase = contractSigningMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    proceedNoticeMaxBase = authorityApprovalMaxBase + 1;
    if (daysToAdd && daysToAdd > 0) {
      setDatesWithAdditions(startDate);
    }else{
      $('#update_warning').modal('show');
    }
  });

  $('#contractSigningUpdateBtn').click(function(event){
    var startDate = $('#startDate').val();
    var daysToAdd = $('#contractSigningNumber').val();
    contractSigningMaxBase = contractSigningMinBase + (parseFloat(daysToAdd)-1);
    authorityApprovalMinBase = contractSigningMaxBase + 1;
    authorityApprovalMaxBase = contractSigningMaxBase + 1;
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    proceedNoticeMaxBase = authorityApprovalMaxBase + 1;
    if (daysToAdd && daysToAdd > 0) {
      setDatesWithAdditions(startDate);
    }else{
      $('#update_warning').modal('show');
    }
  });

  $('#authorityApprovalUpdateBtn').click(function(event){
    var startDate = $('#startDate').val();
    var daysToAdd = $('#authorityApprovalNumber').val();
    authorityApprovalMaxBase = authorityApprovalMinBase + (parseFloat(daysToAdd)-1);
    proceedNoticeMinBase = authorityApprovalMaxBase + 1;
    proceedNoticeMaxBase = authorityApprovalMaxBase + 1;
    if (daysToAdd && daysToAdd > 0) {
      setDatesWithAdditions(startDate);
    }else{
      $('#update_warning').modal('show');
    }
  });


  $('#proceedNoticeUpdateBtn').click(function(event){
    var startDate = $('#startDate').val();
    var daysToAdd = $('#proceedNoticeNumber').val();
    proceedNoticeMaxBase = proceedNoticeMinBase + (parseFloat(daysToAdd)-1);
    if (daysToAdd && daysToAdd > 0) {
      setDatesWithAdditions(startDate);
    }else{
      $('#update_warning').modal('show');
    }
  });

  function setDatesWithAdditions(startDate){
    if ($('#yesApproval').is(":checked") && $('#yesPreBid').is(":checked")) {
      setDates(startDate, advertisementMinBase, advertisementMaxBase, prebidMaxBase, prebidMaxBase, bidSubmissionMinBase, bidSubmissionMaxBase, bidEvaluationMinBase, bidEvaluationMaxBase, postQualificationMinBase, postQualificationMaxBase, awardNoticeIssuanceMinBase, awardNoticeIssuanceMaxBase, contractSigningMinBase, contractSigningMaxBase, authorityApprovalMinBase, authorityApprovalMaxBase, proceedNoticeMinBase, proceedNoticeMaxBase);  
    }
    if ($('#noApproval').is(":checked") && $('#noPreBid').is(":checked")) {
      setDatesWithoutPBCandAHA(startDate, advertisementMinBase, advertisementMaxBase, prebidMaxBase, prebidMaxBase, bidSubmissionMinBase, bidSubmissionMaxBase, bidEvaluationMinBase, bidEvaluationMaxBase, postQualificationMinBase, postQualificationMaxBase, awardNoticeIssuanceMinBase, awardNoticeIssuanceMaxBase, contractSigningMinBase, contractSigningMaxBase, authorityApprovalMinBase, authorityApprovalMaxBase, proceedNoticeMinBase, proceedNoticeMaxBase);
    }
    if ($('#noApproval').is(":checked") && $('#yesPreBid').is(":checked")) {
      setDatesWithoutAHA(startDate, advertisementMinBase, advertisementMaxBase, prebidMaxBase, prebidMaxBase, bidSubmissionMinBase, bidSubmissionMaxBase, bidEvaluationMinBase, bidEvaluationMaxBase, postQualificationMinBase, postQualificationMaxBase, awardNoticeIssuanceMinBase, awardNoticeIssuanceMaxBase, contractSigningMinBase, contractSigningMaxBase, authorityApprovalMinBase, authorityApprovalMaxBase, proceedNoticeMinBase, proceedNoticeMaxBase);
    }
    if ($('#noPreBid').is(":checked") && $('#yesApproval').is(":checked")) {
      setDatesWithoutPBC(startDate, advertisementMinBase, advertisementMaxBase, prebidMaxBase, prebidMaxBase, bidSubmissionMinBase, bidSubmissionMaxBase, bidEvaluationMinBase, bidEvaluationMaxBase, postQualificationMinBase, postQualificationMaxBase, awardNoticeIssuanceMinBase, awardNoticeIssuanceMaxBase, contractSigningMinBase, contractSigningMaxBase, authorityApprovalMinBase, authorityApprovalMaxBase, proceedNoticeMinBase, proceedNoticeMaxBase);
    }
  }



  $('#startOverBtn').click(function(event){
    $(':input').val('');
    $('#repapulate_date_btn').prop('disabled', false);
    $(this).prop('disabled', true);
  });

  function setStartDate(date, interval){
    var startDate = new Date(date);
    startDate.setDate(startDate.getDate()+interval);
    console.log(startDate);
    var startDateDay = ("0" + startDate.getDate()).slice(-2);
    var startDateMonth = ("0" + (startDate.getMonth() + 1)).slice(-2);
    var finalStartDate = startDate.getFullYear()+"-"+(startDateMonth)+"-"+(startDateDay);
    return finalStartDate;
  }

  function setEndDate(date, interval){
    var endDate = new Date(date);
    endDate.setDate(endDate.getDate()+interval);
    console.log(endDate);
    var endDateDay = ("0" + endDate.getDate()).slice(-2);
    var endDateMonth = ("0" + (endDate.getMonth() + 1)).slice(-2);
    var finalEndDate = endDate.getFullYear()+"-"+(endDateMonth)+"-"+(endDateDay);
    return finalEndDate;
  }

  $('#timeLineComputeBtn').click(function(event){
    var startDate = $('#startDate').val();

    if (startDate == null || startDate == "") {
      $('#missing_startdate_warning').modal('show');
    }else{
      $('#timelineModalConfirmBtn').attr('disabled', false);
      if ($('#noPreBid').is(":checked") && $('#noApproval').is(":checked")) {
        setDatesToEarliestPossibleTimeWithoutPBCandAHA(startDate);
      }else if($('#noApproval').is(":checked")){
        setDatesToEarliestPossibleTimeWithoutAHA(startDate);
      }else if($('#noPreBid').is(":checked")){
        setDatesToEarliestPossibleTimeWithoutPBC(startDate);
      }else{
        setDatesToEarliestPossibleTime(startDate);  
      }
    }

    $('.inpt-no-days').val('');
    $('#repapulate_date_btn').prop('disabled', false);
  });





  function setDatesToEarliestPossibleTime(startDate){
    setAdvertisementDate(startDate, 0, 7);
    setPreBidDate(startDate, 8, 8);
    setBidSubmissionDate(startDate, 20, 20);
    setBidEvaluationDate(startDate, 21, 21);
    setPostQualificationDate(startDate, 22, 22);
    setAwardNoticeIssuanceDate(startDate, 23, 23);
    setContractSigningDate(startDate, 24, 24);
    setAuthorityApprovalDate(startDate, 25, 25);
    setProceedNoticeDate(startDate, 26, 26);
    setMinAndMaxDates();
  }

  function setDates(startDate, advertisementMin, advertisementMax, prebidMin, prebidMax, bidSubmissionMin, bidSubmissionMax, bidEvaluationMin, bidEvaluationMax, postQualificationMin, postQualificationMax, awardNoticeIssuanceMin, awardNoticeIssuanceMax, contractSigningMin, contractSigningMax, authorityApprovalMin, authorityApprovalMax, proceedNoticeMin, proceedNoticeMax){
    setAdvertisementDate(startDate, advertisementMin, advertisementMax);
    setPreBidDate(startDate, prebidMin, prebidMax);
    setBidSubmissionDate(startDate, bidSubmissionMin, bidSubmissionMax);
    setBidEvaluationDate(startDate, bidEvaluationMin, bidEvaluationMax);
    setPostQualificationDate(startDate, postQualificationMin, postQualificationMax);
    setAwardNoticeIssuanceDate(startDate, awardNoticeIssuanceMin, awardNoticeIssuanceMax);
    setContractSigningDate(startDate, contractSigningMin, contractSigningMax);
    setAuthorityApprovalDate(startDate, authorityApprovalMin, authorityApprovalMax);
    setProceedNoticeDate(startDate, proceedNoticeMin, proceedNoticeMax);
  }

  function setDatesWithoutPBC(startDate, advertisementMin, advertisementMax, prebidMin, prebidMax, bidSubmissionMin, bidSubmissionMax, bidEvaluationMin, bidEvaluationMax, postQualificationMin, postQualificationMax, awardNoticeIssuanceMin, awardNoticeIssuanceMax, contractSigningMin, contractSigningMax, authorityApprovalMin, authorityApprovalMax, proceedNoticeMin, proceedNoticeMax){
    setAdvertisementDate(startDate, advertisementMin, advertisementMax);
    setBidSubmissionDate(startDate, bidSubmissionMin, bidSubmissionMax);
    setBidEvaluationDate(startDate, bidEvaluationMin, bidEvaluationMax);
    setPostQualificationDate(startDate, postQualificationMin, postQualificationMax);
    setAwardNoticeIssuanceDate(startDate, awardNoticeIssuanceMin, awardNoticeIssuanceMax);
    setContractSigningDate(startDate, contractSigningMin, contractSigningMax);
    setAuthorityApprovalDate(startDate, authorityApprovalMin, authorityApprovalMax);
    setProceedNoticeDate(startDate, proceedNoticeMin, proceedNoticeMax);
  }

  function setDatesWithoutAHA(startDate, advertisementMin, advertisementMax, prebidMin, prebidMax, bidSubmissionMin, bidSubmissionMax, bidEvaluationMin, bidEvaluationMax, postQualificationMin, postQualificationMax, awardNoticeIssuanceMin, awardNoticeIssuanceMax, contractSigningMin, contractSigningMax, authorityApprovalMin, authorityApprovalMax, proceedNoticeMin, proceedNoticeMax){
    setAdvertisementDate(startDate, advertisementMin, advertisementMax);
    setPreBidDate(startDate, prebidMin, prebidMax);
    setBidSubmissionDate(startDate, bidSubmissionMin, bidSubmissionMax);
    setBidEvaluationDate(startDate, bidEvaluationMin, bidEvaluationMax);
    setPostQualificationDate(startDate, postQualificationMin, postQualificationMax);
    setAwardNoticeIssuanceDate(startDate, awardNoticeIssuanceMin, awardNoticeIssuanceMax);
    setContractSigningDate(startDate, contractSigningMin, contractSigningMax);
    setProceedNoticeDate(startDate, proceedNoticeMin, proceedNoticeMax);
  }

  function setDatesWithoutPBCandAHA(startDate, advertisementMin, advertisementMax, prebidMin, prebidMax, bidSubmissionMin, bidSubmissionMax, bidEvaluationMin, bidEvaluationMax, postQualificationMin, postQualificationMax, awardNoticeIssuanceMin, awardNoticeIssuanceMax, contractSigningMin, contractSigningMax, authorityApprovalMin, authorityApprovalMax, proceedNoticeMin, proceedNoticeMax){
    setAdvertisementDate(startDate, advertisementMin, advertisementMax);
    setBidSubmissionDate(startDate, bidSubmissionMin, bidSubmissionMax);
    setBidEvaluationDate(startDate, bidEvaluationMin, bidEvaluationMax);
    setPostQualificationDate(startDate, postQualificationMin, postQualificationMax);
    setAwardNoticeIssuanceDate(startDate, awardNoticeIssuanceMin, awardNoticeIssuanceMax);
    setContractSigningDate(startDate, contractSigningMin, contractSigningMax);
    setProceedNoticeDate(startDate, proceedNoticeMin, proceedNoticeMax);
  }

  function setDatesToEarliestPossibleTimeWithoutPBC(startDate){
    setAdvertisementDate(startDate, 0, 7);
    setBidSubmissionDate(startDate, 8, 8);
    setBidEvaluationDate(startDate, 9, 9);
    setPostQualificationDate(startDate, 10, 10);
    setAwardNoticeIssuanceDate(startDate, 11, 11);
    setContractSigningDate(startDate, 12, 12);
    setAuthorityApprovalDate(startDate, 13, 13);
    setProceedNoticeDate(startDate, 14, 14);
    setMinAndMaxDatesWithoutPBC();
  }

  function setDatesToEarliestPossibleTimeWithoutAHA(startDate){
    setAdvertisementDate(startDate, 0, 7);
    setPreBidDate(startDate, 8, 8);
    setBidSubmissionDate(startDate, 20, 20);
    setBidEvaluationDate(startDate, 21, 21);
    setPostQualificationDate(startDate, 22, 22);
    setAwardNoticeIssuanceDate(startDate, 23, 23);
    setContractSigningDate(startDate, 24, 24);
    setProceedNoticeDate(startDate, 25, 25);
    setMinAndMaxDatesWithoutAHA();
  }

  function setDatesToEarliestPossibleTimeWithoutPBCandAHA(startDate){
    setAdvertisementDate(startDate, 0, 7);
    setBidSubmissionDate(startDate, 8, 8);
    setBidEvaluationDate(startDate, 9, 9);
    setPostQualificationDate(startDate, 10, 10);
    setAwardNoticeIssuanceDate(startDate, 11, 11);
    setContractSigningDate(startDate, 12, 12);
    setProceedNoticeDate(startDate, 13, 13);
    setMinAndMaxDatesWithoutPBCandAHA();
  }

  function setAdvertisementDate(startDate, min, max){
    $('#advertisement_start').val(setStartDate(startDate, min));
    $('#advertisement_end').val(setEndDate(startDate, max));
  }

  function setPreBidDate(startDate, min, max){
    $('#preBidStart').val(setStartDate(startDate, min));
    $('#preBidEnd').val(setEndDate(startDate, max));
  }

  function setBidSubmissionDate(startDate, min, max){
    $('#bidSubmissionStart').val(setStartDate(startDate, min));
    $('#bidSubmissionEnd').val(setEndDate(startDate, max));
  }

  function setBidEvaluationDate(startDate, min, max){
    $('#bidEvaluationStart').val(setStartDate(startDate, min));
    $('#bidEvaluationEnd').val(setEndDate(startDate, max));
  }

  function setPostQualificationDate(startDate, min, max){
    $('#postQualificationStart').val(setStartDate(startDate, min));
    $('#postQualificationEnd').val(setEndDate(startDate, max));
  }

  function setAwardNoticeIssuanceDate(startDate, min, max){
    $('#awardNoticeIssuanceStart').val(setStartDate(startDate, min));
    $('#awardNoticeIssuanceEnd').val(setEndDate(startDate, max));
  }

  function setContractSigningDate(startDate, min, max){
    $('#contractSigningStart').val(setStartDate(startDate, min));
    $('#contractSigningEnd').val(setEndDate(startDate, max));
  }

  function setAuthorityApprovalDate(startDate, min, max){
    $('#authorityApprovalStart').val(setStartDate(startDate, min));
    $('#authorityApprovalEnd').val(setEndDate(startDate, max));
  }

  function setProceedNoticeDate(startDate, min, max){
    $('#proceedNoticeStart').val(setStartDate(startDate, min));
    $('#proceedNoticeEnd').val(setEndDate(startDate, max));
  }

    $('#timelineModalConfirmBtn').click(function(e){
      $('#addStart').html($('#advertisement_start').val());
      $('#addEnd').html($('#advertisement_end').val());
      $('#pbcStart').html($('#preBidStart').val());
      $('#pbcEnd').html($('#preBidEnd').val());
      $('#sbStart').html($('#bidSubmissionStart').val());
      $('#sbEnd').html($('#bidSubmissionEnd').val());
      $('#beStart').html($('#bidEvaluationStart').val());
      $('#beEnd').html($('#bidEvaluationEnd').val());
      $('#pqStart').html($('#postQualificationStart').val());
      $('#pqEnd').html($('#postQualificationEnd').val());
      $('#inaStart').html($('#awardNoticeIssuanceStart').val());
      $('#inaEnd').html($('#awardNoticeIssuanceEnd').val());
      $('#cpsStart').html($('#contractSigningStart').val());
      $('#cpsEnd').html($('#contractSigningEnd').val());
      $('#ahaStart').html($('#authorityApprovalStart').val());
      $('#ahaEnd').html($('#authorityApprovalEnd').val());
      $('#ntpStart').html($('#proceedNoticeStart').val());
      $('#ntpEnd').html($('#proceedNoticeEnd').val());
    });


  </script>
