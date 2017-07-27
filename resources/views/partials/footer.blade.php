<!-- THE FOOTER -->
<!--<footer>

    <div class="footer-main" style="margin-top: 20px;">
        <div class="container-fluid custom-container">
            <div class="row">	
                <div class="col-md-3 col-xl-4">
                    <div class="footer-block">
                        <h1 class="footer-title">About Us</h1>
                        <p style=" text-align: justify; text-justify: inter-word;">Global Talent Lens Ltd.- GTL is a Kenyan for-profit corporation and talent development social networking service that operates via websites based in Nairobi, Kenya. GTL ‘s slogan ‘just focus on your talent’ is intended to help its users discover the untapped potential and opportunities that they could exploit through developing, refining and exploring their talents as professions thus redefining talents as income generators besides being special gifts and inborne abilities... <a href="{{url('about')}}">More</p>
                        <ul class="soc_buttons">
                            <li><a target="_blank" href="https://www.facebook.com/Global-Talent-Lens-Ltd-1707172062909119/"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="https://twitter.com/Gtalentlens"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://plus.google.com/u/3/112328224883318017186"><i class="fa fa-google-plus"></i></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/globaltalentlens/"><i class="fa fa-instagram"></i></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/in/global-talent-lens-62a519142/"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-xl-2">
                    <div class="footer-block">
                        <h1 class="footer-title">Useful Links</h1>
                        <div class="row footer-list-footer">
                            <div class="col-md-6">
                                <ul class="link-list">
                                    <li><a href="{{url('about')}}">About Us</a></li>
                                    <li><a href="{{url('about')}}">Help</a></li>
                                    <li><a href="{{url('about')}}">Contacts</a></li>
                                    <li><a href="{{url('about')}}">Jobs</a></li>
                                </ul></div>

                        </div>
                    </div>
                </div>				
                <div class="col-md-3 galerry">
                    <div class="footer-block">					
                        <h1 class="footer-title">Our Insights </h1>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-block">
                        <h1 class="footer-title">Subscribe On Our News</h1>
                        <form action="#subscribe" class="subscribe-form">
                            <input type="text" placeholder="Your Name" required>
                            <div class="submit-block">
                                <i class="fa fa-envelope-o"></i>
                                <input type="submit" value="">
                            </div>
                        </form>
                                                <div class="soc-activity">
                                                    <div class="soc_ico_triangle">
                                                        <i class="fa fa-twitter"></i>
                                                    </div>
                                                    <div class="message-soc">
                                                        <div class="date">16h ago</div>
                                                        <a href="blog-detail-2.html" class="account">@faq</a> vestibulum accumsan est <a href="blog-detail-2.html" class="heshtag">blog-detail-2.htmlmalesuada</a> sem auctor, eu aliquet nisi ornare leo sit amet varius egestas.
                                                    </div>
                                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container-fluid custom-container">
            <div class="col-md-12 footer-end clearfix">
                <div class="left">
                    <span class="copy">© {{date('Y')}}. All rights reserved. <span class="white"><a href="#"> GTL</a></span></span>
                    <span class="created">Created with LOVE by <span class="white"><a href="#"> GTL</a></span></span>
                </div>
                <div class="right">
                    <a class="btn color-7 size-2 hover-9" href="{{url('about')}}">About Us</a>
                    <a class="btn color-7 size-2 hover-9">Help</a>
                    <a class="btn color-7 size-2 hover-9">Privacy Policy</a>  
                </div>
            </div>			
        </div>
    </div>		
</footer>-->

<div class="be-fixed-filter"></div>

<div class="large-popup login">
    <div class="large-popup-fixed"></div>
    <div class="container large-popup-container">
        <div class="row">
            <div class="col-md-8 col-md-push-2 col-lg-6 col-lg-push-3  large-popup-content">
                <div class="row">
                    <div class="col-md-12">
                        <i class="fa fa-times close-button"></i>
                        <h5 class="large-popup-title">Log in</h5>
                    </div>
                    <form action="{{route("login")}}" method="post" class="popup-input-search">
                        {{csrf_field()}}
                        <div class="col-md-6 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input class="input-signtype" type="email" id='lemail' required="" name='email' placeholder="Your email">

                        </div>
                        <div class="col-md-6 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input class="input-signtype" type="password" id='lpassword' required="" name='password' placeholder="Password">
                        </div>
                        <div class="col-md-12">
                            <div class="alert alert-danger" style='color:red;'>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong  <i class="fa fa-exclamation-circle"></i>  {{$errors->first('email') }}</strong>
                                </span>
                                @endif

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>  <i class="fa fa-exclamation-circle"></i> {{ $errors->first('password') }}</strong>
                                </span>
                                @endif

                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="be-checkbox">
                                <label class="check-box">
                                    <input class="checkbox-input" type="checkbox" name="remember" value=""> <span class="check-box-sign"></span>
                                </label>
                                <span class="large-popup-text">
                                    Stay signed in
                                </span>
                            </div>

                            <a href="blog-detail-2.html" class="link-large-popup">Forgot password?</a>
                        </div>
                        <div class="col-xs-6 for-signin">
                            <input type="submit" class="be-popup-sign-button" value="SIGN IN">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="large-popup register">
    <div class="large-popup-fixed"></div>
    <div class="container large-popup-container">
        <div class="row">
            <div class="col-md-10 col-md-push-1 col-lg-8 col-lg-push-2 large-popup-content">
                <div class="row">
                    <div class="col-md-12">
                        <i class="fa fa-times close-button"></i>
                        <h5 class="large-popup-title">Register</h5>
                    </div>
                    <form action="{{route('register')}}"  method="post" class="popup-input-search">

                        {{csrf_field()}}
                        <div class="col-md-6">
                            <input class="input-signtype" name="fname" type="text" required="" placeholder="First Name">
                        </div>
                        <div class="col-md-6">
                            <input class="input-signtype" name="lname" type="text" required="" placeholder="Last Name">
                        </div>
                        <div class="col-md-6">
                            <div class="be-custom-select-block">

                                <select name="country" class="be-custom-select">
                                    <option value="">Country...</option>
                                    <option value="Afganistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bonaire">Bonaire</option>
                                    <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                    <option value="Brunei">Brunei</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Canary Islands">Canary Islands</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Channel Islands">Channel Islands</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos Island">Cocos Island</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote DIvoire">Cote D'Ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Curaco">Curacao</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="East Timor">East Timor</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands">Falkland Islands</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Ter">French Southern Ter</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Great Britain">Great Britain</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Hawaii">Hawaii</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea North">Korea North</option>
                                    <option value="Korea Sout">Korea South</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Laos">Laos</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">Macedonia</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Midway Islands">Midway Islands</option>
                                    <option value="Moldova">Moldova</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Nambia">Nambia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherland Antilles">Netherland Antilles</option>
                                    <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                    <option value="Nevis">Nevis</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau Island">Palau Island</option>
                                    <option value="Palestine">Palestine</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Phillipines">Philippines</option>
                                    <option value="Pitcairn Island">Pitcairn Island</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Republic of Montenegro">Republic of Montenegro</option>
                                    <option value="Republic of Serbia">Republic of Serbia</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">Russia</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="St Barthelemy">St Barthelemy</option>
                                    <option value="St Eustatius">St Eustatius</option>
                                    <option value="St Helena">St Helena</option>
                                    <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                    <option value="St Lucia">St Lucia</option>
                                    <option value="St Maarten">St Maarten</option>
                                    <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                    <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                    <option value="Saipan">Saipan</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="Samoa American">Samoa American</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syria</option>
                                    <option value="Tahiti">Tahiti</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Erimates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States of America">United States of America</option>
                                    <option value="Uraguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Vatican City State">Vatican City State</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                    <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                    <option value="Wake Island">Wake Island</option>
                                    <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zaire">Zaire</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input class="input-signtype" name="email" type="email" required="" placeholder="Email">
                        </div>
                        <div class="col-md-6">
                            <input class="input-signtype" name="password" type="password" required="" placeholder="Password">
                        </div>
                        <div class="col-md-6">
                            <input class="input-signtype" type="password" required="" placeholder="Repeat Password">
                        </div>
                        <div class="col-md-12 be-date-block">
                            <span class="large-popup-text">
                                Date of birth
                            </span>
                            <div class="be-custom-select-block mounth">
                                <select class="be-custom-select" name="month">
                                    <option value="" disabled selected>
                                        Month
                                    </option>
                                    <option value="01">January</option>	
                                    <option value="02">February</option>	
                                    <option value="03">March</option>	
                                    <option value="04">April</option>	
                                    <option value="05">May</option>	
                                    <option value="06">June</option>	
                                    <option value="07">July</option>	
                                    <option value="08">August</option>	
                                    <option value="09">September</option>	
                                    <option value="10">October</option>	
                                    <option value="11">November</option>	
                                    <option value="12">December</option>
                                </select>
                            </div>
                            <div class="be-custom-select-block">
                                <select class="be-custom-select" name="day">
                                    <option value="" disabled selected>
                                        Day
                                    </option>
                                    <option value="01">1</option>
                                    <option value="02">2</option>
                                    <option value="03">3</option>
                                    <option value="04">4</option>
                                    <option value="05">5</option>
                                    <option value="06">6</option>
                                    <option value="07">7</option>
                                    <option value="08">8</option>
                                    <option value="09">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                            </div>
                            <div class="be-custom-select-block">
                                <select class="be-custom-select" name="year">
                                    <option value="" disabled selected>
                                        Year
                                    </option>

                                    <?php
                                    $s = 1990;
                                    $c = date('Y') - 3;
                                    ?>
                                    @for($i=$s;$i<$c;$i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                    @endfor

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="be-checkbox">
                                <label class="check-box">
                                    <input class="checkbox-input" type="checkbox" required="" value="" > <span class="check-box-sign"></span>
                                </label>
                                <span class="large-popup-text">
                                    I have read and agree to the <a class="be-popup-terms" href="blog-detail-2.html">Terms of Use</a> and <a class="be-popup-terms" href="blog-detail-2.html">Privacy Policy</a>.
                                </span>
                            </div>

                        </div>
                        <div class="col-md-6 for-signin">
                            <input type="submit" class="be-popup-sign-button" value="REGISTER">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    #output{
        padding: 5px;
        font-size: 12px;
    }

    /* prograss bar */
    .progressbox {
        border: 1px solid #CAF2FF;
        padding: 1px; 
        position:relative;
        width:400px;
        border-radius: 3px;
        margin: 10px;
        display:none;
        text-align:left;
    }
    .progressbar {
        height:20px;
        border-radius: 3px;
        background-color: #CAF2FF;
        width:1%;
    }
    .statustxt {
        top:3px;
        left:50%;
        position:absolute;
        display:inline-block;
        color: #FFFFFF;
    }
</style>

<!-- Modal -->
<div id="postModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Post Photo Story</h4>
            </div>
            <div class="modal-body">

                <form id="MyUploadForm3" method="post" action="{{url('simpleupload')}} " enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <div class="input-group">
                            <input type="file" id="FileInput"  name="FileInput" class="form-control btn btn-primary btn-lg" style="height:50px !important;"/>
                            <p id="output"></p>
                            <p id="img"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <textarea  name="status" class="form-control" style="width: 500px;" placeholder="Add Caption"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="submit" id="submit-btn"  class="form-control btn btn-primary btn-md" value="Post Story" />
                        </div>
                    </div>

                </form>
            </div>

        </div>

    </div>
</div>


<div id="postFilm" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Post Video Story</h4>
<!--                <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
                <h3 id="status"></h3>
                <p id="loaded_n_total"></p>-->
            </div>
            <div class="modal-body">

                <form id="MyUploadForm4" method="post" action="{{url('uvideo')}} " enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <div class="input-group">
                            <input type="file" id="VideoInput"  name="VideoInput" class="form-control btn btn-primary btn-lg" style="height:50px !important;"/>
                            <p id="output1"></p>
                            <p id="img1"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <textarea  name="vstatus" class="form-control" style="width: 500px;" placeholder="Add Video Caption"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <button type="submit" class="btn btn-primary btn-lg" id="submit-btn" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Post Story">Post Story</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>

    </div>
</div>


<!-- SCRIPTS	 -->

<script src="{{url('public/script/bootstrap.min.js')}}"></script>		
<script src="{{url('public/js/imgLiquid-min.js')}}"></script>		
<script src="{{url('public/script/idangerous.swiper.min.js')}}"></script>
<script src="{{url('public/script/isotope.pkgd.min.js')}}"></script>
<script src="{{url('public/script/jquery.viewportchecker.min.js')}}"></script>		
<script src="{{url('public/script/global.js')}}"></script>
<script src="{{url('public/js/jquery.tagthis.min.js')}}"></script> 
<script src="{{url('public/js/jquery.form.js')}}"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
<script>
$(function () {
    var fruitList = ["SS", "S", "LW", "RW", "CDM", "CB", 'RB', "LB"]

    $('#tags').tagThis({
        autocompleteSource: fruitList,
        noDuplicates: true
    });

    $(document).on('focusout', '.tag-this', function () {
        var text = [];
        $('span.tag', this).each(function () {
            text.push($(this).text().slice(0, -1));
        });

        $('#tags_builder').val(text);

    });

    $('#FileInput').change(function () {
        if (this.files.length > 0) {

            $.each(this.files, function (i, v) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    var img = new Image();
                    img.src = e.target.result;

                    img.onload = function () {

                        // CREATE A CANVAS ELEMENT AND ASSIGN THE IMAGES TO IT.
                        var canvas = document.createElement("canvas");

                        var value = 20;

                        // RESIZE THE IMAGES ONE BY ONE.
                        img.width = (img.width * value) / 100
                        img.height = (img.height * value) / 100

                        var ctx = canvas.getContext("2d");
                        ctx.clearRect(0, 0, canvas.width, canvas.height);
                        canvas.width = img.width;
                        canvas.height = img.height;
                        ctx.drawImage(img, 0, 0, img.width, img.height);
                        $('#img').empty();
                        $('#img').append(img);      // SHOW THE IMAGES OF THE BROWSER.


                    }
                };
                reader.readAsDataURL(this);
            });
        }
    });


    $('#VideoInput').change(function () {
        if (this.files.length > 0) {

            $.each(this.files, function (i, v) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    var img = new Image();
                    img.src = e.target.result;

                    img.onload = function () {

                        // CREATE A CANVAS ELEMENT AND ASSIGN THE IMAGES TO IT.
                        var canvas = document.createElement("canvas");

                        var value = 20;

                        // RESIZE THE IMAGES ONE BY ONE.
                        img.width = (img.width * value) / 100
                        img.height = (img.height * value) / 100

                        var ctx = canvas.getContext("2d");
                        ctx.clearRect(0, 0, canvas.width, canvas.height);
                        canvas.width = img.width;
                        canvas.height = img.height;
                        ctx.drawImage(img, 0, 0, img.width, img.height);
                        $('#img1').empty();
                        $('#img1').append(img);      // SHOW THE IMAGES OF THE BROWSER.


                    }
                };
                reader.readAsDataURL(this);
            });
        }
    });



    var options = {
        target: '#output', // target element(s) to be updated with server response 
        beforeSubmit: beforeSubmit, // pre-submit callback 
        success: afterSuccess, // post-submit callback 
        uploadProgress: OnProgress, //upload progress callback 
        resetForm: true        // reset the form after successful submit 
    };

    $('#MyUploadForm3').submit(function () {
        $(this).ajaxSubmit(options);
        // always return false to prevent standard browser submit and page navigation 
        return false;
    });


//function after succesful file upload (when server response)
    function afterSuccess()
    {
        $('#submit-btn').prop('disabled', false); //hide submit button
        $('#submit-btn').prop('text', 'Post Story'); //hide submit button
        $('#loading-img').hide(); //hide submit button
        //  $('#progressbox').delay(1000).fadeOut(); //hide progress bar

    }

//function to check file size before uploading.
    function beforeSubmit() {
        //check whether browser fully supports all File API
        if (window.File && window.FileReader && window.FileList && window.Blob)
        {

            if (!$('#FileInput').val()) //check empty input filed
            {
                $("#output").html("You have not selected any file");
                return false
            }

            var fsize = $('#FileInput')[0].files[0].size; //get file size
            var ftype = $('#FileInput')[0].files[0].type; // get file type


            //allow file types 
            switch (ftype)
            {
                case 'image/png':
                case 'image/gif':
                case 'image/jpeg':
                case 'image/jpg':
                case 'image/pjpeg':
               
               
                    break;
                default:
                    $("#output").html("<b>" + ftype + "</b> Unsupported file type!");
                    return false
            }

            //Allowed file size is less than 5 MB (1048576)
            if (fsize > 105242880)
            {
                $("#output").html("<b>" + bytesToSize(fsize) + "</b> Too big file! <br />File is too big, it should be less than 30 MB.");
                return false
            }

            $('#submit-btn').prop('text', 'Posting Please Wait...'); //hide submit button
            $('#submit-btn').prop('disabled', true); //hide submit button
            $('#loading-img').show(); //hide submit button
            $("#output").html("");
        } else
        {
            //Output error to older unsupported browsers that doesn't support HTML5 File API
            $("#output").html("Please upgrade your browser, because your current browser lacks some new features we need!");
            return false;
        }
    }

//progress bar function
    function OnProgress(event, position, total, percentComplete)
    {
        //Progress bar
        $('.progressbox').show();
        $('.progressbar').width(percentComplete + '%') //update progressbar percent complete
        $('.statustxt').html(percentComplete + '%'); //update status text
        if (percentComplete > 50)
        {
            $('#statustxt').css('color', '#000'); //change status text to white after 50%
        }
    }

//function to format bites bit.ly/19yoIPO
    function bytesToSize(bytes) {
        var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
        if (bytes == 0)
            return '0 Bytes';
        var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
        return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
    }


    var options1 = {
        target: '#output1', // target element(s) to be updated with server response 
        beforeSubmit: beforeSubmit1, // pre-submit callback 
        success: afterSuccess1, // post-submit callback 
        uploadProgress: OnProgress, //upload progress callback 
        resetForm: true        // reset the form after successful submit 
    };

    $('#MyUploadForm4').submit(function () {
        $('#submit-btn-v').prop('text', 'Posting Please Wait...'); //hide submit button
        $('#submit-btn-v').prop('disabled', true); //hide submit button
       // beforeSubmit1();
         $(this).ajaxSubmit(options1);
        // always return false to prevent standard browser submit and page navigation 
        return false;
    });


//function after succesful file upload (when server response)
    function afterSuccess1()
    {
        $('#submit-btn-v').prop('text', 'Post Video Story'); //hide submit button
        $('#submit-btn-v').prop('disabled', true); //hide submit button
        $('#postFilm').modal('hide');
        $('#loading-img').hide(); //hide submit button
        //  $('#progressbox').delay(1000).fadeOut(); //hide progress bar

    }

//function to check file size before uploading.
    function beforeSubmit1() {
        //check whether browser fully supports all File API
        if (window.File && window.FileReader && window.FileList && window.Blob)
        {

            if (!$('#VideoInput').val()) //check empty input filed
            {
                $("#output1").html("You have not selected any file");
                return false
            }

            var fsize = $('#VideoInput')[0].files[0].size; //get file size
            var ftype = $('#VideoInput')[0].files[0].type; // get file type


            //allow file types 
            switch (ftype)
            {
                case 'video/mp4':
                case 'video/flv':
                case 'video/wmv':
                case 'video/mov':
                case 'video/3gp':
                case 'video/ogg':
                case 'video/avi':
                case 'video/amv':
                case 'video/mpg':
                case 'video/mpeg':
                case 'video/m4v':
                case 'video/MKV':
                    break;
                default:
                    $("#output1").html("<b>" + ftype + "</b> Unsupported file type!");
                    return false
            }

            //Allowed file size is less than 5 MB (1048576)
            if (fsize > 40242880)
            {
                $("#output1").html("<b>" + bytesToSize(fsize) + "</b> Too big file! <br />File is too big, it should be less than 30 MB.");
                return false
            }

            /* var file = _("VideoInput").files[0];
             var status = $("vstatus").val();
             // alert(file.name+" | "+file.size+" | "+file.type);
             var formdata = new FormData();
             formdata.append("VideoInput", file);
             formdata.append("status", status);
             formdata.append("_token", "{{csrf_token()}}");
             var ajax = new XMLHttpRequest();
             ajax.upload.addEventListener("progress", progressHandler, false);
             ajax.addEventListener("load", completeHandler, false);
             ajax.addEventListener("error", errorHandler, false);
             ajax.addEventListener("abort", abortHandler, false);
             ajax.open("POST", "{{url('uvideo')}}");
             ajax.send(formdata);*/

            $('#submit-btn-v').prop('text', 'Posting Please Wait...'); //hide submit button
            $('#submit-btn-v').prop('disabled', true); //hide submit button
            $('#loading-img').show(); //hide submit button
            $("#output1").html("");
        } else
        {
            //Output error to older unsupported browsers that doesn't support HTML5 File API
            $("#output1").html("Please upgrade your browser, because your current browser lacks some new features we need!");
            return false;
        }
    }

    function _(el) {
        return document.getElementById(el);
    }

    function progressHandler(event) {
        _("loaded_n_total").innerHTML = "Uploaded " + event.loaded + " bytes of " + event.total;
        var percent = (event.loaded / event.total) * 100;
        _("progressBar").value = Math.round(percent);
        _("status").innerHTML = Math.round(percent) + "% uploaded... please wait";
    }
    function completeHandler(event) {
        _("status").innerHTML = event.target.responseText;
        _("progressBar").value = 0;
    }
    function errorHandler(event) {
        _("status").innerHTML = "Upload Failed";
    }
    function abortHandler(event) {
        _("status").innerHTML = "Upload Aborted";
    }

});

</script>



</body>
</html>