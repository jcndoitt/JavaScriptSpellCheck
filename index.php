<html>
<head>
<title>JavaScriptSpellCheck - Hello World</title>
<script type='text/javascript' src='https://nnycmspellcheck.herokuapp.com/JavaScriptSpellCheck/include.js' ></script>
<script type='text/javascript'>
$Spelling.DefaultDictionary = 'English (USA)'
$Spelling.SpellCheckAsYouType('myTextArea')
</script>

<script type='text/javascript'>
function onclick() {

    $Spelling.SpellCheckInWindow('myTextArea');
}
</script>

</head>

<body>

<textarea name="myTextArea"  id="myTextArea" cols="50" rows="20">Hello Worlb. This Example show JavaScript Spellcheck "as-you-Type" and also spellchecking window functionality on the same page.  Implementation is easy using only a few lines of Java Script - and will work on alost all modern web hosting packages - both Linux and Windows based. </textarea>

<iframe src="https://nnycmspellcheck.herokuapp.com/JavaScriptSpellCheck" name="myFrame" frameborder="0"></iframe>
<p><a href="onclick()" target="myFrame">Spell Check</a></p>

</body>
</html>
