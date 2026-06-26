<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>

    <li>
        <a href="<?= $this->Url->build('/dashboard') ?>">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <?php foreach ($menus as $menu): ?>
        <li class="treeview">
            <a href="#">
                <span><?= h($menu->title) ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>

            <ul class="treeview-menu">
                <li>
                    <a href="<?= $this->Url->build('/' . $menu->table_name) ?>">
                        <i class="fa fa-list"></i> List
                    </a>
                </li>

                <li>
                    <a href="<?= $this->Url->build('/' . $menu->table_name . '/add') ?>">
                        <i class="fa fa-plus"></i> Add
                    </a>
                </li>
            </ul>
        </li>
    <?php endforeach; ?>
</ul>
