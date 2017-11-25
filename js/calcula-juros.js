function calcula() {
    var inicial = parseFloat(document.getElementById('inicial').value);
    var aporte = parseFloat(document.getElementById('aporte').value);
    var taxa = parseFloat(document.getElementById('taxa').value);
    var meses = parseInt(document.getElementById('meses').value);
    
    for (var i = 0; i < meses; i++) {
        inicial += (inicial * (taxa / 100)) + aporte;
    }
    
    document.getElementById('resultado').innerHTML = " " + "R$" + inicial.toFixed(2);
    return false;
}