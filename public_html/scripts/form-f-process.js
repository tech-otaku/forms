$( function() {     // Replaces deprecated $( "document" ).ready( handler ). Source:https://api.jquery.com/ready
    $("#macos-releases").submit( function(event) {

        event.preventDefault();

        var formMacOSReleases, formData, divDataReturned;

        formMacOSReleases = $('#macos-releases')[0];

        formData = new FormData(formMacOSReleases);    // Bind the FormData object and the form element

        divDataReturned = $("#data-returned");

        $.ajax( {
            method: "POST",
            dataType: "json",       // A JSON-encoded string appears to be treated as a JSON object, unlike an XMLHttpRequest object which treats it as text.
            contentType: false,		// Will throw an error when using a FormData object if omitted or set to anything other than 'false'  
            processData: false,		// Will throw an error when using a FormData object if omitted or set to 'true' (default) 
            url: "../form-request-json.php",
            data: formData,
            success: function( dataReturnedByServer, textStatus, jqXHR ) {
                divDataReturned.html("<u>macOS (OS X) releases you have used:</u> <b>" + dataReturnedByServer['macos-releases-used'].toString().replace(/,/g, ", ") + "</b><br><u>Your favourite macOS (OS X) release:</u> <b>" + dataReturnedByServer['fav-macos-release'] + "</b><br>");
            },
            error: function ( jqXHR, textStatus, errorThrown ) {
                if ( jqXHR.readyState === 4 ) {
                    divDataReturned.html("Request failed. Returned status of <b>" + jqXHR.status + " " + textStatus + " - " + errorThrown + "</b>");
                } else if ( jqXHR.readyState === 0 ) {
                    divDataReturned.html("ERROR: Network request failed. Check your browser's JavaScript Console for more information.");
                } else {
                    // Something wierd just happened!
                }
            }
        } );
    } );
} );
