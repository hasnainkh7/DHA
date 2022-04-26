<?php
$curPpageTitle = "Project Data"; 
include("inc/header.php");

?>

<style>

	@media only screen and (min-width: 768px){
		body{
			overflow: visible !important;
			max-width: 230% !important;
			width: 230% !important;
		}
	}
	.myCard{
		margin-bottom: 0.9rem !important;
	}
	.mycard-body{
		padding: 0.88rem !important;
	}
</style>


<div class="row">
	<div class="col-md-2">
		<div class="row">
			<div class="col-md-3">
				<h2 class="font-w600 fs-18">Project Name:<br><span class=" text-black font-w600 fs-32">DHA</span></h2>
			</div>
			<div class="col-md-5">
				<h2 class="font-w600 fs-18">Last Updated:<br><span class="text-black font-w600 fs-32">25 April 2022</span></h2>
			</div>
			<div class="col-md-4">
				<h2 class="font-w600 fs-18">Location:<br><span class="text-black font-w600 fs-32">Karachi</span></h2>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-12">
			<p class="font-w400 fs-16 text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
			</div>
		</div>
	</div>
	<div class="col-md-1" style="margin-right:-100px;">
		<img src="images/logo3.png" alt="projectLogo" width="170">
	</div>

	<div class="col-md-6">
		<div class="row">
		    <div class="col-sm-2">
		        <div class="widget-stat card">
					<div class="card-body p-4">
						<div class="media ai-icon">
							<span class="mr-2 bgl-danger">
								<!-- <i class="ti-user"></i> -->
								<i class="text-danger fa fa-arrow-down"></i>
							</span>
							<div class="media-body">
								<p class="mb-1">1 Week</p>
								<h4 class="mb-0 fs-18 text-danger font-w600">-9.60%</h4>
							</div>
						</div>
					</div>
				</div>
		    </div>		

		    <div class="col-sm-2">
		        <div class="widget-stat card">
					<div class="card-body p-4">
						<div class="media ai-icon">
							<span class="mr-2 bgl-success">
								<!-- <i class="ti-user"></i> -->
								<i class="text-success fa fa-arrow-up"></i>
							</span>
							<div class="media-body">
								<p class="mb-1">2 Weeks</p>
								<h4 class="mb-0 fs-18 text-success font-w600">+3.60%</h4>
							</div>
						</div>
					</div>
				</div>
		    </div>		

		    <div class="col-sm-2">
		        <div class="widget-stat card">
					<div class="card-body p-4">
						<div class="media ai-icon">
							<span class="mr-2 bgl-danger">
								<!-- <i class="ti-user"></i> -->
								<i class="text-danger fa fa-arrow-down"></i>
							</span>
							<div class="media-body">
								<p class="mb-1">3 Weeks</p>
								<h4 class="mb-0 fs-18 text-danger font-w600">-3.60%</h4>
							</div>
						</div>
					</div>
				</div>
		    </div>		

		    <div class="col-sm-2">
		        <div class="widget-stat card">
					<div class="card-body p-4">
						<div class="media ai-icon">
							<span class="mr-2 bgl-success">
								<!-- <i class="ti-user"></i> -->
								<i class="text-success fa fa-arrow-up"></i>
							</span>
							<div class="media-body">
								<p class="mb-1">1 Month</p>
								<h4 class="mb-0 fs-18 text-success font-w600">+3.60%</h4>
							</div>
						</div>
					</div>
				</div>
		    </div>		

		    <div class="col-sm-2">
		        <div class="widget-stat card">
					<div class="card-body p-4">
						<div class="media ai-icon">
							<span class="mr-2 bgl-danger">
								<!-- <i class="ti-user"></i> -->
								<i class="text-danger fa fa-arrow-down"></i>
							</span>
							<div class="media-body">
								<p class="mb-1">3 Months</p>
								<h4 class="mb-0 fs-18 text-danger font-w600">-3.60%</h4>
							</div>
						</div>
					</div>
				</div>
		    </div>		

		    <div class="col-sm-2">
		        <div class="widget-stat card">
					<div class="card-body p-4">
						<div class="media ai-icon">
							<span class="mr-2 bgl-success">
								<!-- <i class="ti-user"></i> -->
								<i class="text-success fa fa-arrow-up"></i>
							</span>
							<div class="media-body">
								<p class="mb-1">1 Year</p>
								<h4 class="mb-0 fs-18 text-success font-w600">+3.60%</h4>
							</div>
						</div>
					</div>
				</div>
		    </div> 
		</div>
	</div>
</div>

<div class="row">
	
</div>

<div class="row mt-4">	
	<div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-mydark">
                <h3 class="card-title text-white fs-28">Project Data</h3>
				<small class="text-white"><b>Last Updated:</b> 13 April 2022</small>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                	<table class="table b-b table-responsive-md text-center" id="table">
                    	<thead class="b-tlr myHeader">
                        	<tr class="text-white bg-myblue">
								<th>Sector / Phase</th>
                            	<th>Performance</th>
                            	<th class="bg-info">Commercial Plots</th>
                            	<th class="bg-warning">Residential Plots</th>
								<th>Last Updated</th>
							</tr>
							<tr class="borderTop table-row" data-href="">
								<th class="b3-lr text-left bg-myprimary" style="border-right:1px solid #fff !important;"></th> 
								<th class="b3-lr bg-myprimary" style="border-right:1px solid #fff !important;">
									<table  class="table text-center">
										<thead class="text-white">
											<th>1<br>Week</th>
											<th>1<br>Month</th>
											<th>3<br>Months</th>
											<th>6<br>Months</th>
											<th>1<br>Year</th>
										</thead>
									</table>
								</th>

								<th class="text-black bg-myprimary" style="border-right:1px solid #fff !important;">
									<table  class="table text-center">
										<thead class="text-white">
											<th>4 Marla</th>
											<th>8 Marla</th>
											<th>1 Kanal</th>
										</thead>
										<tbody>
											<td class="text-success">
												<table class="table text-center b-lr">
													<thead class="text-white">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
												</table>
											</td>

											<td class="text-success">
												<table class="b-lr table text-center">
													<thead class="text-white">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
												</table>
											</td>

											<td class="text-success">
												<table class="b-lr table text-center">
													<thead class="text-white">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
												</table>
											</td>
										</tbody>
									</table>
								</th>


								<th class="b3-lr bg-myprimary" style="border-right:1px solid #fff !important;">
									<table  class="table text-center">
										<thead class="text-white">
											<th>125 Sq Yds</th>
											<th>200 Sq Yds</th>
											<th>250 Sq Yds</th>
											<th>300 Sq Yds</th>
											<th>500 Sq Yds</th>
											<th>1000 Sq Yds</th>
										</thead>
										<tbody>
											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-white bg-myblue">
														<th>Min</th>
														<th>Max</th>
													</thead>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-white">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-white">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-white">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-white">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-white">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
												</table>
											</td>
										</tbody>
									</table>
								</th>

								<th class="b3-lr bg-myprimary"></th>
							
                        	</tr>
                    	</thead>
                    	<tbody>
                        	<tr class="borderTop table-row" data-href="">
								<td class="b3-lr">Phase 1</td> 
								<td class="b3-lr">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>1<br>Week</th>
											<th>1<br>Month</th>
											<th>3<br>Months</th>
											<th>6<br>Months</th>
											<th>1<br>Year</th>
										</thead>
										<tbody>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),1); ?>%</td>
										</tbody>
									</table>
								</td>

								<td class="text-black">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>4 Marla</th>
											<th>8 Marla</th>
											<th>1 Kanal</th>
										</thead>
										<tbody>
											<td class="text-success">
												<table class="table text-center b-lr">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>


								<td class="b3-lr">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>125 Sq Yds</th>
											<th>200 Sq Yds</th>
											<th>250 Sq Yds</th>
											<th>300 Sq Yds</th>
											<th>500 Sq Yds</th>
											<th>1000 Sq Yds</th>
										</thead>
										<tbody>
											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>
								<td class="text-black">26 April 2022</td>
                        	</tr>

							<tr class="borderTop table-row alternate-bg" data-href="">
								<td class="b3-lr">Phase 2</td>
								<td class="b3-lr">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>1<br>Week</th>
											<th>1<br>Month</th>
											<th>3<br>Months</th>
											<th>6<br>Months</th>
											<th>1<br>Year</th>
										</thead>
										<tbody>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),1); ?>%</td>
										</tbody>
									</table>
								</td>

								<td class="text-black">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>4 Marla</th>
											<th>8 Marla</th>
											<th>1 Kanal</th>
										</thead>
										<tbody>
											<td class="text-success">
												<table class="table text-center b-lr">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>


								<td class="b3-lr">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>125 Sq Yds</th>
											<th>200 Sq Yds</th>
											<th>250 Sq Yds</th>
											<th>300 Sq Yds</th>
											<th>500 Sq Yds</th>
											<th>1000 Sq Yds</th>
										</thead>
										<tbody>
											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>

								<td class="text-black">26 April 2022</td>
							
                        	</tr>

							<tr class="borderTop table-row" data-href="">
								<td class="b3-lr">Phase 3</td>
								<td class="b3-lr">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>1<br>Week</th>
											<th>1<br>Month</th>
											<th>3<br>Months</th>
											<th>6<br>Months</th>
											<th>1<br>Year</th>
										</thead>
										<tbody>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),1); ?>%</td>
										</tbody>
									</table>
								</td>

								<td class="text-black">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>4 Marla</th>
											<th>8 Marla</th>
											<th>1 Kanal</th>
										</thead>
										<tbody>
											<td class="text-success">
												<table class="table text-center b-lr">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>


								<td class="b3-lr">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>125 Sq Yds</th>
											<th>200 Sq Yds</th>
											<th>250 Sq Yds</th>
											<th>300 Sq Yds</th>
											<th>500 Sq Yds</th>
											<th>1000 Sq Yds</th>
										</thead>
										<tbody>
											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>

								<td class="text-black">26 April 2022</td>
							
                        	</tr>

							<tr class="borderTop table-row alternate-bg" data-href="">
								<td class="b3-lr">Phase 4</td> 
								<td class="b3-lr">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>1<br>Week</th>
											<th>1<br>Month</th>
											<th>3<br>Months</th>
											<th>6<br>Months</th>
											<th>1<br>Year</th>
										</thead>
										<tbody>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),1); ?>%</td>
										</tbody>
									</table>
								</td>

								<td class="text-black">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>4 Marla</th>
											<th>8 Marla</th>
											<th>1 Kanal</th>
										</thead>
										<tbody>
											<td class="text-success">
												<table class="table text-center b-lr">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>


								<td class="b3-lr">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>125 Sq Yds</th>
											<th>200 Sq Yds</th>
											<th>250 Sq Yds</th>
											<th>300 Sq Yds</th>
											<th>500 Sq Yds</th>
											<th>1000 Sq Yds</th>
										</thead>
										<tbody>
											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>

								<td class="text-black">26 April 2022</td>
							
                        	</tr>

							<tr class="borderTop table-row" data-href="">
								<td class="b3-lr">Phase 5</td>
								<td class="b3-lr">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>1<br>Week</th>
											<th>1<br>Month</th>
											<th>3<br>Months</th>
											<th>6<br>Months</th>
											<th>1<br>Year</th>
										</thead>
										<tbody>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),1); ?>%</td>
										</tbody>
									</table>
								</td>

								<td class="text-black">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>4 Marla</th>
											<th>8 Marla</th>
											<th>1 Kanal</th>
										</thead>
										<tbody>
											<td class="text-success">
												<table class="table text-center b-lr">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>


								<td class="b3-lr">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>125 Sq Yds</th>
											<th>200 Sq Yds</th>
											<th>250 Sq Yds</th>
											<th>300 Sq Yds</th>
											<th>500 Sq Yds</th>
											<th>1000 Sq Yds</th>
										</thead>
										<tbody>
											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>

								<td class="text-black">26 April 2022</td>
							
                        	</tr>

							<tr class="borderTop table-row alternate-bg" data-href="">
								<td class="b3-lr">Phase 6</td> 
								<td class="b3-lr">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>1<br>Week</th>
											<th>1<br>Month</th>
											<th>3<br>Months</th>
											<th>6<br>Months</th>
											<th>1<br>Year</th>
										</thead>
										<tbody>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),1); ?>%</td>
										</tbody>
									</table>
								</td>

								<td class="text-black">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>4 Marla</th>
											<th>8 Marla</th>
											<th>1 Kanal</th>
										</thead>
										<tbody>
											<td class="text-success">
												<table class="table text-center b-lr">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>


								<td class="b3-lr">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>125 Sq Yds</th>
											<th>200 Sq Yds</th>
											<th>250 Sq Yds</th>
											<th>300 Sq Yds</th>
											<th>500 Sq Yds</th>
											<th>1000 Sq Yds</th>
										</thead>
										<tbody>
											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>

								<td class="text-black">26 April 2022</td>
							
                        	</tr>

							<tr class="borderTop table-row" data-href="">
								<td class="b3-lr">Phase 7</td> 
								<td class="b3-lr">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>1<br>Week</th>
											<th>1<br>Month</th>
											<th>3<br>Months</th>
											<th>6<br>Months</th>
											<th>1<br>Year</th>
										</thead>
										<tbody>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),1); ?>%</td>
										</tbody>
									</table>
								</td>

								<td class="text-black">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>4 Marla</th>
											<th>8 Marla</th>
											<th>1 Kanal</th>
										</thead>
										<tbody>
											<td class="text-success">
												<table class="table text-center b-lr">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>


								<td class="b3-lr">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>125 Sq Yds</th>
											<th>200 Sq Yds</th>
											<th>250 Sq Yds</th>
											<th>300 Sq Yds</th>
											<th>500 Sq Yds</th>
											<th>1000 Sq Yds</th>
										</thead>
										<tbody>
											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>
							
								<td class="text-black">26 April 2022</td>
                        	</tr>

							<tr class="borderTop table-row alternate-bg" data-href="">
								<td class="b3-lr">Phase 8</td>
								<td class="b3-lr">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>1<br>Week</th>
											<th>1<br>Month</th>
											<th>3<br>Months</th>
											<th>6<br>Months</th>
											<th>1<br>Year</th>
										</thead>
										<tbody>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),1); ?>%</td>
										</tbody>
									</table>
								</td>

								<td class="text-black">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>4 Marla</th>
											<th>8 Marla</th>
											<th>1 Kanal</th>
										</thead>
										<tbody>
											<td class="text-success">
												<table class="table text-center b-lr">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>


								<td class="b3-lr">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>125 Sq Yds</th>
											<th>200 Sq Yds</th>
											<th>250 Sq Yds</th>
											<th>300 Sq Yds</th>
											<th>500 Sq Yds</th>
											<th>1000 Sq Yds</th>
										</thead>
										<tbody>
											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="text-black"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>

								<td class="text-black">26 April 2022</td>
							
                        	</tr>

                    	</tbody>
               		</table>
            	</div>
        	</div>
    	</div>
	</div>
</div>





<?php include("inc/footer.php");?>