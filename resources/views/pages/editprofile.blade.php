@extends('_layout')
@section('content')
<style>
    .tag-this { 
        border:1px solid #CCC; 
        background: #FFF; 
        padding:5px; 
        width:320px; 
        height:100px; 
        overflow-y: auto; 
        margin: 20px 20px 20px 0;
        border-radius: 2px;
        -webkit-border-radius: 2px;
        -moz-border-radius: 2px;
    }

    .tag-this .tag { 
        -moz-border-radius:2px; 
        -webkit-border-radius:2px; 
        border-radius: 2px; 
        display: block; 
        float: left; 
        padding: 5px; 
        text-decoration:none; 
        background: #3AAA55; 
        color: #FFF; 
        margin-right: 5px; 
        margin-bottom:5px;
        font-family: tahoma, sans-serif;
        font-size:13px; 
        max-width: 90%;
    }

    .tag-this .tag button { 
        font-weight: bold; 
        color: #FFF; 
        text-decoration:none; 
        font-size: 11px; 
        background: none; 
        border: none; 
        cursor: pointer; 
    } 

    .tag-this .tag span { 
        word-wrap: break-word;
    }

    .tag-this input { 
        padding: 6px; 
        width:80px;
        margin:0px; 
        font-family: tahoma, sans-serif; 
        font-size: 13px; 
        border:1px solid transparent;
        background: transparent;
        color: #000;
        margin-right:5px; 
        margin-bottom:5px; 
        outline-color: white;
    }

    .tag-this div { 
        display:block; 
        float: left; 
    }

    .tag-this .tag-this--clear { 
        clear: both;
        width: 100%; 
        height: 0px; 
    }

    .tag-this .tag-this--invalid {
        /*background: #DF3645; */
        border: 1px dashed #DF3645;
        outline: white;
        color: #DF3645; 
        border-radius: 5px;
        outline-color:#DF3645;
    }
</style>
<div id="content-block">
    <div class="container be-detail-container">
        <div class="row">
            <div class="col-xs-12 col-md-3 left-feild">
                <div class="be-vidget back-block">
                    <a href="{{route('profile')}}" class="btn full color-1 size-1 hover-1"><i class="fa fa-chevron-left"></i>back to profile</a>
                </div>
                <div class="be-vidget hidden-xs hidden-sm" id="scrollspy">
                    <h3 class="letf-menu-article">
                        Choose Category
                    </h3>
                    <div class="creative_filds_block">
                        <ul class="ul nav">
                            <li><a href="#basic-information">Basic Information</a></li>
                            <li><a href="#my-skills">My Skills</a></li>
                            <li><a href="#on-the-web">On The Web</a></li>
                            <li><a href="#about-me">About Me</a></li>
                            <li><a href="#edit-password">Edit Password</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-md-9 _editor-content_">
                <form method="post" action="{{route('editprofile')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="affix-block" id="basic-information">
                        <div class="be-large-post">
                            <div class="info-block style-2">
                                <div class="be-large-post-align"><h3 class="info-block-label">Basic Information</h3></div>
                            </div>
                            <div class="be-large-post-align">
                                <div class="be-change-ava">
                                    <a class="be-ava-user style-2" href="blog-detail-2.html">
                                        <img src="{{url("getImages/".$details['avatar'])}}" alt=""> 
                                    </a>
                                    <input type="file" name="avatar" class="btn color-4 size-2 hover-7">replace image</a>
                                </div>
                            </div>
                            <div class="be-large-post-align">
                                <div class="row">
                                    <div class="input-col col-xs-12 col-sm-6">
                                        <div class="form-group fg_icon focus-2">
                                            <div class="form-label">First Name</div>
                                            <?php
                                            //dd($details);
                                            ?>
                                            <input class="form-input" type="text" value="{{ $details['fname']}}" name="fname">
                                        </div>							
                                    </div>
                                    <div class="input-col col-xs-12 col-sm-6">
                                        <div class="form-group focus-2">
                                            <div class="form-label">Last Name</div>									
                                            <input class="form-input" type="text" value="{{ $details['lname']}}" name="lname">
                                        </div>								
                                    </div>
                                    <div class="input-col col-xs-12 col-sm-6">
                                        <div class="form-group focus-2">
                                            <div class="form-label">Occupation</div>									
                                            <input class="form-input" type="text" value="{{ $details['email']}}" name="email">
                                        </div>								
                                    </div>




                                    <div class="input-col col-xs-12 col-sm-6">
                                        <div class="form-group focus-2">
                                            <div class="form-label">Occupation</div>									
                                            <input class="form-input" type="text" value="{{ $profiles[0]->occupation}}" name="occupation">
                                        </div>								
                                    </div>


                                    <div class="input-col col-xs-12">
                                        <div class="form-group focus-2">
                                            <div class="form-label">Company</div>									
                                            <input class="form-input" type="text" placeholder="" name="company" value="{{$profiles[0]->company}}">
                                        </div>								
                                    </div>
                                    <div class="input-col col-xs-12 col-sm-6">
                                        <div class="form-label">Country</div>
                                        <div class="be-drop-down icon-none">

                                            <select name="country" class="be-custom-select">
                                                <option value="{{ $details['country']}}"> <span class="be-dropdown-content"> {{ $details['country']}} </span>
                                                </option>
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
                                    <div class="input-col col-xs-12 col-sm-6">
                                        <div class="form-group focus-2">
                                            <div class="form-label">City</div>									
                                            <input class="form-input" type="text" value="{{ $profiles[0]->city }}" name="city">
                                        </div>								
                                    </div>
                                    <div class="input-col col-xs-12">
                                        <div class="form-group focus-2">
                                            <div class="form-label">Website URL</div>									
                                            <input class="form-input" type="type" value="{{ $profiles[0]->website}}" name="website" >
                                        </div>								
                                    </div>	


                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="affix-block" id="my-skills">
                        <div class="be-large-post">
                            <div class="info-block style-2">
                                <div class="be-large-post-align"><h3 class="info-block-label">My Skills</h3></div>
                            </div>
                            <div class="be-large-post-align">
                                <div class="form-group focus-2">
                                    <div class="example" id="autocomplete">
                                        <span class="alert alert-info">Type and Press Enter to select a Tag </span>
                                        <input name="tags" id="tags" placeholder="" />





                                        <textarea type="text" class="hidden"  id="tags_builder" name="tags" ></textarea>





                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="affix-block" id="on-the-web">
                        <div class="be-large-post">
                            <div class="info-block style-2">
                                <div class="be-large-post-align"><h3 class="info-block-label">On The Web</h3></div>
                            </div>
                            <div class="be-large-post-align">
                                <div class="social-input form-group focus-2">
                                    <div class="s_icon">
                                        <div class="social-bars"><i class="fa fa-bars"></i></div>
                                        <div class="social-btn color-1" href="blog-detail-2.html"><i class="fa fa-facebook"></i></div>
                                    </div>
                                    <div class="s_input">
                                        <input class="form-input" name="facebook" type="url" value="{{ $profiles[0]->facebook}}">
                                    </div>
                                </div>
                                <div class="social-input form-group focus-2">
                                    <div class="s_icon">
                                        <div class="social-bars"><i class="fa fa-bars"></i></div>
                                        <div class="social-btn color-2" href="blog-detail-2.html"><i class="fa fa-twitter"></i></div>
                                    </div>
                                    <div class="s_input">
                                        <input class="form-input" type="url" name="twitter" value="{{ $profiles[0]->twitter}}">
                                    </div>
                                </div>
                                <div class="social-input form-group focus-2">
                                    <div class="s_icon">
                                        <div class="social-bars"><i class="fa fa-bars"></i></div>
                                        <div class="social-btn color-3" href="blog-detail-2.html"><i class="fa fa-google-plus"></i></div>
                                    </div>
                                    <div class="s_input">
                                        <input class="form-input" type="url" name="plus" value="{{ $profiles[0]->plus}}">
                                    </div>
                                </div>
                                <div class="social-input form-group focus-2">
                                    <div class="s_icon">
                                        <div class="social-bars"><i class="fa fa-bars"></i></div>
                                        <div class="social-btn color-4" href="blog-detail-2.html"><i class="fa fa-pinterest-p"></i></div>
                                    </div>
                                    <div class="s_input">
                                        <input class="form-input" type="url" name="pinterest" value="{{ $profiles[0]->pinterest}}">
                                    </div>
                                </div>
                                <div class="social-input form-group focus-2">
                                    <div class="s_icon">
                                        <div class="social-bars"><i class="fa fa-bars"></i></div>
                                        <div class="social-btn color-5" href="blog-detail-2.html"><i class="fa fa-instagram"></i></div>
                                    </div>
                                    <div class="s_input">
                                        <input class="form-input" type="url" name="instagram" value="{{ $profiles[0]->instagram}}">
                                        </                                                                                                                                                        div>
                                    </div>																													
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="affix-block" id="about-me">
                        <div class="be-large-post">
                            <div class="info-block style-2">
                                <div class="be-large-post-align"><h3 class="info-block-label">About Me</h3></div>
                            </div>
                            <div class="be-large-post-align">
                                <div class="row">
                                    <div class="input-col col-xs-12">
                                        <div class="form-group focus-2">
                                            <div class="form-label">About Me</div>									
                                            <input class="form-input" value="{{ $profiles[0]->about_me}}"  name="about_me" type="text" placeholder="Something about me">
                                        </div>								
                                    </div>
                                    <div class="input-col col-xs-12">
                                        <div class="form-group focus-2">
                                            <div class="form-label">Description</div>



                                            <textarea class="form-input" name="description"  placeholder="Describe your self">
                                                    {{ $profiles[0]->description}}
                                            </textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="input-col col-xs-12">
                                    <div class="form-group focus-2">
                                        <input class="btn color-1 size-2 hover-1 btn-right" type="submit" value="Update Details" >
                                    </div>								
                                </div>

                            </div>						
                        </div>
                    </div>



                </form>


                <form method="post" action="{{route('changepass')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="affix-block" id="edit-password">
                        <div class="be-large-post">
                            <div class="info-block style-2">
                                <div class="be-large-post-align"><h3 class="info-block-label">Password</h3></div>
                            </div>
                            <div class="be-large-post-align">


                                @if(Session::has('message'))
                                <div class="alert alert-info">
                                    {{session('message')}}
                                </div>
                                @endif   


                                <div class="row">
                                    <div class="input-col col-xs-12 col-sm-4">
                                        <div class="form-group focus-2">
                                            <div class="form-label">Old Password</div>									
                                            <input class="form-input" name="oldpassword" type="password" placeholder="">
                                        </div>								
                                    </div>
                                    <div class="input-col col-xs-12 col-sm-4">
                                        <div class="form-group focus-2">
                                            <div class="form-label">New Password</div>									
                                            <input class="form-input" name="newpassword" type="password" placeholder="">
                                        </div>								
                                    </div>
                                    <div class="input-col col-xs-12 col-sm-4">
                                        <div class="form-group focus-2">
                                            <div class="form-label">Repeat Password</div>									
                                            <input class="form-input" name="repeatpassword" type="password" placeholder="">
                                        </div>								
                                    </div>
                                    <div class="col-xs-12">
                                        <input type="submit" value="Change Password" class="btn color-1 size-2 hover-1 btn-right" />
                                    </div>																
                                </div>
                            </div>
                        </div>
                    </div>


                </form>






            </div>				
        </div>
    </div>
</div>
@endsection
