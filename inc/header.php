<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>
        <?php echo $title; ?>
    </title>
    <link rel="shortcut icon" href="image/speedlogo.ico">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="slick/slick.css" /> // Add the new slick-theme.css if you want the default styling
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>

<body>
    <header id="header-wrapper">
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="#">cLift Off</a></h1>
            </div>
            <nav id="menu">
                <ul>
                    <li
                        <?php if(strpos($_SERVER["REQUEST_URI"],"index.php") == true) {
                        echo "class='current_page_item'"; }; ?>
                        ><a href="index.php" accesskey="1" title="Home">Home</a>
                    </li>
                    <li
                        <?php if(strpos($_SERVER["REQUEST_URI"],"physics.php") == true) {
                        echo "class='current_page_item'"; }; ?>
                        ><a href="physics.php" accesskey="2" title="Physics Explanation">Physics Explanation</a>
                    </li>
                    <li
                        <?php if(strpos($_SERVER["REQUEST_URI"],"about.php") == true) {
                        echo "class='current_page_item'"; }; ?>
                        ><a href="about.php" accesskey="3" title="About Us">About Us</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
