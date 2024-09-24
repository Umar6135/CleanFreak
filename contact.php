<?php
$GLOBALS['title'] = "Contact Clean Freaks 405 for Your Cleaning Needs";
$GLOBALS['desc'] = "Get in touch with Clean Freaks 405! We’re here to answer your questions and provide tailored cleaning solutions for your home or business. Reach out today!";
$GLOBALS['keywords'] = "contact us, cleaning services, Clean Freaks 405, customer support, request a quote";
include('header.php'); ?>



<section class="contact-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h3><strong>Get A FREE</strong> Cleaning Quote</h3>
                <form class="form" action="form/php/smartprocess.php" id="job-formular" method="post" novalidate="novalidate">
                    <p>What type of service do you need? *</p>
                    <div class="flex-wrapper-radio">
                        <div class="full">
                            <input type="radio" name="type" value="Residential">
                            <label>Residential</label>
                        </div>
                        <div class="full">
                            <input type="radio" name="type" value="Commercial">
                            <label>Commercial</label>
                        </div>

                    </div>
                    <br>

                    <p>What type of business?</p>
                    <select name="CleaningType">
                        <option value="Residential Cleaning">Residential Cleaning</option>
                        <option value="Commercial Cleaning">Commercial Cleaning</option>
                        <option value="Window Cleaning">Window Cleaning</option>
                    </select>
                    <br>
                    <br>

                    <p>About you</p>
                    <div class="contact-about">
                        <div><input type="text" name="firstname" placeholder="First Name*"></div>
                        <div><input type="text" name="lastname" placeholder="Last Name*"></div>
                        <div><input type="text" name="phone" placeholder="Phone*"></div>
                        <div><input type="email" name="email" placeholder="Email*"></div>

                    </div>
                    <br>
                    <p>About the Facility</p>
                    <input type="text" name="Squarefootage" placeholder="Square footage*">
                    <br>
                    <br>

                    <div class="about-facality">
                        <div><input type="text" name="Address" placeholder="Address*"></div>
                        <div><input type="text" name="City" placeholder="City*"></div>
                        <div> <select name="state" id="">
                                <option value="Oklahoma City">
                                    Oklahoma City
                                </option>

                                <option value="Edmond">
                                    Edmond

                                </option>
                                <option value="Yukon">
                                    Yukon

                                </option>
                                <option value="Bethany">
                                    Bethany

                                </option>
                                <option value="Mustang">
                                    Mustang


                                </option>
                                <option value="Midwest City">
                                    Midwest City


                                </option>
                                <option value="Choctaw">
                                    Choctaw


                                </option>
                                <option value="Moore">
                                    Moore


                                </option>
                                <option value="Newcastle">
                                    Newcastle


                                </option>
                                <option value="Norman">
                                    Norman

                                </option>

                            </select></div>
                        <div><input type="text" name="PostelCode" placeholder="Postel Code**"></div>



                    </div>
                    <br>

                    <button type="submit" class="theme-btn">
                        Submit
                    </button>
                </form>
            </div>
            <div class="col-lg-6">
                <h2>Let us deliver the perfect cleaning solutions for your home or business!</h2>
            </div>
        </div>
    </div>
</section>


<?php include('footer.php'); ?>