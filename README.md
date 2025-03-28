
# 📚 Despliegue de Drupal
Este proyecto utiliza Docker y Docker Compose para desplegar un Drupal y una base de datos MariaDB de manera rápida y sencilla.



## 🛠️ Requisitos Previos
Antes de comenzar, asegúrate de tener instalados en tu sistema:

- [Docker](https://docs.docker.com/get-docker/)
- [Docker Compose](https://docs.docker.com/compose/install/)


## 🚀 Instalación y Puesta en Marcha

### 1️⃣ Clonar el repositorio
Ejecuta el siguiente comando para clonar el proyecto:
```bash
git clone git@github.com:campus-CodeArts/onboarding-drupal-beatle.git
```

### 2️⃣ Levantar los contenedores
Para iniciar los servicios en segundo plano ejecuta dentro de la carpeta:
```bash
docker compose up -d
```
📌 **Nota:** La primera vez que inicies los servicios, puede tardar un rato en configurarse completamente.

### 3️⃣ Verificar que los contenedores están corriendo
Comprueba el estado de los contenedores con:
```bash
docker ps
```
Deberías ver dos contenedores en ejecución: **drupal_app**, y **drupal_db**.

### 4️⃣ Acceder a Drupal

  ```
  http://localhost:8080
  ```

## 🔄 Detener y Reiniciar los Contenedores
Si deseas detener los contenedores en ejecución:
```bash
docker compose down
```
Para volver a iniciarlos:
```bash
docker compose up -d
```

## 🧹 Eliminar los Contenedores y Datos Persistentes
Si quieres eliminar los contenedores junto con los volúmenes y datos almacenados:
```bash
docker compose down -v
```
⚠️ **Advertencia:** Esto eliminará todos los datos almacenados en la base de datos.


## 🎯 Notas Finales
Para ver los registros en tiempo real:
  ```bash
  docker compose logs -f
  ```

Si el contenedor **drupal_app** no se levanta elimina los contenedores y vuelve a levantarlos
