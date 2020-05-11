document.addEventListener("DOMContentLoaded", function() {

    var formMacOSReleases = document.getElementById("macos-releases");

    formMacOSReleases.addEventListener("submit", function (event) {

        event.preventDefault();

        var formData, divDataReturned;

        formData = new FormData(formMacOSReleases);  // Bind the FormData object and the form element
 
        divDataReturned = document.getElementById('data-returned');
        
        fetch('../form-request-json.php', {
  			method: 'POST',
  			body: formData
		})
		.then(
			function(response) {
				if (response.ok) {
					console.log(response.url)
					return response.json();     // 'response.json()' is a JSON object derived from the JSON-encoded string returned by 'form-request-json.php'
				} else {
					return "Request failed. A status of <b>" + response.status + " " + response.statusText + "</b> was returned.";
        		}
			})
		.then(
			function(dataReturnedByServer) { 
				console.log(dataReturnedByServer);		
				if (JSON.stringify(dataReturnedByServer).indexOf("Request failed") !== -1) {
					divDataReturned.innerHTML = dataReturnedByServer;
				} else {
					divDataReturned.innerHTML = "<u>macOS (OS X) releases you have used:</u> <b>" + dataReturnedByServer['macos-releases-used'].toString().replace(/,/g, ", ") + "</b></br><u>Your favourite macOS (OS X) release:</u> <b>" + dataReturnedByServer['fav-macos-release'] + "</b>";
				}
			})
		;

    });	// formMacOSReleases.addEventListener
});	// document.addEventListener
