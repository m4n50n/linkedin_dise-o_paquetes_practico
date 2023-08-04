<?php

class HandleFile
{
    /**
     * Si creamos el método handle de esta manera, nuestra clase será extensible y estará Abierta
     * Si en lugar de obtener $fileName de forma dinámica según los parámetros recibidos tuviéramos un switch que evaluara dichos parámetros para elegir un nombre de fichero u otro, la clase NO estaría Abierta puesto que únicamente se podrían trabajar con los casos establecidos en el switch
     */
    public function handle($name, $extension) {
        $fileName = $name . $extension;
        $content = file_get_contents($fileName);
        
        if ($content) {
            return $content;
        }

        throw new Exception("File not found");
    }
}
