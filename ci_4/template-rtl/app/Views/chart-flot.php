<!DOCTYPE html>
<html lang="en">
	<head>
		<?= $this->include('partials/title-meta') ?>
		<?= $this->include('partials/head-css') ?>	
	</head>
	<?= $this->include('partials/body') ?>
		<div id="global-loader">
			<div class="whirly-loader"> </div>
		</div>
		<!-- Main Wrapper -->
		<div class="main-wrapper">
			<?= $this->include('partials/menu') ?>
            <div class="page-wrapper cardhead">
                <div class="content">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Flot Chart</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
									<li class="breadcrumb-item active">Flot Charts</li>
								</ul>
							</div>
						</div>
					</div>
	
					<!-- /Page Header -->
					
					
					<div class="row">
					
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Bar Chart</div>
								</div>
								<div class="card-body  chart-set">
									<div class="h-250" id="flotBar1"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Bar Chart</div>
								</div>
								<div class="card-body chart-set">
									<div  class="h-250" id="flotBar2"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Line  Chart</div>
								</div>
								<div class="card-body chart-set">
									<div  class="h-250" id="flotLine1" ></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Line ChartPOints</div>
								</div>
								<div class="card-body chart-set">
									<div class="h-250" id="flotLine2" ></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Area Chart</div>
								</div>
								<div class="card-body chart-set">
									<div class="h-250" id="flotArea1" ></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Area Chart Points</div>
								</div>
								<div class="card-body chart-set">
									<div class="h-250" id="flotArea2" ></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Pie Chart</div>
								</div>
								<div class="card-body chart-set">
									<div class="h-250" id="flotPie1" ></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Donut Chart</div>
								</div>
								<div class="card-body chart-set">
									<div class="h-250" id="flotPie2"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
					</div>
				
				</div>		
            </div>


            </div>		
		<!-- /Main Wrapper --> 
		
        <?= $this->include('partials/theme-settings') ?>
		<?= $this->include('partials/vendor-scripts') ?>
		 <!-- Chart JS -->
		 <script src="<?php echo base_url();?>assets/plugins/flot/jquery.flot.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/flot/jquery.flot.fillbetween.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/flot/jquery.flot.pie.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/flot/chart-data.js"></script>
	</body>
</html>