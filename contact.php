<?php include 'header.php'?>
<style type="text/css" id="wp-custom-css">
			.entry-tags { display: none; }	
			.img{img/whatsapp.svg}	</style>
		        <script type="text/javascript">
            (function () {
                var options = {
                    whatsapp: "+254722964824", // WhatsApp number
                    call_to_action: "Message us", // Call to action
                    position: "left", // Position may be 'right' or 'left'
                };
                var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = url + '/widget-send-button/js/init.js';
                s.onload = function () {
                    WhWidgetSendButton.init(host, proto, options);
                };
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            })();
        </script>

<div class=""style="position: relative;
  text-align: center;
  color: white;">
	<img src="img/19.jpg"style="width: 100%;height: 250px;">
	<div class="bottom-left"style="position: absolute;
  bottom: 150px;
  left: 60px;
  font-size: 50px;
">Connect With Us</div>
</div><br>
<div class="">
	<a href="index.php"style="color: black;">Mogish Movers</a>
	/Contact Us
</div>
<hr style="">

<div class="container">
		<div class="row">
			<div class="col-sm-6">
	<h2><strong>Contact Us</strong></h2>
	<hr style=" width: 80px;border: 1px solid blue;text-align:left;margin-left:0">

			Please fill out the form below and we will get back to you as soon as possible<br><br>
			
			<form class="" role="form" method="post" action = "mail_handler.php">
				<div class="row">
				<div class="col">
					<input name ="customerName" type="name" placeholder="Name*"class="form-control mb-2 mr-sm-2"id="name">
				</div>
				<div class="col">
					<input name="phoneNumber" type="phone" placeholder="Phone*"class="form-control mb-2 mr-sm-2"id="phone">
				</div></div><br><br>
				<div class="row">
				<div class="col">
					<input name="customerEmail" type="email" placeholder="Email*"class="form-control"id="email">
				</div>
					<div class="col">
					<select class="form-control" id="select" name= "service">
						<option>Select Service</option>
						<option>Home Moving</option>
    					<option>Office Moving</option>
    					<option>Settling Services</option>
   						<option>Others</option>
  					</select>
				</div></div><br><br>
				<div class="row">
				<div class="col">
					<input name="movingFrom" type="name"class="form-control"placeholder="Moving From*">
				</div>
				<div class="col">
					<input name="movingTo" type="name"class="form-control"placeholder="Moving To*">
				</div></div><br><br>
				<div class="row">
				<div class="col">
					<input name="houseSize" type="name"class="form-control"placeholder="House Size**">
				</div>
				<div class="col">
					<input type="date" name="date">
				</div></div><br> <br><br>
			
				<div>
				<input style="background-color:#008B8B"type="submit" name="submit" value="Submit" class="btn btn-primary btn-lg">
			</div>
			</form>
			<br><br><br>
		

			</div>

			<div class="col-sm-3">
				<h3>Location</h3>
				Buruburu, Nairobi Kenya
			</div>
						<div class="col-sm-3">
				<h3>Contact Info</h3>
				<p>Tel:
				<a href="tel:+254 722964824">+254 722964824</a></p>
				<p>Email:
				<a href="mailto:protichcornelius@gmail.com">protichcornelius@gmail.com</a></p>
			</div>
		</div>
		</div>
	</div>
</div>



<script type="text/javascript" src="jquery-3.3.1.min.js"></script>


<?php include 'footer.php'?>
