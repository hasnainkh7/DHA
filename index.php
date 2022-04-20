<?php
$curPpageTitle = "Dashboard"; 
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


<div class="row wd-100vw">
	<div class="col-md-10" id="horizontal">
		<div class="card">
            <div class="card-header" style="background-color:#1a1a1a;">
				<h4 class="text-white">Filters</h4>
            </div>
           			<div class="card-body">
                    	<div class="basic-form">
                            <form>
                            	<div class="form-row">
									<div class="form-group col-md-2">
                                        <label>Performance</label>
										<select class="dropdown-groups" name="unit">
											<option value="">Positive +</option>
											<option value="">Negative -</option>
                                        </select>
                                    </div>
									<div class="form-group col-md-2">
                                        <label>Projects</label>
										<select class="dropdown-groups" name="unit">
											<option value="">DHA City</option>
											<option value="">Bahria Town</option>
											<option value="">Army Housing</option>
                                        </select>
                                    </div>
									<div class="form-group col-md-2">
                                        <label>City</label>
										<select class="dropdown-groups" name="unit">
											<option value="">Karachi</option>
											<option value="">Lahore</option>
											<option value="">Islamabad</option>
											<option value="">Gujranwala</option>
											<option value="">Peshawar</option>
											<option value="">Multan</option>
											<option value="">Quetta</option>
											<option value="">Rawalpindi</option>
											<option value="">Nawabshah</option>
                                        </select>
                                    </div>
									<div class="form-group col-md-2">
                                        <label>Plot Type</label>
										<select class="dropdown-groups" name="unit">
											<option value="">Residential</option>
											<option value="">Commercial</option>
                                        </select>
                                    </div>
									<div class="form-group col-md-2">
                                        <label>Plot Denominations</label>
										<select class="dropdown-groups" name="unit">
											<option value="">4 Marla</option>
											<option value="">8 Marla</option>
											<option value="">1 Kanal</option>

											<option value="">125 Sq Yds</option>
											<option value="">200 Sq Yds</option>
											<option value="">250 Sq Yds</option>
											<option value="">300 Sq Yds</option>
											<option value="">500 Sq Yds</option>
											<option value="">1000 Sq Yds</option>

											<option value="">SU House</option>
											<option value="">SD House</option>
											<option value="">4 Bed Apartment</option>
											<option value="">3 Bed Apartment</option>
                                        </select>
                                    </div>
									<div class="form-group col-md-2">
										<br>
										<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-filter"></i> Fiter Data</button>
                                    </div>
                        		</div>
                    		</form>
                		</div>
            		</div>
        </div>
	</div>
</div>

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
                            	<th>Performance</th>
                            	<th>Commercial Plots</th>
                            	<th>Residential Plots</th>
							</tr>
                    	</thead>
                    	<tbody>
                        	<tr class="borderTop table-row" data-href="projectdata_tab.php">
								<td class="b3-lr">DHA Karachi (Phase 1 to 8)</td> 
								<td class="b3-lr">Karachi</td> 
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

							<tr class="borderTop table-row alternate-bg" data-href="projectdata_tab.php">
								<td class="b3-lr">DHA City Karachi</td> 
								<td class="b3-lr">Karachi</td> 
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

							<tr class="borderTop table-row" data-href="projectdata_tab.php">
								<td class="b3-lr">DHA Lahore</td> 
								<td class="b3-lr">Lahore</td> 
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

							<tr class="borderTop table-row alternate-bg" data-href="projectdata_tab.php">
								<td class="b3-lr">DHA City Lahore</td> 
								<td class="b3-lr">Lahore</td> 
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

							<tr class="borderTop table-row" data-href="projectdata_tab.php">
								<td class="b3-lr">DHA Islamabad</td> 
								<td class="b3-lr">Islamabad</td> 
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

							<tr class="borderTop table-row alternate-bg" data-href="projectdata_tab.php">
								<td class="b3-lr">DHA City Islamabad</td> 
								<td class="b3-lr">Islamabad</td> 
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

							<tr class="borderTop table-row" data-href="projectdata_tab.php">
								<td class="b3-lr">DHA Multan</td> 
								<td class="b3-lr">Multan</td> 
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

							<tr class="borderTop table-row alternate-bg" data-href="projectdata_tab.php">
								<td class="b3-lr">DHA Quetta</td> 
								<td class="b3-lr">Quetta</td> 
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

							<tr class="borderTop table-row" data-href="projectdata_tab.php">
								<td class="b3-lr">DHA Peshawar</td> 
								<td class="b3-lr">Peshawar</td> 
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

							<tr class="borderTop table-row alternate-bg" data-href="projectdata_tab.php">
								<td class="b3-lr">DHA Gujranwala</td> 
								<td class="b3-lr">Gujranwala</td> 
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

	<div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-success">
                <h3 class="card-title text-white fs-28">Army Housing</h3>
				<small class="text-white"><b>Last Updated:</b> 13 April 2022</small>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                	<table class="table b-b table-responsive-md text-center">
                    	<thead class="b-tlr">
                        	<tr class="text-black">
								<th>Project</th>
								<th>City</th>
                            	<th>Performance</th>
                            	<th>Type</th>
							</tr>
                    	</thead>
                    	<tbody>

                        	<tr class="borderTop table-row" data-href="projectdata_tab.php">
								<td class="b3-lr">Askari 1</td> 
								<td class="b3-lr">Karachi</td> 
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
										<thead class="text-info">
											<th>SU House</th>
											<th>SD House</th>
											<th>4 Bed Apartment</th>
											<th>3 Bed Apartment</th>
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
                        	</tr>

							<tr class="borderTop table-row alternate-bg" data-href="projectdata_tab.php">
								<td class="b3-lr">Askari 2</td> 
								<td class="b3-lr">Karachi</td> 
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
											<th>SU House</th>
											<th>SD House</th>
											<th>4 Bed Apartment</th>
											<th>3 Bed Apartment</th>
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
                        	</tr>

							<tr class="borderTop table-row" data-href="projectdata_tab.php">
								<td class="b3-lr">Askari 3</td> 
								<td class="b3-lr">Karachi</td> 
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
											<th>SU House</th>
											<th>SD House</th>
											<th>4 Bed Apartment</th>
											<th>3 Bed Apartment</th>
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
                        	</tr>
							
							<tr class="borderTop table-row alternate-bg" data-href="projectdata_tab.php">
								<td class="b3-lr">Askari 4</td> 
								<td class="b3-lr">Karachi</td> 
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
											<th>SU House</th>
											<th>SD House</th>
											<th>4 Bed Apartment</th>
											<th>3 Bed Apartment</th>
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
                        	</tr>

							<tr class="borderTop table-row" data-href="projectdata_tab.php">
								<td class="b3-lr">Askari 5</td> 
								<td class="b3-lr">Karachi</td> 
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
											<th>SU House</th>
											<th>SD House</th>
											<th>4 Bed Apartment</th>
											<th>3 Bed Apartment</th>
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
                        	</tr>



							<tr class="borderTop table-row alternate-bg" data-href="projectdata_tab.php">
								<td class="b3-lr">Askari 1</td> 
								<td class="b3-lr">Lahore</td> 
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
											<th>SU House</th>
											<th>SD House</th>
											<th>4 Bed Apartment</th>
											<th>3 Bed Apartment</th>
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
                        	</tr>


							<tr class="borderTop table-row" data-href="projectdata_tab.php">
								<td class="b3-lr">Askari 2</td> 
								<td class="b3-lr">Lahore</td> 
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
											<th>SU House</th>
											<th>SD House</th>
											<th>4 Bed Apartment</th>
											<th>3 Bed Apartment</th>
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
                        	</tr>


							<tr class="borderTop table-row alternate-bg" data-href="projectdata_tab.php">
								<td class="b3-lr">Askari 3</td> 
								<td class="b3-lr">Lahore</td> 
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
											<th>SU House</th>
											<th>SD House</th>
											<th>4 Bed Apartment</th>
											<th>3 Bed Apartment</th>
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
                        	</tr>

							<tr class="borderTop table-row" data-href="projectdata_tab.php">
								<td class="b3-lr">Askari 1</td> 
								<td class="b3-lr">Rawalpindi</td> 
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
											<th>SU House</th>
											<th>SD House</th>
											<th>4 Bed Apartment</th>
											<th>3 Bed Apartment</th>
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
                        	</tr>


							<tr class="borderTop table-row alternate-bg" data-href="projectdata_tab.php">
								<td class="b3-lr">Askari 2</td> 
								<td class="b3-lr">Rawalpindi</td> 
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
											<th>SU House</th>
											<th>SD House</th>
											<th>4 Bed Apartment</th>
											<th>3 Bed Apartment</th>
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
                        	</tr>


							<tr class="borderTop table-row" data-href="projectdata_tab.php">
								<td class="b3-lr">Askari 3</td> 
								<td class="b3-lr">Rawalpindi</td> 
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
											<th>SU House</th>
											<th>SD House</th>
											<th>4 Bed Apartment</th>
											<th>3 Bed Apartment</th>
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
                        	</tr>

							<tr class="borderTop table-row alternate-bg" data-href="projectdata_tab.php">
								<td class="b3-lr">AOHS 1</td> 
								<td class="b3-lr">Islamabad</td> 
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
											<th>SU House</th>
											<th>SD House</th>
											<th>4 Bed Apartment</th>
											<th>3 Bed Apartment</th>
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
                        	</tr>

                    	</tbody>
               		</table>
            	</div>
        	</div>
    	</div>
	</div>

	<div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-warning">
                <h3 class="card-title text-white fs-28">Bahria Town</h3>
				<small class="text-white"><b>Last Updated:</b> 13 April 2022</small>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                	<table class="table b-b table-responsive-md text-center">
                    	<thead class="b-tlr">
                        	<tr class="text-black">
								<th>Project</th>
								<th>City</th>
                            	<th>Performance</th>
                            	<th>Commercial Plots</th>
                            	<th>Residential Plots</th>
							</tr>
                    	</thead>
                    	<tbody>
                        	<tr class="borderTop table-row" data-href="projectdata_tab.php">
								<td class="b3-lr">Bahria Town Karachi</td> 
								<td class="b3-lr">Karachi</td> 
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
										<thead class="text-info">
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

							<tr class="borderTop table-row alternate-bg" data-href="projectdata_tab.php">
								<td class="b3-lr">Bahria Town Lahore</td> 
								<td class="b3-lr">Lahore</td> 
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

							<tr class="borderTop table-row" data-href="projectdata_tab.php">
								<td class="b3-lr">Bahria Town Islamabad</td> 
								<td class="b3-lr">Islamabad</td> 
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

							<tr class="borderTop table-row alternate-bg" data-href="projectdata_tab.php">
								<td class="b3-lr">Bahria Enclave</td> 
								<td class="b3-lr">Islamabad</td> 
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

							<tr class="borderTop table-row" data-href="projectdata_tab.php">
								<td class="b3-lr">Bahria Town Nawabshah</td> 
								<td class="b3-lr">Nawabshah</td> 
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
