# Sistema de Gestión de Productos y Usuarios

## Desarrollado por
Leonardo Aspuac  
Departamento de IT  
Guatemala 2025

## Descripción
Sistema web empresarial diseñado para la gestión eficiente de productos y usuarios. 
Implementa un sistema de roles que permite diferentes niveles de acceso y funcionalidades 
según el tipo de usuario. Facilita el manejo de productos con sus características, 
especificaciones técnicas e imágenes.

## Características Principales
- **Gestión de Productos**
  - Carga y gestión de imágenes principales y secundarias
  - Manejo de fichas técnicas en PDF
  - Categorización por sectores
  - Especificaciones técnicas detalladas

- **Panel de Administración**
  - Dashboard con estadísticas
  - Gestión completa de usuarios
  - Control de productos

- **Sistema de Roles**
  - Administrador: Control total del sistema
  - Usuario: Acceso limitado a funciones específicas

- **Interfaz**
  - Navegación intuitiva
  - Experiencia de usuario optimizada

### Usuario Regular
- **Usuario:** [Crear en panel de administración]
- **Contraseña:** [Asignada durante creación]
- **Permisos:** Acceso limitado a funciones básicas

## Requisitos Técnicos
- **Servidor:**
  - PHP 7.4 o superior
  - MySQL 5.7 o superior
  - Apache 2.4 o superior

- **Extensiones PHP requeridas:**
  - mysqli: Conexión a base de datos
  - fileinfo: Manejo de archivos
  - gd: Procesamiento de imágenes

## Instalación
1. **Preparación del Entorno**
   ```bash
   # Clonar repositorio
   git clone https://github.com/LE0-AR/app.git C:/xampp/htdocs/app
   ```

2. **Base de Datos**
   - Importar archivo SQL: `database/db_app.sql`
   - Configurar credenciales en `app/config/conexion.php`

3. **Configuración de Permisos**
   ```bash
   # Windows - Ejecutar como administrador
   icacls "C:/xampp/htdocs/app/Control/img" /grant Users:(OI)(CI)F
   icacls "C:/xampp/htdocs/app/Control/Ficha" /grant Users:(OI)(CI)F
   ```

4. **Verificación**
   - Acceder a: `http://localhost/app` o `https://transformetalgt.com/app/`
   - Probar credenciales de administrador
   - Verificar carga de archivos

## Estructura de Directorios
```
app/
├── config/              # Configuración del sistema
│   ├── conexion.php     # Conexión a base de datos
│   ├── app.php          # Variables globales
│   └── sesion_Ini.php   # Control de sesiones
├── Control/             # Lógica de control
│   ├── img/             # Almacenamiento de imágenes
│   └── Ficha/           # Almacenamiento de PDFs
├── Model/               # Modelos de datos
├── Views/               # Interfaces de usuario
└── public/              # Recursos públicos
    ├── css/             # Estilos
    ├── js/              # Scripts
    └── img/             # Imágenes del sistema
```

## Soporte y Contacto
Leonardo Aspuac  
Departamento de IT  
Email: [leonardoacrn12@gmail.com]  
Tel: [51559906]

## Licencia
Derechos Reservados © 2025 Transformetal