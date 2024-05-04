document.addEventListener("DOMContentLoaded", function() {

    var anchoPantalla = screen.width;
    var altoPantalla = screen.height;
    
    // Imprimir la resolución en la consola
    console.log("Ancho de la pantalla: " + anchoPantalla);
    console.log("Alto de la pantalla: " + altoPantalla);
    
        // Obtener los elementos que deseas intercambiar
        var elementoA = document.querySelector(".header-widget");
        var elementoB = document.querySelector(".main-navigation");
        
        // Obtener los padres de los elementos
        console.log(elementoA)
        console.log(elementoB)
        var padreA = elementoA.parentNode;
        var padreB = elementoA.parentNode;
        padreB.insertBefore(elementoA, elementoB); // Mueve el elementoB antes del elementoA
    /*var siguienteB = elementoB.nextSibling;*/
    //var padreB = elementoB.parentNode;
    
    // Obtener los nodos de referencia (el siguiente nodo después del elementoB)
    /*var siguienteB = elementoB.nextSibling;
    
    Intercambiar los elementos moviendo uno de ellos al lugar del otro
    padreB.insertBefore(elementoA, siguienteB);*/
});