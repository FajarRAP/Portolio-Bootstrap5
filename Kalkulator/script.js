function bersihkanLayar() {
    document.getElementById('inputan').value = "";
}

function cetakKeLayar(value) {
    document.getElementById('inputan').value += value;
}

function kalkulasi() {
    let angka = document.getElementById('inputan').value;
    let hasil = eval(angka);
    document.getElementById('inputan').value = hasil;
}