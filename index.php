<html>
<?php
    header("Access-Control-Allow-Origin: https://nnycmspellcheck.herokuapp.com");
    header("Access-Control-Allow-Credentials: true");
    header("Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS");
    header("Access-Control-Max-Age: 86400");
    header("Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization");
    header("Access-Control-Allow-Headers: X-Requested-With");
?>
<head>
<title>JavaScriptSpellCheck - Hello World</title>
<script type='text/javascript' src='https://nnycmspellcheck.herokuapp.com/JavaScriptSpellCheck/include.js' ></script>
<script type='text/javascript'>
$Spelling.DefaultDictionary = 'English (USA)'
$Spelling.SpellCheckAsYouType('myTextArea')
</script>

</head>

<body>

<textarea name="myTextArea"  id="myTextArea" cols="50" rows="20">Hello Worlb. This Example show JavaScript Spellcheck "as-you-Type" and also spellchecking window functionality on the same page.  Implementation is easy using only a few lines of Java Script - and will work on alost all modern web hosting packages - both Linux and Windows based. </textarea>
<input type="button" value="Spell Check" onclick="$Spelling.SpellCheckInWindow('myTextArea')">
</body>
</html>
