<?php
    include 'scripts/header.html';
?>
    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <h3 class="widget-title">Na kontaktoni</h3>
                    <div class="contact-form">
                        <form name="contactform" id="contactform" action="#" method="post">
                            <p>
                                <input name="name" type="text" id="name" placeholder="Emri">
                            </p>
                            <p>
                                <input name="email" type="text" id="email" placeholder="Email"> 
                            </p>
                            <p>
                                <input name="subject" type="text" id="subject" placeholder="Titulli"> 
                            </p>
                            <p>
                                <textarea name="message" id="message" placeholder="Mesazhi"></textarea>    
                            </p>
                            <input type="submit" class="mainBtn" id="submit" value="Dergo mesazhin">
                        </form>
                    </div> 
                </div>
                <div class="col-md-7 col-sm-6 map-wrapper">
                    <h3 class="widget-title">Lokacioni ynë</h3>
                    <div class="map-holder" id="googleMap" style="height: 360px; width: 500px"></div>
                </div>
            </div>
        </div>
    </div> <!-- /.content-section -->
<?php
    include 'footer.html';
?>
<script>
        function myMap() {
            var uluru = {lat:42.667542,lng:21.166191};
            var mapProp= {
                center:new google.maps.LatLng(42.63,20.9),
                zoom:8,
            };
            var map=new google.maps.Map(document.getElementById("googleMap"),mapProp
            );
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlCZz9Bdncs_8xB01L2XsVqWQicVh_34E&callback=myMap"></script>