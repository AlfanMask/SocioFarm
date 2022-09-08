<div class="container">
  <h2>Simulasi Investasi</h2>
  <p>Harga: <span id="harga"><?= number_format(500000,0,'.','.') ?></span></p>

  <div class="row">
    <div class="col-6">
      <h5>Jumlah Lembar</h5>
      <input type="number" name="lembar" id="lembar" value="0" min="0" onchange="updateProfit()">
    </div>
    <div class="col-6">
      <h5>ROI</h5>
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
  <h5>Jumlah Lembar</h5>
  <h3 id="modal">Rp 0</h3>

  <!-- roi * modal -->
  <h5>Jumlah Lembar</h5>
  <h3 id="profit">Rp 0</h3>

  <!-- modal + profit -->
  <h5>Total Pendapatan</h5>
  <h3 id="pendapatan">Rp 0</h3>

</div>