<!--<a class="btn btn-inverse" href="/">Home</a>
<a class="btn btn-inverse" href="<?php eh(url('user/logout')) ?>">Logout</a>
-->
	 <h1>Member List </h1>

<?php foreach ($userlist as $k => $v): ?>
<div class="comment">
    <div class="meta">
        <?php eh($k + 1) ?>: <?php eh($v->username) ?> <?php eh($v->created) ?>
    </div>

</div>
<?php endforeach ?>