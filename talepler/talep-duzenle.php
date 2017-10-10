<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12   ">

            <div class="card">
                <div class="card-header">
                    <strong>Talep Ekle</strong>                
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="company">Araç No:</label>
                        <input type="text" class="form-control" id="company" placeholder="Arıza yapan araçın numarası">
                    </div>

                    <div class="form-group">
                        <label for="vat">Arıza Tipi</label>
                        <select id="select" name="select" class="form-control">
                            <option value="0">Arıza Tip 1</option>
                            <option value="1">Arıza Tip 2</option>
                            <option value="2">Arıza Tip 3</option>
                            <option value="3">Arıza Tip 4</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="street">Arıza Başlığı</label>
                        <input type="text" class="form-control" id="street" placeholder="Arıza Başlığını Girin">
                    </div>

                   
                    <div class="form-group">
                        <label for="city">Şöför</label>
                        <select id="select" name="select" class="form-control">
                            <option value="0">Şöför 1</option>
                            <option value="1">Şöför 2</option>
                            <option value="2">Şöför 3</option>
                            <option value="3">Şöför 4</option>
                        </select>
                    </div>    

                    <div class="form-group">
                        <label for="street">Açıklama</label>
                        <textarea rows="10" class="form-control" id="street" placeholder="Arıza Açıklamasını Girin"></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-dot-circle-o"></i> Üzerine Al</button>
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Talebi Kapat</button>
                </div>
            </div>

        </div>
    </div>
</div>