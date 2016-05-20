<?php $myfeed = $db->query("SELECT DISTINCT users.id, users.firstname, users.lastname, 
    media.date, media.time, media.text, media.userID, media.author_id, media.ip, media.post_id, media.format, media.file_format, media.MediaTxt, media.author_firstname, media.author_lastname, media.shared, media.relation
FROM users 
JOIN friends
    ON users.id IN (friends.sender, friends.recipient)
JOIN media 
    ON (users.id = media.userID)
WHERE ".$_SESSION["user"]["id"]." IN (friends.sender,friends.recipient) 
    AND friends.status = 1
	AND media.relation = 'feed'
	ORDER BY media.date DESC, media.time DESC");  ?>
<?php while($feedme = $myfeed->fetch_object()): ?>

<div class="feed" id="">

    <div class="feedtext">
<h4 class="feedfontname"><?= $feedme->firstname ?> <?= $feedme->lastname ?></h4> <h4 style="color:gray"><?= $feedme->shared ?> <?= $feedme->author_firstname ?> <?= $feedme->author_lastname ?></h4>

<h6 class="feedfontstyle"><?= $feedme->MediaTxt ?></h6>
<html class="HtmlFeed">

<<?= $feedme->format ?> class="feedfontstyle" src="media/<?= $feedme->file_format ?>/<?= $feedme->post_id ?><?= $feedme->author_id ?>.<?= $feedme->file_format ?>"  controls onerror="this.src='default.png'"><?= $feedme->text ?></<?= $feedme->format ?>>