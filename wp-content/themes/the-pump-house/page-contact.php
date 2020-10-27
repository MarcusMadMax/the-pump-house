<?php get_header()?>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="pt-5 pb-5">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Contact Us</h3>
                    <div class="section-title-divider"></div>
                    <p class="section-description">The PumpHouse Theatre is in Killarney Park, on the shores of Takapuna’s Lake Pupuke. You can find the entrance to Killarney Park off Manurere Avenue.  There is a sign at the top of the driveway.</p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-4">
                    <div class="info">
                        <div>
                            <a href="https://goo.gl/maps/bvEdt4UFe1Zo2DYcA" target="_blank"><i class="fa fa-map-marker"></i></a>
                            <p>2a Manurere Avenue<br>Takapuna<br>Auckland 0622</p>
                        </div>

                        <div>
                            <i class="fa fa-envelope"></i>
                            <p>info@pumphouse.co.nz</p>
                        </div>

                        <div>
                            <i class="fa fa-phone"></i>
                            <p>09 486 2386</p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5 col-md-8">
                    <div class="form">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" data-rule="minlen:4"
                                    data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required"
                                    data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- End Contact Section -->

<?php get_footer()?>