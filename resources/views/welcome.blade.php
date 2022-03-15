<head>
      <meta charset="utf-8">
      <title>Bayar Aja</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="center">
         <input type="checkbox" id="show">
         <label for="show" class="show-btn">Bayar Aja</label>
         <div class="container">
            <label for="show" class="close-btn fas fa-times" title="close"></label>
            <div class="text">
               Konfirmasi Bayar
            </div> <br>
            <form action="#">
            <h4>Nama Pembayar/Rekening</h4>
                <div> <input class="form-control" type="text" required>
          
                  
            <div> <h4>Pilih Bank</h4>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                Bank BNI
                </label>
                
                <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                Bank BCA
                </label>
            
                <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                <label class="form-check-label" for="flexRadioDefault3">
                Bank BRI
                </label>
                
                <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
                <label class="form-check-label" for="flexRadioDefault4">
                Bank Mandiri
                </label>
                </div>
                <h4>Tanggal Pembayaran</h4>
                <input type="date">
                </div>
                <h4>Bukti Pembayaran</h4>
                <input class="form-control" type="file" id="formFile" required>
                </div>
                <div class="btn">
                  <div class="inner"></div>
                  <button type="submit">Bayar</button>
               </div>
               
            </form>
         </div>
      </div>
   </body>