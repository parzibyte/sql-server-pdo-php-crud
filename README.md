# Conexión de SQL Server con PHP usando PDO
Mira el tutorial aquí: [https://parzibyte.me/blog/2019/06/05/conectar-php-sql-server-pdo-crud-ejemplo/](https://parzibyte.me/blog/2019/06/05/conectar-php-sql-server-pdo-crud-ejemplo/)

Aprovechando que para unas cosas de la escuela tuve que instalar SQL Server y SQL Server Management Studio (ya que por voluntad propia no lo haría jamás) decidí  **conectar PHP con SQL Server**  y hacer un  **CRUD**, es decir, create, read, update y delete de una base de datos de SQL Server.

Al final tendremos una aplicación web como la siguiente, basada en una  [plantilla de Bootstrap 4](https://parzibyte.me/blog/2019/05/09/plantilla-inicial-bootstrap-4-starter-template/).

[![](https://i2.wp.com/parzibyte.me/blog/wp-content/uploads/2019/06/SQL-Server-y-PHP.png?resize=750%2C361&ssl=1)](https://i2.wp.com/parzibyte.me/blog/wp-content/uploads/2019/06/SQL-Server-y-PHP.png?ssl=1)

## Preparar entorno

Recuerda  [instalar SQL Server](https://parzibyte.me/blog/2019/05/15/instalar-sql-server-2016-windows-10/) y  [SSMS](https://parzibyte.me/blog/2019/05/15/instalacion-microsoft-sql-server-management-studio-windows-10/)  para que puedas probar la conexión. También te sugiero  [crear un nuevo usuario](https://parzibyte.me/blog/2019/06/03/anadir-usuario-sql-server-nuevo-inicio-sesion/)  y darle permiso de acceso a las bases de datos.

Un paso obligatorio es  [instalar la extensión de SQL Server en PHP](https://parzibyte.me/blog/2019/06/05/instalar-extension-pdo-sql-server-pdo-php/).