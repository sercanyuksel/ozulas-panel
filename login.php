
<?php
 ob_start();
 header("content-type: text/html; charset=utf-8");
 require('include/ayar.php');
 session_start();
?>
<body class="app flex-row align-items-center">
<?php include('include/header.php');
    if(@$_SESSION['user'])
    {
        echo '
        <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-6 text-center">
        <div class="alert alert-success" style="padding:60px;">
        <h1><i class="icon-login"></i> Oturum açıldı.</h1><br/>
        Yönlendiriliyorsunuz...
        </div>
        </div>
        </div>
        </div>	
        ';
    header("Refresh:2; url=index.php");
    }
    else
    {
        if($_POST)
        {
            $username=$_POST['username'];
            $password=$_POST['password'];
            $sth=$conn->prepare("SELECT * from users WHERE username=? AND password=?");
            $sth->execute(array(
                $username,$password
            ));
            $user=$sth->fetch(PDO::FETCH_ASSOC);
            if($sth->rowCount()>0)
            {
                $_SESSION['user_id']=$user['id'];
                $_SESSION['user']=true;
                echo '
                <div class="container">
                <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                <div class="alert alert-success" style="padding:60px;">
                <h1><i class="icon-login"></i> Oturum açıldı.</h1><br/>
                Yönlendiriliyorsunuz...
                </div>
                </div>
                </div>
                </div>	
                ';
                header("Refresh:2; url=index.php");                
            }
        }
        else
        {
?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card-group mb-0">
                    <div class="card p-4">
                        <div class="card-body">     
                                        <h1>Yönetim Paneli</h1>
                                        <p class="text-muted">Lütfen Giriş Yapın</p>
                                        <form method="POST">
                                        <div class="input-group mb-3">
                                            <span class="input-group-addon"><i class="icon-user"></i>
                                            </span>
                                            <input type="text" name="username" class="form-control" placeholder="E-Mail">
                                        </div>
                                        <div class="input-group mb-4">
                                            <span class="input-group-addon"><i class="icon-lock"></i>
                                            </span>
                                            <input type="password" name="password" class="form-control" placeholder="Şifre">
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="submit" class="btn btn-primary px-4">Giriş</button>
                                            </div>
                                            <div class="col-6 text-right">
                                                <button type="button" class="btn btn-link px-0">Şifremi Unuttum?</button>
                                            </div>
                                        </div>
                                        </form>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</body>
</html>
	<?php }} ?>