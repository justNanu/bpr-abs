function choose() {
    let select = document.querySelector('.kredit');
    let kredit = select.options[select.selectedIndex].value;
    let waktu = 0;
    if(kredit == 2) {
        waktu = 96
        let options = ''
        for(let i = 6; i <= waktu; i+=6) {
            options+=`<option value=${i}>${i} Bulan</option>`;
        }
        let inp = ` 
        <label class="mr-sm-2" for="jangkaWaktu">Pilih Jangka Waktu (Bulan)</label>
        <select class="custom-select mr-sm-2" id="jangkaWaktu">
            <option selected disabled value="0">Jangka Waktu...</option>
            ${options}
        </select>`
        let waktuInput = document.querySelector('.waktu');
        waktuInput.innerHTML = inp;
    }
    
}

let inpPlafond = document.getElementById('plafond')
inpPlafond.addEventListener('input', function(e) {
    let select = document.querySelector('.kredit');
    let kredit = select.options[select.selectedIndex].value;
    if(kredit == 1) {
        let waktu = 0
        if(parseInt(e.target.value) <= 5000000) {
            waktu = 12
        }
        if(parseInt(e.target.value) > 5000000 && parseInt(e.target.value) <= 10000000) {
            waktu = 24
        }
        if(parseInt(e.target.value) > 10000000) {
            waktu = 36
        }
        let options = ''
        for(let i = 6; i <= waktu; i+=6) {
            options+=`<option value=${i}>${i} Bulan</option>`;
        }
        let inp = ` 
        <label class="mr-sm-2" for="jangkaWaktu">Pilih Jangka Waktu (Bulan)</label>
        <select class="custom-select mr-sm-2" id="jangkaWaktu">
            <option selected disabled value="0">Jangka Waktu...</option>
            ${options}
        </select>`
        let waktuInput = document.querySelector('.waktu');
        waktuInput.innerHTML = inp;
    }
})

function rincianAngsuran() {
    let select = document.querySelector('.kredit');
    let kredit = select.options[select.selectedIndex].value;
    let table = document.getElementById('tableAngsuran')
    table.innerHTML = `<div class="alert alert-danger" role="alert">
    Mohon Mengisi Semua Kolom Dengan Benar!
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>`
    if(kredit != 0) {
        let select = document.querySelector('.kredit');
        let kredit = select.options[select.selectedIndex].value;
        let plafond = document.getElementById('plafond');
        plafond = plafond.value.replace(/[^/d], ''/)
        let jangkaWaktu = document.getElementById('jangkaWaktu');
        let jangkaDiPilih = jangkaWaktu.options[jangkaWaktu.selectedIndex].value

        function numberWithDots(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        if(jangkaDiPilih != 0 && plafond > 0 ) {
            let tableCont = ""
            let bunga = 0;
            if(kredit == 1) {
                if(parseInt(plafond) <= 5000000) {
                    bunga = 2.5
                }
                if(parseInt(plafond) > 5000000 && parseInt(plafond) <= 10000000) {
                    bunga = 2
                }
                if(parseInt(plafond) > 10000000) {
                    bunga = 1.75
                }
            }
            if(kredit == 2) {
                bunga = 1.75
            }

            let sisaAngsuran = parseInt(plafond);
            let pokok = numberWithDots( Math.round(parseInt(plafond)/parseInt(jangkaDiPilih)) )
            for(let i = 1; i <= parseInt(jangkaDiPilih); i++ ) {
                if (i == parseInt(jangkaDiPilih)) {
                    pokok = numberWithDots(sisaAngsuran)
                }

                sisaAngsuran = Math.round( sisaAngsuran - Math.round(parseInt(plafond)/parseInt(jangkaDiPilih) ))
                if(i == parseInt(jangkaDiPilih)) {
                    sisaAngsuran = 0
                }
                tableCont += `<tr>
                <td scope="row">${i}</td>
                <td>Rp ${numberWithDots( Math.round(parseInt(plafond)/parseInt(jangkaDiPilih)) + ( parseInt(plafond) * (bunga/100)) )} </td>
                <td>Rp ${pokok}</td>
                <td>Rp ${numberWithDots( Math.round( parseInt(plafond) * (bunga/100) ) )}</td>
                <td>Rp ${numberWithDots(sisaAngsuran)}</td>
                </tr>`
                
            }

            table.innerHTML = ` <table class="table text-center" id="tabelAngsuran">
            <thead class="thead-dark">
            <h7 class="text-success mb-2"> Suku Bunga ${bunga}% / Bulan </h7>
                <tr>
                    <th scope="col">Angs#</th>
                    <th scope="col">Total</th>
                    <th scope="col">Pokok</th>
                    <th scope="col">Bunga</th>
                    <th scope="col">Sisa Pokok Pinjaman</th>
                </tr>
            </thead>
            <tbody>
            <tr>
            <td scope="row">0</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>Rp ${numberWithDots(plafond)}</td>
            </tr>
            
            ${tableCont}
            </tbody>
        </table>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>`
        }
    } 
    
}