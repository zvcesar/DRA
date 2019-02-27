var num=1;

function adelante(){
	num++;
	if (num>3)
		num=1;
	var foto=document.getElementById("foto");
	foto.src="foto"+num+".jpg";

}

function atras(){
	num++;
	if (num<1)
		num=3;
	var foto=document.getElementById("foto");
	foto.src="foto"+num+".jpg";

}
document.getElementById('popUpEmergente').addEventListener('DOMContentLoaded',
	window.onload=function(){
		document.querySelector('.popUp').style.dysplay = 'flex';
	});

/**
     * Array con las imagenes y enlaces que se iran mostrando en la web
     */
    var imagenes=new Array(
        ['../images/gym.jpg'],
        ['../images/liga.jpg'],
        ['../images/francia.jpg'],
        ['../images/premier.jpg']
    );
 
    /**
     * Funcion para cambiar la imagen y link
     */
    function rotarImagenes()
    {
        // obtenemos un numero aleatorio entre 0 y la cantidad de imagenes que hay
        var index=Math.floor((Math.random()*imagenes.length));
 
        // cambiamos la imagen y la url
        document.getElementById("imagen").src=imagenes[index][0];
    }
 
    /**
     * Función que se ejecuta una vez cargada la página
     */
    onload=function()
    {
        // Cargamos una imagen aleatoria
        rotarImagenes();
 
        // Indicamos que cada 5 segundos cambie la imagen
        setInterval(rotarImagenes,1000);
    }