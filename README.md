# resolucion_problema WORK

En el archivo "conex.php" archivo para la conexion, modificar, usuario y password.
La DB ya lleva la sentencia para crear la base si es que no existe.

Puede usar el usuario: super, pass: super.

A la hora de crear en usuario luego de de crearlo, tiene que asignarle una sucursal, en la opcion de administrar usuarios, del modulo usuarios, y escoger en las opciones del usuario, agregar a sucursal, y escogerla, a la hora del login entrar con ese usuario y seleccionando la sucursal a la que fue asignado.

Cuando se crea un producto este no está apto para realizar operaciones con el, por lo tanto tendra que entrar al modulo de inventario para agregar el producto, el autocomplete por momento solo funciona con el codigo del producto, luego de agregarlo a inventario ya puede realizar compras de ese producto, recordando que el producto tiene que terner un estado de "Activo", en el listado de productos, si no es asi modificarlo, para poder añadirlo a inventario.

El diagrama de la DB es un png, "DIAGRAMA_PRUEBA_WORK.png"

