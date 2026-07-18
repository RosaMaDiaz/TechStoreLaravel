/*======================================================
TECHSTORE
Proyecto Práctico 2
Consumo Exchange Rate API - Dinámico
======================================================*/
const API_KEY = "4be4783393fa53f822818ea9";

// Modificamos la función para recibir la moneda base elegida por el usuario
async function obtenerTasas(monedaBase) {
    // Si por alguna razón no llega la moneda, usar USD por defecto
    const base = monedaBase || "USD"; 
    const URL_API = `https://v6.exchangerate-api.com/v6/${API_KEY}/latest/${base}`;
    
    try {
        const respuesta = await fetch(URL_API);
        console.log("Estado API:", respuesta.status);
        if (!respuesta.ok) {
            throw new Error("Error HTTP: " + respuesta.status);
        }
        const datos = await respuesta.json();
        console.log("Datos recibidos:", datos);
        return datos;
    } catch (error) {
        console.error("Error API:", error);
        return null;
    }
}