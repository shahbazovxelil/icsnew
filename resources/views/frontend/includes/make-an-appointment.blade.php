<section class="appointment-form">
    <div class="container">
        <div class="row align-items-center mt-n1-9 mt-sm-n2-9">
            <div class="col-lg-6 mt-1-9 mt-sm-2-9">
                <div class="pe-lg-1-9 pe-xl-2-9 pe-xxl-7">
                    <div class="heading-two position-relative mb-2-9">
                        <h2>How Can We Help You ?</h2>
                        <p class="mb-1-6 d-inline-block">We are assisting to increase health & assisting any where, any time on your services. We provide you with objective information.</p>
                        <span class="shape left"></span>
                    </div>
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <div class="left-img position-relative mb-4 mb-sm-0">
                            <img src="{{asset('frontend/img/content/appointment-img.jpg')}}" alt="..." class="rounded-circle">
                            <div class="img-inner">
                                <img src="{{asset('frontend/img/icons/icon-13.png')}}" alt="...">
                            </div>
                        </div>
                        <div class="ps-lg-1-6 ps-xl-5">
                            <ul class="list-style1 list-unstyled mb-0">
                                <li><i class="fa-solid fa-circle-right"></i>Medical Specialties</li>
                                <li><i class="fa-solid fa-circle-right"></i>Highest Quality Results</li>
                                <li><i class="fa-solid fa-circle-right"></i>Affordable Health Packages</li>
                                <li><i class="fa-solid fa-circle-right"></i>Certified Laboratory</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-1-9 mt-sm-2-9">
                <div class="shadow p-1-9 p-md-5 bg-white">
                    <form class="quform" action="https://biology.websitelayout.net/quform/contact.php" method="post" enctype="multipart/form-data" onclick="">

                        <div class="quform-elements">

                            <div class="row">

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group">
                                        <label for="name">Your Name <span class="quform-required">*</span></label>
                                        <div class="quform-input">
                                            <input class="form-control" id="name" type="text" name="name" placeholder="Your name here" />
                                        </div>
                                    </div>

                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group">
                                        <label for="email">Your Email <span class="quform-required">*</span></label>
                                        <div class="quform-input">
                                            <input class="form-control" id="email" type="text" name="email" placeholder="Your email here" />
                                        </div>
                                    </div>
                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group">
                                        <label for="subject">Your Subject <span class="quform-required">*</span></label>
                                        <div class="quform-input">
                                            <input class="form-control" id="subject" type="text" name="subject" placeholder="Your subject here" />
                                        </div>
                                    </div>

                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Text input element -->
                                <div class="col-md-6">
                                    <div class="quform-element form-group">
                                        <label for="phone">Contact Number</label>
                                        <div class="quform-input">
                                            <input class="form-control" id="phone" type="text" name="phone" placeholder="Your phone here" />
                                        </div>
                                    </div>

                                </div>
                                <!-- End Text input element -->

                                <!-- Begin Textarea element -->
                                <div class="col-md-12">
                                    <div class="quform-element form-group">
                                        <label for="message">Message <span class="quform-required">*</span></label>
                                        <div class="quform-input">
                                            <textarea class="form-control" id="message" name="message" rows="3" placeholder="Tell us a few words"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Textarea element -->

                                <!-- Begin Captcha element -->
                                <div class="col-md-12">
                                    <div class="quform-element">
                                        <div class="form-group">
                                            <div class="quform-input">
                                                <input class="form-control" id="type_the_word" type="text" name="type_the_word" placeholder="Type the below word" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="quform-captcha">
                                                <div class="quform-captcha-inner">
                                                    <img src="{{asset('frontend/quform/images/captcha/courier-new-light.png')}}" alt="...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Captcha element -->

                                <!-- Begin Submit button -->
                                <div class="col-md-12">
                                    <div class="quform-submit-inner">
                                        <button class="butn-style2 border-0" type="submit"><span>Send Message</span></button>
                                    </div>
                                    <div class="quform-loading-wrap text-left"><span class="quform-loading"></span></div>
                                </div>
                                <!-- End Submit button -->

                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
