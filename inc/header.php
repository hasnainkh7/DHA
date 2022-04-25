<?php
include("head.php");

if($_SESSION["userData"]['role'] == 2){
    header("location:indexDataCollector.php");
}

?>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper" class="show menu-toggle">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <!-- <a href="index.php" class="brand-logo">
                <h4 class="text-black font-w600 fs-22"><span class="text-primary">Property</span><br>Information Portal</h4>
            </a> -->

            <a href="index.php" class="brand-logo">
                <img class="logo-abbr" src="./images/logo2.png" alt="">
                <img class="logo-compact" src="./images/logo2.png" alt="">
                <img class="brand-title" src="./images/logo-text1.png" alt="">
            </a>
            <div class="nav-control">
                <div class="hamburger is-active">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
								<?php echo $curPpageTitle; ?>
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">

                            <li class="nav-item notification_dropdown">
                                <a class="nav-link ai-icon" href="index.php">
                                    <svg width="28"  height="28" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 32 32" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
                                        <path style="fill:var(--portalGreen) !important;" xmlns="http://www.w3.org/2000/svg" d="m30 24v4c0 1.103-.897 2-2 2h-24c-1.103 0-2-.897-2-2v-4c0-.552.448-1 1-1s1 .448 1 1v4h24v-4c0-.552.448-1 1-1s1 .448 1 1z" fill="#000000" data-original="#000000" class=""></path><path style="fill:var(--portalGreen) !important;" xmlns="http://www.w3.org/2000/svg" d="m8.293 16.707c-.391-.391-.391-1.023 0-1.414s1.023-.391 1.414 0l5.293 5.293v-17.586c0-.552.448-1 1-1s1 .448 1 1v17.586l5.293-5.293c.391-.391 1.023-.391 1.414 0s.391 1.023 0 1.414l-7 7c-.396.397-1.031.384-1.415 0z" fill="#000000" data-original="#000000" class=""></path></g>
                                    </svg>
                                </a>
                                <span class="ml-2 fw-900 fs-14">Download Data</span>
                            </li>

                            <li class="nav-item notification_dropdown">
                                <a class="nav-link ai-icon"  data-toggle="modal" data-target="#filterModal">
                                <svg  width="28"  height="28" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
                                    <path style="fill:var(--portalGreen) !important;" xmlns="http://www.w3.org/2000/svg" d="m21 7.5h-9.793l3.14649 3.14648a.5.5 0 1 1 -.707.707l-4-4a.49983.49983 0 0 1 0-.707l4-4a.5.5 0 0 1 .707.707l-3.14649 3.14652h9.793a.5.5 0 0 1 0 1zm-11.35352 13.85352a.49984.49984 0 0 0 .707 0l4-4a.49983.49983 0 0 0 0-.707l-4-4a.5.5 0 0 0 -.707.707l3.14652 3.14648h-9.793a.5.5 0 0 0 0 1h9.793l-3.14652 3.14648a.49983.49983 0 0 0 0 .70704z" fill="#000000" data-original="#000000" class=""></path></g>
                                </svg>
                                </a>
                                <span class="ml-2 fw-900 fs-14">Filters</span>
                            </li>

                            
                          

							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <svg width="28" height="28" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
										<path style="fill:var(--portalGreen) !important;" d="M22.75 15.8385V13.0463C22.7471 10.8855 21.9385 8.80353 20.4821 7.20735C19.0258 5.61116 17.0264 4.61555 14.875 4.41516V2.625C14.875 2.39294 14.7828 2.17038 14.6187 2.00628C14.4546 1.84219 14.2321 1.75 14 1.75C13.7679 1.75 13.5454 1.84219 13.3813 2.00628C13.2172 2.17038 13.125 2.39294 13.125 2.625V4.41534C10.9736 4.61572 8.97429 5.61131 7.51794 7.20746C6.06159 8.80361 5.25291 10.8855 5.25 13.0463V15.8383C4.26257 16.0412 3.37529 16.5784 2.73774 17.3593C2.10019 18.1401 1.75134 19.1169 1.75 20.125C1.75076 20.821 2.02757 21.4882 2.51969 21.9803C3.01181 22.4724 3.67904 22.7492 4.375 22.75H9.71346C9.91521 23.738 10.452 24.6259 11.2331 25.2636C12.0142 25.9013 12.9916 26.2497 14 26.2497C15.0084 26.2497 15.9858 25.9013 16.7669 25.2636C17.548 24.6259 18.0848 23.738 18.2865 22.75H23.625C24.321 22.7492 24.9882 22.4724 25.4803 21.9803C25.9724 21.4882 26.2492 20.821 26.25 20.125C26.2486 19.117 25.8998 18.1402 25.2622 17.3594C24.6247 16.5786 23.7374 16.0414 22.75 15.8385ZM7 13.0463C7.00232 11.2113 7.73226 9.45223 9.02974 8.15474C10.3272 6.85726 12.0863 6.12732 13.9212 6.125H14.0788C15.9137 6.12732 17.6728 6.85726 18.9703 8.15474C20.2677 9.45223 20.9977 11.2113 21 13.0463V15.75H7V13.0463ZM14 24.5C13.4589 24.4983 12.9316 24.3292 12.4905 24.0159C12.0493 23.7026 11.716 23.2604 11.5363 22.75H16.4637C16.284 23.2604 15.9507 23.7026 15.5095 24.0159C15.0684 24.3292 14.5411 24.4983 14 24.5ZM23.625 21H4.375C4.14298 20.9999 3.9205 20.9076 3.75644 20.7436C3.59237 20.5795 3.50014 20.357 3.5 20.125C3.50076 19.429 3.77757 18.7618 4.26969 18.2697C4.76181 17.7776 5.42904 17.5008 6.125 17.5H21.875C22.571 17.5008 23.2382 17.7776 23.7303 18.2697C24.2224 18.7618 24.4992 19.429 24.5 20.125C24.4999 20.357 24.4076 20.5795 24.2436 20.7436C24.0795 20.9076 23.857 20.9999 23.625 21Z" fill="#0B2A97"/>
									</svg>
									<div class="pulse-css"></div>
                                </a>
                                <span class="ml-2 fw-900 fs-14">Notifications</span>
                                <div class="dropdown-menu rounded dropdown-menu-right">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380">
										<ul class="timeline">
                                                <li>
													<div class="timeline-panel">
														<div class="media mr-2">
															<i class="text-info fa fa-plus"></i>
														</div>
														<div class="media-body">
															<h6 class="mb-1">Data Collector ABC Added Prices to DHA - Karachi</h6>
															<small class="d-block">29 July 2022 - 02:26 PM</small>
														</div>
													</div>
												</li>

												<li>
													<div class="timeline-panel">
														<div class="media mr-2">
														<i class="text-info fa fa-plus"></i>
														</div>
														<div class="media-body">
															<h6 class="mb-1">Data Collector CBA Added Prices to Askari - Karachi</h6>
															<small class="d-block">21 July 2022 - 02:26 PM</small>
														</div>
													</div>
												</li>
										</ul>
									</div>
                                    <a class="all-notification" href="javascript:void(0)">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
							
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <img src="images/profile/<?php echo $_SESSION["userData"]['profile_pic']; ?>" width="20" alt=""/>
									<div class="header-info">
										<span class="text-black"><strong><?php echo $_SESSION["userData"]['name']; ?></strong></span>
										<p class="fs-12 mb-0"><?php replaceRolefromIdToName($_SESSION["userData"]['role']); ?></p>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="logoutUser.php" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
					<li><a href="index.php" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
					</li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-app"></i>
							<span class="nav-text">Projects</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="projects.php">All Projects</a></li>
							<li><a href="addproject.php">Add Project</a></li>
						</ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-app"></i>
							<span class="nav-text">Data Collection</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="datacollection.php">All Data</a></li>
							<li><a href="addprojectData.php">Add Data</a></li>
						</ul>
                    </li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-pin"></i>
							<span class="nav-text">Locations</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="locations.php">All Locations</a></li>
							<li><a href="addlocation.php">Add Location</a></li>
						</ul>
                    </li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-panel"></i>
							<span class="nav-text">Plot Types</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="plottypes.php">All Plot Types</a></li>
							<li><a href="addplottype.php">Add Plot Type</a></li>
						</ul>
                    </li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-home"></i>
							<span class="nav-text">Sectors</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="sectors.php">All Sectors</a></li>
							<li><a href="addsector.php">Add Sector</a></li>
						</ul>
                    </li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-route"></i>
							<span class="nav-text">Denominations</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="denominations.php">All Denominations</a></li>
							<li><a href="addDenomination.php">Add Denomination</a></li>
						</ul>
                    </li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-user-8"></i>
							<span class="nav-text">Users</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="users.php">All Users</a></li>
							<li><a href="adduser.php">Add User</a></li>
						</ul>
                    </li>
                    <li><a class="ai-icon" href="contact.php" aria-expanded="false">
							<i class="flaticon-381-ring"></i>
							<span class="nav-text">Contact Us</span>
						</a>
                    </li>
                </ul>
				<div class="add-menu-sidebar">
					<img src="images/calendar.png" alt="" class="mr-3">
					<p class="font-w500 mb-0">Invesrments<br>and<br>Consultant</p>
				</div>
				<div class="copyright">
					<p><strong><?php echo $projectName; ?></strong> © 2022 All Rights Reserved</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
