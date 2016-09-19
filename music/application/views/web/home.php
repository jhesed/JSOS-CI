<?php echo $headers; ?>

<div class="background_box">
    <div class="left columns">
        <?php echo $slider; ?>
    </div>
    <div id="welcome" class="right columns group">
        <br/>
        <h1>Welcome to <span class="highlight">JSOS Worship Ministry</span> Site!</h1>
        <h2>Purpose Statement:</h2>
        <p>To lead the JSOS Church in corporate praise and worship to God:
        to inspire the congregation, through the Holy Spirit,
        to worship the Lord Jesus with all our heart, with all our soul,
        with all our mind and with all our strength.</p>

        <ul class="tabs">
           <li><a href="#services">SERVICES &amp; EVENTS</a></li>
           <li><a href="#announcements">ANNOUNCEMENTS</a></li>
        </ul>
        <div class="tabContainer">
            <div id="services" class="tabContent">
                <p>
                    - Sunday Worship: 9:00-11:30 am <br/>
                    - Sunday Praise Huddle: 1:00-1:15 pm <br/>
                    - Saturday Band Practice: 3:00-4:30 pm <br/>
                    - Praise Festival on every first Sunday of the month: 3:00-6:00 pm

                </p>
            </div>
            <!-- / END #events tab -->
            <div id="announcements" class="tabContent">
                <p>
                    - Music clinic every Saturday in the month of May <br/>
                    - Recruitment and recommitment on May 31 <br/>
                    - JR Band will lead the Praise and Worship on August 31

                </p>
           </div>
           <!-- / END #announcements tab -->
        </div><!-- / END .tabContainer -->

        <?php echo $fb_like; ?>
    </div>
</div>

<?php echo $footer; ?>

</div>
</body>