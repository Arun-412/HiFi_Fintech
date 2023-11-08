@extends('layouts.master')
@section('content')

<!--========== BANNER SLIDER ==========-->

<div id="carousel-example-generic carousel" class="carousel slide" data-ride="carousel">
    <!-- <div class="container">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
            </div> -->

    <div class="carousel-inner" role="listbox" style="border-radius: 20px;">
        <div class="item active carousel-height">
            <div class="container">
                <div class="carousel-centered row col-sm-12 carousel-column">
                    <div class="col-sm-6">
                        <h3 class="carousel-title">All kind of <b style="color:#35B7EF;">payments</b><br>
                            under one roof</h3><br>
                        <a href="#contact"
                            class="btn-theme btn-theme-sm btn-blue-brd text-uppercase js_nav-item">Explore</a>
                    </div>
                    <div class="col-sm-6 banner-bg">
                        <img class="" src="{{asset('assets/img/Banner-illust.png')}}" alt="money-transfer" width="500px"
                            height="500px">
                    </div>
                </div>
            </div>
        </div>
        <div class="item carousel-height">
            <div class="container">
                <div class="carousel-centered row col-sm-12 carousel-column">
                    <div class="col-sm-6">
                        <h2 class="carousel-title">Coming Soon!!!</h2><br><br>
                        <p class="color-white">Our own money transfer portal, which will launch soon and <br> offer
                            attractive pricing and commission</p>
                    </div>
                    <div class="col-sm-6 banner-bg">
                        <img class="" src="{{asset('assets/img/ban-illust2.png')}}" alt="money-transfer" width="500px"
                            height="500px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--//========== END BANNER SLIDER ==========-->


<!-- Services -->
<div id="services" class="service-bg">
    <div class="container">
        <!-- <div class="service-bg"></div> -->
        <div class="row row-space-1 margin-t-100">
            <div class="col-sm-4">
                <div class="service" data-height="height">
                    <div class="service-element">
                    </div>
                    <div class="service-info">
                        <div class="service-heading d-flex">
                            <img src="{{asset('assetsimg/mt-icon.svg')}}" alt="">
                            <!-- <span>Money Transfer</span> -->
                            <span>Ticket Booking</span>
                        </div>
                        <p class="margin-b-5">
                            customers can easily search and compare prices and select their preferred mode of transport.
                            We partner with reputable transportation providers to ensure our customers receive safe and
                            efficient travel experiences.
                            <!-- You can easily transfer your cash anywhere within India and Indo-Nepal. Our secure and user-friendly platform allows you to conveniently send and receive money with just a few clicks. Trust us to handle your cash transfers, and experience hassle-free transactions every time. -->
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 service-margin"></div>
            <div class="col-sm-4 service-margin">
                <div class="service" data-height="height">
                    <div class="service-element">
                    </div>
                    <div class="service-info">
                        <div class="service-heading d-flex">
                            <img src="{{asset('assets/img/recharge-icon.svg')}}" alt="">
                            <span>Recharge</span>
                        </div>
                        <p class="margin-b-5">We provide instant recharge for all major telecom operators and DTH
                            providers in India. Our user-friendly platform allows customers to recharge their accounts
                            in just a few simple steps.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-space-1 margin-t-40">
            <div class="col-sm-4">
                <div class="service" data-height="height">
                    <div class="service-element">
                    </div>
                    <div class="service-info">
                        <div class="service-heading d-flex">
                            <img src="{{asset('assets/img/aeps-icon.svg')}}" alt="">
                            <span>AEPS</span>
                        </div>
                        <p class="margin-b-5">Which allows customers to withdraw cash from their bank accounts using
                            their Aadhaar card and biometric authentication. The AEPS also allows customers to check
                            their account balance through a simple enquiry and obtain a mini statement of recent
                            transactions.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 service-margin"></div>
            <div class="col-sm-4 service-margin">
                <div class="service" data-height="height">
                    <div class="service-element">
                    </div>
                    <div class="service-info">
                        <div class="service-heading d-flex">
                            <img src="{{asset('assets/img/atm-icon.svg')}}" alt="">
                            <span>ATM</span>
                        </div>
                        <p class="margin-b-5">Customers can withdraw cash from their accounts using their ATM cards. The
                            process is typically fast and secure, with customers entering their PINs and selecting the
                            amount of cash to withdraw.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-space-1 margin-t-40 margin-b-100">
            <div class="col-sm-4">
                <div class="service" data-height="height">
                    <div class="service-element">
                    </div>
                    <div class="service-info">
                        <div class="service-heading d-flex">
                            <img src="{{asset('assets/img/bill-icon.svg')}}" alt="">
                            <span>Bill Payments</p>
                        </div>
                        <p class="margin-b-5">These payments can include utilities such as electricity, loan dues,
                            water, and gas, as well as communication services like internet and phone bills. Rent or
                            mortgage payments are also considered bill payments.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 service-margin"></div>
            <div class="col-sm-4 service-margin">
                <div class="service" data-height="height">
                    <div class="service-element">
                    </div>
                    <div class="service-info">
                        <div class="service-heading d-flex">
                            <img src="{{asset('assets/img/credit-icon.svg')}}" alt="">
                            <span>Credit Card Bill</p>
                        </div>
                        <p class="margin-b-5">Customers can easily make payments for their credit card dues with us. We
                            accept all major credit card companies and ensure that all transactions are secured with the
                            latest encryption technology.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Service -->


<!-- About -->
<div id="about">
    <div class="bg-color-blue" data-auto-height="true">
        <div class="container text-center">
            <h1 class="about-title margin-t-100">We have 7+ years of experience in <br>
                <b style="color:#35B7EF;">payments & money transfer</b>.
            </h1>
            <p>Ability to ensure secure and efficient transactions has helped us to establish a strong reputation among
                customers and partners alike. We have also successfully implemented digital payment solutions for
                businesses, enabling them to expand their customer base and increase sales revenue.</p>
        </div>
        <div id="projectFacts">
            <div class="fullWidth">
                <div class="projectFactsWrap row">
                    <div class="col-sm-2 center">
                        <div class="item counter-div" data-number="100" style="visibility: visible;">
                            <div><span id="number1" class="number">500</span><span>K+</span></div><br>
                            <p>Monthly Transactions</p>
                        </div>
                    </div>
                    <div class="col-sm-2 center">
                        <div class="item counter-div" data-number="100" style="visibility: visible;">
                            <div><span id="number2" class="number">100</span><span>K+</span></div><br>
                            <p>Customers</p>
                        </div>
                    </div>
                    <div class="col-sm-2 center">
                        <div class="item counter-div" data-number="10" style="visibility: visible;">
                            <div><span id="number3" class="number">25</span><span>+</span></div><br>
                            <p>Retailers</p>
                        </div>
                    </div>
                    <div class="col-sm-2 center">
                        <div class="item counter-div" data-number="1000" style="visibility: visible;">
                            <div><span id="number4" class="number">20</span><span>+</span></div><br>
                            <p>Distributors</p>
                        </div>
                    </div>
                    <div class="col-sm-2 center">
                        <div class="item counter-div" data-number="100" style="visibility: visible;">
                            <div><span id="number5" class="number">10</span><span>+</span></div><br>
                            <p>Super Distributors</p>
                        </div>
                    </div>
                    <div class="col-sm-2 center">
                        <div class="item counter-div" data-number="5" style="visibility: visible;">
                            <div><span id="number6" class="number">5</span><span>+</span></div><br>
                            <p>Own Outlets</p>
                        </div>
                    </div>
                    <!-- <div class="col-sm-2 center">
                                <div class="item counter-div" data-number="2" style="visibility: visible;">
                                    <div><span id="number6"class="number">2</span></div><br>
                                    <p>Partners</p>
                                </div>
                            </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About -->

<!-- Contact -->
<div id="contact">
    <div class="content-lg container">
        <div class="row">
            <div class="col-sm-6 sm-margin-b-50">
                <div class="map">
                    <div style="width: 100%"><iframe width="100%" height="525" frameborder="0" scrolling="no"
                            marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=HI%20FI%20263/1,%20Thennampalayam%20Rd,%20Vagarayampalayam,%20Paduvampalli,%20Tamil%20Nadu%20641659+(HIFI%20FINTECH)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 sm-margin-b-50">
                <h2>Contact Us.</h2>
                <form name="Contacts" action="#">
                    <div class="margin-b-40">
                        <input class="form-input" type="text" id="name" name="Name" placeholder="Enter Name.." required
                            onkeypress="return /[()a-zA-Z ]/i.test(event.key)" maxlength="30">
                        <p id="name_check"></p>
                        <input class="form-input" type="email" id="email" name="Email" placeholder="Enter Email.."
                            required maxlength="30">
                        <p id="email_check"></p>
                        <input class="form-input" type="tel" id="phone" name="Phone" placeholder="Enter phone Number.."
                            required onkeypress="return /[()0-9]/i.test(event.key)" maxlength="10">
                        <p id="phone_check"></p>
                        <select class="form-select" id="service" name="Request_For" required>
                            <option value="default" selected disabled>Select Service Type..</option>
                            <option value="money-transfer">Money trasnfer</option>
                            <option value="recharge">Recharge</option>
                            <option value="aeps">AEPS</option>
                            <option value="atm">ATM</option>
                            <option value="bill">Bill Payments</option>
                            <option value="credit">Credit Card Bill</option>
                        </select>
                        <p id="service_check"></p>
                        <textarea class="form-input" id="message" name="Message" placeholder="Your Message.."
                            style="width:100%;height:100px" maxlength="150"></textarea>
                        <input class="btn-blue-brd" style="float: inline-end;font-weight: 500;" type="submit"
                            id="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Clients -->
    <div class="container">
        <ul class="client-row">
            <li><img class="swiper-clients-img" src="{{asset('assets/img/client3.svg')}}" alt="Clients Logo"></li>
            <li><img class="swiper-clients-img" src="{{asset('assets/img/client1.svg')}}" alt="Clients Logo"></li>
            <li><img class="swiper-clients-img" src="{{asset('assets/img/client2.svg')}}" alt="Clients Logo"></li>
            <li><img class="swiper-clients-img" src="{{asset('assets/img/client5.svg')}}" alt="Clients Logo"></li>
            <li><img class="swiper-clients-img" src="{{asset('assets/img/client4.svg')}}" alt="Clients Logo"></li>
            <li><img class="swiper-clients-img" src="{{asset('assets/img/client6.svg')}}" alt="Clients Logo"></li>
        </ul>
    </div>
    <!-- End Clients -->
</div>
<!-- End Contact -->

@endsection