<div class="navbar-form navbar-left">
    <li class="hidden-sm"><a href="#" class="btn btn-info">EN</a> </li>
</div>
<?php if(!empty($auth)) { ?>
    <li class="hidden-sm"><a href="<?= $this->Url->build(['plugin' => 'ContentManager', 'controller' => 'nodes', 'action' => 'add', 'prefix' => false]) ?>"><i class="fa fa-cloud-upload"></i> Add post</a></li>
    <li><a href="/users/login"><?= __('Hello').' '.$auth['username'] ?></a></li>
    <li><a href="/users/logout">Logout</a></li>
<?php } else { ?>
    <li class="hidden-sm"><a href="<?= $this->Url->build(['plugin' => 'ContentManager', 'controller' => 'nodes', 'action' => 'add', 'prefix' => false]) ?>"><i class="fa fa-cloud-upload"></i> Add post</a></li>
    <li><a href="/users/login">Login</a></li>
    <li><a href="/users/register">Register</a></li>
<?php } ?>