<?php
 ob_start();
 header("content-type: text/html; charset=utf-8");
 require('include/ayar.php');
 session_start();
if(!$_SESSION['user'])
{
    header('Location:login.php');
}
?>
   <?php include('include/header.php'); ?>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
   <?php include('include/navbar.php'); ?>

    <div class="app-body">
      <?php include('include/side.php'); ?>

        <!-- Main content -->
        <main class="main">

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Anasayfa</li>
                <!-- Breadcrumb Menu-->
               
            </ol>
            <?php
$page=@$_GET['islem'];
switch($page){
    
    case 'talepler';
    include 'talepler/talepler.php';
    break;
    
    case 'talep-ekle';
    include 'talepler/talep-ekle.php';
    break;

    case 'talep-sil';
    include 'talepler/talep-sil.php';
    break;
    
    case 'talep-duzenle';
    include 'talepler/talep-duzenle.php';
    break;

    case 'soforler';
    include 'soforler/soforler.php';
    break;
    
    case 'sofor-ekle';
    include 'soforler/sofor-ekle.php';
    break;

    case 'sofor-sil';
    include 'soforler/sofor-sil.php';
    break;
    
    case 'sofor-duzenle';
    include 'soforler/sofor-duzenle.php';
    break;

    case 'evraklar';
    include 'evraklar/evraklar.php';
    break;
    
    case 'evrak-ekle';
    include 'evraklar/evrak-ekle.php';
    break;

    case 'evrak-sil';
    include 'evraklar/evrak-sil.php';
    break;
    
    case 'evrak-duzenle';
    include 'evraklar/evrak-duzenle.php';
    break;
    default;
    include 'talepler/talepler.php';
    break;
    }
?>    
        </main>
    </div>

   <?php include('include/footer.php'); ?>