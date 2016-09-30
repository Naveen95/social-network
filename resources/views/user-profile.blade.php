@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Profile Settings</div>

                <div class="panel-body">
                   <center><h2> Enter your Profile Details here</h2></center><br>

                    <form enctype="multipart/formdata"class="form-horizontal" role="form" method="POST" action="{{ url('/update-details') }}">
                        {{ csrf_field() }}


                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="firstname" value="<?php echo \Auth::user()->firstname;?>">

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          
                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="lastname" value="<?php echo \Auth::user()->lastname;?>">

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         
                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">User Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="username" value="<?php echo \Auth::user()->username;?>">

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                         <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Phone Number</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="phone" value="<?php echo \Auth::user()->phone;?>">

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                 
                        <div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}" >
                            <label class="col-md-4 control-label">Nationality</label>

                            <div class="col-md-6">

                                <select name="nationality" class="form-control" value = '<?php echo \Auth::user()->nationality;?>'>
                                                  <option value="">-- select one --</option>
                                                  <option value="afghan">Afghan</option>
                                                  <option value="albanian">Albanian</option>
                                                  <option value="algerian">Algerian</option>
                                                  <option value="american">American</option>
                                                  <option value="andorran">Andorran</option>
                                                  <option value="angolan">Angolan</option>
                                                  <option value="antiguans">Antiguans</option>
                                                  <option value="argentinean">Argentinean</option>
                                                  <option value="armenian">Armenian</option>
                                                  <option value="australian">Australian</option>
                                                  <option value="austrian">Austrian</option>
                                                  <option value="azerbaijani">Azerbaijani</option>
                                                  <option value="bahamian">Bahamian</option>
                                                  <option value="bahraini">Bahraini</option>
                                                  <option value="bangladeshi">Bangladeshi</option>
                                                  <option value="barbadian">Barbadian</option>
                                                  <option value="barbudans">Barbudans</option>
                                                  <option value="batswana">Batswana</option>
                                                  <option value="belarusian">Belarusian</option>
                                                  <option value="belgian">Belgian</option>
                                                  <option value="belizean">Belizean</option>
                                                  <option value="beninese">Beninese</option>
                                                  <option value="bhutanese">Bhutanese</option>
                                                  <option value="bolivian">Bolivian</option>
                                                  <option value="bosnian">Bosnian</option>
                                                  <option value="brazilian">Brazilian</option>
                                                  <option value="british">British</option>
                                                  <option value="bruneian">Bruneian</option>
                                                  <option value="bulgarian">Bulgarian</option>
                                                  <option value="burkinabe">Burkinabe</option>
                                                  <option value="burmese">Burmese</option>
                                                  <option value="burundian">Burundian</option>
                                                  <option value="cambodian">Cambodian</option>
                                                  <option value="cameroonian">Cameroonian</option>
                                                  <option value="canadian">Canadian</option>
                                                  <option value="cape verdean">Cape Verdean</option>
                                                  <option value="central african">Central African</option>
                                                  <option value="chadian">Chadian</option>
                                                  <option value="chilean">Chilean</option>
                                                  <option value="chinese">Chinese</option>
                                                  <option value="colombian">Colombian</option>
                                                  <option value="comoran">Comoran</option>
                                                  <option value="congolese">Congolese</option>
                                                  <option value="costa rican">Costa Rican</option>
                                                  <option value="croatian">Croatian</option>
                                                  <option value="cuban">Cuban</option>
                                                  <option value="cypriot">Cypriot</option>
                                                  <option value="czech">Czech</option>
                                                  <option value="danish">Danish</option>
                                                  <option value="djibouti">Djibouti</option>
                                                  <option value="dominican">Dominican</option>
                                                  <option value="dutch">Dutch</option>
                                                  <option value="east timorese">East Timorese</option>
                                                  <option value="ecuadorean">Ecuadorean</option>
                                                  <option value="egyptian">Egyptian</option>
                                                  <option value="emirian">Emirian</option>
                                                  <option value="equatorial guinean">Equatorial Guinean</option>
                                                  <option value="eritrean">Eritrean</option>
                                                  <option value="estonian">Estonian</option>
                                                  <option value="ethiopian">Ethiopian</option>
                                                  <option value="fijian">Fijian</option>
                                                  <option value="filipino">Filipino</option>
                                                  <option value="finnish">Finnish</option>
                                                  <option value="french">French</option>
                                                  <option value="gabonese">Gabonese</option>
                                                  <option value="gambian">Gambian</option>
                                                  <option value="georgian">Georgian</option>
                                                  <option value="german">German</option>
                                                  <option value="ghanaian">Ghanaian</option>
                                                  <option value="greek">Greek</option>
                                                  <option value="grenadian">Grenadian</option>
                                                  <option value="guatemalan">Guatemalan</option>
                                                  <option value="guinea-bissauan">Guinea-Bissauan</option>
                                                  <option value="guinean">Guinean</option>
                                                  <option value="guyanese">Guyanese</option>
                                                  <option value="haitian">Haitian</option>
                                                  <option value="herzegovinian">Herzegovinian</option>
                                                  <option value="honduran">Honduran</option>
                                                  <option value="hungarian">Hungarian</option>
                                                  <option value="icelander">Icelander</option>
                                                  <option value="indian">Indian</option>
                                                  <option value="indonesian">Indonesian</option>
                                                  <option value="iranian">Iranian</option>
                                                  <option value="iraqi">Iraqi</option>
                                                  <option value="irish">Irish</option>
                                                  <option value="israeli">Israeli</option>
                                                  <option value="italian">Italian</option>
                                                  <option value="ivorian">Ivorian</option>
                                                  <option value="jamaican">Jamaican</option>
                                                  <option value="japanese">Japanese</option>
                                                  <option value="jordanian">Jordanian</option>
                                                  <option value="kazakhstani">Kazakhstani</option>
                                                  <option value="kenyan">Kenyan</option>
                                                  <option value="kittian and nevisian">Kittian and Nevisian</option>
                                                  <option value="kuwaiti">Kuwaiti</option>
                                                  <option value="kyrgyz">Kyrgyz</option>
                                                  <option value="laotian">Laotian</option>
                                                  <option value="latvian">Latvian</option>
                                                  <option value="lebanese">Lebanese</option>
                                                  <option value="liberian">Liberian</option>
                                                  <option value="libyan">Libyan</option>
                                                  <option value="liechtensteiner">Liechtensteiner</option>
                                                  <option value="lithuanian">Lithuanian</option>
                                                  <option value="luxembourger">Luxembourger</option>
                                                  <option value="macedonian">Macedonian</option>
                                                  <option value="malagasy">Malagasy</option>
                                                  <option value="malawian">Malawian</option>
                                                  <option value="malaysian">Malaysian</option>
                                                  <option value="maldivan">Maldivan</option>
                                                  <option value="malian">Malian</option>
                                                  <option value="maltese">Maltese</option>
                                                  <option value="marshallese">Marshallese</option>
                                                  <option value="mauritanian">Mauritanian</option>
                                                  <option value="mauritian">Mauritian</option>
                                                  <option value="mexican">Mexican</option>
                                                  <option value="micronesian">Micronesian</option>
                                                  <option value="moldovan">Moldovan</option>
                                                  <option value="monacan">Monacan</option>
                                                  <option value="mongolian">Mongolian</option>
                                                  <option value="moroccan">Moroccan</option>
                                                  <option value="mosotho">Mosotho</option>
                                                  <option value="motswana">Motswana</option>
                                                  <option value="mozambican">Mozambican</option>
                                                  <option value="namibian">Namibian</option>
                                                  <option value="nauruan">Nauruan</option>
                                                  <option value="nepalese">Nepalese</option>
                                                  <option value="new zealander">New Zealander</option>
                                                  <option value="ni-vanuatu">Ni-Vanuatu</option>
                                                  <option value="nicaraguan">Nicaraguan</option>
                                                  <option value="nigerien">Nigerien</option>
                                                  <option value="north korean">North Korean</option>
                                                  <option value="northern irish">Northern Irish</option>
                                                  <option value="norwegian">Norwegian</option>
                                                  <option value="omani">Omani</option>
                                                  <option value="pakistani">Pakistani</option>
                                                  <option value="palauan">Palauan</option>
                                                  <option value="panamanian">Panamanian</option>
                                                  <option value="papua new guinean">Papua New Guinean</option>
                                                  <option value="paraguayan">Paraguayan</option>
                                                  <option value="peruvian">Peruvian</option>
                                                  <option value="polish">Polish</option>
                                                  <option value="portuguese">Portuguese</option>
                                                  <option value="qatari">Qatari</option>
                                                  <option value="romanian">Romanian</option>
                                                  <option value="russian">Russian</option>
                                                  <option value="rwandan">Rwandan</option>
                                                  <option value="saint lucian">Saint Lucian</option>
                                                  <option value="salvadoran">Salvadoran</option>
                                                  <option value="samoan">Samoan</option>
                                                  <option value="san marinese">San Marinese</option>
                                                  <option value="sao tomean">Sao Tomean</option>
                                                  <option value="saudi">Saudi</option>
                                                  <option value="scottish">Scottish</option>
                                                  <option value="senegalese">Senegalese</option>
                                                  <option value="serbian">Serbian</option>
                                                  <option value="seychellois">Seychellois</option>
                                                  <option value="sierra leonean">Sierra Leonean</option>
                                                  <option value="singaporean">Singaporean</option>
                                                  <option value="slovakian">Slovakian</option>
                                                  <option value="slovenian">Slovenian</option>
                                                  <option value="solomon islander">Solomon Islander</option>
                                                  <option value="somali">Somali</option>
                                                  <option value="south african">South African</option>
                                                  <option value="south korean">South Korean</option>
                                                  <option value="spanish">Spanish</option>
                                                  <option value="sri lankan">Sri Lankan</option>
                                                  <option value="sudanese">Sudanese</option>
                                                  <option value="surinamer">Surinamer</option>
                                                  <option value="swazi">Swazi</option>
                                                  <option value="swedish">Swedish</option>
                                                  <option value="swiss">Swiss</option>
                                                  <option value="syrian">Syrian</option>
                                                  <option value="taiwanese">Taiwanese</option>
                                                  <option value="tajik">Tajik</option>
                                                  <option value="tanzanian">Tanzanian</option>
                                                  <option value="thai">Thai</option>
                                                  <option value="togolese">Togolese</option>
                                                  <option value="tongan">Tongan</option>
                                                  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                                                  <option value="tunisian">Tunisian</option>
                                                  <option value="turkish">Turkish</option>
                                                  <option value="tuvaluan">Tuvaluan</option>
                                                  <option value="ugandan">Ugandan</option>
                                                  <option value="ukrainian">Ukrainian</option>
                                                  <option value="uruguayan">Uruguayan</option>
                                                  <option value="uzbekistani">Uzbekistani</option>
                                                  <option value="venezuelan">Venezuelan</option>
                                                  <option value="vietnamese">Vietnamese</option>
                                                  <option value="welsh">Welsh</option>
                                                  <option value="yemenite">Yemenite</option>
                                                  <option value="zambian">Zambian</option>
                                                  <option value="zimbabwean">Zimbabwean</option>
                                                </select>
                                                 @if ($errors->has('nationality'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nationality') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>


                         <div class="form-group">
                            <label class="col-md-4 control-label">Date Of birth</label>

                            <div class="col-sm-2">

                                <select name="dobmonth" class="form-control">
    <option> - Month - </option>
    <option value="January">January</option>
    <option value="Febuary">Febuary</option>
    <option value="March">March</option>
    <option value="April">April</option>
    <option value="May">May</option>
    <option value="June">June</option>
    <option value="July">July</option>
    <option value="August">August</option>
    <option value="September">September</option>
    <option value="October">October</option>
    <option value="November">November</option>
    <option value="December">December</option>
</select>




<select name="dobday" class="form-control">
    <option> - Day - </option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
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

<select name="dobyear" class="form-control">
    <option> - Year - </option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
    <option value="1968">1968</option>
    <option value="1967">1967</option>
    <option value="1966">1966</option>
    <option value="1965">1965</option>
    <option value="1964">1964</option>
    <option value="1963">1963</option>
    <option value="1962">1962</option>
    <option value="1961">1961</option>
    <option value="1960">1960</option>
    <option value="1959">1959</option>
    <option value="1958">1958</option>
    <option value="1957">1957</option>
    <option value="1956">1956</option>
    <option value="1955">1955</option>
    <option value="1954">1954</option>
    <option value="1953">1953</option>
    <option value="1952">1952</option>
    <option value="1951">1951</option>
    <option value="1950">1950</option>
    <option value="1949">1949</option>
    <option value="1948">1948</option>
    <option value="1947">1947</option>
    
</select>

                                
                          </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Update Profile
                                </button>
                            </div>
                        </div>


                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
