<html>
<head></head>
<body>
    <h1>Lugares:    </h1>
    <form action="resultados.php" method="POST">
        <label for="destinos"></label>
        <select id="destinos" name="destinos[] " multiple>
            <option value="CANCÚN">CANCUN</option>
            <option value="PUERTO VALLARTA">PUERTO VALLARTA</option>
            <option value="ACAPULCO">ACAPULCO</option>
            <option value="LOS CABOS">LOS CABOS</option>
            <option value="MAZATLAN">MAZATLAN</option>
            <option value="HUATULCO">HUATULCO</option>
            <option value="PUERTO ESCONDIDO">PUERTO ESCONDIDO</option>
        </select><br>
    <h1>Actividaes turisticas:</h1>
        <label for="opcion-1">
    <input type="checkbox" value="BUCEO" id="opcion-1" name="actividades[]"> 
    BUCEO
</label> <br>
<label for="opcion-2">
    <input type="checkbox" value="PASEO EN LANCHA" id="opcion-2" name="actividades[]"> 
    PASEO EN LANCHA
</label> <br>
<label for="opcion-3">
    <input type="checkbox" value="VISITA A ZONAS ARQUEOLOGICAS" id="opcion-3" name="actividades[]"> 
    VISITA A ZONAS ARQUEOLOGICAS
</label> <br>
<label for="opcion-4">
    <input type="checkbox" value="SENDERISMO" id="opcion-4" name="actividades[]"> 
    SENDERISMO
</label> <br>
<label for="opcion-5">
    <input type="checkbox" value="PESCA DEPORTIVA" id="opcion-5" name="actividades[]"> 
    PESCA DEPORTIVA
</label> <br>
<label for="opcion-5">
    <input type="checkbox" value="RECORRIDO GASTRONOMICO" id="opcion-5" name="actividades[]"> 
    RECORRIDO GASTRONOMICO
</label> <br>
<label for="opcion-5">
    <input type="checkbox" value="VISITA A MUSEO" id="opcion-5" name="actividades[]"> 
    VISITA A MUSEO
</label> <br>
    
                 <h2>Servicios adicionales:</h2>

<label for="servicio-1">
    <input type="checkbox" value="TRANSPORTE DE AEROPUERTO" id="opcion-1" name="servicios[]"> 
    TRANSPORTE DE AEROPUERTO
</label> <br>
<label for="servicio-2">
    <input type="checkbox" value="DESAYUNO INCLUIDO" id="opcion-1" name="servicios[]"> 
    DESAYUNO INCLUIDO
</label> <br><label for="servicio-3">
    <input type="checkbox" value="HOSPEDAJE DE LUJO" id="opcion-1" name="servicios[]"> 
    HOSPEJADE DE LUJO
</label> <br><label for="servicio-4">
    <input type="checkbox" value="SEGURO VIAJERO" id="opcion-1" name="servicios[]"> 
    SEGURO VIAJERO
</label> <br><label for="servicio-5">
    <input type="checkbox" value="RENTA AUTOMOVILISTICA" id="opcion-1" name="servicios[]"> 
    RENTA AUTOMOVILISTICA
</label>
</label> <br><label for="servicio-6">
    <input type="checkbox" value="GUIA TURISTICO" id="opcion-1" name="servicios[]"> 
    GUIA TURISTICO
</label> <br> <br>
<label> <h3>Nombre completo</h3></label>
<input type="text" stype="any" name="nombre" id="nombre">
<br><br>
<label><h3>Correo</h3></label>
<input type="email" name="correo" id="correo">
<br><br>

<button type="submit" class="Jamon"><h3>Generar paquete</h3></button>
    </form>
</body>
</html>