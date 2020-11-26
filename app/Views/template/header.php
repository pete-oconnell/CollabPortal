<!DOCTYPE html>
<html>
<head>
<title>Collaboration Portal / <?=esc($title);?></title>
<link rel="stylesheet" type="text/css" href="/css/reset.css" />
<link rel="stylesheet" type="text/css" href="/css/style.css" />

</head>
<body>
    <header>
        <div class="nav"><div class="float-left margin-5"><img src="/img/icon.png"><h1>Collaboration Portal</h1></div><div class="float-right margin-10 align-right"><?php if (isset($user[0]->fullname)) { echo "Welcome ".$user[0]->fullname."<br><a href=\"/feedback\">Feedback</a> <a href=\"/logout\">Logout</a>";} ?></div></div>
    </header>
    <div class="grid-container">
<div class="left-content"><?php include_once('left-content.php'); ?></div>
<div class="main-content">
    <?php if (isset($slug)) { ?>
<span class="slug">
<ul>
    <?php foreach ($slug as $slug_item) { echo "<li><a href=\"/".$slug_item."\">".str_replace("-", " ", $slug_item)."</a></li> ";} ?></ul><br></span><?php } ?>