<!-- filters modal  -->
<div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #1a1a1a;">
                        <h5 class="modal-title text-white" id="filterModalLabel">Filters</h5>
                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="row">
	                        <div class="col-md-12">
		                        <div class="">
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
                    </div>
                </div>
            </div>
</div>

<!-- filters modal end  -->


<!-- analytics modal  -->

<div class="modal fade" id="analyticsModal" tabindex="-1" aria-labelledby="analyticsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #1a1a1a;">
                        <h5 class="modal-title text-white" id="analyticsModalLabel">Project Analytics</h5>
                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0">
                    <div class="row">
                    <div class="col-12">
                        <div class="row">
                            
                            <div class="col-xl-6 col-lg-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Gradient Bar Chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="barChart_2"></canvas>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-6 col-lg-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Basic Line Chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="lineChart_1"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Pie Chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="pie_chart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Doughnut Chart</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart-point">
											<div class="check-point-area">
												<canvas id="doughnut_chart"></canvas>
											</div>
											<ul class="chart-point-list">
												<li><i class="fa fa-circle text-primary mr-1"></i> 40% Tickets</li>
												<li><i class="fa fa-circle text-success mr-1"></i> 35% Events</li>
												<li><i class="fa fa-circle text-warning mr-1"></i> 25% Other</li>
											</ul>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
</div>