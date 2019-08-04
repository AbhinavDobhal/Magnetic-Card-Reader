<script type="text/javascript">
		// Parses raw scan into name and ID number
		var companyCardParser = function (rawData) {
			text="\t\tRaw or Un-Processed Data From Your Magnetic Card is as Following : \n\t\t\t\t\t--------------------------------------\n\t\t\t\t\t\t" + rawData + "\n\t\t\t\t\t--------------------------------------\n\t\t:- Apply the Regular Expression according to your card data.\n\t\t:- This script is capable to read the data from all 3 tracks.\n\t\t:- Feel free to modify the script as per your requirement.";
            alert(text);
			cardData=rawData;
			return cardData;
		};

		// Initialize the plugin.
		$.cardswipe({
			parser: companyCardParser
		});
		</script>