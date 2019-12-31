<?php include_once('fb-config.php');
if(!isset($_SESSION['fbUserId']) and $_SESSION['fbUserId']==""){
	header('location: https://learncodeweb.com/demo/php/login-with-facebook-using-php-sdk/index.php');
	exit;
}?>
<!doctype html>
<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login with Facebook using PHP SDK</title>
	
	<link rel="shortcut icon" href="https://learncodeweb.com/demo/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	  (adsbygoogle = window.adsbygoogle || []).push({
		google_ad_client: "ca-pub-6724419004010752",
		enable_page_level_ads: true
	  });
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131906273-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-131906273-1');
	</script>
</head>

<body>
	
	<div class="bg-light border-bottom shadow-sm sticky-top">
		<div class="container">
			<header class="blog-header py-1">
				<nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand text-muted p-0 m-0" href="https://learncodeweb.com"><img src='https://learncodeweb.com/wp-content/uploads/2019/01/logo.png' alt='LearnCodeWeb'></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-17" class="active nav-item"><a title="Home" href="https://learncodeweb.com/" class="nav-link">Home</a></li>
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-16" class="nav-item"><a title="Web Development" href="https://learncodeweb.com/learn/web-development/" class="nav-link">Web Development</a></li>
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-558" class="nav-item"><a title="PHP" href="https://learncodeweb.com/learn/php/" class="nav-link">PHP</a></li>
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-14" class="nav-item"><a title="Bootstrap" href="https://learncodeweb.com/learn/bootstrap-framework/" class="nav-link">Bootstrap</a></li>
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-559" class="nav-item"><a title="WordPress" href="https://learncodeweb.com/learn/wordpress/" class="nav-link">WordPress</a></li>
							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-15" class="nav-item"><a title="Snippets" href="https://learncodeweb.com/learn/snippets/" class="nav-link">Snippets</a></li>
						</ul>
						<form method="get" action="https://learncodeweb.com" class="form-inline my-2 my-lg-0">
							<div class="input-group input-group-md">
								<input type="text" class="form-control search-width" name="s" id="search" value="" placeholder="Search..." aria-label="Search">
								<div class="input-group-append">
									<button type="submit" class="btn btn-primary" id="searchBtn"><i class="fa fa-search"></i></button>
								</div>
							</div>
						</form>
					</div>
				</nav>
			</header>
		</div> <!--/.container-->
	</div>
	<div class="container my-2">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- demo top banner -->
		<ins class="adsbygoogle"
			 style="display:block"
			 data-ad-client="ca-pub-6724419004010752"
			 data-ad-slot="6737619771"
			 data-ad-format="auto"
			 data-full-width-responsive="true"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
	
	<div class="container">
		<h1 class="text-center"><a href="https://learncodeweb.com/php/login-with-facebook-using-php-sdk/">Login with Facebook using PHP SDK</a></h1>
    	<div class="row">
			<div class="col-sm-12 text-center p-5">
				<?php
				/*print"<pre>";
				print_r($_SESSION);
				print"</pre>";*/
				//$logoutUrl = $helper->getLogoutUrl($_SESSION['fbAccessToken'], 'https://learncodeweb.com/demo/php/login-with-facebook-using-php-sdk/logout.php');
				?>
				<p>Welcome <em class="text-danger"><?php echo $_SESSION['fbUserName']?></em></p>
				<?php /*?><a href="<?php echo $logoutUrl;?>" class="btn btn-lg btn-danger"><i class="fa fa-fw fa-power-off"></i> Logout</a><?php */?>
				<a href="logout.php" class="btn btn-lg btn-danger"><i class="fa fa-fw fa-power-off"></i> Logout</a>
			</div>
		</div>
    </div> <!--/.container-->
	
	<div class="container">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- demo left sidebar -->
		<ins class="adsbygoogle"
			 style="display:block"
			 data-ad-client="ca-pub-6724419004010752"
			 data-ad-slot="7706376079"
			 data-ad-format="auto"
			 data-full-width-responsive="true"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
</body>
</html>