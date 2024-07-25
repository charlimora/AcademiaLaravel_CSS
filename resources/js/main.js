//variables para llamar a los elementos
let nav = document.getElementById('nav') /*Aquí estoy capturando los elementos del HTML*/
let menu = document.getElementById('enlaces')
let divMenu = document.getElementById('open')
let botones = document.getElementsByClassName('btn-header')
let cerrado = true

function menus(){
    let Desplazamiento_Actual = window.scrollY; /**va a guardar el valor del desplazamiento vertical en pixeles */
    if(Desplazamiento_Actual <= 300){
        nav.classList.remove('nav2') /*removemos un nombre de clase*/
        nav.className = ('nav1') /*asignamos otro nombre de clase*/
        nav.style.transition = '1s' /*cuánto tiempo tarda en pasar al otro estilo*/
        divMenu.style.color = '#fff'
    } //esta es el cierre del if
    else{  //si el desplazamiento es superior a 300
        nav.classList.remove('nav1')
        nav.className = ('nav2')
        nav.style.transition = '1s'
        divMenu.style.color = '#000'
    } 
} //cierro la función menús

function apertura(){
    if(cerrado) { //es decir si es verdadero (true)
        menu.style.width = '70vw'
        cerrado = false //como el menú está abierto entonces es falso que esté cerrado
    }
    else {
        menu.style.width = '0%'
        menu.style.overflow = 'hidden'
        cerrado = true //si lo estoy cerrando ya es verdadero que lo he cerrado
    }
} //cerramos la función

window.addEventListener('load', function() {
    menus()
}) //aquí estoy cerrando el evento para load

//vamos a programar un evento para cuando se dé click

window.addEventListener('click', function(e){
    console.log(e.target) //me va a mostrar donde estoy dando clic
    if(cerrado==false){
        let span = document.querySelector('span') //captura el primer elemento que se llame span
        if(e.target !== span && e.target !== divMenu){
            menu.style.width = '0%'
            menu.style.overflow = 'hidden'
            cerrado = true
        }
    } //cierre el if principal
}) //cierro el evento clic

window.addEventListener('scroll', function(){ //cuando se da scroll llama a menus()
    console.log(window.scrollY)
    menus()
})

window.addEventListener('resize', function(){
    //cuando se cambie el tamaño de la pantalal haga esto:
    if(screen.width>=700){
        cerrado = true //es decir que sí está cerrado
        menu.style.removeProperty('overflow')
        menu.style.removeProperty('width')
    }
}) //cierro el evento de resize o redimensionamiento de pantalla

divMenu.addEventListener('click', function(){
    apertura()
})

