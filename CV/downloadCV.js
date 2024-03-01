document.getElementById('download_button').addEventListener('click', function() {
	    var printStyles = `
	    		body {
		               font-family: Arial, sans-serif;
			       margin: 0;
			      }

			#cv-container {
			   max-width: 600px;
			    margin: 20px auto;
			   }

			 h1, h2 {
			   color: #333;
			}
		`;

	    var printWindow = window.open('', '_blank');
	
	    printWindow.document.write('<html><head><title>Your CV</title></head><body>');
	    printWindow.document.write('<style>' + printStyles + '</style>');
	    printWindow.document.write(document.getElementById('cv-cont').innerHTML);
	    printWindow.document.write('</body></html>');
	    printWindow.document.close();

	    printWindow.print();
});
