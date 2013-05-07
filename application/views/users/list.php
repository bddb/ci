<h2>查詢使用者<h2>

<?php 
 foreach ($users as $user) {
	echo "id: ".$user->id;
	echo "  name: ".$user->name;
    echo "  tel: ".$user->tel;
    echo "<br/>";
   } 
   
?>