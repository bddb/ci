<h2>新增使用者</h2>
<form action="<?= site_url('users/created')?>" method="post">
ID : <input name="id" type="text"><br/>
Name : <input name="name" type="text"><br/>
Tel : <input name="tel" type="text"><br/>
Created time : <input name="created_at" type="text"><br/>
Update time : <input name="updated_at" type="text"><br/>
<input type="submit">
</form>