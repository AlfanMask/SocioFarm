<div class="container">
  <h5 class="h5-orange text-center" style="margin-top:20px;">SIMULASI</h5>

  <div class="simulasi">
    <p>Harga per lembar: Rp. <span id="harga"><?= number_format(500000,0,'.','.') ?></span></p>
    
    <div class="row">
      <div class="col-6">
        <input type="number" name="lembar" id="lembar" value="0" min="0" onchange="updateProfit()">
      </div>
      <div class="col-6">
        <select name="roi" id="roi" onchange="updateProfit()">
          <option value="16">16%</option>
          <option value="17">17%</option>
          <option value="18">18%</option>
          <option value="19">19%</option>
          <option value="20">20%</option>
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