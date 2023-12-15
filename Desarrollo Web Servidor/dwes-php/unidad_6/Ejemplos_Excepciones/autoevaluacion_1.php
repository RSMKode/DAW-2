<?php

class MainException extends Exception {}
class SubException extends MainException {}

try {
    throw new SubException("Lanzada SubException");
} catch (MainException $e) {
    echo "Capturada MainException " . $e->getMessage()."<br>";
} catch (SubException $e) {
    echo "Capturada SubException " . $e->getMessage()."<br>";
} catch (Exception $e) {
    echo "Capturada Exception " . $e->getMessage()."<br>";
}
?>

