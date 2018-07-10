

      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <a class="navbar-brand" href="<?php echo base_url('doctrack/documentTrackHomeView') ?>">Document Tracking</a>
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>

              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <ul class="nav navbar-nav navbar-centered collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <li <?php if($pageName == "onHand"){ echo "class='active'"; } ?>>
                  <a href="<?php echo base_url('doctrack/documentsOnHandView') ?>">Documents On Hand</a>
                </li>
                <li <?php if($pageName == "incoming"){ echo "class='active'"; } ?>>
                  <a href="<?php echo base_url('doctrack/incomingDocumentsView') ?>">Incoming Documents</a>
                </li>
                <li <?php if($pageName == "onRoute"){ echo "class='active'"; } ?>>
                  <a href="<?php echo base_url('doctrack/onRouteDocumentsView') ?>">Documents On Route</a>
                </li>
              </ul>
            </div><!-- /.container-fluid -->
          </nav>
        </div>
      </div>

