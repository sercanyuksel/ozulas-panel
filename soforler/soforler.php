<?php
$drivers=$conn->query("SELECT * from drivers",PDO::FETCH_ASSOC);

?>
<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i> Şöförler
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-striped table-sm">
                                        <thead>
                                            <tr>
                                                <th>Ad</th>
                                                <th>Soyad</th>
                                                <th>Tc NO</th>
                                                <th>Doğum Tarihi</th>
                                                <th>Telefon</th>
                                                <th>Adres</th>
                                                <th>İşlemler</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        if($drivers->rowCount()>0){
                                        foreach($drivers as $driver){ 
                                            ?>
                                           <tr>
                                                <td><a href="index.php?islem=sofor-duzenle&id=<?=$driver['id']?>"><?=$driver['name']?></a></td>
                                                <td><?=$driver['surname']?></td>
                                                <td><?=$driver['no']?></td>
                                                <td><?=$driver['birthdate']?></td>
                                                <td><?=$driver['phone']?></td>
                                                <td><?=$driver['adress']?></td>
                                                <td class="text-center"><a href="index.php?islem=sofor-duzenle" title="incele"><i class="icon-magnifier"></i></a> | <a href="index.php?islem=sofor-sil&id=<?=$driver['id']?>" title="Sil"><i class="icon-close"></i></a></td>
                                           </tr>
                                        <?php }}else{
                                           echo' Kayıt Bulunamadı.';
                                        } ?>
                                        </tbody>
                                    </table>
                                    <nav>
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Prev</a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">4</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                         
                            </div>
                            </div>
                    </div>
            </div>

