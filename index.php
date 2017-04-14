<html>
<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Credentials: true");
    header("Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS");
    header("Access-Control-Max-Age: 86400");
    header("Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization");
    header("Access-Control-Allow-Headers: X-Requested-With");
?>
<head>
<title>JavaScriptSpellCheck - Hello World</title>
<script type='text/javascript' src='https://nnycmspellcheck.herokuapp.com/JavaScriptSpellCheck/include.php' ></script>
<script type='text/javascript'>
$Spelling.DefaultDictionary = 'English (USA)'
$Spelling.SpellCheckAsYouType('myTextArea')
</script>
<script type='text/javascript'>
// Create the XHR object.
function createCORSRequest(method, url) {
    var xhr = new XMLHttpRequest();
    if ("withCredentials" in xhr) {
        // XHR for Chrome/Firefox/Opera/Safari.
        xhr.open(method, url, true);
    } else if (typeof XDomainRequest != "undefined") {
        // XDomainRequest for IE.
        xhr = new XDomainRequest();
        xhr.open(method, url);
    } else {
        // CORS not supported.
        xhr = null;
    }
    return xhr;
}

// Helper method to parse the title tag from the response.
function getTitle(text) {
    return text.match('<title>(.*)?</title>')[1];
}

// Make the actual CORS request.
function makeCorsRequest() {
    // This is a sample server that supports CORS.
    var url = 'https://nnycmspellcheck.herokuapp.com/JavaScriptSpellCheck/include.js';
    
    var xhr = createCORSRequest('GET', url);
    if (!xhr) {
        alert('CORS not supported');
        return;
    }
    
    // Response handlers.
    xhr.onload = function() {
        var text = xhr.responseText;
        var title = getTitle(text);
        alert('Response from CORS request to ' + url + ': ' + title);
    };
    
    xhr.onerror = function() {
        alert('Woops, there was an error making the request.');
    };
    
    xhr.send();
}

//makeCorsRequest();

</script>

</head>

<body>

<textarea name="myTextArea"  id="myTextArea" cols="50" rows="20">Hello Worlb. This Example show JavaScript Spellcheck "as-you-Type" and also spellchecking window functionality on the same page.  Implementation is easy using only a few lines of Java Script - and will work on alost all modern web hosting packages - both Linux and Windows based. </textarea>
<input type="button" value="Spell Check" onclick="$Spelling.SpellCheckInWindow('myTextArea')">
</body>
</html>
