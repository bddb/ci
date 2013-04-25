<h2>User List</h2>
<a href="<?= site_url('users/add')?>">新增使用者</a>
<a href="<?= site_url('users/edit')?>">修改使用者</a>
<a href="<?= site_url('users/delete')?>">刪除使用者</a>
<a href="<?= site_url('users/search')?>">查詢使用者</a>
<hr>
<?
  foreach ($users as $user) {
    echo "id: ".$user->id;
    echo "  name: ".$user->name;
    echo "  tel: ".$user->tel;
	echo "  created time: ".$user->created_at;
	echo "  updated time: ".$user->updated_at;
    echo "<br/>";
  }
?>