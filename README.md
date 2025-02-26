# 🐄 WP Theme Floating Cow  

Este es un tema de WordPress minimalista basado en bloques, diseñado para personalizar únicamente la página de inicio utilizando los estilos de [Pico CSS](https://picocss.com/). Ideal para aprender a crear temas de WordPress y compartirlos en GitHub.  

## 📌 Pasos para crear el tema  

1. **Crear el directorio del tema**  
   - Dentro de la carpeta `wp-content/themes/`, crea una nueva carpeta llamada `wp-theme-floating-cow`.  

2. **Añadir los archivos esenciales del tema**  
   - Dentro del directorio del tema, agrega los siguientes archivos:  
     - `style.css` → Define los estilos y metadatos del tema.  
     - `index.php` → Archivo base del tema.  
     - `functions.php` → Agrega funciones y scripts al tema.  
     - `home.php` → Personaliza la página de inicio con estilos de Pico CSS.  

3. **Encolar Pico CSS en el tema**  
   - En `functions.php`, agrega este código para incluir Pico CSS desde su CDN:  

   ```php
   function floating_cow_enqueue_styles() {
       wp_enqueue_style('pico-css', 'https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css', array(), null);
   }
   add_action('wp_enqueue_scripts', 'floating_cow_enqueue_styles');
