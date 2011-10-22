<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Happy Birthday Sydney!</title> 
 
	<meta name="author" content="Sameen Jalal" /> 
	<link rel="canonical" href="www.sydneywangisawesome.com" /> 
 
	<link rel="shortcut icon" href="img/favicon.ico"> 
	
	<link rel="stylesheet" type="text/css" href="main.css" /> 
	
	<script src="http://widgets.twimg.com/j/2/widget.js"></script> 
        <script type="text/javascript" src='https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js'></script>
        <script type="text/javascript" src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js'></script>
 
	<script>
		$(document).ready(function() {
			$('#notnor').hide();
			$('#normal').show();

			$("#pix").mouseover(function(){
				$('#normal').hide();
				$('#notnor').show();
			});

			$("#pix").mouseout(function(){
				$('#notnor').hide();
				$('#normal').show();
			});
		});
	</script>
	
</head> 
<body> 
 
<h1><a href="/">Happy Birthday!!!</a></h1> 
 
<nav> 
	<ul> 
		<li><a href="index.html">Come home!</a></li> 
		<li><a href="video.html">I Love You!</a></li> 
		<li id="current" ><a href="others.php">Who Else Loves You!</a></li> 
	</ul> 
</nav> 
 
<section> 
	
	<article> 
		<p> 
			<div id="pix" >
				<img id="normal" src="norm3.jpg" />
				<img id="notnor" src="notnor3.jpg" />

				<? 
				$url = "https://graph.facebook.com/1573260529/feed?access_token=2227470867|2.AQBt3uLz1FnFgvQQ.3600.1309870800.0-854595155|ZXK_sBM5Won3rf0I0fEcr8j_C3Q";
				$url = "https://graph.facebook.com/1573260529/feed?access_token=2227470867|2.AQC8gL-YYNXixbqe.3600.1309881600.0-854595155|isXQSPDkNZxuB3-DB9peCAIGUBs";

				$ch = curl_init();
				curl_setopt( $ch, CURLOPT_URL, $url );
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
				curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );    # required for https urls
				$obj = curl_exec( $ch );
				curl_close ( $ch );

				$obj = json_decode( $obj );
				#print_r($obj);

				// If broken, go to "http://developers.facebook.com/docs/reference/api/post/"
				// Then click on "https://graph.facebook.com/19292868552_10150189643478553 (A post from Facebook Platform)"
				// Then close the site, this is just to refresh the auth
				foreach( $obj->data as $friend ) {
					?><pre><?
					?>Your loving friend: <?print_r($friend->from->name);
					?> Says: <p><?
						$message = $friend->message;
						while (strlen($message) > 50) {
							$to_print = substr($message, 0 , 50);
							$message = substr($message, 50);
							print_r($to_print); ?><br><?
						}
						print_r($message);
					?></p></pre><br><?
				}
				?>
			</div>
		</p> 
	
	</article> 
	
	<aside id="twitter_widget"> 
	
		<script> 
			new TWTR.Widget({
			  version: 2,
			  type: 'search',
			  rpp: '4',
			  search: 'from:sydney_wang',
			  interval: 500,
			  title: 'Latest Tweets',
			  subject: '',
			  width: 220,
			  height: 300,
			  theme: {
				shell: {
				  background: '#ffffff',
				  color: '#000000'
				},
				tweets: {
				  background: '#FFFFFF',
				  color: '#000000',
				  links: '#16A8CC'
				}
			  },
			  features: {
				scrollbar: false,
				loop: false,
				live: false,
				hashtags: false,
				timestamp: true,
				avatars: true,
				toptweets: false,
				behavior: 'all'
			  }
			}).render().start();
		</script> 

		<br/>
		<br/>
		<a href="http://twitter.com/share" class="twitter-share-button" data-count="none" data-via="sydney_wang" data-related="samjalal">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>

		<br/>
		<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=226314970722646&amp;xfbml=1"></script><fb:like href="http://www.sydneywangisawesome.com/" send="false" width="0" show_faces="true" font="lucida grande"></fb:like>
	</aside> 

	<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:comments href="http://www.sydneywangisawesome.com/" num_posts="6" width="500"></fb:comments>

</section> 

</body> 
</html> 
