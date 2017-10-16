<?php
// post varsa
//selam
//ceren keşke bir işi becerebilse
//dinçer neden malak
if($_POST)
{
    $ad=$_POST['ad'];
    $soyad=$_POST['soyad'];
    $tc=$_POST['tc'];
    $dt=$_POST['dt'];
    $telefon=$_POST['telefon'];
    $adres=$_POST['adres'];

    if(empty($ad) || empty($soyad))
    {
        echo '
      
        <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="alert alert-danger" style="padding:60px;">
        <h1><i class="fa fa-warning"></i> Ad veya Soyadı Boş Bırakamazsanız.</h1><br/>
        Yönlendiriliyorsunuz...
        </div>
        </div>
        </div>
        	
        ';
     header("Refresh:2; url=index.php?islem=sofor-ekle");
    }
    else
    {
        $sth=$conn->prepare("INSERT INTO drivers (name,surname,no,birthdate,phone,adress) VALUES (?,?,?,?,?,?)");
        $sth=$sth->execute(array(
            $ad,$soyad,$tc,$dt,$telefon,$adres
        ));
        if($sth)
        {
            echo '
            
              <div class="row justify-content-center">
              <div class="col-md-12">
              <div class="alert alert-success" style="padding:60px;">
              <h1><i class="fa fa-check-circle-o"></i> Şöför Ekleme Başarılı .</h1><br/>
              Yönlendiriliyorsunuz...
              </div>
              </div>
              </div>
                  
              ';
           header("Refresh:2; url=index.php?islem=soforler");
        }
        else
        {
            echo '
            
              <div class="row justify-content-center">
              <div class="col-md-12">
              <div class="alert alert-danger" style="padding:60px;">
              <h1><i class="fa fa-warning"></i>Beklenmeyen bir hata oluştu.</h1><br/>
              Yönlendiriliyorsunuz...
              </div>
              </div>
              </div>
                  
              ';
           header("Refresh:2; url=index.php?islem=sofor-ekle");
        }
    }
    
}
else{
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12   ">

            <div class="card">
                <div class="card-header">
                    <strong>Şöför Ekle</strong>                
                </div>
                <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <label for="company">Tc No :</label>
                        <input type="text" name="tc" class="form-control" id="company" placeholder="Şöför TC Kimlik Numarasını Giriniz.">
                    </div>
                    <div class="form-group">
                        <label for="company">Ad :</label>
                        <input type="text" name="ad" class="form-control" id="company" placeholder="Şöför Adını Giriniz.">
                    </div>

                    <div class="form-group">
                        <label for="company">Soyad :</label>
                        <input type="text" name="soyad" class="form-control" id="company" placeholder="Şöför Soyadını Giriniz.">
                    </div>

                    <div class="form-group">
                        <label for="company">Doğum Tarihi :</label>
                        <input type="date" name="dt" class="form-control col-sm-12 col-md-4" id="company" placeholder="Şöför Doğum Tarihini Giriniz.">
                    </div>

                    <div class="form-group">
                        <label for="street">Telefon</label>
                        <input type="text" name="telefon" class="form-control" id="street" placeholder="Şöför Telefonunu Giriniz.">
                    </div>

                    <div class="form-group">
                        <label for="street">Adres</label>
                        <textarea  rows="4" name="adres" class="form-control" id="street" placeholder="Şöför Adresini Giriniz."></textarea>
                    </div>

                    <div class="form-group">
                       
                            <div class="alert alert-danger" style="padding:20px;">
                                <h2><i class="fa fa-warning"></i> Beklenmeyen bir hata oluştu.</h2>
                            </div>
                
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary px-4">Ekle</button>
                        </div>
                    </div>

                </form>
                </div>
            </div>

        </div>
    </div>
</div>
<?php } ?>