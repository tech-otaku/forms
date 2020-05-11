document.addEventListener("DOMContentLoaded", function() {

    var formMacOSReleases = document.getElementById("macos-releases");

    formMacOSReleases.addEventListener('submit', function(event) {

        event.preventDefault();

        var URIEncodedData, XHR, divDataReturned, dataReturnedByServer;

        URIEncodedData = serialize(formMacOSReleases);
        console.log("URIEncodedData:" + URIEncodedData);

        XHR = new XMLHttpRequest();

        divDataReturned = document.getElementById('data-returned');

		XHR.responseType = 'text';

        // Fired when there is a successful response from the server, regardless of the HTTP response code i.e. 200, 404, 500 etc.
        XHR.onload = function(event) {  
            if ( XHR.status === 200 ) {
            console.log(XHR.responseText);
                dataReturnedByServer = XHR.responseText;    // 'XHR.responseText' is an HTML-formatted text string returned by 'form-request-text.php'
                divDataReturned.innerHTML = dataReturnedByServer;
            } else if ( XHR.status !== 200 ) {
                divDataReturned.innerHTML = "Request failed. A status of <b>" + XHR.status + " " + XHR.statusText + "</b> was returned.";
            }
        };

        // Fired when there's an error at the network level i.e. no Internet connection, invalid domain, cross-domain request errors etc.
        XHR.onerror = function(event) { 
            divDataReturned.innerHTML = "ERROR: Network request failed. Check your browser's JavaScript Console for more information.";
        };

        // Set up our request
        XHR.open('POST', '../form-request-text.php');

        // Add the required HTTP header for URL-encoded form data
        XHR.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        // Finally, send our data.
        XHR.send(URIEncodedData);
    });
});


// Source: https://stackoverflow.com/a/30153391
function serialize(theForm) {
    var field, s = [];
    if (typeof theForm == 'object' && theForm.nodeName.toLowerCase() == "form") {
        var len = theForm.elements.length;
        for (i=0; i<len; i++) {
            field = theForm.elements[i];
            if (field.name && !field.disabled && field.type != 'file' && field.type != 'reset' && field.type != 'submit' && field.type != 'button') {
                if (field.type == 'select-multiple') {
                    for (j=theForm.elements[i].options.length-1; j>=0; j--) {
                        if(field.options[j].selected)
                            s[s.length] = encodeURIComponent(field.name) + "=" + encodeURIComponent(field.options[j].value);
                    }
                } else if ((field.type != 'checkbox' && field.type != 'radio') || field.checked) {
                    s[s.length] = encodeURIComponent(field.name) + "=" + encodeURIComponent(field.value);
                }
            }
        }
    }
    return s.join('&').replace(/%20/g, '+');
}
