Themeideas
===

Themeideas es un theme para WordPress pensado en ser el punto de partida para la creación de otros themes.

Contiene un CSS ultra-mínimo lo que le da estilo a lo escencial, estás son algunas de las características de este theme:

* Cantidad justa de código, bien comentado, moderno y basado en HTML5.
* Una útil plantilla para páginas de error 404.
* Una implentación de muestra de los _custom headers_ en `inc/custom-header.php` la cual puede ser activada descomentando una línea en `functions.php` y añadiendo el fragmento de código encontrado en los comentarios de `inc/custom-header.php` a la plantilla `header.php`.
* Unas _template tags_ personalizadas en `inc/template-tags` lo cual te ayuda a mantener tus plantillas limpias y ordenadas previniendo el código duplicado.
* Algunos pequeños ajustes en `/inc/extras.php` que pueden mejorar yu experiencia al desarrollar un Theme.
* Navegación mediante el teclado para las plantillas de adjuntos de imagen. El script se encuentra en `js/keyboard-navigation.js`. Se pone en cola en functions.php.
* Un script en `js/small-menu.js` que convierte al menú en un menú desplegable en pantallas pequeñas (cómo las de un teléfono), listo para artistas del CSS. Se pone en cola en functions.php.
* 5 _layouts_  de ejemplo en `/layouts`: Dos barras laterales a la izquierda, dos barras laterales a la derecha, una barra lateral a ambos lados de su contenido y diseños de dos columnas con barras laterales a ambos lados.
* CSS organizado inteligentemente que te ayudará a conseguir rápidamente tu diseño deseado.
* La licencia GPL en `license.txt`. :) úsalo para hacer algo cool.

Primeros pasos
---------------

Lo primero que debes hacer el copiar el directorio `themeideas` y cambiar el nombre por algo más acorde a lo que vas a diseñar, por ejemplo `supertheme` y después tendrás que realizar los siguientes pasos de búsqueda y reemplazo del nombre el todas las plantillas del Theme.

1. Buscar `'themeideas'` (dentro de comillas simples) para capturar el `text domain`.
2. Buscar `themeideas_` para capturar todos los nombres de las funciones.
3. Buscar ` themeideas` (con un espacio antes de) para capturar los DocBlocks.
4. Buscar `themeideas-` para capturar los manejadores con prefijo.

O

* Buscar: `'themeideas'` y reemplazar por: `'supertheme'`
* Buscar: `themeideas_` y reemplazar por: `supertheme_`
* Buscar: <code>&nbsp;themeideas</code> y reemplazar por: <code>&nbsp;supertheme</code>
* Buscar: `themeideas-` y reemplazar por: `supertheme-`

A continuación, actualiza la cabecera de estilo en `style.css` y los enlaces en `footer.php` con tu propia información. A continuación, actualiza o borra este archivo readme.

¡Ahora que ya está listo! El siguiente paso es fácil de decir pero difícil de hacer: hacer un tema impresionante para WordPress. :)

¡Buena suerte!
