<?php
$curPpageTitle = "Dashboard"; 
include("inc/header.php");
?>


<!-- <div class="row">
	<div class="col-md-12">
		<h2>DHA City</h2>
		<div class="row mt-4">
			<div class="col-md-12">
				<div class="table-responsive">
					<div class="card">
						<div class="card-body">
							<table class="table table-responsive-md text-center">
								<thead>
									<tr class="text-black">
										<th>Location</th>
										<th>Performance</th>
										<th>Denominations</th>
									</tr>
									<tr class="text-black">
										<th></th>
										<th>
											<table class="table table-responsive-md text-center">
												<thead>
													<tr>
														<th>1 Week</th>
														<th>1 Week</th>
														<th>1 Week</th>
														<th>1 Week</th>
														<th>1 Week</th>
													</tr>
												</thead>
											</table>
										</th>
										<th>
											<table class="table table-responsive-md text-center">
												<thead>
													<tr>
														<th>Commerical</th>
														<th>Residential</th>
													</tr>
												</thead>
											</table>
										</th>
									</tr>
								</thead>
								<tbody>
								
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->

<style>
	.noneMe{
		background-color:red;
		display:none;
	}
	.table td{
		border:none !important;
		padding: 7px 20px !important;
	}
	.table th{
		/* background-color: var(--primary); */
		padding: 10px 20px !important;
	}
	.borderTop{
		border-top: 1px solid #f0f1f5 !important;
	}

	.table-responsive{
		margin-bottom:70px !important;
	}

</style>

<div class="row">			
	<div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Project Performance</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
					<h5 class="text-black fs-22">DHA City</h5>
                	<table class="table table-responsive-md text-center">
                    	<thead>
                        	<tr class="text-black">
								<th>Project Title</th>
								<th>Project Location</th>
                            	<th>Performance</th>
                            	<th>Commercial</th>
                            	<th>Residential</th>
							</tr>
                    	</thead>
                    	<tbody>
                        	<tr class="borderTop">
								<td>DHA City</td> 
								<td>Karachi</td> 
								<td>
									<table  class="table text-center">
										<thead class="text-info">
											<th>1<br>Week</th>
											<th>1<br>Month</th>
											<th>3<br>Months</th>
											<th>6<br>Months</th>
											<th>1<br>Year</th>
										</thead>
										<tbody>
											<td class="text-success">+69.69%</td>
											<td class="text-danger">-6.69%</td>
											<td class="text-success">+69.69%</td>
											<td class="text-danger">-6.69%</td>
											<td class="text-success">+69.69%</td>
										</tbody>
									</table>
								</td>

								<td>
									<table  class="table text-center">
										<thead class="text-info">
											<th>4 Marla</th>
											<th>8 Marla</th>
											<th>1 Kanal</th>
										</thead>
										<tbody>
											<td class="text-success">
												<table class="table text-center">
													<thead class="text-primary">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table text-center">
													<thead class="text-primary">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table text-center">
													<thead class="text-primary">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>


								<td>
									<table  class="table text-center">
										<thead class="text-info">
											<th>125 Sq Yds</th>
											<th>200 Sq Yds</th>
											<th>250 Sq Yds</th>
											<th>300 Sq Yds</th>
											<th>500 Sq Yds</th>
											<th>1000 Sq Yds</th>
										</thead>
										<tbody>
											<td class="text-success">
												<table class="table text-center">
													<thead class="text-primary">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table text-center">
													<thead class="text-primary">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table text-center">
													<thead class="text-primary">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table text-center">
													<thead class="text-primary">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table text-center">
													<thead class="text-primary">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table text-center">
													<thead class="text-primary">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>
							
                        	</tr>
							<tr class="borderTop">
								<td>DHA City</td> 
								<td>Lahore</td> 
								<td>
									<table  class="table text-center">
										<thead class="noneMe">
											<th>1 Week</th>
											<th>1 Month</th>
											<th>3 Months</th>
											<th>6 Months</th>
											<th>1 Year</th>
										</thead>
										<tbody>
											<td class="text-success">+69.69%</td>
											<td class="text-danger">-9.69%</td>
											<td class="text-success">+69.69%</td>
											<td class="text-danger">-6.69%</td>
											<td class="text-success">+69.69%</td>
										</tbody>
									</table>
								</td>

								<td>
									<table  class="table text-center">
										<thead class="noneMe">
											<th>4 Marla</th>
											<th>8 Marla</th>
											<th>1 Kanal</th>
										</thead>
										<tbody>
											<td class="text-success">
												<table class="table text-center">
													<thead class="noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table text-center">
													<thead class="noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table text-center">
													<thead class="noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>


								<td>
									<table  class="table text-center">
										<thead class="noneMe">
											<th>125 Sq Yds</th>
											<th>200 Sq Yds</th>
											<th>250 Sq Yds</th>
											<th>300 Sq Yds</th>
											<th>500 Sq Yds</th>
											<th>1000 Sq Yds</th>
										</thead>
										<tbody>
											<td class="text-success">
												<table class="table text-center">
													<thead class="noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table text-center">
													<thead class="noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table text-center">
													<thead class="noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table text-center">
													<thead class="noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table text-center">
													<thead class="noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success">
												<table class="table text-center">
													<thead class="noneMe">
														<th>Min</th>
														<th>Max</th>
													</thead>
													<tbody>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
														<td><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>
                        	</tr>
                    	</tbody>
               		</table>
            	</div>
        	</div>
    	</div>
	</div>
</div>



<?php include("inc/footer.php");?>