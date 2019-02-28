<!DOCTYPE html>
<html>

<head>
	<title>Assessment Competency Results </title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<style>
		body {
			font-family: 'Montserrat', sans-serif;
			text-align: center;
		}

		label {
			display: block;
			margin: 0px 0px 7px 0px;
		}
		li{
			margin: 10px auto;
		}

		input,
		textarea {
			width: 100%;
			box-sizing: border-box;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			border: 1px solid #C2C2C2;
			box-shadow: 1px 1px 4px #EBEBEB;
			-moz-box-shadow: 1px 1px 4px #EBEBEB;
			-webkit-box-shadow: 1px 1px 4px #EBEBEB;
			border-radius: 3px;
			-webkit-border-radius: 3px;
			-moz-border-radius: 3px;
			padding: 7px;
			outline: none;
			margin-bottom: 15px;
		}

		.submit-btn {

			border: solid 1px #638a00;
			border-radius: 3px;
			moz-border-radius: 3px;
			-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.4);
			-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.4);
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.4);
			font-size: 20px;
			color: #ffffff;
			padding: 1px 17px;
			background: #96c300;
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #96c300), color-stop(100%, #648c00));
			background: -moz-linear-gradient(top, #96c300 0%, #648c00 100%);
			background: -webkit-linear-gradient(top, #96c300 0%, #648c00 100%);
			background: -o-linear-gradient(top, #96c300 0%, #648c00 100%);
			background: -ms-linear-gradient(top, #96c300 0%, #648c00 100%);
			background: linear-gradient(top, #96c300 0%, #648c00 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#96c300', endColorstr='#648c00', GradientType=0);


		}
	</style>
</head>

<body>

	<h1>A Walk Through of Competency Assessment Results </h1>
	<h1>Draft #1</h1>
	<p>This is an initial mockup used mostly to illustrate concepts. Aesthetics have not been heavily considered, so colors and things could change.</p>
	
	<!--<a href="https://healthstream.invisionapp.com/share/SENFG6Q3795#/313435587_Start" target="_blank">InVision Interactive Mockup</a>-->
	<video style="width: 80%; margin: auto; margin-bottom: 50px;display:block" controls>
  <source src="./content/videos/CompetencyResultsDesignIntro.mp4" type="video/mp4">

Your browser does not support the video tag.
</video>
	
	<div style="width: 40%; display:inline-block; vertical-align:top;">
		<h3> Please provide feedback regarding:</h3>
		<ul style="display:inline-block; width: auto; text-align:left; margin: 0 auto 20px; ">
			<li>
				Content layout
			</li>
			<li>
				Content
			</li>
			<li>
				Overall feel of the design
			</li>
			<li>
				Likes and Hates
			</li>
			<li>
				Anything else your heart desires!
			</li>
		</ul>
	</div>
	<div style="width:40%; min-width:200px; display:inline-block; vertical-align: top; text-align:left; margin-bottom:20px;">

		<form name="contactform" method="post" action="send_form_email.php">
			<h3>Want to Provide Some Quick Feedback?</h3>
			<table style="text-align:left; width: 100%; margin: auto;">
				<tr>

					<td valign="top">
						<div>
							<label for="first_name">Your Name *</label>
						</div>
						<div>
							<input type="text" name="your_name" maxlength="50">
						</div>
					</td>
				</tr>

				<tr>

					<td valign="top">
						<div>
							<label for="email">Email Address *</label>
						</div>

						<div>
							<input type="text" name="email" maxlength="80" size="30">
						</div>

					</td>
				</tr>

				<tr>

					<td valign="top">
						<div>
							<label for="comments">Feedback *</label>
						</div>
						<textarea name="comments" maxlength="1000" cols="25" rows="6"></textarea>
					</td>
				</tr>
				<tr>
					<td><button type="submit" class="submit-btn">Send Feedback</button></td>
				</tr>
			</table>
		</form>
	</div>


</body>

</html>