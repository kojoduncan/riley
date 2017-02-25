<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Email Emotional Response Tool</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
<style type="text/css">
/*
EmojiSymbols Font (c)blockworks - Kenichi Kaneko
http://emojisymbols.com/
*/
@font-face {
font-family: "EmojiSymbols";
src: url('fonts/EmojiSymbols-Regular.woff') format('woff');
text-decoration: none;
font-style: normal;
}
.emj {
font-family: "EmojiSymbols";
line-height: 1;
font-size: 8em;
color: #21BA45;
}
body {
background: #72c270;
font-family: 'Open Sans', sans-serif;
color: #fff;
}
h1 {
border-bottom: 1px solid #fff;
font-size: 3em;
margin: 0;
}
.content {
margin: 2em 0;
padding: 1em;
color: #fff;
}
form {
margin-top: 2em;
}
.ui.message {
background: #1678c2;
color: #fff;
font-weight: 700;
text-shadow: none;
background-image: none;
font-family: Lato,'Helvetica Neue',Arial,Helvetica,sans-serif;
}
footer {
font-size: .8em;
border-top: 1px solid #FFF;
text-align: center;
padding: 1em 0;
font-style: italic;
margin-top: 4em;
}
.ui.cards>.card {
text-align: center;
}
</style>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-7 col-md-offset-2 col-sm-offset-0 col-sm-12">
<div class="content">
<h1>B.E.R.T</h1>
<small>Badass Emotional Reaction Tool (beta)</small>
<div class="ui attached message"><p>Fill out the form below to generate your emotional response code</p></div>
<form method="post" action="" class="ui form attached raised fluid segment">
<input type="hidden" class="emotion" name="sad" value="" />
<input type="hidden" class="emotion" name="happy" value="" />
<input type="hidden" class="emotion" name="funny" value="" />
<input type="hidden" class="emotion" name="amazed" value="" />
<input type="hidden" class="emotion" name="angry" value="" />
<input type="hidden" class="emotion" name="like" value="" />
<input type="hidden" class="emotion" name="love" value="" />
<input type="hidden" class="emotion" name="dislike" value="" />	
<div class="field">
<div class="field">
<div class="ui huge input">
<input type="text" required name="subject" placeholder="Your email subject or page title">
</div>
</div>
</div>
<div class="field">
<div class="two fields">
<div class="field">
<div class="field">
<div class="ui huge input">
<input type="text" name="audience" placeholder="The audience for  your email">
</div>
</div>
</div>
<div class="field">
<div class="field">
<div class="ui huge input">
<input type="text" name="sourcecode" placeholder="Source code or tracking code">
</div>
</div>
</div>
</div>
</div>
<h4 class="ui dividing header">Select Emotions and Reactions</h4>
<div class="field">
<button type="button" class="ui right labeled icon positive small checkall button" tabindex="0">Check all <i class="down arrow icon"></i></button>
<button type="button" class="ui right labeled icon negative small uncheckall button" tabindex="0">Uncheck all <i class="down arrow icon"></i></button>
</div>
<div class="ui four cards">
<div class="card">
<div class="content">
<div class="header">Happy</div>
<div class="description">
<!--i class="smile massive green icon"></i-->
<span class="emj happy">&#x1F603;</span>
</div>
</div>
<div class="ui bottom button green">
<div data-emotion="happy" class="ui toggle happy checkbox">
<input type="checkbox" />
<label></label>
</div>
</div>
</div>
<div class="card">
<div class="content">
<div class="header">Sad</div>
<div class="description">
<!--i class="frown massive green icon"></i-->
<span class="emj sad">&#x1F629;</span>
</div>
</div>
<div class="ui bottom button green">
<div data-emotion="sad" class="ui toggle sad checkbox">
<input type="checkbox" />
<label></label>
</div>
</div>
</div>
<div class="card">
<div class="content">
<div class="header">Funny</div>
<div class="description">
<div class="description">
<!--i class="smile massive green icon"></i-->
<span class="emj funny">&#x1F606;</span>
</div>
</div>
</div>
<div class="ui bottom button green">
<div data-emotion="funny" class="ui toggle funny checkbox">
<input type="checkbox" />
<label></label>
</div>
</div>
</div>
<div class="card">
<div class="content">
<div class="header">Amazed</div>
<div class="description">
<!--i class="empty massive green star icon"></i-->
<span class="emj amazed">&#x1F62E;</span>
</div>
</div>
<div class="ui bottom button green">
<div data-emotion="amazed" class="ui toggle amazed checkbox">
<input type="checkbox" />
<label></label>
</div>
</div>
</div>
</div>
<div class="ui four cards">
<div class="card">
<div class="content">
<div class="header">Angry</div>
<div class="description">
<!--i class="meh massive green icon"></i-->
<span class="emj angry">&#x1F620;</span>
</div>
</div>
<div class="ui bottom button green">
<div data-emotion="angry" class="ui toggle angry checkbox">
<input type="checkbox" />
<label></label>
</div>
</div>
</div>
<div class="card">
<div class="content">
<div class="header">Like</div>
<div class="description">
<!--i class="thumbs massive green outline up icon"></i-->
<span class="emj like">&#x1F44D;</span>
</div>
</div>
<div class="ui bottom button green">
<div data-emotion="like" class="ui toggle like checkbox">
<input type="checkbox" />
<label></label>
</div>
</div>
</div>
<div class="card">
<div class="content">
<div class="header">Love</div>
<div class="description">
<!--i class="empty green massive heart icon"></i-->
<span class="emj love">&#x1F60D;</span>
</div>
</div>
<div class="ui bottom button green">
<div data-emotion="love" class="ui toggle love checkbox">
<input type="checkbox" />
<label></label>
</div>
</div>
</div>
<div class="card">
<div class="content">
<div class="header">Dislike</div>
<div class="description">
<!--i class="thumbs green massive outline down icon"></i-->
<span class="emj dislike">&#x1F44E;</span>
</div>
</div>
<div class="ui bottom button green">
<div data-emotion="dislike" class="ui toggle dislike checkbox">
<input type="checkbox" />
<label></label>
</div>
</div>
</div>
</div>
<br clear="all" />
<div class="ui right labeled icon primary big submit button" tabindex="0">Generate Code <i class="down arrow icon"></i></div>
<div class="ui positive message">
<div class="header">Copy and paste the code below into your email:</div>
<br clear="all" />
<div id="codeblock" style="display:none;">Derp derp derp</div>
<div id="errorblock" style="display:none;"></div>
</div>
</form>
<footer>Powered by CDR Fundraising Group</footer>
</div>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="dist/components/checkbox.js"></script>
<script src="dist/semantic.min.js"></script>
<script src="js/react.js"></script>
</body>
</html>