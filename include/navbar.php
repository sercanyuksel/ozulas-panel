<header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">☰</button>
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler sidebar-minimizer d-md-down-none" type="button">☰</button>

        <ul class="nav navbar-nav d-md-down-none">
            <li class="nav-item px-3">
                <a class="nav-link" href="#">Anasayfa</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="#">Araçlar</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="#">Talepler</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="#">Arızalar</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="#">Evrak Kayıt</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="#">Arşiv</a>
            </li>
        </ul>
        <ul class="nav navbar-nav ml-auto">
           
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="d-md-down-none"><?=$_SESSION['user_id']?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-center">
                        <strong>Hesap</strong>
                    </div>
                    <a class="dropdown-item" href="#"><i class="fa fa-envelope-o"></i> Mesajlar<span class="badge badge-success">42</span></a>
                    <a class="dropdown-item" href="#"><i class="fa fa-tasks"></i> Talepler<span class="badge badge-danger">42</span></a>
                    <a class="dropdown-item" href="#"><i class="fa fa-comments"></i> Arızalar<span class="badge badge-warning">42</span></a>
                    <div class="dropdown-header text-center">
                        <strong>Ayarlar</strong>
                    </div>
                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profil</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Şifre Değiştir</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Çıkış Yap</a>
                </div>
            </li>
        </ul>

    </header>
