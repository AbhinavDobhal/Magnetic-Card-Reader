<html>
	<head>
		<script type="text/javascript" src="jquery-1.7.2.js"></script>
		<script type="text/javascript" src="jquery.cardswipe.js"></script>
		<title>Magnetic Card Reader</title>
	</head>
	<body bgcolor="black">
     <font color="#FFFFFF" >
		<center>
        	<h1>Magnetic Card Reader</h1>
                  <hr width="50%">
			[1] : Plug-In Your Magnetic Stripe/Card Reader in USB Port.
			<br/>
			<br/>

<img src="card.png" alt="Card Reader" height="100" width="200">
         <br/>
		 <br/>

            [2] : Scan/Swipe Your Card  using "Magnetic Card Reader".&nbsp;&nbsp;&nbsp;


        </center>
	</font>
    
    
	
	<script type="text/javascript">
		// Parses raw scan into name and ID number
		var companyCardParser = function (rawData) {
			text="
			
			
			Raw or Un-Processed Data From Your Magnetic Card: " + rawData;
            alert(text);
			cardData=rawData;
			return cardData;
		};

		// Initialize the plugin.
		$.cardswipe({
			parser: companyCardParser
		});
		</script>
   
   </body>
</html>
