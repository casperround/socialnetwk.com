0 = Public
1 = Friends
2 = Hidden
3 = Custom
4 = Only Me


	<?php

if ($permissionsoaded->type == "0"){

}
elseif ($permissionsoaded->type == "1"){

}
elseif ($permissionsoaded->type == "2"){
	
}
elseif ($permissionsoaded->type == "3"){
	
}
elseif ($permissionsoaded->type == "4"){
	
}

?>

	$permload = $con->query("SELECT * FROM permissions WHERE post_id = ('$feed->post_id') AND user_id = ('$feed->userID')");?>
	<?php while($permissionsoaded = $permload->fetch_object()): ?>

<h6><?= $permissionsoaded->type ?></h6>

<?php endwhile; ?>
					