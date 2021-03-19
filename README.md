# PIN AMBIENTE

Página para ver el PIN para el uso de impresoras del Ministerio de Ambiente y Desarrollo Sostenible

## Comenzando 🚀

### Pre-requisitos 📋

Tener instalada la libreria de LDAP para PHP >=5.3.7 segun el entorno.

### Instalación 🔧

1- Abrir archivo config.php que se encuentra ubicado en la carpeta _aplication/config/_ y modificar la linea 26 indicando el dominio web

2- Abrir el archivo ldap_config.php que se encuentra ubicado en la carpeta _aplication/config/_ y completar con los datos necesarios para hacer la conexion con el Active Directory

3- Abrir el archivo index.php ubicado en la carpeta raiz y modificar la linea 56 donde dice _reemplazar entorno aqui_ el cual configurara el entorno, ya sea _development, testing o production_

## Construido con 🛠️

* [Codeigniter 3.1.11](https://codeigniter.com/) - Framework PHP
* [Bootstrap 4.5](https://getbootstrap.com/) - Framework CSS
* [Fontawesome](https://fontawesome.com/) - Fuente de iconos