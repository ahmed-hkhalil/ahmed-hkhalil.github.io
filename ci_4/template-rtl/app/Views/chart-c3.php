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
								<h3 class="page-title">C3 Chart</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Dashboard</a></li>
									<li class="breadcrumb-item active">C3 Charts</li>
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
								<div class="card-body">
									<div id="chart-bar-stacked"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Multiple Bar Chart</div>
								</div>
								<div class="card-body">
									<div  id="chart-bar"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Horizontal Bar Chart</div>
								</div>
								<div class="card-body">
									<div  id="chart-bar-rotated" ></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Line Chart</div>
								</div>
								<div class="card-body">
									<div id="chart-sracked"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Line Chart</div>
								</div>
								<div class="card-body">
									<div id="chart-spline-rotated"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Line Chart</div>
								</div>
								<div class="card-body">
									<div id="chart-area-spline-sracked"></div>
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
								<div class="card-body">
									<div id="chart-pie"></div>
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
								<div class="card-body">
									<div id="chart-donut"></div>
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
		 <script src="<?php echo base_url();?>assets/plugins/c3-chart/d3.v5.min.js"></script>
	  <script src="<?php echo base_url();?>assets/plugins/c3-chart/c3.min.js"></script>
	  <script src="<?php echo base_url();?>assets/plugins/c3-chart/chart-data.js"></script>
	</body>
</html>