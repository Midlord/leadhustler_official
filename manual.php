
<!DOCTYPE html>
<html>
 <?php include'head.php'; ?>
	<body>
	
		<!-- LOADER -->	
		<div id="loader-overflow">
      <div id="loader3">Please enable JS</div>
    </div>	

		<div id="wrap" class="boxed ">
			<div class="grey-bg"> <!-- Grey BG  -->	
				<!-- HEADER 1 NO-TRANSPARENT -->
        <?php include'header.php'; ?>
				
        <!-- Content -->
        <!-- PAGE TITLE SMALL -->
        <div class="page-title-cont page-title-small page-title-img grey-dark-bg pt-250">
          <div class="relative container align-left">
            <div class="row">
              
              <div class="col-md-8">
                <h1 class="page-title">Training Manuals</h1>
                <div class="page-sub-title">
                <p style="color: rgba(255,255,255, .8);"> DON'T KNOW HOW TO RESPOND TO A CERTAIN CALL? </p>
                <p style="color: rgba(255,255,255, .8);">Let Introduction and Manuals help you! </p>
              </div>
              </div>
              
              <div class="col-md-4">
                <div class="breadcrumbs">
                  <a href="index.php">Home</a><span class="slash-divider">/</span><a href="manual.php"><span class="bread-current"> Training Manuals </span> </a>
                </div>
              </div>
              
            </div>
          </div>
        </div>
       
      <div class="grey-light-bg clearfix">    
        <!-- COTENT CONTAINER -->
        <div class="container white-bg plr-30 pt-50 pb-20 ">
        
          <div class="relative">
            <!-- PORTFOLIO FILTER -->                    
            <div class="port-filter ">
              <a href="#" class="filter active" data-filter="*">All Manuals</a>
              <a href="#" class="filter" data-filter=".development">Introduction</a>
              <a href="#" class="filter" data-filter=".design">Call Guides, Rebutts and Basics</a>
            </div>                    
                    
            <!-- ITEMS GRID -->
            <ul class="port-grid port-grid-gut clearfix" id="items-grid">

              <li class="port-item mix design">
                  <div class="port-img-overlay"> <iframe class="port-main-img" style="border:3px solid gray;" height="200" src="https://docs.google.com/gview?url=https://leadhustlerwebbased.000webhostapp.com/docs/LH-TRAINING-MANUAL.docx&embedded=true"></iframe></div>
                    <h5 class="text-center" style="color:black"><strong>TRAINING MANUAL AND BASIC SCRIPTS</strong></h5>
              </li>
              <li class="port-item mix development">
                  <div class="port-img-overlay"> <iframe class="port-main-img" style="border:3px solid gray;" height="200" src="https://docs.google.com/gview?url=https://leadhustlerwebbased.000webhostapp.com/docs/LEAD-HUSTLER-TRAINING-HEALTH-INSURANCE.pptx&embedded=true"></iframe> </div>
                  <h5 class="text-center" style="color:black"><strong>LEADHUSTLER TRAINING HEALTH INSURANCE</strong></h5>
              </li>
              <li class="port-item mix design">
                  <div class="port-img-overlay">   <iframe class="port-main-img" style="border:3px solid gray;" height="200" src="https://docs.google.com/gview?url=https://leadhustlerwebbased.000webhostapp.com/docs/REBUTTALS.docx&embedded=true"></iframe></div>
                    <h5 class="text-center" style="color:black"><strong>CALL REBUTTALS</strong></h5>
              </li>
              <li class="port-item mix design">
                  <div class="port-img-overlay"> <iframe class="port-main-img" style="border:3px solid gray;" height="200" src="https://docs.google.com/gview?url=https://leadhustlerwebbased.000webhostapp.com/docs/CALL-GUIDE-UPDATED.docx&embedded=true"></iframe>
                    <h5 class="text-center" style="color:black"><strong>CALL GUIDES</strong></h5>
              </li>
            </ul>
          </div>
        </div>
      </div>

        <!-- End Content -->
        
				<hr class="mt-0 mb-0">	

        <!-- Footer -->
        <?php include 'footer.php'; ?>
        <!-- End Footer -->
			</div><!-- End BG -->	
		</div><!-- End wrap -->	
        <?php include 'scripts.php'; ?>
	
	</body>
</html>		