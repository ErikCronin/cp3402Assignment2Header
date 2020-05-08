<head>
    <title>TJC</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
    <script src="https://kit.fontawesome.com/0a31d1e274.js"></script>
    <style type="text/css">
        .buttoncss{
            color: #fff;
            font-size: 1vmax;
            border: none;
            text-decoration: none;
        }
        .buttoncss:hover{
            color: #9a9a9a;
        }
        .hed{
            color: #fff;
            background-color: #191919;
        }
        .title{
            text-decoration: none;
            color: #fff;
            text-align: center;
        }
        .title:hover{
            color: #9a9a9a;
        }
        .logo{
            border: none;
            text-decoration: none;
            color: #E2C400;
            font-size:6vmin;
        }
        .logo:hover{
            color: #C1A800;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            text-align: center;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #ddd;}

        .dropdown:hover .dropdown-content {display: block;}

        .dropdown:hover {background-color: #3e8e41;}

        @media screen and (max-width: 600px){
            .hed{
                display: none;
            }
        }
    </style>
</head>

<body style="background-color: #252525">
    <nav>
        <div class="row title">
            <h1 class="ten columns">
                <a href="index.php">
                    <i class="fas fa-music title" style="font-size:6vmin; text-align: right; border: none"> Jazz Club Townsville</i>
                </a>
            </h1>
            <button class="buttoncss two columns" style="background-color: #191919">Join Us</button>
        </div>

        <div class="row hed">
            <p class="one column"></p>

            <button class="two columns" style="border: none">
                <a href="index.php" class="buttoncss">Home</a>
            </button>

            <div class="dropdown two columns">
                <button class="buttoncss">
                    <a href="#" class="buttoncss">Photos</a>
                </button>
                <div class="dropdown-content buttoncss">
                    <a href="#">2020 Photos</a>
                    <a href="#">2019 Photos</a>
                    <a href="#">2018 Photos</a>
                </div>
            </div>

            <div class="dropdown two columns">
                <button class="buttoncss">
                    <a href="#" class="buttoncss">Bands</a>
                </button>
                <div class="dropdown-content buttoncss">
                    <a href="#">Big Band</a>
                    <a href="#">Smooth</a>
                </div>
            </div>

            <button class="two columns" style="border: none">
                <a href="#" class="buttoncss">Festival</a>
            </button>

            <button class="two columns" style="border: none">
                <a href="#" class="buttoncss">About</a>
            </button>
        </div>

        <div class="row hed" style="text-align: center">
            <a href="https://facebook.com/events/s/jazz-club-opening-night-feat-3/2878385435515845/?ti=icl" target="_blank">
                <i class="fab fa-facebook-square logo" style="text-align: right;"></i>
            </a>
            <a href="mailto:townsvillejazz@icloud.com">
                <i class="fas fa-envelope-square logo" style="text-align: left;"></i>
            </a>
        </div>
    </nav>