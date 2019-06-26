<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">

	<?php $currency= '&#108;&#101;&#105 '; //currency symbol?>

        <script src="../MyLittleCupOfTea/item-ajax.js"></script>
       <!-- //script for browser-->
        <script>
            function ajaxFunction(){
     var ajaxRequest;  // The variable that makes Ajax possible!
     try{
          // Opera 8.0+, Firefox, Safari
              ajaxRequest = new XMLHttpRequest();
     } catch (e){
          // Internet Explorer Browsers
          try{
                 ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
          } catch (e) {
                 try{
                       ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                 } catch (e){
                       // Daca ceva nu e in regula
                       alert("Your browser broke!");
                       return false;
                 }
           }
     }
}</script>
        
</head>
<body>
    <div id="header">
		<h1><a href="index.php">My little <span>Cup Of Tea</span></a></h1>
		<ul id="navigation">
			<li class="current">
				<a href="index.php">Shop</a>
			</li>
			<li>
				<a href="about.php">About</a>
			</li>
			
			<li>
				<a href="contact.php">Contact</a>
			</li>
			<li>
				<a href="tips.php">Tips</a>
			</li>
                        <li>
				<a href="login.php">Admin</a>
			</li>
		</ul>
	</div>

	<div class="container">
		

		<table class="table table-bordered">
			<thead>
			    <tr>
				<th>Denumire produs</th>
				<th>Descriere</th>
                                <th>Pret <?php echo $currency ?></th>
				
			    </tr>
			</thead>
			<tbody>
			</tbody>
		</table>

        </div>	

	      
    <div id="footer">
		<div>
			
				&copy; 2019 Danciu Teodora. All rights reserved.
			</p>
		</div>
		<div id="connect">
			<a href="https://www.facebook.com/" id="facebook" target="_blank">Facebook</a>
			<a href="https://twitter.com/" id="twitter" target="_blank">Twitter</a>
			<a href="https://plus.google.com" id="googleplus" target="_blank">Google&#43;</a>
			<a href="https://www.pinterest.com/" id="pinterest" target="_blank">Pinterest</a>
		</div>
	</div>
</body>
</html>