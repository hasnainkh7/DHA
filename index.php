<?php
$curPpageTitle = "Dashboard"; 
include("inc/header.php");
?>

<div class="row">
	<div class="col-md-12">
        <h2 class="text-primary font-w600 fs-28 ">Performance</h2>
    </div>
    <div class="col-sm-4">
        <div class="widget-stat card">
			<div class="card-body p-4">
				<div class="media ai-icon">
					<span class="mr-2 bgl-success">
						<!-- <i class="ti-user"></i> -->
						<i class="text-success fa fa-arrow-up"></i>
					</span>
					<div class="media-body">
						<p class="mb-1 fs-20 text-black">DHA</p>
						<p class="mb-1 fs-16">This Week Peformance</p>
						<h4 class="mb-0 fs-18 text-success font-w600">+9.60%</h4>
					</div>
				</div>
			</div>
		</div>
    </div>
	<div class="col-sm-4">
        <div class="widget-stat card">
			<div class="card-body p-4">
				<div class="media ai-icon">
					<span class="mr-2 bgl-danger">
						<!-- <i class="ti-user"></i> -->
						<i class="text-danger fa fa-arrow-down"></i>
					</span>
					<div class="media-body">
						<p class="mb-1 fs-20 text-black">Askari</p>
						<p class="mb-1 fs-16">This Week Peformance</p>
						<h4 class="mb-0 fs-18 text-danger font-w600">-9.60%</h4>
					</div>
				</div>
			</div>
		</div>
    </div>

	<div class="col-sm-4">
        <div class="widget-stat card">
			<div class="card-body p-4">
				<div class="media ai-icon">
					<span class="mr-2 bgl-success">
						<!-- <i class="ti-user"></i> -->
						<i class="text-success fa fa-arrow-up"></i>
					</span>
					<div class="media-body">
						<p class="mb-1 fs-20 text-black">Behria</p>
						<p class="mb-1 fs-16">This Week Peformance</p>
						<h4 class="mb-0 fs-18 text-success font-w600">+1.60%</h4>
					</div>
				</div>
			</div>
		</div>
    </div>

</div>

<div class="row">
				
					<div class="col-xl-6 col-xxl-12">
						<div class="card">
							<div class="card-header d-sm-flex d-block pb-0 border-0">
								<div class="mr-auto pr-3 mb-sm-0 mb-3">
									<h4 class="text-black fs-20">DHA</h4>
									<p class="fs-13 mb-0 text-black">This Year Performance</p>
								</div>
							</div>
							<div class="card-body pt-0 pb-0">
								<div id="chartBar"></div>
							</div>
						</div>
					</div>
</div>


<?php include("inc/footer.php");?>