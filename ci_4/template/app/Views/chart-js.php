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
								<h3 class="page-title">Chartjs</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
									<li class="breadcrumb-item active">Chartjs</li>
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
									<div>
										<canvas id="chartBar1" class="h-300"></canvas>
									</div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Transparency </div>
								</div>
								<div class="card-body">
									<div>
										<canvas id="chartBar2" class="h-300"></canvas>
									</div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
									<div class="card-header">
										<div class="card-title">Gradient Bar Chart</div>
									</div>
									<div class="card-body">
										<div>
											<canvas id="chartBar3" class="h-300"></canvas>
										</div>
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
										<div class="chartjs-wrapper-demo">
											<canvas id="chartBar4" class="h-300"></canvas>
										</div>
									</div>
								</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Horizontal Bar Chart Style2</div>
								</div>
								<div class="card-body">
									<div class="chartjs-wrapper-demo">
										<canvas id="chartBar5" class="h-300"></canvas>
									</div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Vertical Stacked Bar Chart</div>
								</div>
								<div class="card-body">
									<div class="chartjs-wrapper-demo">
										<canvas id="chartStacked1" class="h-300"></canvas>
									</div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Horizontal Stacked Bar Chart</div>
								</div>
								<div class="card-body">
									<div class="chartjs-wrapper-demo">
										<canvas id="chartStacked2" class="h-300"></canvas>
									</div>
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
									<div class="chartjs-wrapper-demo">
										<canvas id="chartLine1" class="h-300"></canvas>
									</div>
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
									<div class="chartjs-wrapper-demo">
										<canvas id="chartPie" class="h-300"></canvas>
									</div>
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
									<div class="chartjs-wrapper-demo">
										<canvas id="chartDonut" class="h-300"></canvas>
									</div>
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
									<div class="card-body">
										<div class="chartjs-wrapper-demo">
											<canvas id="chartArea1" class="h-300"></canvas>
										</div>
									</div>
								</div>
						</div>
						<!-- /Chart -->
							
					</div>
				
				</div>	
            </div>

            </div>		
		<!-- /Main Wrapper --> 
        <div class="searchpart">
            <div class="searchcontent">
                <div class="searchhead">
                    <h3>Search </h3>
                    <a id="closesearch"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                </div>
                <div class="searchcontents">
                    <div class="searchparts">
                        <input type="text" placeholder="search here">
                        <a class="btn btn-searchs" >Search</a>
                    </div>
                    <div class="recentsearch">
                        <h2>Recent Search</h2>
                        <ul>
                            <li>
                                <h6><i class="fa fa-search me-2"></i> Settings</h6>
                            </li>
                            <li>
                                <h6><i class="fa fa-search me-2"></i> Report</h6>
                            </li>
                            <li>
                                <h6><i class="fa fa-search me-2"></i> Invoice</h6>
                            </li>
                            <li>
                                <h6><i class="fa fa-search me-2"></i> Sales</h6>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
		 
        <?= $this->include('partials/theme-settings') ?>
		<?= $this->include('partials/vendor-scripts') ?>
		 <!-- Chart JS -->
		 <script src="<?php echo base_url();?>assets/plugins/chartjs/chart.min.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/chartjs/chart-data.js"></script>
	</body>
</html>