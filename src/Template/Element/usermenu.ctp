<?php $session = $this->request->Session(); ?>
<?php if($session->read('Auth.User') !== null) { ?>

    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
        <?= $session->read('Auth.User.image') !== null ? $this->Html->image('/' . $session->read('Auth.User.image'), ['height' => '18', 'width' => '18', 'class' => 'img img-circle']) : ''?> <?= $session->read('Auth.User.username') ?>
        <ul class="dropdown-menu">
            <li class="text-center">
                <a href="<?= $this->Url->build(['prefix' => null, 'plugin' => 'CakeAuth', 'controller' => 'Users', 'action' => 'view', $session->read('Auth.User.id')]) ?>">
                    <?= $session->read('Auth.User.image') !== null ? $this->Html->image('/' . $session->read('Auth.User.image'), ['height' => '48', 'width' => '48', 'class' => 'img img-circle']) : '' ?><br />
                    <?= $session->read('Auth.User.username') ?><br />
                    <span class="text-gray-dark">jdmaymeow@gmail.com</span>
                </a>
            </li>
            <li role="separator" class="divider"></li>
            <li><a href="<?= $this->Url->build(['prefix' => 'admin', 'plugin' => 'CakeAuth', 'controller' => 'Users', 'action' => 'view', $session->read('Auth.User.id')]) ?>"><i class="fa fa-cog text-amethyst"></i> Settings</a></li>
            <li><a href="<?= $this->Url->build(['prefix' => false, 'plugin' => 'CakeAuth', 'controller' => 'Users', 'action' => 'logout']) ?>"><i class="fa fa-arrow-right text-amethyst"></i> Logout</a></li>
        </ul>
    </a>

<?php } else { ?>
    <li>
        <a href="<?= $this->Url->build(['prefix' => false, 'plugin' => 'CakeAuth', 'controller' => 'Users', 'action' => 'login']) ?>">Log In</a>
    </li>
    <li><a href="<?= $this->Url->build(['prefix' => false, 'plugin' => 'CakeAuth', 'controller' => 'Users', 'action' => 'add'])?>">or <span class="text-amethyst">Sign Up</span></a></li>
<?php } ?>