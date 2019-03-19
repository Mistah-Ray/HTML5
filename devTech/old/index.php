<?php if (!empty($_POST)): ?>
<?php
	$name = htmlspecialchars($_POST["name"]);
	$email = htmlspecialchars($_POST["email"]);
	$message = htmlspecialchars($_POST["message"]);
	
	mail('admin@devraytech.com','Inquiry from www.devRayTech.com', "Message From: " .$name . "\r\nEmail: ". $email . "\r\nMessage: ".  $message ."\r\n");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>devRay Technologies - Home</title>
	<link href="scripts/home_style.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="images/favicon.ico" />
</head>

<body>
<div id="webContainer">
    <div id="navigationBar" align="center">
        <div id="naviButtons"><img src="images/button_home.jpg" width="88" height="38" alt="Home"/></div>
        <div id="naviButtons"><img src="images/button_services.jpg" width="104" height="38" alt="Services"/></a></div>
        <div id="naviButtons"><img src="images/button_portfolio.jpg" width="111" height="38" alt="Portfolio"/></a></div>
        <div id="naviButtons"><img src="images/button_updates.jpg" width="97" height="38" alt="Updates"/></a></div>
        <div id="naviButtons"><img src="images/button_about_us.jpg" width="97" height="38" alt="About Us"/></a></div>
        <div id="naviButtons"><img src="images/button_contact_us.jpg" width="132" height="38" alt="Contact Us"/></a></div>  
	</div>
    <div id="logo">
        <img src="images/logo.jpg" width="960" height="320" alt="devRay Tech. Logo" />
    </div>
	<div id="myBody">
		<div id="portfolio">
			<div id="portfolioHeader">
				<img src="images/header_portfolio.jpg" width="300" height="60" alt="Portfolio Header" />
			</div>
			<div id="portfolioBody">
                <div id="portfolioJob">
                	<img src="images/mb_projects.jpg" width="270" height="101" />
                </div>
                <div id="portfolioJob">
                    <img src="images/OS_projects.jpg" width="270" height="101" />
                </div>
                <div id="portfolioJob">
                    <img src="images/updates_projects.jpg" width="270" height="101" />
                </div>
                <div id="portfolioJob">
                    <img src="images/websites_projects.jpg" width="270" height="101" />
                </div>
                <div id="portfolioJob">
                    <img src="images/password_projects.jpg" width="270" height="101" />
                </div>
          </div>
        </div>
	  <div id="services">
			<div id="servicesHeader">
				<img src="images/header_services.jpg" width="292" height="60" alt="Service Header"/>
			</div>
			<div id="servicesBody">
            	<div id="servicesContent">
                	<ul>
              		  	<li>Installation of IP PBX Systems </li>    
             	       	<li>Project Managment & Development</li>
                	    <li>Custom Application Devlopment</li>
                	    <li>Data Loss Prevention and Recovery</li>
						<li>Hardware and Software Installations</li>
						<li>Networking Implementation</</li>
                    	<li>Webpage Development</li>
                    	<li>Redundancy Solutions</li>
                   		<li>and more...</li>
                	</ul>
            	</div>
			</div>
		</div>
      <div id="hire">
			<div id="hireHeader">
				<img src="images/header_hire.jpg" width="290" height="60" alt="Hire Us Header"/>
			</div>
			<div id="hireBody">
            	<div id="hireContentSubmit">
					<font size="+1"><center>Thank you <b><?php echo htmlspecialchars($_POST["name"]); ?></b>!</center></font><br /><br />
    				<font size="+1">Your request was sent. You should recieve a reply within 2 business days.</font><br>
           		</div>
           </div>
		</div>
	  <div id="updates">
			<div id="updatesHeader">
				<img src="images/header_updates.jpg" width="610" height="60" alt="Update Header"/>
			</div>
			<div id="updatesBody">
            	<div id="updatesConent">
            		<strong>3.15.2015 - Contact US</strong> <br />
                	Contact form now in working order.
                	<br /><br />
					<strong>2.19.2015 - Wesite Launched</strong> <br />
                	devRay Tech webpage launched after development and graphics design completed.
                    <br /><br />
                    <strong>1.4.2015 - Wesite Design Completed</strong> <br />
                	devRayTech's Design has been finalized and is now on the way to production.
               
				</div>
            </div>
		</div>
	</div>
	<div id="footer">
   	  <img src="images/footer.jpg" width="960" height="50" />
  </div>
</div>
</body>
</html>
<?php else: ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>devRay Technologies - Home</title>
	<link href="scripts/home_style.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="images/favicon.ico" />
</head>

<body>
<div id="webContainer">
    <div id="navigationBar" align="center">
        <div id="naviButtons"><img src="images/button_home.jpg" width="88" height="38" alt="Home"/></div>
        <div id="naviButtons"><img src="images/button_services.jpg" width="104" height="38" alt="Services"/></a></div>
        <div id="naviButtons"><img src="images/button_portfolio.jpg" width="111" height="38" alt="Portfolio"/></a></div>
        <div id="naviButtons"><img src="images/button_updates.jpg" width="97" height="38" alt="Updates"/></a></div>
        <div id="naviButtons"><img src="images/button_about_us.jpg" width="97" height="38" alt="About Us"/></a></div>
        <div id="naviButtons"><img src="images/button_contact_us.jpg" width="132" height="38" alt="Contact Us"/></a></div>  
	</div>
    <div id="logo">
        <img src="images/logo.jpg" width="960" height="320" alt="devRay Tech. Logo" />
    </div>
	<div id="myBody">
		<div id="portfolio">
			<div id="portfolioHeader">
				<img src="images/header_portfolio.jpg" width="300" height="60" alt="Portfolio Header" />
			</div>
			<div id="portfolioBody">
                <div id="portfolioJob">
                	<a href="Portfolio/motherboard.html"><img src="images/mb_projects.jpg" width="270" height="101" /></a>
                </div>
                <div id="portfolioJob">
                    <a href="Portfolio/os.html"><img src="images/OS_projects.jpg" width="270" height="101" /></a>
                </div>
                <div id="portfolioJob">
                    <a href="Portfolio/updates.html"><img src="images/updates_projects.jpg" width="270" height="101" /></a>
                </div>
                <div id="portfolioJob">
                    <a href="Portfolio/websites.html"><img src="images/websites_projects.jpg" width="270" height="101" /></a>
                </div>
                <div id="portfolioJob">
                    <a href="Portfolio/passwords.html"><img src="images/password_projects.jpg" width="270" height="101" /></a>
                </div>
          </div>
        </div>
	  <div id="services">
			<div id="servicesHeader">
				<img src="images/header_services.jpg" width="292" height="60" alt="Service Header"/>
			</div>
			<div id="servicesBody">
            	<div id="servicesContent">
                	<ul>
              		  	<li>Installation of IP PBX Systems </li>    
             	       	<li>Project Managment & Development</li>
                	    <li>Custom Application Devlopment</li>
                	    <li>Data Loss Prevention and Recovery</li>
						<li>Hardware and Software Installations</li>
						<li>Networking Implementation</</li>
                    	<li>Webpage Development</li>
                    	<li>Redundancy Solutions</li>
                   		<li>and more...</li>
                	</ul>
            	</div>
			</div>
		</div>
      <div id="hire">
			<div id="hireHeader">
				<img src="images/header_hire.jpg" width="290" height="60" alt="Hire Us Header"/>
			</div>
			<div id="hireBody">
            	<div id="hireContent">
            		<form name="contactform" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
						<table>
							<tr>	
								<td valign="top">
									<label for="first_name">Name:</label>
								</td>
								<td valign="top">
									<input  type="text" name="name" maxlength="50" size="30" value="">
								</td>
							</tr> 
							<tr>
								<td valign="top">
									<label for="email">Email:</label>
								</td>
								<td valign="top">
									<input  type="text" name="email" maxlength="80" size="30" value="">
								</td>
							</tr> 
							<tr>
								<td valign="top">
									<label for="message">Message:</label>
								</td>
        					
								<td valign="top" colspan="2">
									<textarea  name="message" maxlength="1000" rows="4"  cols="24" value=""></textarea>
								</td>
							</tr>
 
							<tr>
								<td colspan="2" style="text-align:center">
									<input type="submit" value="Submit">
								</td>
							</tr>
						</table>
					</form>
           		</div>
           </div>
		</div>
	  <div id="updates">
			<div id="updatesHeader">
				<img src="images/header_updates.jpg" width="610" height="60" alt="Update Header"/>
			</div>
			<div id="updatesBody">
            	<div id="updatesConent">
            		<strong>3.15.2015 - Contact US</strong> <br />
                	Contact form now in working order.
                	<br /><br />
					<strong>2.19.2015 - Wesite Launched</strong> <br />
                	devRay Tech webpage launched after development and graphics design completed.
                    <br /><br />
                    <strong>1.4.2015 - Wesite Design Completed</strong> <br />
                	devRayTech's Design has been finalized and is now on the way to production.
               
				</div>
            </div>
		</div>
	</div>
	<div id="footer">
   	  <img src="images/footer.jpg" width="960" height="50" />
  </div>
</div>
</body>
</html>

<?php endif; ?>