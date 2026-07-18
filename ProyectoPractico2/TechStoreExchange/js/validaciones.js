/*======================================================
TECHSTORE
Proyecto Práctico 2
Validaciones del Conversor de Monedas
======================================================*/

function validarMonto(monto) {
    const valor = parseFloat(monto);

    if (isNaN(valor) || valor <= 0) {
        alert("⚠️ Error: El monto ingresado debe ser un valor numérico y mayor que cero.");
        return false;
    }
    return true;
}

function validarMonedas(origen, destino) {
    if (origen === destino) {
        alert("⚠️ Error: La moneda de origen y la moneda de destino no pueden ser iguales.");
        return false;
    }
    return true;
}