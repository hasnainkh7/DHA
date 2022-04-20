<?php
$curPpageTitle = "Dashboard"; 
include("inc/dataCollectorheader.php");
?>

<style>

	@media only screen and (min-width: 768px){
		body{
			overflow: visible !important;
			max-width: 230% !important;
			width: 230% !important;
		}
	}
</style>

<div class="row">	
	<div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="card-title text-white fs-28">DHA's</h3>
				<small class="text-white"><b>Last Updated:</b> 13 April 2022</small>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                	<table class="table b-b table-responsive-md text-center">
                    	<thead class="b-tlr myHeader">
                        	<tr class="text-black">
								<th>Project</th>
								<th>City</th>
								<th>Added Date</th>
                            	<th>Performance</th>
                            	<th>Commercial Plots</th>
                            	<th>Residential Plots</th>
							</tr>
                    	</thead>
                    	<tbody>
                        	<tr class="borderTop table-row" data-href="">
								<td class="b3-lr">DHA Karachi (Phase 1 to 8)</td> 
								<td class="b3-lr">Karachi</td> 
								<td class="b3-lr">11-03-2022</td> 
								<td class="b3-lr">
									<table  class="table text-center">
										<thead class="text-info">
											<th>1<br>Week</th>
											<th>1<br>Month</th>
											<th>3<br>Months</th>
											<th>6<br>Months</th>
											<th>1<br>Year</th>
										</thead>
										<tbody>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
										</tbody>
									</table>
								</td>

								<td class="text-black">
									<table  class="table text-center">
										<thead class="text-info ">
											<th>4 Marla</th>
											<th>8 Marla</th>
											<th>1 Kanal</th>
										</thead>
										<tbody>
											<td class="text-success">
												<table class="table text-center b-lr">
													<thead class="text-dark">
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
													<thead class="text-dark">
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
													<thead class="text-dark">
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
												<table class="table b-lr text-center">
													<thead class="text-dark ">
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
													<thead class="text-dark">
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
													<thead class="text-dark">
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
													<thead class="text-dark">
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
													<thead class="text-dark">
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
													<thead class="text-dark">
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
							
                        	</tr>

							<tr class="borderTop table-row alternate-bg" data-href="">
								<td class="b3-lr">DHA City Karachi</td> 
								<td class="b3-lr">Karachi</td> 
								<td class="b3-lr">11-03-2022</td> 
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
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
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
							
                        	</tr>

							<tr class="borderTop table-row" data-href="">
								<td class="b3-lr">DHA Lahore</td> 
								<td class="b3-lr">Lahore</td>
								<td class="b3-lr">11-03-2022</td> 
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
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
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
							
                        	</tr>

							<tr class="borderTop table-row alternate-bg" data-href="">
								<td class="b3-lr">DHA City Lahore</td> 
								<td class="b3-lr">Lahore</td> 
								<td class="b3-lr">11-03-2022</td> 
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
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
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
							
                        	</tr>

							<tr class="borderTop table-row" data-href="">
								<td class="b3-lr">DHA Islamabad</td> 
								<td class="b3-lr">Islamabad</td> 
								<td class="b3-lr">11-03-2022</td> 
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
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
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
							
                        	</tr>

							<tr class="borderTop table-row alternate-bg" data-href="">
								<td class="b3-lr">DHA City Islamabad</td> 
								<td class="b3-lr">Islamabad</td> 
								<td class="b3-lr">11-03-2022</td> 
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
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
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
							
                        	</tr>

							<tr class="borderTop table-row" data-href="">
								<td class="b3-lr">DHA Multan</td> 
								<td class="b3-lr">Multan</td> 
								<td class="b3-lr">11-03-2022</td> 
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
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
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
							
                        	</tr>

							<tr class="borderTop table-row alternate-bg" data-href="">
								<td class="b3-lr">DHA Quetta</td> 
								<td class="b3-lr">Quetta</td> 
								<td class="b3-lr">11-03-2022</td> 
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
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
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
							
                        	</tr>

							<tr class="borderTop table-row" data-href="">
								<td class="b3-lr">DHA Peshawar</td> 
								<td class="b3-lr">Peshawar</td> 
								<td class="b3-lr">11-03-2022</td> 
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
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
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
							
                        	</tr>

							<tr class="borderTop table-row alternate-bg" data-href="">
								<td class="b3-lr">DHA Gujranwala</td> 
								<td class="b3-lr">Gujranwala</td> 
								<td class="b3-lr">11-03-2022</td> 
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
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),2); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),2); ?>%</td>
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
							
                        	</tr>

                    	</tbody>
               		</table>
            	</div>
        	</div>
    	</div>
	</div>

</div>



<?php include("inc/footer.php");?>

<script>
// $(document).ready(function () {
//     var $horizontal = $('#horizontal');

//     $(window).scroll(function () {
//         var s = $(this).scrollTop(),
//             d = $(document).height(),
//             c = $(this).height();

//         scrollPercent = (s / (d - c));

//         var position = (scrollPercent * ($(document).width() - $horizontal.width()));
//         console.log("s: "+s);
// 		console.log("d: "+d);
// 		console.log("c: "+c);
// 	    $horizontal.css({
//             'left': position
//         });
//     });
// });


var lastScrollLeft = 0;
$(window).scroll(function() {
    var documentScrollLeft = $(document).scrollLeft();
    if (lastScrollLeft != documentScrollLeft) {
        console.log('scroll x');
        lastScrollLeft = documentScrollLeft;

		var s = lastScrollLeft,
			d = $(document).width(),
            c = $(this).width();
		
			scrollPercent = (s / ((d - c)+400));
		

		var $horizontal = $('#horizontal');
		var position = (scrollPercent * ($(document).width() - $horizontal.width()));

		$horizontal.css({
            'left': position
        });
		console.log(position);
		console.log("d: "+d);
    }
});

$(document).ready(function($) {
    $(".table-row").click(function() {
        window.document.location = $(this).data("href");
    });
});


</script>
