<aside class="main-sidebar sidebar-primary position-fixed">


    <!-- Sidebar -->
    <div class="sidebar">



        <div class="text-center mt-3 py-3">
            <div class="imageLog">
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav id='sidebarNav' class="mt-2">
            <?php
echo \hail812\adminlte\widgets\Menu::widget([
    'items' => [
        ['label' => 'Tu panel', 'url' => ['site/login'], 'icon' => 'far fa-user'],
        ['label' => 'Notificaciones', 'icon' => 'far fa-bell', 'url' => ['/gii'], 'target' => '_blank'],
        ['label' => 'Pedidos', 'icon' => 'fa fa-book', 'url' => ['site/pedidos']],
        ['label' => 'Cuenta', 'icon' => 'fa fa-user-cog', 'url' => ['/debug'], 'target' => '_blank'],
        ['label' => 'Calculadora', 'icon' => 'fa fa-calculator', 'url' => ['/debug'], 'target' => '_blank'],
        ['label' => 'Créditos', 'icon' => 'fa fa-wallet', 'url' => ['/debug'], 'target' => '_blank'],
        ['label' => 'Análisis SEO', 'icon' => 'fa fa-search', 'url' => ['/debug'], 'target' => '_blank'],
    ],
]);
?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>