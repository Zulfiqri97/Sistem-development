<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item  ">
            <a href="<?= base_url('user/index'); ?>" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-item  has-sub">
            <a href="<?= base_url('admin'); ?>" class='sidebar-link'>
                <!-- <i class="bi bi-stack"></i> -->
                <!-- <i class="bi bi-gear-wide-connected"></i> -->
                <i class="bi bi-file-earmark-arrow-up-fill"></i>
                <span>Report</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="">Stock Barang Tersedia</a>
                </li>
                <li class="submenu-item ">
                    <a href="">Barang Masuk</a>
                </li>
                <li class="submenu-item ">
                    <a href="">Barang Keluar</a>
                </li>
                <li class="submenu-item ">
                    <a href="">Barang Rusak</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item  ">
            <a href="application-gallery.html" class='sidebar-link'>
                <i class="bi bi-image-fill"></i>
                <span>Photo Gallery</span>
            </a>
        </li>

        <?php if (in_groups('admin')) : ?>
            <li class="sidebar-item  has-sub">
                <a href="<?= base_url('user/index'); ?>" class='sidebar-link'>
                    <i class="bi bi-person-badge-fill"></i>
                    <span>Authentication</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="<?= base_url('user/datauser'); ?>">User Management</a>
                    </li>

                </ul>
            </li>
        <?php endif; ?>

    </ul>
</div>