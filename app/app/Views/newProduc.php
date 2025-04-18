<div class="container">
  <h2>Ingrese los datos del producto</h2>
  <form method="POST" action="<?php echo APP_URL; ?>/app/Model/GuardarP.php" enctype="multipart/form-data">
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputEmail4">Nombre del Producto:</label>
        <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre del producto" required>
      </div>

      <div class="form-group col-md-4">
        <label for="inputState">Sectores</label>
        <select class="form-control" name="sector" id="sector" required>
          <option value="" disabled selected>Seleccione un sector</option>
          <option value="Telcos">Telecomunicaciones e IT</option>
          <option value="Electricidad">Planta externa y electricias</option>
          <option value="ExhibicionAl">Exhibición y almacenaje</option>
          <option value="MobiliarioU">Mobiliario Urbano</option>
          <option value="Torres">Torres</option>
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="categoria">Categoría:</label>
        <select class="form-control" name="categoria" id="categoria" required>
          <option value="" disabled selected>Seleccione una categoría</option>
        </select>
      </div>

    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="exampleFormControlTextarea1">Descripción</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="descripcion" required></textarea>
      </div>

      <div class="form-group col-md-3">
        <label for="exampleFormControlFile1">Subir imagen</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" accept="image/*" name="imagen_principal" required>
      </div>
      <div class="form-group col-md-3">
        <label for="exampleFormControlFile1">Subir PDF</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" accept=".pdf" name="ficha_tecnica" required>
      </div>
      <div class="form-group col-md-6">
        <label for="exampleFormControlFile1">Seleccionar imágenes secundarias</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" accept="image/*" name="imagenes_secundarias[]" multiple required>
      </div>
      <div class="form-group col-md-6">
      <label for="inputState">Seleccione el estado del producto</label>
        <select class="form-control" name="estado" id="estado" required>
          <option value="" disabled selected>Seleccione un estado</option>
          <option value="Activo">Activo</option>
          <option value="Inactivo">Inactivo</option>
        </select>
      </div>
    </div>

    <br>
    <strong>
      <p>Si no cuenta con características o especificaciones técnicas, agregar "N/A".</p>
    </strong>
    <h2>Características</h2>
    <button type="button" class="btn btn-outline-success" onclick="agregarCaracteristica()">Añadir Característica</button>
    <button type="button" class="btn btn-outline-danger" onclick="eliminarCaracteristica()">Eliminar Característica</button>
    <div id="caracteristicas">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="caracteristicaTitulo">Título:</label>
          <input type="text" class="form-control" id="caracteristicaTitulo" name="caracteristica_titulo[]" placeholder="Ingrese el título" required>
        </div>
        <div class="form-group col-md-6">
          <label for="caracteristicaDescripcion">Descripción:</label>
          <input type="text" class="form-control" id="caracteristicaDescripcion" name="caracteristica_descripcion[]" placeholder="Ingrese la descripción" required>
        </div>
      </div>
    </div>

    <hr>
    <h2>Especificaciones técnicas</h2>
    <button type="button" class="btn btn-outline-success" onclick="agregarEspecificacion()">Añadir Especificación</button>
    <button type="button" class="btn btn-outline-danger" onclick="eliminarEspecificacion()">Eliminar Especificación</button>
    <div id="especificaciones">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="especificacionTitulo">Título:</label>
          <input type="text" class="form-control" id="especificacionTitulo" name="especificacion_titulo[]" placeholder="Ingrese el título" required>
        </div>
        <div class="form-group col-md-6">
          <label for="especificacionDescripcion">Descripción:</label>
          <input type="text" class="form-control" id="especificacionDescripcion" name="especificacion_descripcion[]" placeholder="Ingrese la descripción" required>
        </div>
      </div>
    </div>
  
    <button type="submit" class="btn btn-outline-primary">Guardar Producto</button>
    <a href="<?php echo APP_URL; ?>/app/Views/formulario.php" class="btn btn-outline-secondary">Cancelar</a>
  </form>
  <script>
    function agregarCaracteristica() {
      const caracteristicasDiv = document.getElementById('caracteristicas');
      const nuevaCaracteristica = document.createElement('div');
      nuevaCaracteristica.classList.add('form-row');
      nuevaCaracteristica.innerHTML = `
            <div class="form-group col-md-6">
                <label for="caracteristicaTitulo">Título:</label>
                <input type="text" class="form-control" name="caracteristica_titulo[]" placeholder="Ingrese el título" required>
            </div>
            <div class="form-group col-md-6">
                <label for="caracteristicaDescripcion">Descripción:</label>
                <input type="text" class="form-control" name="caracteristica_descripcion[]" placeholder="Ingrese la descripción" required>
            </div>
            `;
      caracteristicasDiv.appendChild(nuevaCaracteristica);
    }
    //Funccion para eliminar los 
    function eliminarCaracteristica() {
      const caracteristicasDiv = document.getElementById('caracteristicas');
      if (caracteristicasDiv.children.length > 1) {
        caracteristicasDiv.removeChild(caracteristicasDiv.lastChild);
      }
    }

    function agregarEspecificacion() {
      const especificacionesDiv = document.getElementById('especificaciones');
      const nuevaEspecificacion = document.createElement('div');
      nuevaEspecificacion.classList.add('form-row');
      nuevaEspecificacion.innerHTML = `
            <div class="form-group col-md-6">
                <label for="especificacionTitulo">Título:</label>
                <input type="text" class="form-control" name="especificacion_titulo[]" placeholder="Ingrese el título" required>
            </div>
            <div class="form-group col-md-6">
                <label for="especificacionDescripcion">Descripción:</label>
                <input type="text" class="form-control" name="especificacion_descripcion[]" placeholder="Ingrese la descripción" required>
            </div>
            `;
      especificacionesDiv.appendChild(nuevaEspecificacion);
    }

    function eliminarEspecificacion() {
      const especificacionesDiv = document.getElementById('especificaciones');
      if (especificacionesDiv.children.length > 1) {
        especificacionesDiv.removeChild(especificacionesDiv.lastChild);
      }
    }
    // Objeto con las categorías por sector
    const categoriasPorSector = {
      'Telcos': [
        'GABINETES',
        'RACKS',
        'RIELES',
        'ESCALERILLAS',
        'BANDEJAS',
        'PLANTA EXTERNA',
        'PLANTA INTERNA'
      ],
      'Electricidad': [
        'GABINETES',
        'CAJAS',
        'SOPORTES Y HERRAJES'
      ],
      'ExhibicionAl': [
        'GONDOLAS',
        'ESTANTERIAS',
        'RACK INDUSTRIAL'
      ],
      'MobiliarioU': [
        'BASUREROS',
        'PANELES DECORATIVO',
        'MUPIS'
      ],
      'Torres': [
        'ACCESORTIOS',
        'SECCIONES'
      ]
    };

    // Función para actualizar las categorías
    document.getElementById('sector').addEventListener('change', function() {
      const sectorSeleccionado = this.value;
      const selectCategoria = document.getElementById('categoria');

      // Limpiar categorías anteriores
      selectCategoria.innerHTML = '<option value="" disabled selected>Seleccione una categoría</option>';

      // Si hay categorías para el sector seleccionado
      if (categoriasPorSector[sectorSeleccionado]) {
        categoriasPorSector[sectorSeleccionado].forEach(categoria => {
          const option = document.createElement('option');
          option.value = categoria;
          option.textContent = categoria;
          selectCategoria.appendChild(option);
        });
      }
    });
  </script>
</div>