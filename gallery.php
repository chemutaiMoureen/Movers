<?php include 'header.php'?>
<style type="text/css" id="wp-custom-css">
            .entry-tags { display: none; }  
            .img{img/whatsapp.svg}  </style>
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


    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="gallery-grid.css">
<div class="jumbotron"style="background-color:#A9A9A9;">
<div class="container">
    
        <h2 style="padding-left: 30px;font-size: 40px;"><strong>GALLERY</strong></h2>
        <a style="color: black;"href="index.php">Mogish Movers</a>/Gallery
    </div>
</div>
<hr>
<br>

 <div class="tz-gallery">
<div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/20.jpg">
                    <img style="width: 360px;height:250px;"src="img/20.jpg" alt="Park">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/21.jpg">
                    <img style="width: 360px;height:250px;" src="img/21.jpg" alt="Bridge">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/22.jpg">
                    <img style="width: 360px;height:250px;"src="img/22.jpg" alt="Tunnel">
                </a>
            </div>
        </div><br><br>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/23.jpg">
                    <img style="width: 360px;height:250px;"src="img/23.jpg" alt="Coast">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/24.jpg">
                    <img style="width: 360px;height:250px;"src="img/24.jpg" alt="Rails">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/19.jpg">
                    <img style="width: 360px;height:250px;"src="img/19.jpg" alt="Traffic">
                </a>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/18.jpg">
                    <img style="width: 360px;height:250px;"src="img/18.jpg" alt="Rocks">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/17.jpg">
                    <img style="width: 360px;height:250px;"src="img/17.jpg" alt="Benches">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="img/16.jpg">
                    <img style="width: 360px;height:250px;"src="img/16.jpg" alt="Sky">
                </a>
            </div>
        </div>
</div>
    </div>

</div>
<br>
<br>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>



  <?php include 'footer.php'?>