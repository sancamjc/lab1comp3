<label class="form-label">Nombre:</label>
    <input type="text" name="name" id="name" value="{{ isset($datos)?$datos->name:'' }}" class"form-control" /><br />
   
    <br />
    Apellido:
    <input type="number" name="age" id="age" value="{{ isset($datos)?$datos->age:'' }}" /><br />
  
    <br />
   Estado Civil:
    <input type="text" name="weight_kg" id="weight_kg" value="{{ isset($datos)?$datos->weight_kg:'' }}"><br />
   
    <br />

    Genero:
    <input type="text" name="weight_kg" id="weight_kg" value="{{ isset($datos)?$datos->weight_kg:'' }}"><br />
   
    <br />

   Nacionalidad
    <input type="text" name="weight_kg" id="weight_kg" value="{{ isset($datos)?$datos->weight_kg:'' }}"><br />
   
    <br />

    <button type="submit" class="btn btn-success">Guardar</button>