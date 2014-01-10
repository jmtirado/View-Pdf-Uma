# View PDF UMA

Script que te permitira ver los pdfs del campus virtual en dispositivos iOS de Apple.

## Feedback

¿Preguntas? ¿Comentarios? ¿Bugs?

[GitHub Issues For All!](https://github.com/r3tikus/View-Pdf-Uma/issues)

## Instalación

* Nos dirigimos al navegador safari de nuestro iPad o iPhone. 

* Abrimos cualquier pagina y la guardamos en favorito, poniendole cualquier nombre View PDF o Descargar PDF

* Copiamos el siguiente código:

	javascript:(function(){var%20d=window.open('about:blank'),a=d.document;a.write('<!DOCTYPE%20html><html><head><title>Loading%20Source</title></head><body></body></html>');a.close();var%20b=a.body.appendChild(a.createElement('form'));b.setAttribute('method','post');b.setAttribute('action','http://www.duma.net76.net/download_uma.php?uri='+location.href);var%20c=b.appendChild(a.createElement('input'));c.setAttribute('type','hidden');c.setAttribute('name','DOM');c.setAttribute('value',encodeURIComponent(document.documentElement.innerHTML));b.submit()})()

* Abrimos el safari -> Favoritos -> Editar y seleccionamos el anteriormente creado.

* Ahora en el cuadro url, borramos la url, y pegamos el código anteriormente copiado. Para finalizar Guardamos todo.

## Uso

Una vez creado el favorito con el script, tan solo tenemos que irnos al campus virtual, entrar en la asignatura y abrir el pdf. Cuando estemos en la pantalla del pdf, nos vamos a favoritos y hacemos click en el favorito recienteme creado. 

¡Listo! Se deberia abrir una nueva pestaña con el pdf manipulable

###Aclaración
El php del git es solo lo que se ejecuta cuando hacemos la llamada, en este momento lo tengo en un servidor, por lo que no hace falta descargarselo, simplemente poniendo el trozo de javascript en el safari funciona.
	
## Contribuciones
Este código esta basado en [View Source Code](https://github.com/r3tikus/View-Source)