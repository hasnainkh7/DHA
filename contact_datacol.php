<?php
$curPpageTitle = "Contact Us"; 
include("inc/dataCollectorheader.php");
?>

<style>
	.noneMe{
		background-color:red;
		display:none;
	}
	.table td{
		border:0px;
		padding: 7px 20px !important;
		vertical-align: middle !important;
	}
	.b-tlr{
		border-top: 3px solid #dedede !important;
		border-left: 3px solid #dedede !important;
		border-right: 3px solid #dedede !important;
	}
	.b-tlr th{
		border-top: 3px solid #dedede !important;
		border-left: 3px solid #dedede !important;
		border-right: 3px solid #dedede !important;
	}
	.table th{
		/* background-color: var(--primary); */
		padding: 10px 20px !important;
		vertical-align: middle !important;
	}
	.borderTop{
		border-top: 1px solid #dedede !important;
	}

	.table-responsive{
		margin-bottom:70px !important;
	}
	.b3-lr{
		border-left: 3px solid #dedede !important;
		border-right: 3px solid #dedede !important;
	}
	.b-lr{
		border-left: 1px solid #dedede !important;
		border-right: 1px solid #dedede !important;
	}
	.b-b{
		border-bottom: 1px solid #dedede !important;
	}
	.alternate-bg{
		background-color: rgba(240, 241, 245, 0.44) !important;
	}

</style>

<div class="row">
	<div class="col-md-4">
		<div class="card">
            <div class="card-header bg-warning">
				<h4 class="text-white">Support</h4>
            </div>
           	<div class="card-body">
                   <div class="row">
                        <div class="col-md-12">
                            <h4 class="text-warning">Need Support or Having issues?</h4>
                            <h4 class="text-black mt-4">Email Us At:</h4>
                            <h4 class="fs-16"><a href="mailto:support@youdomain.com">support@youdomain.com</a></h4>
                        </div>
                   </div>
    		</div>
        </div>
	</div>

    <div class="col-md-4">
		<div class="card">
            <div class="card-header bg-info">
				<h4 class="text-white">Consulting</h4>
            </div>
           	<div class="card-body">
                   <div class="row">
                        <div class="col-md-12">
                            <h4 class="text-info">Confused Over What To Choose?</h4>
                            <h4 class="text-black mt-4">Email Us At:</h4>
                            <h4 class="fs-16"><a href="mailto:consult@youdomain.com">consult@youdomain.com</a></h4>
                        </div>
                   </div>
    		</div>
        </div>
	</div>

    <div class="col-md-4">
		<div class="card">
            <div class="card-header bg-success">
				<h4 class="text-white">Call Us</h4>
            </div>
           	<div class="card-body">
                   <div class="row">
                        <div class="col-md-12">
                            <h4 class="text-success">Call Us At?</h4>
                            <h4 class="fs-18"><a class="fs-18 text-black" href="tel:0312 1234567">0312 1234567</a></h4>
                            <h4 class="fs-18 text-black"><a class="fs-18 text-black" href="tel:021XXXXXXXXX">021 312 1234567</a></h4>
                        </div>
                   </div>
    		</div>
        </div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="card">
            <div class="card-header" style="background-color:#1a1a1a;">
				<h4 class="text-white">Contact Form</h4>
            </div>
           			<div class="card-body">
                    	<div class="basic-form">
                            <form>
                            	<div class="form-row">
									<div class="form-group col-md-6">
                                        <label>Name</label>
										<input type="text" class="form-control" placeholder="John Smith" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Phone</label>
										<input type="text" class="form-control" placeholder="03XX XXXXXXX" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email</label>
										<input type="mail" class="form-control" placeholder="abc@example.com" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Address</label>
										<input type="text" class="form-control" placeholder="ABC Road, XYZ" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Address</label>
                                        <textarea name="" id="" cols="30" class="form-control" placeholder="Your Message" rows="10"></textarea>
                                    </div>
									<div class="form-group col-md-2">
										<br>
										<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-send"></i> Send</button>
                                    </div>
                        		</div>
                    		</form>
                		</div>
            		</div>
        </div>
	</div>
</div>




<?php include("inc/footer.php");?>