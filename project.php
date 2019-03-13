<html>
<head>
<title></title>
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
</head>
<body>
<?php
session_start();
if(!isset($_SESSION["email"])){
header("Location: index.php");
exit(); }
?>
<a href="logout.php">Logout</a>
	<div class="tab">
  <button class="tablinks" onclick="openTab(event, 'xss')">xss</button>
  <button class="tablinks" onclick="openTab(event, 'sql injection')">sql injection</button>
  <button class="tablinks" onclick="openTab(event, 'csrf')">csrf</button>
  <button class="tablinks" onclick="openTab(event, 'clickjack')">clickjack</button>
  <button class="tablinks" onclick="openTab(event, 'https')">https</button>
</div>

<div id="xss" class="tabcontent">
	<div>
		<h1>CROSS-SITE SCRIPTING(XSS)</h1>
		<p>Cross-Site Scripting attacks are a type of injection, in which malicious scripts are injected into otherwise benign and trusted websites.<br/> XSS attacks occur when an attacker uses a web application to send malicious code, generally in the form of a browser side script, to a different end user.<br/> Flaws that allow these attacks to succeed are quite widespread and occur anywhere a web application uses input from a user within the output it generates without validating or encoding it.</p>

       <p> An attacker can use XSS to send a malicious script to an unsuspecting user.<br/> The end user’s browser has no way to know that the script should not be trusted, and will execute the script. <br/>Because it thinks the script came from a trusted source, the malicious script can access any cookies, session tokens, or other sensitive information retained by the browser and used with that site.<br/> These scripts can even rewrite the content of the HTML page</p>
	</div>
	<div>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/AQUUeZNFY2I" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div>
	<div>
<iframe src="xssex.php" width="100%" height="50%" frameborder="0"></iframe>
	</div>
</div>

<div id="sql injection" class="tabcontent">
<div>
		<h1>SQL-INJECTION(SQLi)</h1>
		<p>SQL Injection refers to an injection attack wherein an attacker can execute malicious SQL statements (also commonly referred to as a malicious payload) that control a web application’s database server (also commonly referred to as a Relational Database Management System – RDBMS).<br/> Since an SQL Injection vulnerability could possibly affect any website or web application that makes use of an SQL-based database, the vulnerability is one of the oldest, most prevalent and most dangerous of web application vulnerabilities.</p>

        <p>By leveraging an SQL Injection vulnerability, given the right circumstances, an attacker can use it to bypass a web application’s authentication and authorization mechanisms and retrieve the contents of an entire database.<br/> SQL Injection can also be used to add, modify and delete records in a database, affecting data integrity.</p>

       <p>To such an extent, SQL Injection can provide an attacker with unauthorized access to sensitive data including, customer data, personally identifiable information (PII), trade secrets, intellectual property and other sensitive information.</p>
	</div>
	<div>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/nmtaPNgfi6s" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></iframe>
	</div>
		<div>
<iframe src="sqliex.php" width="100%" height="50%" frameborder="0"></iframe>
	</div>
</div>

<div id="csrf" class="tabcontent">

<div>
		<h1>CROSS-SITE REQUEST FORGERY(CSRF)</h1>
		<p>Cross-Site Request Forgery is an attack that forces an end user to execute unwanted actions on a web application in which they're currently authenticated. CSRF attacks specifically target state-changing requests, not theft of data, since the attacker has no way to see the response to the forged request. With a little help of social engineering (such as sending a link via email or chat), an attacker may trick the users of a web application into executing actions of the attacker's choosing. If the victim is a normal user, a successful CSRF attack can force the user to perform state changing requests like transferring funds, changing their email address, and so forth. If the victim is an administrative account, CSRF can compromise the entire web application.</p>
	</div>
	<div>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/tE_qHkm4X7Y" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div>

	<div>
<iframe src="csrfex.php" width="100%" height="50%" frameborder="0"></iframe>
	</div>
</div>

<div id="clickjack" class="tabcontent">

	<div>
		<h1>CLICKJACKING</h1>
		<p>Clickjacking, also known as a "UI redress attack", is when an attacker uses multiple transparent or opaque layers to trick a user into clicking on a button or link on another page when they were intending to click on the the top level page. Thus, the attacker is "hijacking" clicks meant for their page and routing them to another page, most likely owned by another application, domain, or both.</p>

       <p>Using a similar technique, keystrokes can also be hijacked. With a carefully crafted combination of stylesheets, iframes, and text boxes, a user can be led to believe they are typing in the password to their email or bank account, but are instead typing into an invisible frame controlled by the attacker.</p>
	</div>
	<div>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/oQ5lz-qbKag" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div>

	<div>
<iframe src="cjex.php" width="100%" height="50%" frameborder="0"></iframe>
	</div>
</div>

<div id="https" class="tabcontent">

<div>
		<h1>HTTP SECURE</h1>
		<p>HTTPS stands for Hypertext Transfer Protocol Secure. It is the protocol where encrypted HTTP data is transferred over a secure connection. By using secure connection such as Transport Layer Security or Secure Sockets Layer, the privacy and integrity of data are maintained and authentication of websites is also validated.</p>

        <p> HTTPS ensures data security over the network - mainly public networks like Wi-Fi. HTTP is not encrypted and is vulnerable to attackers who are eavesdropping and can gain access to website database and sensitive information. By virtue, HTTPS encryption is done bi-directionally, which means that the data is encrypted at both the client and server sides. Only the client can decode the information that comes from the server. So, HTTPS does encryption of data between a client and a server, which protects against eavesdropping, forging of information and tampering of data. </p>
        <p> But how do you ensure if you are seeing an HTTPS-enabled web page? Just check the address bar that carries the site name against different background colours with a lock icon at the left corner. However, this design can be different for different browsers. For example, consider going to a bank website, say hdfcbank.com. A non-secured HTTP will open up. But when we go to the login page, we can see an HTTPS in the address bar with some specific design. Implementation: HTTPS is mainly used by those websites which deal with monetary transactions or transfer user's personal data which could be highly sensitive. Banking websites are common examples. In layman's terms, HTTPS ensures that users watch websites that they want to watch. Data exchanged between the user and the website is not read, stolen or tampered with by a third party.</p>
	</div>
	<div>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/77gq4V_gc8E" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div>
	<div>
<iframe src="httpsex.php" width="100%" height="50%" frameborder="0"></iframe>
	</div>
</div>


<script>
function openTab(evt, attackName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(attackName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
</body>
</html>