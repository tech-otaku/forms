$( function() {     // Replaces deprecated $( "document" ).ready( handler ). Source:https://api.jquery.com/ready
    $("#macos-releases").submit( function(event) {

        event.preventDefault();

        var URIEncodedData, divDataReturned;

        URIEncodedData = $(this).serialize();

        divDataReturned = $("#data-returned");

        $.ajax( {
            method: "POST",
            dataType: "text",
            contentType: "application/x-www-form-urlencoded",   // Can be omitted or only set to 'application/x-www-form-urlencoded' when using URL-encoded form data   
            processData: true,	// Can be omitted or only set to 'true' when using URL-encoded form data
            data: URIEncodedData,
            url: "../form-request-text.php",
            success: function( dataReturnedByServer, textStatus, jqXHR ) {  // 'dataReturnedByServer' is an HTML-formatted text string returned by 'form-request-text.php'
                divDataReturned.html(dataReturnedByServer);
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
        //return false;
    } );
} );
