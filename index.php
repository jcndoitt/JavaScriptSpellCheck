<?php header("Access-Control-Allow-Origin: *"); ?>
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
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

