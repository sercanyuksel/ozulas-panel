<?php
$id=$_GET['id'];
$sth=$conn->prepare("SELECT * from drivers WHERE id=?");
$sth->execute(array(
    $id
));
$driver=$sth->fetch(PDO::FETCH_ASSOC);
if($_POST)
{
    $ad=$_POST['ad'];
    $soyad=$_POST['soyad'];
    $tc=$_POST['no'];
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
     header("Refresh:2; url=index.php?islem=sofor-duzenle");
    }
    else
    {
        $sth=$conn->prepare("UPDATE drivers SET name=?,surname=?,no=?,phone=?,adress=? WHERE id=?");
        $sth=$sth->execute(array(
            $ad,$soyad,$tc,$telefon,$adres,$id
        ));
        if($sth)
        {
            echo '
            
              <div class="row justify-content-center">
              <div class="col-md-12">
              <div class="alert alert-success" style="padding:60px;">
              <h1><i class="fa fa-check-circle-o"></i> Şöför Düzenleme Başarılı .</h1><br/>
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
           header("Refresh:2; url=index.php?islem=sofor-duzenle");
        }
    }
    
}else{
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12   ">

            <div class="card">
                <div class="card-header">
                    <strong>Şöför Düzenle</strong>                
                </div>
                <div class="card-body">
                <form METHOD="POST">
                    <div class="form-group">
                        <label for="company">Ad :</label>
                        <input type="text" name="ad" value="<?=$driver['name']?>" class="form-control" id="company">
                    </div>

                    <div class="form-group">
                        <label for="company">Soyad :</label>
                        <input type="text" name="soyad" value="<?=$driver['surname']?>" class="form-control" id="company" >
                    </div>

                    <div class="form-group">
                        <label for="street">Tc No:</label>
                        <input type="text" name="no" value="<?=$driver['no']?>" class="form-control" id="street">
                    </div>

                    <div class="form-group">
                        <label for="company">Telefon:</label>
                        <input type="text" name="telefon" value="<?=$driver['phone']?>" class="form-control" id="company" >
                    </div>
                  
                    <div class="form-group">
                        <label for="street">Adress</label>
                        <textarea rows="10" name="adres" class="form-control" id="street" ><?=$driver['adress']?></textarea>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary px-4">Düzenle</button>
                        </div>
                    </div>
                    </form>
                </div>
                
               

            </div>

        </div>
    </div>
</div>
<?php } ?>