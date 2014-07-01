@include('template')

<!---start-content---->
<div class="wrap">
    <div class="content">
        <div class="clear"> </div>
        <div class="about">
            <div class="about-topgrid1">
                <h3>Profile information</h3>
                <img src="http://www.kronos.com/uploadedImages/Global_Content/Kronos_Events_Attendees_List/user-profile-image-default.png?n=7382" title="name">
                <h4><?php echo $donor->full_name; ?></h4>
                <p>
                    <p></p>
                    <strong>Address</strong><p><?php echo $donor->address; ?></p><br/>
                    <strong>City name</strong><p><?php echo $donor->city_name; ?></p><br/>
                    <strong>Blood type</strong><p><?php echo $donor->blood_type; ?></p><br/>
                    <strong>Gps location</strong><p><?php echo 'Latitude: '. $donor->gps_latitude.', Longitude: '.$donor->gps_longitude; ?></p><br/>
                </p>
            </div>
            <div class="about-histore">
                <h3>History</h3>
                <div class="historey-lines">
                    <ul>
                        <li><span>2013 &nbsp;-</span></li>
                        <li><p>Made a donation in bank Gomhorya - Portsaid, all medical exams passed and no diseases were found.</p></li>
                        <div class="clear"> </div>
                    </ul>
                </div>
                <div class="historey-lines">
                    <ul>
                        <li><span>2012 &nbsp;-</span></li>
                        <li><p>Made a donation in bank Porfoad - Portsaid, all medical exams passed and no diseases were found.</p></li>
                        <div class="clear"> </div>
                    </ul>
                </div>
                <div class="clear"> </div>
            </div>
            <div class="about-services">
                <h3>Medical history</h3>
                <h4>THIS USER HAS TWO MEDICAL EXAMINATIONS BY DR. MOHAMED ABBAS.</h4>
                <p>
                    <ul>
                        <li><a href="http://www.lni.wa.gov/Forms/wordForms/F245-058-000.docx"><img src="images/marker.png"> Click here</a> to download medical examination results in 2013/02/23.</li>
                        <li><a href="http://www.lni.wa.gov/Forms/wordForms/F245-058-000.docx"><img src="images/marker.png"> Click here</a> to download medical examination results in 2012/03/10.</li>
                    </ul>
                </p>
            </div>
        </div>
        <div class="clear"> </div>
        <div class="footer">
            <div class="footer-left">
                <a href="index.html"><img src="images/logo1.png" title="logo" /></a>
            </div>
            <div class="footer-right">
                <p>Design by <a href="http://w3layouts.com/">W3layouts</a></p>
            </div>
            <div class="clear"> </div>
        </div>
    </div>
    <!---End-content---->
</div>
<!---start-wrap--->
</body>
</html>

