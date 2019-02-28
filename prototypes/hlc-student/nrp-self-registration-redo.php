<!DOCTYPE html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>HealthStream: Register for Account</title>
    <link rel="stylesheet" type="text/css" href="/nrp-assets/content/styles/healthstream.bootstrap.css?cache=1480457232">
    <link rel="stylesheet" type="text/css" href="/nrp-assets/content/styles/healthstream.goals.stepper.css?cache=1480457232"  />
    <link rel="stylesheet" type="text/css" href="/nrp-assets/content/fonts/font-awesome.min.css?cache=1480457232"/>
    <link rel="stylesheet" type="text/css" href="/nrp-assets/content/styles/style.css?cache=1480457232">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css"/> -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/> -->
    <!-- <link rel="stylesheet" href="https://rawgit.com/Kinark/Materialize-stepper/master/materialize-stepper.min.css"/> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css"/> -->
    <style>
    .btn, .btn-large {
      background-color: #2196F3;
    }

    button:focus {
       outline: none;
       background-color: #2196F3;
    }

    .btn:hover, .btn-large:hover {
       background-color: #64b5f6;
    }
</style>
</head>

<body>
   <!--
   Materializecss Stepper v1.1 - Igor Marcossi
   https://github.com/Kinark/Materialize-stepper
   -->
   <div class="section grey lighten-5">
      <div class="container">
         <div class="row">
            <div class="col l6 m10 s12 offset-l3 offset-m1">
               <h3 class="light center-align blue-text">Sign up form</h3>
               <div class="card">
                  <div class="card-content">

                     <ul data-method="GET" class="stepper">
                        <li class="step active">
                           <div class="step-title waves-effect waves-dark">E-mail</div>
                           <div class="step-content">
                              <div class="row">
                                 <div class="form-group col-lg-8">
                                     <label class="control-label">Your personal email
                                         <small><div>This will be your User ID and HealthStreamID</div></small></label>
                                     <input type="text" class="form-control" name="email" id="email" placeholder="Personal Email Address">
                                 </div>
                             </div>
                              <div class="row">
                                  <div class="form-group col-lg-6">
                                      <label class="control-label">Set a password</label>
                                      <input type="text" id="password" name="password" class="form-control" required placeholder="Password">

                                  </div>
                              </div>
                              <div class="row">
                                  <div class="form-group col-lg-6">
                                      <label class="control-label">Confirm your password</label>
                                      <input type="text" id="password_confirm" name="password_confirm" class="form-control" placeholder="Confirm Password">

                                  </div>
                              </div>
                              <div class="row">
                                  <div class="form-group col-lg-8">
                                      <label class="control-label">Password Reminder
                                          <small><div>A short phrase to help you remember your password.</div></small></label>
                                      <input type="text" class="form-control" placeholder="Password Reminder">

                                  </div>
                              </div>
                              <div class="step-actions">
                                 <button class="waves-effect waves-dark btn next-step" >Continue</button>
                              </div>
                           </div>
                        </li>
                        <li class="step">
                           <div class="step-title waves-effect waves-dark">Step 2</div>
                           <div class="step-content">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label class="control-label">Select a Role</label>
                                    <table class="table table-condensed  ">
                                        <tbody>
                                            <tr>
                                                <td>
                                               <div class="radio c-radio mt0 mb0">
                                                   <label>
                                                       <input type="radio" name="a" value="option2" checked="" >
                                                       <span class="fa fa-circle"></span>
                                                       I'm a Student
                                                   </label>
                                               </div>
                                          </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <div class="radio c-radio mt0 mb0">
                                                    <label>
                                                        <input type="radio" name="a" value="option2" checked="">
                                                        <span class="fa fa-circle"></span>
                                                        I am an Instructor
                                                    </label>
                                                </div>
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="radio c-radio mt0 mb0">
                                                        <label>
                                                            <input type="radio" name="a" value="option2" checked="">
                                                            <span class="fa fa-circle"></span>
                                                             I am training to be an Instrutor
                                                        </label>
                                                    </div>
                                                 </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                              <div class="row">
                                  <div class="form-group col-lg-6">
                                      <label class="control-label">First Name</label>
                                      <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name">
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="form-group col-lg-6">
                                      <label class="control-label">Middle Name</label>
                                      <input type="text" class="form-control" placeholder="Middle Name">
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="form-group col-lg-6 ">
                                      <label class="control-label">Last Name</label>
                                      <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name">
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="form-group col-lg-12">
                                      <label class="control-label">Alternate Email Address <small class="small-txt" style=""><a href="#" id="whatthis" data-toggle="tooltip" title="Words TBD">Why do we need this?</a></small></label>
                                      <div class="row">
                                          <div class="col-lg-8">
                                              <input type="text" id="altemail" name="altemail" class="form-control " placeholder="Alternate Email Address">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="form-group col-lg-12">
                                      <label class="control-label">Department</label>
                                      <div class="row">
                                          <div class="col-lg-8">
                                              <select class="form-control">
                                                  <option>Select a Department</option>
                                                  <option value="fea98359-e87f-e011-80a1-001517135401">1-EMTs</option>
                                                  <option value="c517ab65-e87f-e011-80a1-001517135401">2-Nurses</option>
                                                  <option value="0765a36b-e87f-e011-80a1-001517135401">3-Physicians</option>
                                                  <option value="3b62cb71-e87f-e011-80a1-001517135401">4-Respiratory Therapists</option>
                                                  <option value="9d46dcc9-3385-df11-93f1-00188b39eb5c">5-Other</option>
                                                  <option value="b4e45059-d9d9-11de-b520-0015171c5bb3">6-Unknown</option>
                                                  <option value="f9566824-9d51-e111-9dc1-001517135351">7-Gurgaon</option>
                                              </select>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="row" >
                                  <div class="form-group col-lg-6">
                                      <label class="control-label">Time Zone</label>
                                      <select class="form-control">
                                          <option>Eastern Time
                                          </option>
                                      </select>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="form-group col-lg-6">
                                      <label class="control-label">Preferred Language</label>
                                      <select class="form-control">
                                          <option>English
                                          </option>
                                      </select>
                                  </div>
                              </div>
                              <div class="step-actions">
                                 <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
                                 <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
                              </div>
                           </div>
                        </li>
                        <li class="step">
                           <div class="step-title waves-effect waves-dark">Callback</div>
                           <div class="step-content">
                            <div class="alert alert-info">
                                <strong>Optional.</strong> Adding a license will allow for you to obtain CE Credits.
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label class="control-label">Discipline</label>
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <select class="form-control">
                                                <option>Select a Discipline</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label class="control-label">Country</label>
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <select class="form-control" name="CountryId">
                                                <option value="">Select a Country</option>
                                                <option value="83">Afghanistan</option>
                                                <option value="91">Aland Island</option>
                                                <option value="85">Albania</option>
                                                <option value="122">Algeria</option>
                                                <option value="89">American Samoa</option>
                                                <option value="82">Andorra</option>
                                                <option value="87">Angola</option>
                                                <option value="84">Anguilla</option>
                                                <option value="88">Antarctica</option>
                                                <option value="251">Antigua and Barbuda</option>
                                                <option value="6">Argentina</option>
                                                <option value="86">Armenia</option>
                                                <option value="90">Aruba</option>
                                                <option value="5">Australia</option>
                                                <option value="7">Austria</option>
                                                <option value="92">Azerbaijan</option>
                                                <option value="103">Bahamas</option>
                                                <option value="252">Bahrain</option>
                                                <option value="94">Bangladesh</option>
                                                <option value="8">Barbados</option>
                                                <option value="107">Belarus</option>
                                                <option value="9">Belgium</option>
                                                <option value="108">Belize</option>
                                                <option value="98">Benin</option>
                                                <option value="77">Bermuda</option>
                                                <option value="104">Bhutan</option>
                                                <option value="253">Bolivia</option>
                                                <option value="102">Bonaire, Sint Eustatius And Saba</option>
                                                <option value="93">Bosnia And Herzegovina</option>
                                                <option value="106">Botswana</option>
                                                <option value="105">Bouvet Island</option>
                                                <option value="10">Brazil</option>
                                                <option value="150">British Indian Ocean Territory</option>
                                                <option value="100">Brunei Darussalam</option>
                                                <option value="96">Bulgaria</option>
                                                <option value="95">Burkina Faso</option>
                                                <option value="97">Burundi</option>
                                                <option value="156">Cambodia</option>
                                                <option value="115">Cameroon</option>
                                                <option value="2">Canada</option>
                                                <option value="117">Cape Verde</option>
                                                <option value="161">Cayman Islands</option>
                                                <option value="111">Central African Republic</option>
                                                <option value="225">Chad</option>
                                                <option value="11">Chile</option>
                                                <option value="12">China</option>
                                                <option value="119">Christmas Island</option>
                                                <option value="109">Cocos (Keeling) Islands</option>
                                                <option value="13">Colombia</option>
                                                <option value="158">Comoros</option>
                                                <option value="112">Congo</option>
                                                <option value="110">Congo, The Democratic Republic Of The</option>
                                                <option value="114">Cook Islands</option>
                                                <option value="76">Costa Rica</option>
                                                <option value="113">Cote D'Ivoire</option>
                                                <option value="14">Croatia</option>
                                                <option value="116">Cuba</option>
                                                <option value="118">Curacao</option>
                                                <option value="15">Cyprus</option>
                                                <option value="16">Czech Republic</option>
                                                <option value="17">Denmark</option>
                                                <option value="120">Djibouti</option>
                                                <option value="121">Dominica</option>
                                                <option value="78">Dominican Republic</option>
                                                <option value="18">Ecuador</option>
                                                <option value="19">Egypt</option>
                                                <option value="220">El Salvador</option>
                                                <option value="140">Equatorial Guinea</option>
                                                <option value="124">Eritrea</option>
                                                <option value="20">Estonia</option>
                                                <option value="125">Ethiopia</option>
                                                <option value="127">Falkland Islands (Malvinas)</option>
                                                <option value="21">Faroe Islands</option>
                                                <option value="126">Fiji</option>
                                                <option value="22">Finland</option>
                                                <option value="23">France</option>
                                                <option value="132">French Guiana</option>
                                                <option value="197">French Polynesia</option>
                                                <option value="226">French Southern Territories</option>
                                                <option value="129">Gabon</option>
                                                <option value="137">Gambia</option>
                                                <option value="131">Georgia</option>
                                                <option value="24">Germany</option>
                                                <option value="134">Ghana</option>
                                                <option value="135">Gibraltar</option>
                                                <option value="25">Greece</option>
                                                <option value="136">Greenland</option>
                                                <option value="130">Grenada</option>
                                                <option value="139">Guadeloupe</option>
                                                <option value="143">Guam</option>
                                                <option value="142">Guatemala</option>
                                                <option value="133">Guernsey</option>
                                                <option value="138">Guinea</option>
                                                <option value="144">Guinea-Bissau</option>
                                                <option value="145">Guyana</option>
                                                <option value="147">Haiti</option>
                                                <option value="146">Heard Island And Mcdonald Islands</option>
                                                <option value="239">Holy See (Vatican City State)</option>
                                                <option value="75">Honduras</option>
                                                <option value="26">Hong Kong</option>
                                                <option value="27">Hungary</option>
                                                <option value="28">Iceland</option>
                                                <option value="29">India</option>
                                                <option value="148">Indonesia</option>
                                                <option value="152">Iran, Islamic Republic Of</option>
                                                <option value="151">Iraq</option>
                                                <option value="30">Ireland</option>
                                                <option value="149">Isle Of Man</option>
                                                <option value="31">Israel</option>
                                                <option value="32">Italy</option>
                                                <option value="33">Jamaica</option>
                                                <option value="34">Japan</option>
                                                <option value="153">Jersey</option>
                                                <option value="35">Jordan</option>
                                                <option value="36">Kazakhstan</option>
                                                <option value="154">Kenya</option>
                                                <option value="157">Kiribati</option>
                                                <option value="159">Korea, Democratic People's Republic Of</option>
                                                <option value="37">Korea, Republic of</option>
                                                <option value="160">Kuwait</option>
                                                <option value="155">Kyrgyzstan</option>
                                                <option value="162">Lao People's Democratic Republic</option>
                                                <option value="38">Latvia</option>
                                                <option value="39">Lebanon</option>
                                                <option value="167">Lesotho</option>
                                                <option value="166">Liberia</option>
                                                <option value="40">Libyan Arab Jamahiriya</option>
                                                <option value="164">Liechtenstein</option>
                                                <option value="41">Lithuania</option>
                                                <option value="168">Luxembourg</option>
                                                <option value="178">Macao</option>
                                                <option value="175">Macedonia, The Former Yugoslav Republic Of</option>
                                                <option value="173">Madagascar</option>
                                                <option value="42">Malawi</option>
                                                <option value="43">Malaysia</option>
                                                <option value="185">Maldives</option>
                                                <option value="176">Mali</option>
                                                <option value="183">Malta</option>
                                                <option value="174">Marshall Islands</option>
                                                <option value="180">Martinique</option>
                                                <option value="181">Mauritania</option>
                                                <option value="184">Mauritius</option>
                                                <option value="248">Mayotte</option>
                                                <option value="3">Mexico</option>
                                                <option value="128">Micronesia, Federated States Of</option>
                                                <option value="170">Moldova, Republic Of</option>
                                                <option value="169">Monaco</option>
                                                <option value="44">Mongolia</option>
                                                <option value="182">Montserrat</option>
                                                <option value="45">Morocco</option>
                                                <option value="186">Mozambique</option>
                                                <option value="177">Myanmar</option>
                                                <option value="187">Namibia</option>
                                                <option value="195">Nauru</option>
                                                <option value="194">Nepal</option>
                                                <option value="188">New Caledonia</option>
                                                <option value="46">New Zealand</option>
                                                <option value="192">Nicaragua</option>
                                                <option value="189">Niger</option>
                                                <option value="191">Nigeria</option>
                                                <option value="196">Niue</option>
                                                <option value="190">Norfolk Island</option>
                                                <option value="179">Northern Mariana Islands</option>
                                                <option value="47">Norway</option>
                                                <option value="48">Oman</option>
                                                <option value="200">Pakistan</option>
                                                <option value="204">Palau</option>
                                                <option value="203">Palestinian Territory, Occupied</option>
                                                <option value="49">Panama</option>
                                                <option value="198">Papua New Guinea</option>
                                                <option value="205">Paraguay</option>
                                                <option value="50">Peru</option>
                                                <option value="199">Philippines</option>
                                                <option value="202">Pitcairn</option>
                                                <option value="51">Poland</option>
                                                <option value="52">Portugal</option>
                                                <option value="53">Puerto Rico</option>
                                                <option value="54">Qatar</option>
                                                <option value="206">Reunion</option>
                                                <option value="55">Romania</option>
                                                <option value="56">Russian Federation</option>
                                                <option value="207">Rwanda</option>
                                                <option value="99">Saint Barthelemy</option>
                                                <option value="211">Saint Helena</option>
                                                <option value="80">Saint Kitts And Nevis</option>
                                                <option value="163">Saint Lucia</option>
                                                <option value="172">Saint Martin (French Part)</option>
                                                <option value="201">Saint Pierre And Miquelon</option>
                                                <option value="240">Saint Vincent And The Grenadines</option>
                                                <option value="247">Samoa</option>
                                                <option value="214">San Marino</option>
                                                <option value="219">Sao Tome And Principe</option>
                                                <option value="57">Saudi Arabia</option>
                                                <option value="215">Senegal</option>
                                                <option value="58">Serbia</option>
                                                <option value="209">Seychelles</option>
                                                <option value="213">Sierra Leone</option>
                                                <option value="59">Singapore</option>
                                                <option value="221">Sint Maarten (Dutch Part)</option>
                                                <option value="60">Slovakia</option>
                                                <option value="61">Slovenia</option>
                                                <option value="208">Solomon Islands</option>
                                                <option value="216">Somalia</option>
                                                <option value="62">South Africa</option>
                                                <option value="141">South Georgia And The South Sandwich Islands</option>
                                                <option value="218">South Sudan</option>
                                                <option value="63">Spain</option>
                                                <option value="165">Sri Lanka</option>
                                                <option value="210">Sudan</option>
                                                <option value="217">Suriname</option>
                                                <option value="212">Svalbard And Jan Mayen</option>
                                                <option value="223">Swaziland</option>
                                                <option value="65">Sweden</option>
                                                <option value="66">Switzerland</option>
                                                <option value="222">Syrian Arab Republic</option>
                                                <option value="67">Taiwan</option>
                                                <option value="228">Tajikistan</option>
                                                <option value="234">Tanzania, United Republic Of</option>
                                                <option value="68">Thailand</option>
                                                <option value="69">The Netherlands</option>
                                                <option value="230">Timor-Leste</option>
                                                <option value="227">Togo</option>
                                                <option value="229">Tokelau</option>
                                                <option value="232">Tonga</option>
                                                <option value="70">Trinidad and Tobago</option>
                                                <option value="231">Tunisia</option>
                                                <option value="71">Turkemenistan</option>
                                                <option value="72">Turkey</option>
                                                <option value="224">Turks And Caicos Islands</option>
                                                <option value="233">Tuvalu</option>
                                                <option value="235">Uganda</option>
                                                <option value="81">Ukraine</option>
                                                <option value="73">United Arab Emirates</option>
                                                <option value="4">United Kingdom</option>
                                                <option selected="selected" value="1">United States</option>
                                                <option value="236">United States Minor Outlying Islands</option>
                                                <option value="237">Uruguay</option>
                                                <option value="238">Uzbekistan</option>
                                                <option value="245">Vanuatu</option>
                                                <option value="241">Venezuela</option>
                                                <option value="244">Viet Nam</option>
                                                <option value="242">Virgin Islands, British</option>
                                                <option value="243">Virgin Islands, U.S.</option>
                                                <option value="246">Wallis And Futuna</option>
                                                <option value="123">Western Sahara</option>
                                                <option value="74">Yemen</option>
                                                <option value="249">Zambia</option>
                                                <option value="250">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label class="control-label">State/Province of Licensure</label>
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <select class="form-control"  id="StateId" name="StateId">
                                                <option value="">Select a State/Province</option>
                                                <option value="2">Alabama</option>
                                                <option value="1">Alaska</option>
                                                <option value="2909">American Samoa</option>
                                                <option value="4">Arizona</option>
                                                <option value="3">Arkansas</option>
                                                <option value="52">Armed Forces America</option>
                                                <option value="53">Armed Forces Europe</option>
                                                <option value="54">Armed Forces Pacific</option>
                                                <option value="5">California</option>
                                                <option value="6">Colorado</option>
                                                <option value="7">Connecticut</option>
                                                <option value="9">Delaware</option>
                                                <option value="8">District Of Columbia</option>
                                                <option value="10">Florida</option>
                                                <option value="11">Georgia</option>
                                                <option value="2908">Guam</option>
                                                <option value="12">Hawaii</option>
                                                <option value="14">Idaho</option>
                                                <option value="15">Illinois</option>
                                                <option value="16">Indiana</option>
                                                <option value="13">Iowa</option>
                                                <option value="17">Kansas</option>
                                                <option value="18">Kentucky</option>
                                                <option value="19">Louisiana</option>
                                                <option value="22">Maine</option>
                                                <option value="21">Maryland</option>
                                                <option value="20">Massachusetts</option>
                                                <option value="23">Michigan</option>
                                                <option value="50">Minnesota</option>
                                                <option value="51">Mississippi</option>
                                                <option value="24">Missouri</option>
                                                <option value="25">Montana</option>
                                                <option value="28">Nebraska</option>
                                                <option value="32">Nevada</option>
                                                <option value="29">New Hampshire</option>
                                                <option value="30">New Jersey</option>
                                                <option value="31">New Mexico</option>
                                                <option value="33">New York</option>
                                                <option value="26">North Carolina</option>
                                                <option value="27">North Dakota</option>
                                                <option value="2910">Northern Mariana Islands</option>
                                                <option value="34">Ohio</option>
                                                <option value="35">Oklahoma</option>
                                                <option value="36">Oregon</option>
                                                <option value="37">Pennsylvania</option>
                                                <option value="234">Puerto Rico</option>
                                                <option value="38">Rhode Island</option>
                                                <option value="39">South Carolina</option>
                                                <option value="40">South Dakota</option>
                                                <option value="41">Tennessee</option>
                                                <option value="42">Texas</option>
                                                <option value="2911">United States Minor Outlying Islands</option>
                                                <option value="43">Utah</option>
                                                <option value="44">Vermont</option>
                                                <option value="2907">Virgin Islands</option>
                                                <option value="45">Virginia</option>
                                                <option value="46">Washington</option>
                                                <option value="48">West Virginia</option>
                                                <option value="47">Wisconsin</option>
                                                <option value="49">Wyoming</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">
                                            State License Number&nbsp;<small>Optional</small>
                                        </label>
                                        <input class="form-control" name="LicenseNumber" type="text" value="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Expiration Date&nbsp;<small>Optional</small>
                                        </label>
                                            <input class="form-control" name="ExpirationDateTime" type="text" value="">
                                    </div>
                                </div>
                            </div>
                              <div class="step-actions">
                                <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
                                 <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
                              </div>
                           </div>
                        </li>
                        <li class="step">
                           <div class="step-title waves-effect waves-dark">Callback</div>
                           <div class="step-content">
                                 <div class="row">
                                        <div class="col-lg-12">
                                            This will be your own personal HealthStream account. Your NRP information will be accessible whenever you access HealthStream at other healthcare organizations with this account. <a href="#" data-toggle="tooltip" title="Words TBD">Tell me more...</a>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div style="left:20px;">
                                                <input type="checkbox" class="cb" id="terms" name="terms" value=""> Yes, I have read the <a href="#">Terms of Use</a>.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="step-actions">
                                        <button class="waves-effect waves-dark btn next-step">CONTINUE</button>
                                        <button class="waves-effect waves-dark btn-flat previous-step">BACK</button>
                                    </div>
                           </div>
                        </li>
                     </ul>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <!-- <script src="/nrp-assets/scripts/jquery.easing.js"></script> -->
    <!-- <script src="/nrp-assets/scripts/utilities.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.js"></script>
    <!-- <script src="/nrp-assets/scripts/bootstrap.js"></script> -->
    <!-- <script src="/nrp-assets/scripts/jquery-mockjax.js"></script> -->
    <script src="https://rawgit.com/Kinark/Materialize-stepper/master/materialize-stepper.min.js"></script>
    <!--Start Prototype Only-->
    <script src="/nrp-assets/scripts/jquery-mockjax.js"></script>
    <!--End Prototype Only-->
    <!-- <script src="/nrp-assets/scripts/nrp-register.js"></script> -->
    <script>



            $(function(){
               $('.stepper').activateStepper();

               // prototype only to simulate an ajax request
                   $.mockjax({
                       url: "emails.action",
                       response: function(settings) {
                           var email = settings.data.email,
                               emails = ["me@email.com", "email@email.com"];
                           this.responseText = "true";
                           if ($.inArray(email, emails) !== -1) {
                               console.log('inarray');
                               this.responseText = "false";
                           }
                           console.log(this.responseText);
                       },
                       responseTime: 500
                   });
               $('.stepper').closest('form').validate({
                   rules: {
                       firstname: "required",
                       lastname: "required",

                       password: {
                           required: true,
                           minlength: 4
                       },
                       password_confirm: {
                           required: true,
                           minlength: 4,
                           equalTo: "#password"
                       },
                       email: {
                           required: true,
                           email: true,
                           // remote: "emails.action"
                       },
                       // terms: "required"
                   },
                   messages: {
                       firstname: "Enter your firstname",
                       lastname: "Enter your lastname",
                       password: {
                           required: "Provide a password",
                           minlength: jQuery.validator.format("Enter at least {0} characters")
                       },
                       password_confirm: {
                           required: "Repeat your password",
                           minlength: jQuery.validator.format("Enter at least {0} characters"),
                           equalTo: "Enter the same password as above"
                       },
                       email: {
                           required: "Please enter a valid email address",
                           minlength: "Please enter a valid email address",
                           remote: jQuery.validator.format("{0} is already in use. <a href='#'>Return to login</a>")
                       },
                       // terms: " "
                   },
                   errorElement: "label",
                   errorPlacement: function(error, element) {
                       // Add the `help-block` class to the error element
                       error.addClass("help-block");

                       if (element.prop("type") === "checkbox") {
                           error.insertAfter(element.parent("label"));
                       } else if (element.hasClass("date-pick")) {
                           error.insertAfter(element.parent());
                       } else {
                           error.insertAfter(element);
                       }
                   },
                   highlight: function(element, errorClass, validClass) {
                       $(element).parents(".form-group").addClass("has-error");
                   },
                   unhighlight: function(element, errorClass, validClass) {
                       $(element).parents(".form-group").removeClass("has-error");
                   }
               });
            });


    </script>

</body>

</html>