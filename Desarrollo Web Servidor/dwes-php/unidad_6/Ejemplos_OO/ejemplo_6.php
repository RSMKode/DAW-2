
<?php
class TokenGenerator {
    private const KEY = 'clave_secreta';

    // Método estático para generar un token utilizando uniqid
    public static function generarToken() {
        // Generar un identificador único y combinarlo con la clave secreta
        $token = md5(uniqid(self::KEY, true));

        return $token;
    }
}

// Uso del método estático para generar un token
$token = TokenGenerator::generarToken();

echo "Token generado: $token";