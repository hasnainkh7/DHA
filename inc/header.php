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
                <img class="logo-abbr" src="./images/logo4.png" alt="" style="border-radius:50%;">
                <img class="logo-compact" src="./images/logo4.png" alt="" style="border-radius:50%;">
                <img class="brand-title" src="./images/logo-text3.jpeg" alt="">
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
                                <a class="nav-link ai-icon" href="#">
                                <svg width="28" height="28" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g xmlns="http://www.w3.org/2000/svg"><g><path d="m495.699 332.204h-62.511l-.463-.226c-25.014-14.866-45.141-23.449-64.768-26.141 5.139-17.139 7.745-34.935 7.745-53.076 0-101.85-82.855-184.71-184.7-184.71-53.471 0-104.283 23.161-139.407 63.543-3.625 4.167-3.185 10.483.983 14.108 4.166 3.624 10.482 3.183 14.108-.983 31.324-36.013 76.635-56.668 124.316-56.668 90.816 0 164.7 73.889 164.7 164.71 0 17.985-2.86 35.583-8.508 52.41-18.042 1.294-35.376 7.239-51.891 14.322h-69.323c-24.397 0-44.816 20.412-44.816 44.816 0 8.807 2.61 17.535 7.512 24.858h-2.505l-119.402-34.258c-1.947-.559-3.961-.982-5.967-1.264-22.278-28.735-34.5-64.391-34.5-100.883 0-10.822 1.065-21.675 3.165-32.255 1.075-5.417-2.445-10.68-7.862-11.755-5.417-1.073-10.681 2.445-11.755 7.862-2.354 11.86-3.547 24.022-3.547 36.149 0 37.073 11.255 73.379 31.951 103.845-10.963 4.653-19.888 13.861-23.886 26.108-7.126 21.877 4.899 46.118 26.637 53.638l145.333 50.348c26.483 9.176 55.148 11.979 82.909 8.135l131.128-18.196h20.52v25.359c0 5.523 4.478 10 10 10h64.808c5.522 0 10-4.477 10-10v-159.796c-.004-5.523-4.481-10-10.004-10zm-96.018 124.436c-.46 0-.919.032-1.374.095l-131.808 18.291c-24.667 3.415-50.122.918-73.617-7.223l-145.337-50.35c-11.57-4.002-17.957-16.897-14.165-28.538 3.763-11.525 16.215-18.116 27.874-14.779l120.752 34.649c.897.257 1.825.388 2.758.388l112.609-.005c5.522 0 10-4.521 10-10.044s-4.478-10-10-10l-71.393-.002c-13.521 0-24.814-11.29-24.814-24.814s11.302-24.811 24.813-24.811h71.395c1.377 0 2.738-.284 4-.835 18.116-7.906 37.517-14.676 57.567-13.546 22.366 1.261 43.008 11.952 61.951 23.1v108.424zm86.018 35.36h-44.808l.002-139.796h44.806z" fill="#2bc155" data-original="#000000"></path><path d="m191 47.458c5.523 0 10-4.477 10-10v-27.458c0-5.523-4.477-10-10-10s-10 4.477-10 10v27.458c0 5.523 4.477 10 10 10z" fill="#2bc155" data-original="#000000"></path><path d="m310.733 75.083c1.863 1.537 4.117 2.286 6.357 2.286 2.883 0 5.743-1.24 7.721-3.638l19.415-23.54c3.514-4.261 2.908-10.563-1.352-14.077-4.262-3.515-10.563-2.908-14.078 1.352l-19.415 23.54c-3.513 4.26-2.907 10.563 1.352 14.077z" fill="#2bc155" data-original="#000000"></path><path d="m65.565 73.731c1.977 2.397 4.837 3.638 7.72 3.638 2.24 0 4.494-.749 6.357-2.286 4.261-3.514 4.866-9.817 1.352-14.077l-19.416-23.54c-3.513-4.261-9.816-4.867-14.077-1.352-4.261 3.514-4.866 9.817-1.352 14.077z" fill="#2bc155" data-original="#000000"></path><path d="m294.922 170.569-104.866 104.866c-3.905 3.905-3.905 10.237 0 14.143 3.848 3.848 10.294 3.849 14.143 0l104.866-104.866c3.905-3.905 3.905-10.237 0-14.143-3.907-3.905-10.237-3.905-14.143 0z" fill="#2bc155" data-original="#000000"></path><path d="m210.992 163.917c-15.82 0-28.69 12.871-28.69 28.69s12.871 28.69 28.69 28.69 28.69-12.871 28.69-28.69-12.87-28.69-28.69-28.69zm0 37.381c-4.792 0-8.69-3.898-8.69-8.69s3.898-8.69 8.69-8.69 8.69 3.898 8.69 8.69-3.898 8.69-8.69 8.69z" fill="#2bc155" data-original="#000000"></path><path d="m287.515 240.44c-15.82 0-28.69 12.871-28.69 28.69s12.87 28.69 28.69 28.69 28.69-12.871 28.69-28.69-12.87-28.69-28.69-28.69zm0 37.381c-4.792 0-8.69-3.898-8.69-8.69s3.898-8.69 8.69-8.69 8.69 3.898 8.69 8.69-3.898 8.69-8.69 8.69z" fill="#2bc155" data-original="#000000"></path><path d="m120.539 292.506c20.418 0 37.029-16.611 37.029-37.029v-56.443c0-20.418-16.611-37.029-37.029-37.029h-13.443c-20.418 0-37.029 16.611-37.029 37.029v56.443c0 20.418 16.611 37.029 37.029 37.029zm-30.472-37.029v-56.443c0-9.39 7.639-17.029 17.029-17.029h13.443c9.39 0 17.029 7.639 17.029 17.029v56.443c0 9.39-7.639 17.029-17.029 17.029h-13.443c-9.39 0-17.029-7.639-17.029-17.029z" fill="#2bc155" data-original="#000000"></path><path d="m25.22 178.97c2.066 5.04 8.039 7.494 13.06 5.41 5.032-2.088 7.497-8.02 5.41-13.06-2.083-5.031-8.029-7.498-13.06-5.41-5.021 2.084-7.506 8.03-5.41 13.06z" fill="#2bc155" data-original="#000000"></path></g></g></g></svg>
                                </a>
                                <span class="ml-2 fw-900 fs-14">DC/FBR Values</span>
                            </li>
                        
                            <li class="nav-item notification_dropdown">
                                <a class="nav-link ai-icon" href="index.php">
                                    <svg width="28" height="28" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"  x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m103.589 457.79c.395 0 .791-.031 1.188-.095 2.375-.381 4.424-1.878 5.508-4.026l51.801-102.625c1.866-3.698.382-8.208-3.315-10.075-3.697-1.868-8.209-.382-10.075 3.316l-47.131 93.372-36.652-36.653c-2.929-2.929-7.677-2.929-10.607 0-2.929 2.929-2.929 7.678 0 10.606l43.981 43.982c1.416 1.419 3.328 2.198 5.302 2.198z" fill="#2bc155" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m440.322 217.266h-202.182c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h202.182c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" fill="#2bc155" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m440.32 264.11h-29.51c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h29.51c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" fill="#2bc155" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m380.81 264.11h-194.89c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h194.89c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z" fill="#2bc155" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m206.223 141.489c3.864 1.475 8.203-.468 9.678-4.339l4.121-10.821h28.103l4.076 10.799c1.133 3.004 3.987 4.854 7.018 4.854.88 0 1.775-.156 2.647-.485 3.875-1.463 5.831-5.79 4.368-9.665l-23.718-62.846c-.025-.069-.053-.137-.08-.205-1.386-3.368-4.632-5.542-8.272-5.542-.002 0-.005 0-.008 0-3.645.003-6.891 2.185-8.271 5.558-.023.057-.046.114-.067.171l-23.935 62.843c-1.474 3.871.469 8.204 4.34 9.678zm27.915-52.222 8.326 22.062h-16.729z" fill="#2bc155" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m276.023 140.611c1.313.925 2.82 1.369 4.313 1.369 2.357 0 4.678-1.108 6.139-3.181l17.911-25.425 17.883 25.421c1.46 2.076 3.781 3.185 6.141 3.185 1.49 0 2.996-.443 4.309-1.366 3.388-2.383 4.202-7.062 1.818-10.45l-20.975-29.816 17.817-25.291c2.385-3.386 1.573-8.065-1.813-10.451-3.389-2.386-8.064-1.574-10.451 1.812l-14.721 20.897-14.698-20.893c-2.382-3.387-7.058-4.203-10.449-1.819-3.388 2.383-4.202 7.062-1.818 10.45l17.789 25.288-21.006 29.819c-2.386 3.387-1.574 8.066 1.811 10.451z" fill="#2bc155" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m189.582 134.48v-56.241h10.172c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-35.201c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h10.029v56.241c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5z" fill="#2bc155" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m478.284 109.615-71.641-71.64c-21.742-21.742-50.652-33.717-81.403-33.717h-178.5c-17.921 0-32.5 14.58-32.5 32.5v245.342c-24.873-.301-49.189 7.584-69.065 22.523-3.312 2.489-3.979 7.19-1.489 10.501 2.489 3.312 7.191 3.978 10.501 1.49 18.646-14.015 41.807-20.876 65.223-19.312 23.63 1.575 45.879 11.675 62.647 28.439 38.15 38.161 38.15 100.244.001 138.393-38.16 38.151-100.245 38.151-138.394.001-16.766-16.766-26.868-39.009-28.445-62.631-1.563-23.407 5.294-46.57 19.308-65.22 2.488-3.312 1.82-8.013-1.491-10.501-3.31-2.488-8.013-1.82-10.501 1.491-16.172 21.522-24.085 48.239-22.283 75.23 1.819 27.249 13.47 52.903 32.805 72.238 22.002 22.002 50.896 33.001 79.8 32.999 23.312-.002 46.629-7.167 66.325-21.483h300.318c17.921 0 32.5-14.58 32.5-32.5v-262.74c0-30.751-11.974-59.66-33.716-81.403zm-10.607 10.607c10.933 10.933 19.019 23.953 23.902 38.158-12.26-12.014-29.031-19.441-47.512-19.441h-49.247c-9.649 0-17.5-7.851-17.5-17.5v-49.246c0-18.481-7.427-35.253-19.442-47.513 14.206 4.882 27.225 12.968 38.158 23.902zm29.323 333.536c0 9.649-7.851 17.5-17.5 17.5h-283.507c13.799-15.016 22.787-32.893 26.957-51.639h142.9c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-140.608c.906-10.624.319-21.352-1.765-31.84h216.843c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-220.91c-3.909-11.269-9.651-22.037-17.229-31.835h238.141c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-252.094c-16.541-14.842-37.06-24.451-58.988-27.661v-246.525c0-9.649 7.851-17.5 17.5-17.5l162.646.001c29.188 0 52.934 23.746 52.934 52.934v49.246c0 17.92 14.579 32.5 32.5 32.5h49.246c29.188 0 52.934 23.746 52.934 52.934z" fill="#2bc155" data-original="#000000" class=""></path></g></svg>
                                </a>
                                <span class="ml-2 fw-900 fs-14">Property Taxes</span>
                            </li>

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
                                <span class="ml-2 fw-900 fs-14">Alerts / Notifications</span>
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
