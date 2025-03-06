<?php
echo "🚀 Instalando LynxPHP...\n";

// Crear el archivo .env si no existe
if (!file_exists('.env')) {
    copy('config/env.example', '.env');
    echo "✅ Archivo .env creado.\n";
}

// Generar clave de aplicación
$key = bin2hex(random_bytes(16));
file_put_contents('.env', "APP_KEY=$key\n", FILE_APPEND);
echo "🔑 Clave generada: $key\n";

echo "✅ Instalación completada. ¡Bienvenido a LynxPHP! 🎉\n";
