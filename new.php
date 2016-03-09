<?php
include ("user_fb_login.php");
?>
<html>
<head>
<?php include ("includes/essential.php");?>
<link href='css/default.css' rel='stylesheet' type='text/css' >
</head>
<body>
<div id="menu">
  <nav class="top-bar content_wrapper" data-topbar role="navigation" style="max-height: 705px;">
    <ul class="title-area">
      <li class="name text-left">
        <a href="index.html" style="background-image:url('media/images/ism_logo.png');"></a>
      </li>
      <li id="menu_college_name"><a href="index.php">Indian School of Mines</a></li>
      <li class="toggle-topbar menu-icon">
        <a href="index.html#"><span></span></a>
      </li>
    </ul>
    <section id="menu_main" class="top-bar-section">
      <ul class="right">
      
        <li class="menu_item">
          <a href="index.html#" >Find Alumni<i class="fa fa-angle-down"></i></a>
          
          <div class="submenu">
            
            <a href="#" >By Location</a>
            
            <a href="#" >By Batch</a>
            
            <a href="#" >By Education Profile</a>

            <a href="#" >By Employment</a>
            
          </div>
          
        </li>
        
        <li class="menu_item secondary">
          <a href="SEE/index.html" >SEE</a>
          
        </li>
        
        <!--<li class="menu_item">
          <a href="index.html#" >Careers<i class="fa fa-angle-down"></i></a>
          
          <div class="submenu">
            
            <a href="#" >Jobs</a>
            
            <a href="#" >Internships</a>
            
          
            
          </div>
          
        </li>-->
        
        <li class="menu_item secondary">
          <a href="#" >Events</a>
          
        </li>
        
        <li class="menu_item">
          <a href="index.html#" >More<i class="fa fa-angle-down"></i></a>
          
          <div class="submenu">
            
            <a href="#" >Chapters</a>
            
            
            
            
            
            <a href="#" >Photo Gallery</a>
            
            
          
            <a href="#" >Campus Stories</a>
            
            <a href="#" >News Letter</a>
            
            <a href="#" >Help</a>
            
          </div>
          
        </li>
        
        <!--<li class="menu_item secondary" id="menu_login">-->
        <?php if(!$fbuser): ?>
        <li class="menu_item">
          <a href="#" >Login<i class="fa fa-angle-down"></i></a>
          
          <div class="submenu">
            <?php $loginUrl = $facebook->getLoginUrl(array('redirect_uri'=>$homeurl,'scope'=>$fbPermissions));
                  $output = '<a href="'.$loginUrl.'">Login Via Facebook</a>';
            echo $output;
            ?>
            
            <a href="#" >Login Via LinkedIn</a>
                         
          </div>
          
        </li>
        <?php endif; ?> 
        <?php if($fbuser) :?>
          <li class="menu_item">
          <a href="#" ><?php echo $fname." ".$lname; ?><i class="fa fa-angle-down"></i></a>
          
          <div class="submenu">
            
            <a href="my_acc.php" >My Account</a>
            <a href="logout.php?logout" >Logout</a>
                         
          </div>
          
        </li> 
        <?php endif; ?>
        
      </ul>
    </section>
  </nav>
</div>
<form action="" class="register">
            <h1>Registration</h1>
            <fieldset class="row1">
                <legend>Personal Details
                </legend>
                <p>
                    <label>Name *
                    </label>
                    <input type="text"/>
                    <label>Email *
                    </label>
                    <input type="text"/>
                </p>
                <p>
                    <label>Phone No. *
                    </label>
                    <input type="text"/>
                    <label>Skype ID
                    </label>
                    <input type="text"/>
                    <label class="obinfo">* obligatory fields
                    </label>
                </p>
            </fieldset>
            <fieldset class="row2">
                <legend>Education  @ ISM
                </legend>
                <p>
                    <label>Branch *
                    </label>
                    <select>
                        <option>
                        </option>
                        <option value="ece">Electronics and Communication
                        </option>
                        <option value="EI">Electronics and Instrumentation
                        </option>
                        
                    </select>
                </p>
                <p>
                    <label>Batch *
                    </label>
                    <select>
                        <option>
                        </option>
                        <option value="2015">2015
                        </option>
                        <option value="2014">2014
                        </option>
                        <option value="2013">2013
                        </option>
                        <option value="2012">2012
                        </option>
                    </select>
                </p>
                <p>
                    <label>Project in ISM *
                    </label>
                    <input type="text"/>
                </p>
                <p>
                    <label class="optional">Street
                    </label>
                    <input type="text" class="long"/>
                </p>
                <p>
                    <label>City *
                    </label>
                    <input type="text" class="long"/>
                </p>
                <p>
                    <label>Country *
                    </label>
                    <select>
                        <option>
                        </option>
                        <option value="1">United States
                        </option>
                    </select>
                </p>
                <p>
                    <label class="optional">Website
                    </label>
                    <input class="long" type="text" value="http://"/>

                </p>
            </fieldset>
            <fieldset class="row3">
                <legend>Further Information
                </legend>
                <p>
                    <label>Gender *</label>
                    <input name="gender"type="radio" value="radio"/>
                    <label class="gender">Male</label>
                    <input name="gender"type="radio" value="radio"/>
                    <label class="gender">Female</label>
                </p>
                <p>
                    <label>Birthdate *
                    </label>
                    <select class="date">
                        <option value="1">01
                        </option>
                        <option value="2">02
                        </option>
                        <option value="3">03
                        </option>
                        <option value="4">04
                        </option>
                        <option value="5">05
                        </option>
                        <option value="6">06
                        </option>
                        <option value="7">07
                        </option>
                        <option value="8">08
                        </option>
                        <option value="9">09
                        </option>
                        <option value="10">10
                        </option>
                        <option value="11">11
                        </option>
                        <option value="12">12
                        </option>
                        <option value="13">13
                        </option>
                        <option value="14">14
                        </option>
                        <option value="15">15
                        </option>
                        <option value="16">16
                        </option>
                        <option value="17">17
                        </option>
                        <option value="18">18
                        </option>
                        <option value="19">19
                        </option>
                        <option value="20">20
                        </option>
                        <option value="21">21
                        </option>
                        <option value="22">22
                        </option>
                        <option value="23">23
                        </option>
                        <option value="24">24
                        </option>
                        <option value="25">25
                        </option>
                        <option value="26">26
                        </option>
                        <option value="27">27
                        </option>
                        <option value="28">28
                        </option>
                        <option value="29">29
                        </option>
                        <option value="30">30
                        </option>
                        <option value="31">31
                        </option>
                    </select>
                    <select>
                        <option value="1">January
                        </option>
                        <option value="2">February
                        </option>
                        <option value="3">March
                        </option>
                        <option value="4">April
                        </option>
                        <option value="5">May
                        </option>
                        <option value="6">June
                        </option>
                        <option value="7">July
                        </option>
                        <option value="8">August
                        </option>
                        <option value="9">September
                        </option>
                        <option value="10">October
                        </option>
                        <option value="11">November
                        </option>
                        <option value="12">December
                        </option>
                    </select>
                    <input class="year" type="text" size="4" maxlength="4"/>e.g 1976
                </p>
                <p>
                    <label>Nationality *
                    </label>
                    <select>
                        <option value="0">india
                        </option>
                        <option value="1">United States
                        </option>
                    </select>
                </p>
                <p>
                    <label>Children *
                    </label>
                    <input type="checkbox" value="" />
                </p>
                <div class="infobox"><h4>Disclaimer</h4>
                    <p>The information taken from users will not be shared with any third party.</p>
                </div>
            </fieldset>
            <fieldset class="row4">
                <legend>Terms and Mailing
                </legend>
                <p class="agreement">
                    <input type="checkbox" value=""/>
                    <label>*  I accept the <a href="#">Terms and Conditions</a></label>
                </p>
                <p class="agreement">
                    <input type="checkbox" value=""/>
                    <label>I want to receive mails & newsletter from Department of Electronics.</label>
                </p>
                
            </fieldset>
            <div><button class="button">Register &raquo;</button></div>
        </form>






<div id="footer">
  <div class="row" id="footer_left">
  
    <div class="column large-3 small-12">
      <div class="footer_section">
        <a class="footer_section_header" href="search.html" >Browse</a>
        
        <a href="#" >By Search</a>
        
        <a href="#" >By Map</a>
        
        <a href="#" >By Resources</a>
        
      </div>
    </div>
  
    <div class="column large-3 small-12">
      <div class="footer_section">
        <a class="footer_section_header" href="#" >About</a>
        
        <a href="https://www.ismaa.in" target="_blank" >ISM Alumni Association</a>
        
        <a href="#" >Alumni Meet Pictures(2015)  </a>
        
      </div>
    </div>
  
    <div class="column large-3 small-12">
      <div class="footer_section">
        <a class="footer_section_header" href="#">Events</a>
        
        <a href="#">Basant &#39;2K16</a>
        
        <a href="#">Srijan - Cultral Fest of ISM</a>
        
        <a href="#">SEE Meet</a>
        
        <a href="#">All Events</a>
      </div>
    </div>
    <div class="column large-3 small-12">
      <div class="footer_section" id="footer_contact">
            <a href="index.html#" class="footer_section_header">Contact</a>
            <ul class="vertical">
              <li><a href="mailto:ei@ismdhanbad.ac.in">ei@ismdhanbad.ac.in</a></li>
              <li><a href="tel:+91-3262296622">+91-326-229-6622</a></li>
            </ul>
      </div>
      <div id="footer_social_media">
        
        
        
        
        
        
        
      </div>
    </div>
  </div>
</div>


<div id="footer_bottom">
  <div class="row">
    <div class="column large-6 small-12" id="footer_bottom_college">
      <img src="media/images/ism_logo.png" class="desaturate">
      <span id="footer_bottom_college_name">Indian School of Mines</span>
      
      <span>&#169; copyright 2016</span>
    </div>
    <div class="column large-6 small-12" id="powered-by-ism">
      <a href="http://www.ismdhanbad.ac.in/electronics-engineering/index.html" target="_blank">Department of Electronics</a>
      
    </div>
  </div>
</div>
<div id="unsupported_browser">
</body>
</html>