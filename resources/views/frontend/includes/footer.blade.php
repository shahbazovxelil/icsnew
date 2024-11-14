<!-- FOOTER
        ================================================== -->
<footer class="bg-dark footer1 position-relative">
    <div class="container">
        <div class="footer-top mb-1-9 mb-sm-6 border-bottom border-color-light-white pb-1-9 pb-sm-6">
            <div class="row align-items-center">
                <div class="col-lg-2 text-center text-lg-start">
                    <div class="mb-3 mb-lg-0 footer-logo">
                        <a href="index.html"><img src="{{asset('frontend/img/logos/logo-ch.png')}}" alt="..."></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="border-lg-start border-color-light-white">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                                <div class="heading-one newsletter-title ps-lg-5 mb-3 mb-md-0">
                                    <h2 class="text-center text-md-start text-white">Subscribe Our Latest News & Aticles and More.</h2>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="text-end">
                                    <form class="quform footer-newsletter" action="#" method="post" enctype="multipart/form-data" onclick="">

                                        <div class="quform-elements position-relative">

                                            <div class="row">

                                                <!-- Begin Text input element -->
                                                <div class="col-md-12">
                                                    <div class="quform-element mb-0">
                                                        <div class="quform-input">
                                                            <input class="form-control" id="email_address" type="text" name="email_address" placeholder="Subscribe with us">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Text input element -->

                                                <!-- Begin Submit button -->
                                                <div class="col-md-12">
                                                    <div class="quform-submit-inner">
                                                        <button class="btn btn-white m-0 px-2" type="button"><i class="fas fa-paper-plane"></i></button>
                                                    </div>
                                                    <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                                                </div>
                                                <!-- End Submit button -->

                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <div class="footer-bar pb-1-9">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <p class="d-inline-block text-white mb-0">&copy; <span class="current-year"></span> ICS Kimya Powered by <a href="#" class="text-secondary">Kh Web</a></p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <ul class="share-post list-unstyled mb-0">
                        <li class="d-inline-block me-1"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="d-inline-block me-1"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="d-inline-block me-1"><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li class="d-inline-block"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>


<!-- start scroll to top -->
<a href="services.html#!" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
<!-- end scroll to top -->

<!-- jQuery -->
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>

<!-- popper js -->
<script src="{{'frontend/js/popper.min.js'}}"></script>

<!-- bootstrap -->
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

<!-- core.min.js -->
<script src="{{asset('frontend/js/core.min.js')}}"></script>

<!-- search -->
<script src="{{asset('frontend/search/search.js')}}"></script>

<!-- custom scripts -->
<script src="{{asset('frontend/js/main.js')}}"></script>

<!-- form plugins js -->
<script src="{{asset('frontend/quform/js/plugins.js')}}"></script>

<!-- form scripts js -->
<script src="{{asset('frontend/quform/js/scripts.js')}}"></script>

<!-- all js include end -->


</body>

</html>
