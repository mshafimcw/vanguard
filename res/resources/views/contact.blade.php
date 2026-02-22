 @extends('layouts.main')


@section('content') 
 
  <!--Page Title-->

        <section class="page-banner">

                      <div class="image-layer" style="background-image:url(images/background/banner-image-2.jpg);"></div>




            <div class="banner-inner">

                <div class="auto-container">

                    <div class="inner-container clearfix">

                        <h1>Contact</h1>

                        <div class="page-nav">

                            <ul class="bread-crumb clearfix">

                                <li><a href="">Home</a></li>


                                <li class="active">Contact</li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        <!--Contact Section-->

        <section class="contact-section">

            <div class="auto-container">

                <div class="row clearfix">

                    <div class="left-col col-lg-6 col-md-12 col-sm-12">

                        <div class="inner-box">

                            <div class="images clearfix">

                                <figure class="image"><img src="images/resource/featured-image-10.jpg" alt=""></figure>

                                <figure class="image"><img src="images/resource/featured-image-11.jpg" alt=""></figure>

                            </div>

                            <div class="contact-info-box">

                                <div class="inner">

                                    <ul class="info">

                                        <li class="clearfix">

                                            <h4>Quick contact</h4>

                                            <div class="content">

                                                <span class="icon flaticon-telephone-2"></span>

                                                <span>Call on</span><br>

                                                <a class="txt" href="tel:+4488812345">+44 888 12 345</a>

                                            </div>

                                        </li>

                                        <li class="clearfix">

                                            <h4>Email address</h4>

                                            <div class="content">

                                                <span class="icon flaticon-postcard"></span>

                                                <span>Mail to</span><br>

                                                <a href="mailto:info@citygovt.com" class="txt">info@citygovt.com</a>

                                            </div>

                                        </li>

                                        <li class="clearfix">

                                            <h4>Visit our office</h4>

                                            <div class="content">

                                                <span class="icon flaticon-map"></span>

                                                <span class="txt">46, The queen's walk <br>london 5241, UK</span>

                                            </div>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>



                    <div class="right-col col-lg-6 col-md-12 col-sm-12">

                        <div class="inner">

                            <div class="sec-title with-separator">

                                <h2>We’re Here to Help You</h2>

                                <div class="separator"><span class="cir c-1"></span><span class="cir c-2"></span><span class="cir c-3"></span></div>

                                <div class="lower-text">Shoot us a message if you have any question, we’re here to help!.</div>

                            </div>



                            <div class="default-form form-box">

                               

                                    <div class="form-group">

                                        <div class="field-inner">

                                            <input type="text" name="username" placeholder="Your name *" required="" value="">

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <div class="field-inner">

                                            <input type="email" name="email" placeholder="Email" required="" value="">

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <div class="field-inner">

                                            <select name="subject" class="custom-select-box">

                                            <option>Traffic & trasport</option>

                                            <option>Arts & culture department</option>

                                            <option>Housing & land department</option>

                                        </select>

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <div class="field-inner">

                                            <textarea name="message" placeholder="Message..." required=""></textarea>

                                        </div>

                                    </div>



                                    <div class="form-group">

                                        <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Send Message</span></button>

                                    </div>

                               

                            </div>

                        </div>

                    </div>

                </div>



            </div>

        </section>



        <!--Map Section-->

        <section class="map-section">

            <!--Map Box-->

            <div class="map-box">

                <div class="map-canvas" data-zoom="10" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap" data-hue="#ffc400" data-title="Melbourne" data-icon-path="images/icons/map-marker.png" data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">

                </div>

            </div>

        </section>



 
 
 
 
 
 
 
	
	
	
	
	
	

@endsection