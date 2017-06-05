<?php
// Partial template
// pulled for Footer
?>


                        <div class="r5-bg-wrap">

                            <div class="row r5 lower-info-region" >

                                <div class="column small-12"><h3>We put our knowledge, experience and resources to work for YOU!</h3></div>

                                <div class="columns small-12 medium-12 large-4 r5-c1" >

                                    <img alt="picture"
                                    src="<?php echo get_stylesheet_directory_uri();?>/assets/images/scales.jpg"
                                    class="r4-portrait">

                                </div>

                                <div class="columns small-12 medium-12 large-8 r5-c2 explaination" >

                                 <p>Hello. My name is Rebecca Adams. I am a criminal defense attorney in the outer St. Paul Metro area. In fact, I am just what you need to arm yourself for your courtroom encounter. I am a former Dakota County Prosecutor and have spent the last 20 years as a defense attorney. My vast experience provides my clients with a read advantage in the courtroom. My extensive knowledge of the judicial system enables me to quite accurately assess the potential reactions of the judges hearing your case. This ability is priceless to you when you are facing very real criminal and administrative penalties. In these tight economic times, I know every dollar counts.<b> You truly don't have to pay more to get more.</b> I offer several payment options. Most importantly, I understand how stressful this experience can be. <b>I will protect your rights,</b> tell you like it is, and get you through this ordeal as painlessly as possible. <b>DONT GO INTO YOUR CASE UNARMED. CALL ME, REBECCA ADAMS.</b></p>

                                    <div class="row explain-bot align-middle desk-show">

                                        <div class="columns small-12 large-5 bbb-holder"> &nbsp;</div> 

                                            <div class="columns small-12 large-7 explain-cta align-middle">

                                                <div class="ex-cta-in">

                                                    <h3>Call Us Now! <?php echo $phone; ?></h3>
                                                    
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="row r3 mobile-show">

                                <div class="columns small-12 large-12 r3-c1">

                                    <?php
                                    include(__DIR__.'/what-you-need-crim.php');
                                    ?>

                                </div>

                            </div>

                    

                            <div class="row footer">

                                <div class="column small-12">

                                   <div class="row r6">

                                    <h5>Legal Disclaimer:</h5>
                                    <p>The Choice of an attorney is an important one and should not be based solely upon advertisements.
                                        Please
                                        be aware that use of this website, sending of forms, or sending of email to our law firm or a
                                        specific
                                        attorney, does not establish an attorney-client relationship nor begin a lawsuit. Communication
                                        through
                                        this website is not a secure method of communication and may be copied or intercepted by a third party
                                        as
                                        it goes from the sender to the recipient through the internet. Some cases may be referred to
                                        co-counsel
                                        depending on the nature and venue of a particular case. 
                                    </p>
                                    <p>
                                        <span style="font-family:serif; font-size:60%; position:relative; top:-10px;">†</span>This rating is associated with attorney Charles Lampin. 
                                    </p>
                                    <p><a href="/disclaimer//" class="haaTrace">More
                                        Disclaimers</a>.</p>

                                        <p>Copyright © <?php echo date('Y'); ?> The Lampin Law Firm, LLC. All Rights Reserved - <a href="/sitemap//" class="haaTrace">Sitemap</a></p>
                                        <p>
                                            We are proud to serve the following counties: St. Louis, St. Charles, &amp; Lincoln. Cities served include St. Louis, St. Charles, St. Peters, O’Fallon, Wentzville, Cottleville, Troy, Moscow Mills, Ferguson, Hazelwood, Creve Coeur, Clayton, Kirkwood, Maplewood, Wildwood, Bridgeton, Jennings, Hillsboro, Warrenton, Hermann, Maryland Heights, Montgomery City, Town and Country.
                                        </p>




                                    </div>
                                </div>
                            </div>

                            <div class="reveal cf" id="exampleModal1" data-reveal>

                                <h2>Tell Us About Your Case</h2>

                                <form action="<?php echo $base;?>/mail/mail_daemon.php" method="post">

                                  <div class="row">

                                      <div class="small-12 medium-12 large-12 columns textarea">
                                          <label>
                                            <textarea name="usrmsg" placeholder="Brief description of your case"></textarea>
                                        </label>
                                    </div>

                                    <div class="small-12 medium-12 large-12 columns">
                                      <label>
                                        <input type="text" name="usrfirstname" placeholder="First Name*" required>
                                    </label>
                                </div>

                                <div class="small-12 medium-12 large-12 columns">
                                  <label>
                                    <input type="text" name="usrlastname" placeholder="Last Name*" required>
                                </label>
                            </div>

                            <div class="small-12 medium-12 large-12 columns">
                              <label>
                                <input type="text" name="usrphone" placeholder="Phone XXX-XXX-XXXX">
                            </label>
                        </div>

                        <div class="small-12 medium-12 large-12 columns">
                          <label>
                            <input type="text" name="usremail" placeholder="Email*" required>
                        </label>
                    </div>

                    <span style="display:none">
                        <input type="text" name="haa-hny" placeholder="">
                        <input type="text" value="888-685-3138" name="companyphone">
                    </span>

                    <input type="submit" class="button" value="Submit">

                </div>

            </form>


            <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <nav class="mob-c2a for-mob hide-for-medium">
                        <div class="row">
                            <div class="small-3 columns align-self-middle">
                                <a class="mob-call" href="tel:<?php echo $phonelink;?>" id="">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/phone-icon.png">
                                </a>
                            </div>
                            <div class="small-9 columns">
                                <ul id="MobileNav" class="mobile-nav">
                                    <li class="cb-headline">Call Us Now!</li>
                                    <li class="bc-subhead">Free Confidential Consultation</li>
                                </ul>
                            </div>
                        </div>
                    </nav>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/foundation.min.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/foundation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/plugins/foundation.equalizer.js"></script> -->

    <script>
        setTimeout(function () {
            jQuery(document).foundation();
            
        }, 100);
    </script>

    <script type="text/javascript" src="//solutions.invocacdn.com/js/pnapi_integration-latest.min.js"></script>

    <script type="text/javascript">
// //Acquires Google Analytics Client ID
//     function getClientId () {
//         // If ga is defined, check for the clientId and return it
//         if (typeof ga !== 'undefined' && typeof ga.getAll === 'function') {

//             var clientId = ga.getAll()[0].get('clientId');
//             return clientId;
//             // otherwise, return false so waitFor knows to try again for defined wait time
//         } else {
//             return false;
//         }
//     };
// //Calls Invoca DNI
// function callInvoca(cid) {
//     //Stores Google Client Id
//     var invocaParams = {
//         g_cid   : cid
//     };
//     //Dynamic Number Insertion Function
//     Invoca.PNAPI.integration({
//         networkId: 1263,
//         numberToReplace : "888.685.3138, 855.468.4878, 216.289.4740", // LP-Swap Target, tool-Free, Local
//         cookieDays : 30,
//         campaignIdOverrideParam: "geo", // Nager-234, Nager-330, Nager-216
//         requiredParams: {gclid: "*"},
//         poolParams: invocaParams //Stored g_cid
//     });
// }
// //Function to run the acquisition of g_cid before running Dynamic Number Insertion
// Invoca.Tools.waitFor(getClientId, callInvoca, 'noCid', 1000) //wait time in MS
</script>


</body>

</html>