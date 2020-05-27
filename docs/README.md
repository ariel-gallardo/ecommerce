# Desarrollo de un e-commerce
Este ecommerce esta desarrollado para que existan tres tipos de usuario, un usuario que aun no esta registrado, el usuario registrado y el administrador de la pagina.

  * Usuario no registrado
    * Agrega / Quita productos existentes del carro pero no comprar.
  * Usuario registrado
    * Agrega / Quita productos existentes del carro y puede comprar.
  * Administrador de la pagina:
    * Puede crear / modificar / eliminar productos de la pagina.
    * Puede modificar el nombre base de la e-commerce.
    * Puede crear / modificar / eliminar datos de la sucursal.
      * Datos de la sucursal
        * Dirección
        * Teléfono
        * Correo electrónico
---------------------------------------------------
# Home (Sección Principal)
### Barra de navegación(En la parte superior de la pagina)

  * #### F.A.Q
Un enlace con acceso a una pagina(sección secundaria) con las preguntas mas frecuentes

* #### Acceso al perfil del usuario o Formulario de login
  * Esta sección es para que el usuario ingrese al sistema mediante un formulario de Login se le solicitara al usuario correo electrónico y contraseña. o se vea parcialmente ingresado en el e-commerce, si hace click lo llevara a una sección secundaria para ver información acerca del perfil del usuario y sus compras realizadas.

* #### Enlace de registro
  * Una pregunta acerca de si se quiere registrar la persona que tendrá acceso a una sección secundaria junto al formulario de login que sea capaz de registrar al usuario en el sistema cuando no esta logueado.

* #### Carro de compras  
  * Al hacer click lo llevara a una sección secundaria en donde podrá revisar los artículos que se quieran comprar.

### Cuerpo de la pagina

  * #### Productos
      * Un lugar en donde se puedan visualizar todos los productos con sus detalles del sistema limitando cierta capacidad por pagina para no tener una carga lenta de la pagina.

  * #### Detalle de producto
      * Una porción de la sección de productos en donde se muestra un producto con su nombre, descripción, representación grafica, un botón para agregar al carro y al lado la cantidad que se quiera ingresar por debajo un calculo del subtotal actual a ingresar al carro.

### Pie de la pagina
  * Dirección de la sucursal
  * Numero telefónico sucursal
  * Horario de atención de sucursal
  * Correo electrónico de sucursal
-------------------------------------------------------

-------------------------------------------------------
# Secciones Secundarias

 * #### Sección de Preguntas frecuentes
   * ¿Qué es el carro de compras? ¿Cómo lo puedo ver?
   * ¿Cómo agrego productos al carro de compras?     
   * ¿Qué es un usuario?                             
   * ¿Cómo me registro en el sistema como usuario?   
   * ¿Cómo accedo al sistema siendo un usuario?     
   ..........................
 * #### Formulario de Registro
  * Permite el registro de un usuario en el e-commerce siempre y cuando no este logueado o no exista, va a requerir los siguientes datos nombre/s, apellido/s, domicilio, teléfono, correo electrónico, contraseña, confirmación de contraseña.

 * #### Formulario de Perfil de Usuario
  * ##### Información de perfil
    * Permite usuario sea capaz de visualizarse en el e-commerce y modificar o agregar sus datos siempre y cuando exista en el sistema de e-commerce. En este formulario el usuario no puede editar el correo electrónico pero si el resto de los datos, además de poder visualizarlos.
  * ##### Compras realizadas
    * Se pueden ver las compras realizadas en detalle es decir se ven todos los detalles de factura y la fecha | hora de cuando se realizo la compra.
 * #### Carro de compras
    * Se lograra visualizar cada detalle de factura agregado es decir miniatura de foto del producto, nombre del producto, cantidad, sub total. Aquí el usuario puede quitar los productos con una X; Tendrá la posibilidad de realizar el pago si el usuario esta conforme con la compra, pero para realizar la compra le solicitara que se registre en el sistema si no es usuario aún. Una vez que el usuario realice la compra se almacena la factura con cada detalle de factura en el perfil del usuario junto con la fecha y hora.
-------------------------------------------------------
