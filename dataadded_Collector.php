<?php
$curPpageTitle = "Dashboard"; 
include("inc/dataCollectorHeader.php");
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
            <div class="card-header bg-mydark">
                <h3 class="card-title text-white fs-28">Defence Housing Authority</h3>
				<small class="text-white"><b>Last Updated:</b> 13 April 2022</small>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                	<table class="table b-b table-responsive-md text-center" id="table">
                    	<thead class="b-tlr myHeader">
                        	<tr class="text-white bg-myblue">
								<th>Project</th>
								<th>City</th>
								<th>Added Date</th>
                            	<th>Performance</th>
                            	<th>Commercial Plots</th>
                            	<th>Residential Plots</th>
							</tr>
							<tr class="borderTop table-row" data-href="">
								<th class="b3-lr text-left bg-myprimary" style="border-right:1px solid #fff !important;"></th> 
								<th class="b3-lr text-left bg-myprimary" style="border-right:1px solid #fff !important;"></th> 
								<th class="b3-lr text-left bg-myprimary" style="border-right:1px solid #fff !important;"></th> 
								<th class="b3-lr bg-myprimary" style="border-right:1px solid #fff !important;">
									<table  class="table text-center">
										<thead class="text-white">
											<tr>
											<th>1 W</th>
											<th>1 M</th>
											<th>3 M</th>
											<th>6 M</th>
											<th>1 Y</th>
											</tr>
										</thead>
									</table>
								</th>

								<th class="text-black bg-myprimary">
									<table  class="table text-center">
										<thead class="text-white bg-myprimary">
											<th>4 Marla</th>
											<th>8 Marla</th>
											<th>1 Kanal</th>
										</thead>
										<tbody>
											<td class="text-success b-r">
												<table class="table text-center b-lr">
													<thead class="text-white">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="b-lr table text-center">
													<thead class="text-white">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
												</table>
											</td>

											<td class="text-success b-r">
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


								<th class="b3-lr bg-myprimary">
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
											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-white">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-white">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-white">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-white">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-white">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
												</table>
											</td>

											<td class="text-success b-r">
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
							
                        	</tr>
                    	</thead>
                    	<tbody>
                        	<tr class="borderTop table-row" data-href="">
								<td class="b3-lr text-left">DHA Karachi (Phase 1 to 8)</td> 
								<td class="b3-lr text-left">Karachi</td> 
								<td class="b3-lr text-left">26 April 2022</td> 
								<td class="b3-lr">
									<table  class="table text-center">
										<thead class="text-white noneMe">
											<tr>
											<th>1 W</th>
											<th>1 M</th>
											<th>3 M</th>
											<th>6 M</th>
											<th>1 Y</th>
											</tr>
										</thead>
										<tbody>
										<tr class="mt-2">
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-danger wd-150px">-<?php echo number_format(rand(1,99),1); ?>%</td>
											<td class="text-success wd-150px">+<?php echo number_format(rand(1,99),1); ?>%</td>
										</tr>
										</tbody>
									</table>
								</td>

								<td class="text-black">
									<table  class="table text-center">
										<thead class="text-white noneMe">
											<th>4 Marla</th>
											<th>8 Marla</th>
											<th>1 Kanal</th>
										</thead>
										<tbody>
											<td class="text-success b-r">
												<table class="table text-center b-lr">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>


								<td class="b3-lr">
									<table  class="table text-center">
										<thead class="text-white noneMe">
											<th>125 Sq Yds</th>
											<th>200 Sq Yds</th>
											<th>250 Sq Yds</th>
											<th>300 Sq Yds</th>
											<th>500 Sq Yds</th>
											<th>1000 Sq Yds</th>
										</thead>
										<tbody>
											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>
							
                        	</tr>

							<tr class="borderTop table-row alternate-bg" data-href="">
								<td class="b3-lr text-left">DHA City Karachi</td> 
								<td class="b3-lr text-left">Karachi</td>
								<td class="b3-lr text-left">26 April 2022</td> 
								<td class="b3-lr">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>1 W</th>
											<th>1 M</th>
											<th>3 M</th>
											<th>6 M</th>
											<th>1 Y</th>
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
											<td class="text-success b-r">
												<table class="table text-center b-lr">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
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
											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>
							
                        	</tr>

							<tr class="borderTop table-row" data-href="">
								<td class="b3-lr text-left">DHA Lahore</td> 
								<td class="b3-lr text-left">Lahore</td> 
								<td class="b3-lr text-left">26 April 2022</td> 
								<td class="b3-lr">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>1 W</th>
											<th>1 M</th>
											<th>3 M</th>
											<th>6 M</th>
											<th>1 Y</th>
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
											<td class="text-success b-r">
												<table class="table text-center b-lr">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
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
											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>
							
                        	</tr>

							<tr class="borderTop table-row alternate-bg" data-href="">
								<td class="b3-lr text-left">DHA City Lahore</td> 
								<td class="b3-lr text-left">Lahore</td> 
								<td class="b3-lr text-left">26 April 2022</td> 
								<td class="b3-lr">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>1 W</th>
											<th>1 M</th>
											<th>3 M</th>
											<th>6 M</th>
											<th>1 Y</th>
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
											<td class="text-success b-r">
												<table class="table text-center b-lr">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
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
											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>
							
                        	</tr>

							<tr class="borderTop table-row" data-href="">
								<td class="b3-lr text-left">DHA Islamabad</td> 
								<td class="b3-lr text-left">Islamabad</td> 
								<td class="b3-lr text-left">26 April 2022</td> 
								<td class="b3-lr">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>1 W</th>
											<th>1 M</th>
											<th>3 M</th>
											<th>6 M</th>
											<th>1 Y</th>
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
											<td class="text-success b-r">
												<table class="table text-center b-lr">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
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
											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>
							
                        	</tr>

							<tr class="borderTop table-row alternate-bg" data-href="">
								<td class="b3-lr text-left">DHA City Islamabad</td> 
								<td class="b3-lr text-left">Islamabad</td>
								<td class="b3-lr text-left">26 April 2022</td>  
								<td class="b3-lr">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>1 W</th>
											<th>1 M</th>
											<th>3 M</th>
											<th>6 M</th>
											<th>1 Y</th>
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
											<td class="text-success b-r">
												<table class="table text-center b-lr">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
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
											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>
							
                        	</tr>

							<tr class="borderTop table-row" data-href="">
								<td class="b3-lr text-left">DHA Multan</td> 
								<td class="b3-lr text-left">Multan</td> 
								<td class="b3-lr text-left">26 April 2022</td> 
								<td class="b3-lr">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>1 W</th>
											<th>1 M</th>
											<th>3 M</th>
											<th>6 M</th>
											<th>1 Y</th>
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
											<td class="text-success b-r">
												<table class="table text-center b-lr">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
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
											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>
							
                        	</tr>

							<tr class="borderTop table-row alternate-bg" data-href="">
								<td class="b3-lr text-left">DHA Quetta</td> 
								<td class="b3-lr text-left">Quetta</td> 
								<td class="b3-lr text-left">26 April 2022</td> 
								<td class="b3-lr">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>1 W</th>
											<th>1 M</th>
											<th>3 M</th>
											<th>6 M</th>
											<th>1 Y</th>
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
											<td class="text-success b-r">
												<table class="table text-center b-lr">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
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
											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>
							
                        	</tr>

							<tr class="borderTop table-row" data-href="">
								<td class="b3-lr text-left">DHA Peshawar</td> 
								<td class="b3-lr text-left">Peshawar</td> 
								<td class="b3-lr text-left">26 April 2022</td> 
								<td class="b3-lr">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>1 W</th>
											<th>1 M</th>
											<th>3 M</th>
											<th>6 M</th>
											<th>1 Y</th>
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
											<td class="text-success b-r">
												<table class="table text-center b-lr">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
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
											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>
										</tbody>
									</table>
								</td>
							
                        	</tr>

							<tr class="borderTop table-row alternate-bg" data-href="">
								<td class="b3-lr text-left">DHA Gujranwala</td> 
								<td class="b3-lr text-left">Gujranwala</td> 
								<td class="b3-lr text-left">26 April 2022</td> 
								<td class="b3-lr">
									<table  class="table text-center">
										<thead class="text-info noneMe">
											<th>1 W</th>
											<th>1 M</th>
											<th>3 M</th>
											<th>6 M</th>
											<th>1 Y</th>
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
											<td class="text-success b-r">
												<table class="table text-center b-lr">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="b-lr table text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
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
											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
													</tbody>
												</table>
											</td>

											<td class="text-success b-r">
												<table class="table b-lr text-center">
													<thead class="text-dark noneMe">
														<th class="cw-30">Min</th>
														<th class="cw-10"></th>
														<th class="cw-30">Max</th>
													</thead>
													<tbody>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
														<td class="cw-10">-</td>
														<td class="text-black cw-30"><?php echo number_format(rand(100000,999999)); ?></td>
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
	$(document).ready(function($) {
    $(".table-row").dblclick(function() {
        window.document.location = $(this).data("href");
		// alert("DBL CLicked");
    });
});
</script>
