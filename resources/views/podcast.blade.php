<!DOCTYPE html>
<html>
    <head>
    <title>Musica Podcast</title>
    <!--Meta tags-->
    <meta charset="utf-8" name="color-scheme" content="light dark">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--CDN Bootstrap CSS-->
    <link rel="icon" type="image/png" href="http://127.0.0.1:8000/assets/Musica_Logo.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">		<link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <script src="https://kit.fontawesome.com/12801238e9.js" crossorigin="anonymous"></script>
    <script href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css"></script>

        <!--Source file.-->

		<style>
            :root {
                --prm-color: #EB7336;
                --prm-gray: #b1b1b1;
            }
            /*Main style*/
            body.Light {
                --text: #414141;
                --text2: #2F4858;
                --background: #F6F2CB;
                --background2: white; /*For container*/
                --background3: white; /*For container*/
                --background4: #f0f0f0;
                --background5: #CED4DA; /*For input border*/
                --background6: #F0F0F0;
                --background7: transparent; /*For modal, dropdown, popover border*/
            }
            body.Dark {
                --text: whitesmoke;
                --text2: whitesmoke;
                --background: #18191A;
                --background2: #18191A;
                --background3: #3A3B3C;
                --background4: #5e5d5d;
                --background6: #3A3B3C;
                --background7: #f4fa52;
            }
            .steps {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 2rem;
                position: relative;
            }

            .step-button {
                width: 50px;
                height: 50px;
                border-radius: 50%;
                border: none;
                background-color: var(--prm-gray);
                transition: .4s;
            }

            .step-button[aria-expanded="true"] {
                width: 60px;
                height: 60px;
                background-color: #76568C;
                color: #fff;
            }

            .done {
                background-color: #76568C;
                color: #fff;
            }

            .step-item {
                z-index: 10;
                text-align: center;
            }

            #progress {
            -webkit-appearance:none;
                position: absolute;
                width: 95%;
                z-index: 5;
                height: 10px;
                margin-left: 18px;
                margin-bottom: 18px;
            }

            /* to customize progress bar */
            #progress::-webkit-progress-value {
                background-color: #76568C;
                transition: .5s ease;
            }

            #progress::-webkit-progress-bar {
                background-color: var(--prm-gray);

            }

            .dropdown-menu{
                background: var(--background4);
                border: 2px solid var(--background7);
            }
            .dropdown-item .btn.btn-light{
                color: var(--text);
            }

            .form-control{
                background: var(--background3);
                border-color: #CED4DA;
                color: var(--text);
            }
            .form-select{
                background: var(--background3);
                border-color: #CED4DA;
                color: var(--text);
            }
            thead{
                color: var(--text);
            }
            td h6{
                color: var(--text);
            }
            /* Modal Setting*/
            .modal-content{
                background-color: var(--background3);
                border:none;
            }
            p {
                color: gray;
            }
            body {
                font-family: "Poppins", Arial, sans-serif;
                font-size: 14px;
                line-height: 1.8;
                font-weight: normal;
                color: var(--text);
                background: var(--background);
            }
            .col-md-3 {
                color: var(--text2);
            }
            a {
                -webkit-transition: .3s all ease;
                -o-transition: .3s all ease;
                transition: .3s all ease;
                color: grey;
                text-decoration: none;
            }
            a:hover, a:focus {
                text-decoration: none !important;
                outline: none !important;
                -webkit-box-shadow: none;
                box-shadow: none;
            }

            button {
                -webkit-transition: .3s all ease;
                -o-transition: .3s all ease;
                transition: .3s all ease;
            }
            .btn.btn-primary{
                background:#f5e61d;
                border-color:#f5e61d;
                color:#212121;
            }
            .btn.btn-success{
                background:#00BD84;
                border-color:#00BD84;
            }
            .btn.btn-info{
                background:#76568C;
                border-color:#76568C;
                color:whitesmoke;
            }

            #addRecipeButton{
                border-radius:100%;
                margin-top:-40px;
                width:40px;
                background:var(--background3);
                box-shadow: rgba(0, 0, 0, 0.25) 0px 5px 15px;
            }
            button:hover, button:focus {
                text-decoration: none !important;
                outline: none !important;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }
            .container-fluid.mb-3{
                background: var(--background2);
            }
            .card.border-gray{
                background: var(--background3);
            }
            .container-fluid.mb-3 #headingCard{
                background: var(--background4);
                border-radius:6px;
            }
            .card.border-0{
                background: var(--background2);
            }

            h1, h2, h3, h4, h5,
            .h1, .h2, .h3, .h4, .h5 {
                line-height: 1.5;
                font-weight: 400;
                font-family: "Poppins", Arial, sans-serif;
                color: var(--text);
            }

            .ftco-section {
                padding: 7em 0;
            }

            .ftco-no-pt {
                padding-top: 0;
            }

            .ftco-no-pb {
                padding-bottom: 0;
            }

            .heading-section {
                font-size: 28px;
                color: #000;
            }
            .heading-section small {
                font-size: 18px;
            }

            .img {
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;
            }

            .navbar {
                padding: 15px 10px;
                background: #fff;
                border: none;
                border-radius: 0;
                margin-bottom: 40px;
                -webkit-box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
                box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
            }

            .navbar-btn {
                -webkit-box-shadow: none;
                box-shadow: none;
                outline: none !important;
                border: none;
            }

            .line {
                width: 100%;
                height: 1px;
                border-bottom: 1px dashed #ddd;
                margin: 40px 0;
            }

            .wrapper {
                width: 100%;
            }

            #sidebar {
                min-width: 300px;
                max-width: 300px;
                background: #212529;
                color: #fff;
                -webkit-transition: all 0.3s;
                -o-transition: all 0.3s;
                transition: all 0.3s;
            }
            #sidebar.active {
                margin-left: -300px;
            }
            #sidebar .logo {
                display: block;
                width: 120px;
                height: 120px;
                margin: 0 auto;
            }
            #sidebar .logo span {
                display: block;
            }
            #sidebar ul.components {
                padding: 0;
            }
            #sidebar ul li {
                font-size: 16px;
                padding:4px;
            }
            #sidebar ul li > ul {
                margin-left: 10px;
            }
            #sidebar ul li > ul li {
                font-size: 14px;
            }
            #sidebar ul li a {
                padding: 10px 5px;
                display: block;
                color: whitesmoke;
            }
            #sidebar ul li a:hover {
                background: #E5F61D;
                border-radius: 6px;
                color: #212121;
            }
            #sidebar ul li.active a:hover {
                background: #E5F61D;
                border-radius: 6px;
                border:none;
                color: #212121;
            }
            #sidebar ul li.active > a {
                background: transparent;
                border-right: 4px solid #f5e61d;
            }
            @media (max-width: 991.98px) {
                #sidebar {
                margin-left: -300px; }
                #sidebar.active {
                margin-left: 0; }
            }

            a[data-toggle="collapse"] {
                position: relative;
            }

            .dropdown-toggle::after {
                display: block;
                position: absolute;
                top: 50%;
                right: 0;
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                transform: translateY(-50%);
            }

            @media (max-width: 991.98px) {
            #sidebarCollapse span {
                display: none; } }

            #content {
                width: 100%;
                padding: 0;
                min-height: 100vh;
                -webkit-transition: all 0.3s;
                -o-transition: all 0.3s;
                transition: all 0.3s;
            }

            .footer p {
                color: rgba(255, 255, 255, 0.5);
            }

            .navbar-light .navbar-nav .nav-item .nav-link{
                color:white;
            }
            .navbar-light .navbar-nav .nav-item.active .nav-link{
                bottom:3px;
                font-weight:500;
                position: relative;
            }

            /*Navigation modal.*/
			.flex-row.nav-pills.nav-pills-custom .nav-link {
				color: var(--text2);
				background: var(--background3);
				position: relative;
                width: 150px;
                font-size:14px;
			}
			.flex-row.nav-pills.nav-pills-custom .nav-link:hover {
				color: white;
				background: #e8a382;
				position: relative;
			}
			.flex-row.nav-pills.nav-pills-custom .nav-link.active {
				color: white;
				background: #75558a;
			}
			@media (min-width: 992px) {
				.flex-row.nav-pills.nav-pills-custom .nav-link::before {
					content: '';
					display: block;
					border-left: 8px solid transparent;
					border-top: 10px solid #75558a;
					border-right: 8px solid transparent;
					position: absolute;
					top: 115%;
					right: 40%;
					transform: translateY(-50%);
					opacity: 0;
				}
			}
            .flex-row.nav-pills.nav-pills-custom .nav-link.active::before {
				opacity: 1;
			}

            #dropIcon{
                transition: all .3s ease-in;
            }

            /*Footer*/
            .deneb_footer .widget_wrapper {
                background-repeat: no-repeat;
                background-size: cover;
                padding-top: 200px;
                padding-bottom: 70px;

            }
            @media (max-width: 767px) {
                .deneb_footer .widget_wrapper .widget {
                    margin-bottom: 40px;
                }
            }
            .deneb_footer .widget_wrapper .widget .widget_title {
                margin-bottom: 30px;
            }
            .deneb_footer .widget_wrapper .widget .widget_title h4 {
                font-weight: bold;
            }
            .deneb_footer .widget_wrapper .widget .widget_title h4:after {
                content: "";
                display: block;
                max-width: 38px;
                height: 2px;
                margin-top: 5px;
            }
            .deneb_footer .widget_wrapper .widegt_about p {
                margin-bottom: 20px;
            }
            .deneb_footer .widget_wrapper .widget_link ul li {
                margin-bottom: 5px;
            }
            .deneb_footer .widget_wrapper .widget_link ul li a {
                text-transform: capitalize;
                color: #7a808d;
            }
            .deneb_footer .widget_wrapper .widget_link ul li a:hover,
            .deneb_footer .widget_wrapper .widget_link ul li a:focus {
                color: #feb000;
            }
            .deneb_footer .widget_wrapper .widget_contact .contact_info .single_info {
                max-width: 250px;
                display: flex;
                flex-wrap: wrap;
                margin-bottom: 20px;
            }
            .deneb_footer .widget_wrapper .widget_contact .contact_info .single_info .icon {
                font-size: 12px;
                color: #feb000;
                margin-right: 10px;
            }
            .deneb_footer .widget_wrapper .widget_contact .contact_info .single_info .info p a {
                color: #7a808d;
            }
            .deneb_footer .widget_wrapper .widget_contact .contact_info .single_info .info p span {
                display: block;
            }

            .deneb_cta .cta_wrapper {
                padding: 20px;
                max-width: 970px;
                border-radius: 15px;
                margin: auto;
                margin-bottom: -185px;
                position: relative;
                background:#799791;
                z-index: 1;
            }
            .deneb_cta .cta_wrapper:after {
                content: "";
                background: url(../images/shape/cta_shape.png) no-repeat;
                background-position: bottom;
                width: 100%;
                height: 100%;
                position: absolute;
                bottom: 0;
                left: 0;
                z-index: -1;
            }
            .deneb_cta .cta_wrapper .cta_content h3 {
                color: #fff;
                font-weight: bold;
            }
            @media (max-width: 767px) {
                .deneb_cta .cta_wrapper .cta_content h3 {
                    font-size: 24px;
                }
            }
            .deneb_cta .cta_wrapper .cta_content h3:after {
                content: "";
                display: block;
                background: url(../images/shape/line_2.png) no-repeat;
                max-width: 110px;
                height: 2px;
                margin-top: 13px;
                margin-bottom: 24px;
            }
            .deneb_cta .cta_wrapper .cta_content p {
                color: #fff;
            }
            .deneb_cta .cta_wrapper .button_box {
                float: right;
            }
            @media only screen and (min-width: 768px) and (max-width: 991px) {
                .deneb_cta .cta_wrapper .button_box {
                    float: none;
                    text-align: left;
                    margin-top: 30px;
                }
            }
            @media (max-width: 767px) {
                .deneb_cta .cta_wrapper .button_box {
                    float: none;
                    text-align: center;
                    margin-top: 30px;
                }
            }
            .deneb_cta .cta_wrapper .button_box .deneb_btn {
                background: #fff;
                color: #011a3e;
            }
            .deneb_cta .cta_wrapper .button_box .deneb_btn:hover,
            .deneb_cta .cta_wrapper .button_box .deneb_btn:focus {
                box-shadow: 2.5px 4.33px 15px 0px rgba(0, 0, 0, 0.15);
            }

            /*Autocomplete search*/
            .autocomplete {
                position: relative;
                display: inline-block;
			}

			.autocomplete-items {
				position: absolute;
				border-bottom: none;
				border-top: none;
				z-index: 99;
				/*position the autocomplete items to be the same width as the container:*/
				top: 100%;
				left: 0;
				right: 0;
				border-radius:5px;
			}

			.autocomplete-items div {
				padding: 10px;
				cursor: pointer;
				background-color: var(--background6);
				border-bottom: 1px solid transparent;
				border-radius:5px;
			}

			/*when hovering an item:*/
			.autocomplete-items div:hover {
				background-color: #75558a;
				color: #ffffff;
			}

			/*when navigating through the items using the arrow keys:*/
			.autocomplete-active {
				background-color: #75558a !important;
				color: #ffffff;
			}

            #playlist-holder{
                display: flex;
                flex-direction: column;
                height: 210px;
                overflow-y: scroll;
            }
            /*Custom scrollbar*/
            ::-webkit-scrollbar {
                width: 10px;
            }
            ::-webkit-scrollbar-track {
                box-shadow: inset 0 0 5px grey;
                border-radius: 10px;
            }
            ::-webkit-scrollbar-thumb {
                background: #f5e61d;
                border-radius: 10px;
            }
            ::-webkit-scrollbar-thumb:hover {
                background: #f5c61d;
            }
		</style>

    </head>
    <body class="light">
        <script>
        const theme = localStorage.getItem('theme') || 'light';
        document.body.className = theme;
        </script>

        <div class="wrapper d-flex align-items-stretch">
             <!--Sidebar.-->
            <nav id="sidebar">
                <div class="p-3 pt-2">
                    <img class="w-75" src="{{asset('assets/Musica_Logo.png')}}" alt='logo'
                        style='display: block; margin-left: auto; margin-right: auto;'>

                    <!--Main Navbar.-->
                    <ul class="list-unstyled components mb-3">
                        <a>Menu</a>
                        <li class="active">
                            <a href="#"><i class="fa-solid fa-music"></i> Music</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-radio"></i> Radio</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-podcast"></i> Podcast</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-solid fa-solid fa-microphone-lines"></i> Creation</a>
                        </li>
                        <a>Playlist</a>
                        <!--Create Playlist.-->
                        <li>
                            <a href="#"><i class="fa-solid fa-folder-plus"></i> Make New Playlist</a>
                        </li>

                        <!--List Playlist.-->
                        <div class="container-fluid" id="playlist-holder">
                            <li>
                                <a href="#"><i class="fa-solid fa-folder-closed"></i> Lo-fi Music</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-solid fa-folder-closed"></i> Top EDM 2020</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-solid fa-folder-closed"></i> Tired</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-solid fa-folder-closed"></i> Driving song</a>
                            </li>
                        </div>
                    </ul>
                    <button class="btn btn-danger" onclick="location.href='{{ url('/') }}'">Sign-Out</button>
                    <button class="btn btn-primary" id="theme-toggle"><span id="theme"></span> Mode</button>
                </div>
            </nav>

            <!-- Page Content  -->
            <div id="content" class="pb-2" style='width:100%;'>
                <div class="container-fluid" style="background:linear-gradient(to bottom right, #f5e61d, #FBF305);">
                    <div class="accordion py-4" id="accordionRecipe" style="padding:15%;">
                        <!--Secondary Navbar.-->

                        <nav class="navbar navbar-expand-lg navbar-light bg-dark rounded">

                        <button type="button" id="sidebarCollapse" data-bs-toggle="collapse" data-bs-target="#collapseExample" class="btn btn-primary">
                            <i class="fa-solid fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                        </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!--Collapse menu button.-->
                                <ul class="nav navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="" role="button">Discover</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="" role="button">Favorite</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="" role="button">History</a>
                                    </li>
                                </ul>
                                <!--Account button-->
                                <a style='margin-left:65%;' type="button">
                                    <img class="rounded-circle img-fluid" src="{{asset('assets/image/users/User.jpg')}}" alt='logo'
                                        style='width:40px;'>
                                    <span class="collapse" id="collapseExample" style="position:absolute; white-space: nowrap; color:whitesmoke; margin-top:10px; margin-left:5px;">Flazefy</span>
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="container">
                <section class="deneb_cta mt-5">
        <div class="container">
            <div class="cta_wrapper">
                <div class="cta_content">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{asset('assets/Musica_Ads.png')}}" alt='logo'
                                style='width:100%;'>
                        </div>
                        <div class="col-md-8">
                            <h3>Want to share your music?<br><a style="font-size:14px;"> But you dont know where to share it?</a></h3>
                            <p>Curabitur libero eros, efficitur sit amet sodales tincidunt, aliquet et leo sed ut nibh feugiat, auctor enim quis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
</div>
            </div>
        </div>

        <!--Others CDN.-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script>
            //Darkmode setting.
            function getTheme() {
                return localStorage.getItem('theme') || 'Light';
            }
            function saveTheme(theme) {
                localStorage.setItem('theme', theme);
            }

            const colorScheme = document.querySelector('meta[name="color-scheme"]');
            function applyTheme(theme) {
                document.body.className = theme;
                colorScheme.content = theme;
            }

            function rotateTheme(theme) {
            if (theme === 'Light') {
                return 'Dark'
            }
                return 'Light';
            }

            const themeDisplay = document.getElementById('theme');
            const themeToggler = document.getElementById('theme-toggle');

            setTimeout(() => {
            let theme = getTheme();
            applyTheme(theme);
            themeDisplay.innerText = theme;

            themeToggler.onclick = () => {
                const newTheme = rotateTheme(theme);
                applyTheme(newTheme);
                themeDisplay.innerText = newTheme;
                saveTheme(newTheme);

                theme = newTheme;
            }
            }, 1000);

            //Sidebar setting.
            (function($) {
            "use strict";
            var fullHeight = function() {
                $('.js-fullheight').css('height', $(window).height());
                $(window).resize(function(){
                    $('.js-fullheight').css('height', $(window).height());
                });
            };
            fullHeight();
            $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
            });
            })(jQuery);

        </script>

	</body>
</html>

