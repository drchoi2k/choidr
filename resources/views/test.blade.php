<!doctype html>
<html lang="en">
<head>
<title>Lavalamp Example</title>

<link href="/css/examples.css" rel="stylesheet" type="text/css">
<link href="/css/basic.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.lavalamp.js"></script>

<script type="text/javascript">
$(function() {
    $('.lavalamp-basic').lavalamp();
});

</script>

</head>
<body>
    <div class="container">
        <h1>Basic setup</h1>
        <ul class="lavalamp-basic">
            <li><a href="http://localhost:8000/test#">Home</a></li>
            <li><a href="http://localhost:8000/test#">About</a></li>
            <li><a href="http://localhost:8000/test#">Blog</a></li>
            <li><a href="http://localhost:8000/test#">Contact</a></li>
        </ul>

    </div>

    <a id="dotsunited-tab" href="http://dotsunited.de">Dots United - Agentur für neue Medien</a>
    <a href="http://github.com/dotsunited/jquery-lavalamp"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_gray_6d6d6d.png" alt="Fork me on GitHub"></a>
</body>
</html>