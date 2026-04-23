# Dashboard L13

Sistema de administracion de catalogo construido con Laravel 13 y Filament 5.
Permite gestionar productos, categorias, marcas y atributos desde un panel web
con una experiencia orientada a equipos de negocio y operaciones.

## Descripcion del sistema

Este proyecto implementa un panel administrativo para e-commerce/catalogo con:

- Gestion de productos y sus variantes.
- Gestion de categorias y marcas.
- Gestion de atributos y valores de atributos.
- Seeders para levantar un entorno local con datos de ejemplo.

La interfaz de administracion esta implementada con Filament, por lo que la mayor
parte del flujo de trabajo del sistema se realiza desde el panel interno.

## Enfoque de producto (version comercial)

### Propuesta de valor

- Centraliza la operacion del catalogo en un solo panel.
- Reduce errores manuales al estandarizar formularios de gestion.
- Facilita escalar el catalogo gracias a entidades reutilizables (atributos y variantes).

### Casos de uso principales

- Alta y mantenimiento de productos.
- Clasificacion por categorias y marcas.
- Definicion de variantes (por ejemplo, capacidad/talla/color) y stock.
- Normalizacion de fichas de producto para mejorar la consistencia comercial.

### Arquitectura funcional (alto nivel)

- **Backoffice**: Panel admin en Filament.
- **Dominio**: Recursos para Productos, Categorias, Marcas, Atributos y Valores.
- **Persistencia**: MySQL/SQLite via Eloquent + migraciones.
- **Operacion local**: Vite para frontend, Artisan para backend y colas.

### Capturas (pendiente de completar)

Agrega imagenes en `docs/screenshots/` y enlazalas aqui:

- Login y dashboard general.
- Listado de productos.
- Formulario de creacion/edicion de producto.
- Vista de categorias/marcas.

Ejemplo:

```md
![Listado de productos](docs/screenshots/productos-listado.png)
```

### Roadmap sugerido

- [ ] Gestion de ordenes/pedidos.
- [ ] Roles y permisos avanzados por modulo.
- [ ] Importacion masiva de catalogo (CSV/Excel).
- [ ] Integracion con API externa de inventario.
- [ ] KPIs basicos en dashboard (stock critico, productos sin imagen, etc.).

## Enfoque tecnico (onboarding equipo)

### Stack

- PHP 8.3
- Laravel 13
- Filament 5
- Livewire 4
- Tailwind CSS 4
- Vite 8
- Pest 4

### Requisitos previos

- PHP 8.3+
- Composer
- Node.js + npm
- Base de datos configurada en `.env`

## Puesta en marcha

### 1) Instalacion rapida (todo en uno)

```bash
composer setup
```

Este comando:

- Instala dependencias PHP.
- Crea `.env` si no existe.
- Genera `APP_KEY`.
- Ejecuta migraciones.
- Instala dependencias frontend.
- Compila assets de produccion.

### 2) Levantar entorno de desarrollo

```bash
composer dev
```

Inicia en paralelo:

- Servidor web Laravel.
- Worker de colas.
- Stream de logs con Pail.
- Vite en modo desarrollo.

## Comandos utiles

### Base de datos

```bash
php artisan migrate
php artisan db:seed
```

### Pruebas

```bash
composer test
php artisan test --compact
```

### Frontend

```bash
npm run dev
npm run build
```

### Calidad de codigo (PHP)

```bash
vendor/bin/pint --format agent
```

## Datos semilla

El seeder principal carga datos para:

- Categorias
- Productos
- Imagenes de producto
- Variantes
- Marcas
- Atributos

Tambien crea un usuario de prueba:

- `test@example.com`

## Estructura funcional del panel

Recursos de Filament actualmente presentes:

- Productos
- Categorias
- Marcas
- Atributos
- Valores de atributos

## Notas operativas

- Si no ves cambios visuales, ejecuta `npm run dev`.
- Si hay cambios en assets de produccion, ejecuta `npm run build`.
- Revisa variables del entorno en `.env` antes de arrancar.
