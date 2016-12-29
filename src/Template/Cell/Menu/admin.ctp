<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i
            class="fa fa-th text-modern"></i></a>
    <ul class="dropdown-menu">
        <?php foreach ($menu as $menuItem): ?>
            <li><a href="<?= $this->Url->build(
                    [
                        'controller' => $menuItem['controller'],
                        'plugin' => $menuItem['plugin'],
                        'action' => 'index'
                    ]); ?>"><?= $menuItem['controller'] ?></a></li>
        <?php endforeach; ?>
    </ul>

</li>
