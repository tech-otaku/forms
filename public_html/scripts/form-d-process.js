document.addEventListener("DOMContentLoaded", function() {

    var formMacOSReleases = document.getElementById("macos-releases");

    formMacOSReleases.addEventListener("submit", function (event) {

        event.preventDefault();

        var formData, XHR, divDataReturned, dataReturnedByServer;

        formData = new FormData(formMacOSReleases);  // Bind the FormData object and the form element

        XHR = new XMLHttpRequest();

        divDataReturned = document.getElementById('data-returned');
        
        XHR.responseType = 'text';  // XMLHttpRequest objects treat a JSON-encoded string as text, unlike jQuery.ajax() which treats it as a JSON object

        // Fired when there is a successful response from the server, regardless of the HTTP response code i.e. 200, 404, 500 etc.
        XHR.addEventListener("load", function(event) {  
            if ( XHR.status === 200 ) {
            	console.log(XHR.responseText);
                dataReturnedByServer = JSON.parse(XHR.responseText);    // 'XHR.responseText' is a JSON encoded string returned by 'form-request-json.php'
                divDataReturned.innerHTML = "<u>macOS (OS X) releases you have used:</u> <b>" + dataReturnedByServer['macos-releases-used'].toString().replace(/,/g, ", ") + "</b></br><u>Your favourite macOS (OS X) release:</u> <b>" + dataReturnedByServer['fav-macos-release'] + "</b>";
            } else if ( XHR.status !== 200 ) {
                divDataReturned.innerHTML = "Request failed. Returned status of " + XHR.status + " " + XHR.statusText + "</b>";
            }
        });

        // Fired when there's an error at the network level i.e. no Internet connection, invalid domain, cross-domain request errors etc.
        XHR.addEventListener("error", function(event) { 
            divDataReturned.innerHTML = "ERROR: Network request failed. Check your browser's JavaScript Console for more information.";
        });

        // Set up our request
        XHR.open("POST", '../form-request-json.php');
                
        // Add the required HTTP header for form data POST requests
        //XHR.setRequestHeader('Content-Type', 'multipart/form-data;  charset=utf-8;  boundary=' + boundary);

        // The data sent is that provided by the user on the form
        XHR.send(formData);

    });
});
