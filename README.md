# Sistema de Inventario PHP

## Documentación Oficial

Este directorio contiene la documentación técnica oficial del proyecto.

Toda decisión relacionada con arquitectura, desarrollo, seguridad, base de datos, interfaz de usuario y reglas de negocio deberá documentarse aquí antes de implementarse en el código.

La documentación representa la fuente única de verdad (Single Source of Truth) del proyecto. En caso de existir diferencias entre el código y la documentación, deberá revisarse la implementación para garantizar que ambas permanezcan sincronizadas.

---

# Objetivos del proyecto

Desarrollar un sistema web de inventario moderno utilizando PHP nativo y una arquitectura MVC propia, siguiendo buenas prácticas de ingeniería de software, principios SOLID y estándares de programación.

El sistema deberá ser:

- Escalable
- Seguro
- Modular
- Fácil de mantener
- Fácil de extender
- Fácil de documentar

El proyecto tiene un propósito educativo y profesional, por lo que la prioridad es escribir código limpio y comprensible antes que implementar soluciones rápidas.

---

# Tecnologías oficiales

## Backend

- PHP 8.2 o superior
- PDO
- MySQL

## Frontend

- HTML5
- CSS3
- Bootstrap 5
- JavaScript ES6
- Fetch API

## Servidor

- Apache
- XAMPP durante el desarrollo

## Control de versiones

- Git
- GitHub

---

# Tecnologías no permitidas

Para mantener el propósito educativo del proyecto no se utilizarán frameworks de backend.

No está permitido utilizar:

- Laravel
- Symfony
- CodeIgniter
- Yii
- Doctrine ORM
- Eloquent ORM

Tampoco se utilizarán librerías JavaScript que oculten el funcionamiento interno del navegador, como jQuery.

El objetivo es comprender completamente cada componente desarrollado.

---

# Organización de la documentación

La documentación se divide en las siguientes áreas.

## Architecture

Describe la arquitectura general del sistema.

Incluye:

- Diseño general
- Estructura del proyecto
- Seguridad
- Estándares
- Base de datos
- API
- Testing

---

## Modules

Contiene la especificación funcional de cada módulo.

Ejemplos:

- Usuarios
- Productos
- Categorías
- Compras
- Ventas
- Reportes

Cada módulo tendrá su propio documento independiente.

---

## Database

Describe completamente la base de datos.

Incluye:

- Modelo entidad relación
- Tablas
- Índices
- Restricciones
- Relaciones
- Convenciones

---

## UI

Contiene toda la documentación referente a la interfaz de usuario.

Incluye:

- Layout
- Componentes
- Responsive
- Colores
- Iconografía

---

## .ai

Contiene instrucciones específicas para asistentes de IA utilizados durante el desarrollo.

Su objetivo es garantizar que cualquier agente genere código consistente con la arquitectura del proyecto.

---

# Orden recomendado de lectura

Todo desarrollador deberá leer la documentación en el siguiente orden.

1. README

2. Architecture

3. Database

4. Security

5. Coding Standards

6. API

7. Modules

8. UI

---

# Principios generales

Durante todo el desarrollo deberán respetarse los siguientes principios.

- Código limpio (Clean Code)
- Principios SOLID
- DRY (Don't Repeat Yourself)
- KISS (Keep It Simple)
- Separation of Concerns
- Single Responsibility Principle

---

# Estado de la documentación

La documentación crecerá junto con el proyecto.

Toda nueva funcionalidad deberá documentarse antes de comenzar su implementación.

No se aceptarán cambios importantes en la arquitectura sin actualizar previamente la documentación correspondiente.