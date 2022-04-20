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
</style>

<div class="row mt-4">

    <div class="col-6 col-md-2 mb-3">
        <h2 class="font-w600 fs-18">Project Name:<br><span class=" text-black font-w600 fs-32">DHA</span></h2>
    </div>
    <div class="col-6 col-md-2 mb-3">
        <h2 class="font-w600 fs-18">Location:<br><span class="text-black font-w600 fs-32">Karachi</span></h2>
    </div>
    <div class="col-12 col-md-8 text-right mb-3">
        <p><strong>Last Updated:</strong><br> 12 Feb 2022</p>
    </div>

</div>


<div class="row mt-4">	
	<div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-info">
                <h3 class="card-title text-white fs-28">Project Data</h3>
				<small class="text-white"><b>Last Updated:</b> 13 April 2022</small>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                	<table class="table b-b table-responsive-md text-center">
                    	<thead class="b-tlr myHeader">
                        	<tr class="text-black">
								<th>Sector / Phase</th>
                            	<th>Performance</th>
                            	<th>Commercial Plots</th>
                            	<th>Residential Plots</th>
							</tr>
                    	</thead>
                    	<tbody>
                        	<tr class="borderTop table-row" data-href="">
								<td class="b3-lr">1</td> 
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
								<td class="b3-lr">2</td>
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
								<td class="b3-lr">3</td>
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
								<td class="b3-lr">4</td> 
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
								<td class="b3-lr">5</td>
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
								<td class="b3-lr">6</td> 
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
								<td class="b3-lr">7</td> 
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
								<td class="b3-lr">8</td>
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