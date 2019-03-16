
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
                <h1 class="page-title">BASIC SCRIPT FOR INDIVUAL & GROUP PLAN</h1>
                <div class="page-sub-title">
                <p style="color: rgba(255,255,255, .8);"> DON'T KNOW HOW TO RESPOND TO A CERTAIN CALL? </p>
                <!-- <p style="color: rgba(255,255,255, .8);">Let Introduction and Manuals help you! </p> -->
              </div>
              </div>
              
              <div class="col-md-4">
                <div class="breadcrumbs">
                  <a href="index.php">Home</a><span class="slash-divider">/</span><a href="basic_script.php"><span class="bread-current" style="font-size: 10px !important;" > BASIC SCRIPT FOR INDIVUAL & GROUP PLAN </span> </a>
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
              <a href="#" class="filter active" data-filter="*">All Plan Calls</a>
              <a href="#" class="filter" data-filter=".plan">BASIC SCRIPT FOR IND & GROUP PLAN</a>
              <a href="#" class="filter" data-filter=".subsidy">PROVING QUESTIONS FOR SUBSIDY PLAN</a>
            </div>                    
                    
            <!-- ITEMS GRID -->
            <ul class="port-grid port-grid-gut clearfix" id="items-grid">
              
              <!-- Item 1 -->
              <li class="port-item mix plan" style="width:50% !important;">
                  <div class="port-img-overlay"> <iframe width="550" height="300" src="https://drive.google.com/file/d/1iSaLmHJM2PlDYq3RW_xu56mtWPyLz4nw/preview"></iframe></div>
                  <h5 class="text-center" style="color:black"><strong>LEADHUSTLER TRAINING HEALTH INSURANCE</strong></h5>
              </li>

              <!-- Item 2 -->
              <li class="port-item mix subsidy" style="width:50% !important;">
                  <div class="port-img-overlay"><iframe width="550" height="300" src="https://drive.google.com/file/d/1T17uU0hunOvdYzcSZ633WOSquQwMlTo0/preview"></iframe></div>
                    <h5 class="text-center" style="color:black"><strong>PROVING QUESTIONS FOR SUBSIDY PLAN</strong></h5>
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