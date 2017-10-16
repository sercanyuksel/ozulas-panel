<?php
// post varsa
//selam
//ceren keşke bir işi becerebilse
//dinçer neden malak
if($_POST)
{
    $talep_no=$_POST['talep_no'];
    $sofor=$_POST['sofor'];
    if(empty($talep_no) || empty($sofor))
    {
        echo '
      
        <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="alert alert-danger" style="padding:60px;">
        <h1><i class="fa fa-warning"></i> Talep numarası ve şöförü Boş Bırakamazsanız.</h1><br/>
        Yönlendiriliyorsunuz...
        </div>
        </div>
        </div>
        	
        ';
     header("Refresh:2; url=index.php?islem=talep-ekle");
    }
    else
    {
        $sth=$conn->prepare("INSERT INTO car_troubles (trouble_id,title) VALUES (?,?)");
        $sth=$sth->execute(array(
            $talep_no,$sofor
        ));
        if($sth)
        {
            echo '
            
              <div class="row justify-content-center">
              <div class="col-md-12">
              <div class="alert alert-success" style="padding:60px;">
              <h1><i class="fa fa-check-circle-o"></i> Talep Ekleme Başarılı .</h1><br/>
              Yönlendiriliyorsunuz...
              </div>
              </div>
              </div>
                  
              ';
           header("Refresh:2; url=index.php?islem=talepler");
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
           header("Refresh:2; url=index.php?islem=talep-ekle");
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
                    <strong>Talep Ekle</strong>                
                </div>
                <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <label for="company">Talep No :</label>
                        <input type="text" name="talep_no" class="form-control" id="company" placeholder="Talep no giriniz.">
                    </div>
                    <div class="form-group">
                        <label for="company">Şöför Adı :</label>
                        <input type="text" name="sofor" class="form-control" id="company" placeholder="Şöför adı giriniz.">
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