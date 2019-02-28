<?php

include "includes/helpers/helpers.php";

$action = (!empty($_GET['action'])) ? $_GET['action'] : false;

$patterns['start']['title'] = 'Verify Required Info to Receive CE Credit';
$patterns['focus']['title'] = 'Verify Required Info to Receive CE Credit';

?>

<?=createSiteStart($patterns['start']);?>
<?=createHeader($patterns['header']);?>

<?=createFocus($patterns['focus']);?>

<style>

	.license-cards .license-card.license-card__checkable{
		border-left:26px solid #ccc;
		border-top-left-radius: 0;
		border-bottom-left-radius: 0;
		position: relative;
		width:350px;
	}
	
	.license-cards .license-card.license-card__checkable .question{
		margin: 0;	
	}
	.license-cards .license-card.license-card__checkable label.answer {
		left: -25px;
		top: 0 ;
		bottom:0;
		background-color: transparent;
		position:absolute;
	}
	.license-cards .license-card.license-card__checkable label.answer .answer-icon{
		left: 0;
		top: 10px;
	}
</style>
<div class="layout">
	<div class="container">
		<div class="row">
			<div class="col-md-9">

				<section class="section section-main section-box text-center" data-equalize="layout-columns">
					<section class="section">

						<h3>Are you earning CE Credit to renew a license?</h3>

						<!--
<div class="checkable">
<div class="slat">

<div class="title">Yes</div>

</div>

<div class="select"><label><input type="checkbox" class="checkbox"><span class="icon"></span></label></div>
</div>
-->


						<div class="question">


							<div class="answers answers-yes-no">
								<label class="answer">
									<div class="answer-icon"></div>
									<input type="radio" name="q1" value="true">
									Yes
								</label>
								<label class="answer">
									<div class="answer-icon"></div>
									<input type="radio" name="q1" value="false">
									No
								</label>
							</div>
						</div>

						<div class="ce-not-awarded">
							<?php include "includes/forms/_ce-not-awarded.php"; ?>
						</div>

						<div class="ce-awarded text-left">
							<fieldset>
								<legend>Select a License(s) to link this CE.</legend>
								<div class="license-cards text-sm-center">
									<div class="row">
										<div class="col-md-6 text-center">
											<div class="license-card editable-set license-card__checkable">
												<div class="license-card__title">
													Registered Nurses - Advanced Registered Nurse Practitioner
													<div class="question">
														<label class="answer">
															<div class="answer-icon answer-icon-square"></div>
															<input type="checkbox">
														</label>
													</div>
												</div>
												<div class="license-card__body">
													<div>
														<label>License Number:</label>
														<span class="read-only">12345678901234567892-1234</span>
														<input type="text" class="edit-mode form-control input-sm" value="12345678901234567892-1234">
													</div>
													<div>
														<label>COUNTRY:</label>
														<span class="read-only">United States</span>
														<select class="form-control edit-mode input-sm" data-val="true" data-val-number="The field CountryId must be a number." data-val-required="Required" id="CountryId" name="CountryId">
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
													<div>
														<label>State/Province:</label>
														<span class="read-only">FL</span>
														<select class="form-control-inline input-sm edit-mode" data-val="true" data-val-number="The field StateId must be a number." data-val-required="Required" id="StateId" name="StateId">
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
															<option value="10" selected>Florida</option>
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
													<span class="state-img state-img-us-fl read-only">

													</span>
													<input type="button" class="btn-default btn btn-xs js-btn-edit read-only" value="Edit">
													<input type="button" class="btn-success btn btn-xs  edit-mode" value="Save"> <input type="button" class="btn-default btn btn-xs js-btn-cancel edit-mode" value="Cancel">
													<input type="button" class="btn-danger btn btn-xs pull-right edit-mode" value="Delete">
												</div>



											</div>
										</div>
										<div class="col-md-6 text-center">
											<div class="license-card editable-set license-card__checkable">
												<div class="license-card__title">
													Registered Nurses - Advanced Registered Nurse Practitioner
													<div class="question">
														<label class="answer">
															<div class="answer-icon answer-icon-square"></div>
															<input type="checkbox">
														</label>
													</div>
												</div>
												<div class="license-card__body">
													<div>
														<label>License Number:</label>
														<span class="read-only">12345678901234567892-1234</span>
														<input type="text" class="edit-mode form-control input-sm" value="12345678901234567892-1234">
													</div>
													<div>
														<label>COUNTRY:</label>
														<span class="read-only">United States</span>
														<select class="form-control edit-mode input-sm" data-val="true" data-val-number="The field CountryId must be a number." data-val-required="Required" id="CountryId" name="CountryId">
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
													<div>
														<label>State/Province:</label>
														<span class="read-only">FL</span>
														<select class="form-control-inline input-sm edit-mode" data-val="true" data-val-number="The field StateId must be a number." data-val-required="Required" id="StateId" name="StateId">
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
															<option value="10" selected>Florida</option>
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
													<span class="state-img state-img-us-tx read-only">

													</span>
													<input type="button" class="btn-default btn btn-xs js-btn-edit read-only" value="Edit">
													<input type="button" class="btn-success btn btn-xs  edit-mode" value="Save"> <input type="button" class="btn-default btn btn-xs js-btn-cancel edit-mode" value="Cancel">
													<input type="button" class="btn-danger btn btn-xs pull-right edit-mode" value="Delete">
												</div>
											</div>
										</div>
										<div class="col-md-6 text-center">
											<div class="license-card editable-set license-card__checkable">
												<div class="license-card__title">
													Registered Nurses - Advanced Registered Nurse Practitioner
													<div class="question">
														<label class="answer">
															<div class="answer-icon answer-icon-square"></div>
															<input type="checkbox">
														</label>
													</div>
												</div>
												<div class="license-card__body">
													<div>
														<label>License Number:</label>
														<span class="read-only">12345678901234567892-1234</span>
														<input type="text" class="edit-mode form-control input-sm" value="12345678901234567892-1234">
													</div>
													<div>
														<label>COUNTRY:</label>
														<span class="read-only">United States</span>
														<select class="form-control edit-mode input-sm" data-val="true" data-val-number="The field CountryId must be a number." data-val-required="Required" id="CountryId" name="CountryId">
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
													<div>
														<label>State/Province:</label>
														<span class="read-only">FL</span>
														<select class="form-control-inline input-sm edit-mode" data-val="true" data-val-number="The field StateId must be a number." data-val-required="Required" id="StateId" name="StateId">
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
															<option value="10" selected>Florida</option>
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
													<span class="state-img state-img-us-wv read-only">

													</span>
													<input type="button" class="btn-default btn btn-xs js-btn-edit read-only" value="Edit">
													<input type="button" class="btn-success btn btn-xs  edit-mode" value="Save"> <input type="button" class="btn-default btn btn-xs js-btn-cancel edit-mode" value="Cancel">
													<input type="button" class="btn-danger btn btn-xs pull-right edit-mode" value="Delete">
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="question">
									<div class="answers">
										<label class="answer">
											<div class="answer-icon answer-icon-square"></div>
											<input type="checkbox" value="q4a1">
											My License Info is correct.
										</label>
									</div>
								</div>


							</fieldset>
							<fieldset class="editable-set">


								<legend>Verify Personal Info <input type="button" value="Save" class="btn btn-xs btn-success js-btn-cancel edit-mode"> <input type="button" value="Cancel" class="btn btn-xs btn-default js-btn-cancel edit-mode"><input type="button" value="Edit" class="btn btn-xs btn-default js-btn-edit read-only"> </legend>

								<div class="text-left ">
									<div class="form-group">
										<label class="inline">Country of Residence:</label>
										<span class="read-only">United States</span>
										<select class="form-control-inline edit-mode input-sm" data-val="true" data-val-number="The field CountryId must be a number." data-val-required="Required" id="CountryId" name="CountryId">
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
									<div class="form-group">
										<label class="inline">State of Residence:</label>
										<span class="read-only"> FL </span>

										<select class="form-control-inline input-sm edit-mode" data-val="true" data-val-number="The field StateId must be a number." data-val-required="Required" id="StateId" name="StateId">
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
											<option value="10" selected>Florida</option>
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
								<div class="question">
									<div class="answers">
										<label class="answer">
											<div class="answer-icon answer-icon-square"></div>
											<input type="checkbox" value="q4a1">
											My Personal Info is correct.
										</label>

									</div>
								</div>
								<?php
$stickybar = array(
'sets' => array(
array(
'position' => 'left',
'classes' => array('hidden-xs', 'hidden-sm'),
'html' => '
<a href="#" class="btn btn-success">Save</a>
',
),
array(
'position' => 'left',
'classes' => array('visible-xs', 'visible-sm'),
'html' => '
<a href="#modal-print" class="btn btn-success">Save</a>
',
),
),
);
echo createStickybar($stickybar);
?>
							</fieldset>
						</div>
					</section>

				</section>
				<!-- /section-main -->

			</div>
			<!-- /column -->

			<div class="col-md-3">
				<section class="section section-sidebar" data-equalize="layout-columns">
					<section class="section section-box" id="sidebar-credit">
						<h3>Additional Credit</h3>
						<p>You may be eligible for additional credit for this course. Make sure your certifications and licenses are up to date.</p>
						<ul class="list-unstyled">
							<li><a href="disciplines-licenses.php">Manage Licenses</a>
							<li>
							<li><a href="certifications.php">Manage Certifications</a></li>
						</ul>
						<p><a href="#" class="btn btn-sm btn-default">Refresh Credits</a></p>
					</section>
					<?php include_sidebar();?>
				</section>
				<!-- /section-sidebar -->
			</div>
			<!-- /column -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /layout -->


<?=createFooter($patterns['footer']);?>
<?=createPrototypeNav();?>
<?=createSiteScripts();?>
<script>
	$(function() {
		// This is a hack to make the prototype only show
		// the additional credits sidebar section when the
		// On Completion tab is active
		$('#sidebar-credit').hide();
		$('.nav-focus li a').click(function() {
			if ($(this).attr('href') === '#completion') {
				$('#sidebar-credit').show();
			} else {
				$('#sidebar-credit').hide();
			}
		});
	});

	$(function() {
		$(".js-btn-edit").click(function() {
			$t = $(this),
				$e = $t.closest('.editable-set').find('.edit-mode'),
				$r = $t.closest('.editable-set').find('.read-only');
			$e.show();
			$r.hide();
		});
	});

	$(function() {
		$(".js-btn-cancel").click(function() {
			$t = $(this),
				$e = $t.closest('.editable-set').find('.edit-mode'),
				$r = $t.closest('.editable-set').find('.read-only');
			$e.hide();
			$r.show();
		});
	});

	$(function() {
		$('label.answer').click(function(e) {
			$t = $(this),
				$a = $t.closest('.question').find('.answer');
			$a.removeClass('selected').has('input:checked').addClass('selected');
			console.log('hello');

			if ($('input[name=q1]:checked').val() == "false") {
				$(".ce-not-awarded").fadeIn();
				$(".ce-awarded").hide();

			} else {
				$(".ce-not-awarded").hide();
				$(".ce-awarded").fadeIn();

			}

		});
	});
</script>
<?=createSiteEnd();?>