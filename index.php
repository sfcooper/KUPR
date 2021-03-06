<!--contact form was found at https://bootstrapbay.com/blog/working-bootstrap-contact-form/-->
<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Demo Contact Form';
		$to = 'cooper.sf@gmail.com';
		$subject = 'Message from Contact Demo ';

		$body = "From: $name\n E-Mail: $email\n Message:\n $message";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your maths is incorrect';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
}
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.css.map">
  </head>
  <body>
    <nav class="navbar navbar-toggleable-sm navbar-inverse fixed-top bg-inverse">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto text-white">
              <li class="nav-item">
                <a class="nav-link" href="/index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#experience">Experience</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#recommendations">Recommendations</a>
              </li>
    			<li class="nav-item">
                <a class="nav-link" href="#follow">Follow</a>
              </li>
    			</li>
            </ul>

          </div>
        </nav>

    <div class="jumbotron jumbotron-fluid" id="home">

      <div class="text-center text-white">
        <img src="images/profile_photo.jpg" alt="Simon Cooper" class="rounded-circle">
        <h1>Simon Cooper</h1>
        <p>Senior Martech Professional</br>London,UK</P>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Contact Me</button>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Send me a message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form" method="post" action="index.php">
	<div class="form-group">
		<label for="name" class="control-label">Name</label>
		<div class="">
			<input type="text" class="form-control" id="name" name="name" placeholder="First &amp; Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
			<?php echo "<p class='text-danger'>$errName</p>";?>
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="control-label">Email</label>
		<div class="">
			<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
			<?php echo "<p class='text-danger'>$errEmail</p>";?>
		</div>
	</div>
	<div class="form-group">
		<label for="message" class="control-label">Message</label>
		<div class="">
			<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
			<?php echo "<p class='text-danger'>$errMessage</p>";?>
		</div>
	</div>
	<div class="form-group">
		<label for="human" class="control-label">2 + 3 = ?</label>
		<div class="">
			<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
			<?php echo "<p class='text-danger'>$errHuman</p>";?>
		</div>
	</div>
	<div class="form-group">
		<div class="">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<input id="submit" name="submit" type="submit" value="Send Message" class="btn btn-primary">
		</div>
	</div>
	<div class="form-group">
		<div class="">
			<?php echo $result; ?>
		</div>
	</div>
</form>

      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>



      </div><!--End of Jumbo-->
<div id="experience" class="container-fluid bg-faded"><!--Experience-->
  <div class="container">
    <br /><br />
    <h2 class="text-center"><a class="anchor-link" href="#experience"></a>Experience</h2>
    <div class="row">
      <div class="col"></div>
      <div class="col-10 text-justify"><p>


      I’m a Digital Marketer with 10+ years experience having held various roles at a couple of market leading organisations managing clients grow their business via major digital channels such as Search and Social. I have always stayed for a number of years at the same company as I like to feel I've actually delivered value to the company's growth rather than hop around here and there.  I'm also a strong team leader having managed both local and remote international staff. Mentoring and seeing younger talent develop and succeed has always been an enjoyable part of the job.</p>
        <div class="alert alert-info" role="alert">
    <strong>Seeking work!</strong><p>I'm actively looking for Enterprise <abbr title="Software as a Service">SaaS</abbr> software companies where I can use my skills to generate results for clients.  Please do <a href="#" class="alert-link" data-toggle="modal" data-target="#exampleModal">get in touch</a> if you think my skills and experience are a match for your company.</p>
  </div>
</div>
      <div class="col"></div>
    </div>
    <hr>
    <div class="row">
<div class="col"><h4>Growth</h4>Vast experience in helping clients grow their business by listening to their requirements and then explaining the best strategy.</div>
<div class="col"><h4>Adoption</h4>Ensured clients' were always presented the key product features that were going to add value to their operations.  High product adoption is typically directly linked to high client satisfaction.</div>
<div class="col"><h4>Client Success</h4>Through consistantly meeting client targets I have been able to demonstrate excellent churn rates and renewed deals.</div>
<div class="col"><h4>Leadership</h4>I have always taken time to ensure my teams understood their roles and objectives but also made sure they knew I was there to support and facilitate their success.</div>
    </div><br /><hr>
    <div class="row">
      <div class="col text-center"><h3>Work History</h3><br /><img src="images/KS_grey_logo.png" alt="Kenshoo"/><img src="images/TD_grey_logo.png" alt="TradeDoubler" /><img src="images/TSW_grey_logo.png" alt="The Search Works" /></div>
        <div class="col text-center"><h3>Clients</h3><br /><img src="images/AH_logo_grey.png" alt="Accorhotels" /><img src="images/SS_grey_logo.png" alt="Skyscanner"><img src="images/YNAP_Grey_logo.png" alt"Yoox Net-A-Porter" /><img src="images/JL_grey_logo.png" alt="John Lewis" />
          </div>
    </div>
</div>
</div>
<div id="recommendations" class="container-fluid"><!--Recomemndations-->
  <div class="container">
    <br /><br />
    <h2 class="text-center">Recommendations</h2>
<div class="card-deck">
      <div class="card">
  <div class="card-block">
    <em>I’ve worked with Simon across two very different verticals - electronics and travel. On both occasions, Simon has taken the time to learn the business, and has sought out opportunities to add maximum value. He has always been a popular extension to our internal team, and he's a great guy to work with. I sincerely hope we get the opportunity to work together again in the future.</em>
      </div>
    <div class="card-footer text-muted">Ed Schofield on LinkedIn</div>
</div>
<div class="card">
  <div class="card-block">
      <em>While at Kenshoo I needed someone to lead all Direct clients including some of the biggest brands in the market. Simon was the perfect fit and had an instant impact. His impressive industry experience and consultative approach were instrumental in strengthening our relationships with existing and new clients. More generally he always actively contributed to the team and was one of the first to volunteer to help. I really value the time we spent working together and am pleased to be able to recommend him.</em>
        </div>
      <div class="card-footer text-muted">Nathan Tait-Hill on LinkedIn</div>
</div>
</div>
<div class="card-deck">
<div class="card">
<div class="card-block">
<em>I have known and worked with Simon in different capacities from the moment I joined Blue Barracuda and selected BidBuddy as our search platform.

I would not hesitate to recommend him; he always takes the time to gain an unparalleled knowledge of any technology he works with AND couples this with the ability to communicate complicated concepts to users from every background.</em>
  </div>
<div class="card-footer text-muted">Simon Mohacek on LinkedIn</div>
</div>
<div class="card">
<div class="card-block">
  <em>Simon has the ability to explain difficult technical concepts in clear and concise lanuage , (handy as we operate in many markets together).
He also puts clients at ease with his assured delivery and wealth of knowledge.
Lastly and as valuable he has a finely developed dry sense of humour which makes him fun to have around.</em>
    </div>
  <div class="card-footer text-muted">Chris Simpson on LinkedIn </div>
</div>
</DIV>
</div>
<div class="container-fluid bg-faded" id="follow">
  <div class="container">
    <br /><br />
<h2 class="text-center">Follow Me</h2>
<div class="container text-center">

  <div class="row">
    <div class="col"></div>
    <div class="col-10 text-justify">I have a number of different accounts on both Twitter and Instagram to make sure I'm speaking to the right audience.  My cycling friends tell me they do not want to hear about the latest Facebook ad format for some reason!? So below is just a flavour&#8230; </div>
    <div class="col"></div>
  </div>
  <hr />
  <div class="card-deck">
  <div class="card">
    <div class="card-img-top"><a class="twitter-timeline" data-height="545" href="https://twitter.com/kupr">Tweets by kupr</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>
    <div class="card-block">
      <h4 class="card-title">Twitter</h4>
      <p class="card-text">This is my main work related Twitter account.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><a href"http://www.twitter.com/kupr">&#64;kupr</a></small>
    </div>
  </div>
  <div class="card">
    <div class="card-img-top">  <!-- SnapWidget -->
    <script async src="https://snapwidget.com/js/snapwidget.js"></script>
    <iframe async src="https://snapwidget.com/embed/code/241446" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="yes" style="border:none; overflow:hidden; width:100%; "></iframe></div>
    <div class="card-block">
      <h4 class="card-title">Instagram</h4>
      <p class="card-text">I try not to post too many food shots!</p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><a href"http://www.instagram.com/sfcooper">&#64;sfcooper</a></small>
    </div>
  </div>
</div>
<hr/>
<a href="http://twitter.com/kupr"><img src="images/1489625753_twitter_social_media_online.png"></a>
<a href="https://www.linkedin.com/in/sfcooper/"><img src="images/1489625760_linkedin_social_media_online.png"></a>
<a href="http://instagram.com/sfcooper"><img src="images/1489625765_instagram_social_media_online-.png"></a>
<a href="https://github.com/sfcooper"><img src="images/1489625757_github_social_media_online.png"></a></br></br>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Contact Me</button>
</div>
  </div>
</div>
<div class="container text-center">
<p><small><em>&copy;Simon Cooper 2017</em></small></p><span class="octicon octicon-code"></span> with <span class="octicon octicon-heart"></span> by me!</span>
</div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<!--GA Tracking Sript-->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-211576-7', 'auto');
  ga('send', 'pageview');

</script>
  </body>
</html>
