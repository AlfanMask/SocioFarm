<div class="container">
  <h5 class="h5-orange text-center" style="margin-top:20px;">SIMULASI TERNAK BEBEK</h5>

  <div class="simulasi">
    <p>Harga per lembar: Rp. <span id="harga"><?= number_format(3750000,0,'.','.') ?></span></p>
    
    <div class="row">
      <div class="col-6">
        <input type="number" name="lembar" id="lembar" value="0" min="0" onchange="updateProfit()" placeholder="Jumlah Paket">
      </div>
      <div class="col-6">
        <select name="return" id="return" onchange="updateProfit()">
          <option value="40.000">40.000</option>
          <option value="41.000">41.000</option>
          <option value="42.000">42.000</option>
          <option value="43.000">43.000</option>
          <option value="44.000">44.000</option>
          <option value="45.000">45.000</option>
        </select>
      </div>
    </div>

    <!-- lembar * harga  -->
    <div class="form-group">
      <label for="modal">Modal Investasi</label>
      <input class="input-full" type="text" name="modal" id="modal" value="" placeholder="Rp. 0" readonly>
    </div>
    <!-- roi * modal -->
    <div class="form-group">
      <label for="profit">Total Profit</label>
      <input class="input-full" type="text" name="profit" id="profit" value="" placeholder="Rp. 0" readonly>
    </div>
    <!-- modal + profit -->
    <div class="form-group">
      <label for="pendapatan">Total Pendapatan</label>
      <input class="input-full" type="text" name="pendapatan" id="pendapatan" value="" placeholder="Rp. 0" readonly>
    </div>

    <p class="info-simulasi"><i class="fa fa-info-circle" style="font-size:20px; margin-right:8px;"></i>Informasi terkait perkiraan return merupakan perkiraan berdasarkan proyek pada proposal</p>

  </div>
</div>