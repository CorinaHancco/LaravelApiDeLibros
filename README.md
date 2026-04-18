<div align="center">

# 📚 API REST de Libros

### API desarrollada con Laravel para la gestión y consulta de libros

![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/Laravel-Framework-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![REST API](https://img.shields.io/badge/REST-API-009688?style=for-the-badge&logo=fastapi&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)

</div>

---

## 📋 Descripción del Proyecto

**API REST de Libros** es una aplicación backend desarrollada con **Laravel** que expone endpoints para gestionar un catálogo de libros. Permite realizar operaciones CRUD completas (Crear, Leer, Actualizar y Eliminar) sobre los recursos a través de peticiones HTTP con respuestas en formato **JSON**.

Este proyecto es ideal para aprender cómo construir APIs RESTful con Laravel siguiendo buenas prácticas de desarrollo backend.

---

## ✨ Funcionalidades

- 📖 **Listar** todos los libros disponibles
- 🔍 **Consultar** el detalle de un libro por su ID
- ➕ **Crear** nuevos registros de libros
- ✏️ **Actualizar** la información de un libro existente
- 🗑️ **Eliminar** un libro del sistema
- 📦 Respuestas en formato **JSON**

---

## 🛠️ Tecnologías Utilizadas

| Tecnología | Descripción |
|---|---|
| **Laravel** | Framework PHP para el desarrollo de la API |
| **PHP** | Lenguaje de backend (84.2%) |
| **Blade** | Motor de plantillas (15.1%) |
| **MySQL** | Base de datos relacional |
| **Eloquent ORM** | Manejo de modelos y consultas a la BD |
| **Composer** | Gestor de dependencias PHP |
| **Laravel Mix** | Compilación de assets |

---

## 📁 Estructura del Proyecto

```
LaravelApiDeLibros/
├── app/
│   ├── Http/
│   │   └── Controllers/    # Controladores de la API
│   └── Models/             # Modelos Eloquent
├── database/
│   └── migrations/         # Migraciones de la BD
├── routes/
│   └── api.php             # Definición de endpoints de la API
├── config/                 # Configuración del proyecto
├── .env.example            # Variables de entorno de ejemplo
├── composer.json           # Dependencias PHP
└── artisan                 # CLI de Laravel
```

---

## 🚀 Instalación y Configuración

### 1. Clonar el repositorio

```bash
git clone https://github.com/CorinaHancco/LaravelApiDeLibros.git
cd LaravelApiDeLibros
```

### 2. Instalar dependencias

```bash
composer install
```

### 3. Configurar el entorno

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Configurar la base de datos en `.env`

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=libros_db
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```

### 5. Ejecutar migraciones

```bash
php artisan migrate
```

### 6. Iniciar el servidor

```bash
php artisan serve
```

La API estará disponible en: **http://localhost:8000/api**

---

## 🗂️ Endpoints de la API

Todos los endpoints devuelven respuestas en formato `application/json`.

| Método | Endpoint | Descripción |
|---|---|---|
| `GET` | `/api/libros` | Obtener todos los libros |
| `GET` | `/api/libros/{id}` | Obtener un libro por ID |
| `POST` | `/api/libros` | Crear un nuevo libro |
| `PUT` | `/api/libros/{id}` | Actualizar un libro |
| `DELETE` | `/api/libros/{id}` | Eliminar un libro |

### Ejemplo de respuesta `GET /api/libros`

```json
[
  {
    "id": 1,
    "titulo": "Cien años de soledad",
    "autor": "Gabriel García Márquez",
    "año": 1967,
    "created_at": "2024-01-01T00:00:00Z"
  }
]
```

---

## 🧪 Pruebas con Postman

Puedes probar los endpoints importando las rutas en [Postman](https://www.postman.com/) o cualquier cliente HTTP como **Thunder Client** o **Insomnia**.

Pasos básicos:
1. Selecciona el método HTTP (GET, POST, PUT, DELETE)
2. Ingresa la URL: `http://localhost:8000/api/libros`
3. Para POST y PUT, envía el body en formato `JSON`

---

## 📚 Lo que se aprende con este proyecto

- Construcción de **APIs RESTful** con Laravel
- Uso de `Route::apiResource` para definir rutas de API
- Respuestas estructuradas en **JSON**
- **Eloquent ORM** para operaciones con la base de datos
- Separación entre lógica de negocio y rutas
- Buenas prácticas de desarrollo backend con PHP

---

## 👩‍💻 Autora

**Corina Hancco** — [@CorinaHancco](https://github.com/CorinaHancco)

---

## 📄 Licencia

Este proyecto está bajo la licencia **MIT**. Puedes usarlo, modificarlo y distribuirlo libremente.

---

<div align="center">⭐ Si te fue útil, ¡dale una estrella al repo!</div>
