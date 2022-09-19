@include('dashboard.partials.sesion-flash-status')
      

      <div class="row">

          <div class="col">
              <label class="sub" ><b>Nombre:</b></label><br>
              <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese Nombre de Medicamento" aria-label="Disabled input example"  rows="1" type="text" name="nombre" value ="{{old('nombre', $miscelaneo->nombre)}}"> <br>
               @error('nombre')
                  <small class="text-danger">{{$message}}</small>
              @enderror

              <label for=""><b>Descripción:</b></label>
              <textarea class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese Descripción" aria-label="Disabled input example"  rows="3" name="descripcion">{{old('descripcion',$miscelaneo->descripcion)}}</textarea><br>
              @error('descripcion')
                  <small class="text-danger">{{$message}}</small>
              @enderror
              
              <label class="sub" ><b>Tipo:</b></label><br>
              <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese Tipo" aria-label="Disabled input example"  rows="1" type="text" name="tipo" value ="{{old('tipo',$miscelaneo->tipo)}}"><br>
              @error('tipo')
                  <small class="text-danger">{{$message}}</small>
              @enderror
              
              <label class="sub" ><b>Marca:</b></label><br>
              <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese tipo de Marca" aria-label="Disabled input example"  rows="1" type="text" name="marca" value ="{{old('marca',$miscelaneo->marca)}}"><br>
              @error('marca')
                  <small class="text-danger">{{$message}}</small>
              @enderror
              
              <label class="sub" ><b>Precio:</b></label><br>
              <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese Precio" aria-label="Disabled input example"  rows="1" type="text" name="precio" value ="{{old('precio',$miscelaneo->precio)}}"><br>
              @error('precio')
                  <small class="text-danger">{{$message}}</small>
              @enderror 

              <label class="sub" ><b>Imagen:</b></label><br>
              <input type="file" name="imagen" value ="{{old('imagen',$miscelaneo->imagen)}}"><br>
              @error('imagen')
                  <small class="text-danger">{{$message}}</small>
              @enderror 


              <button id="but"  class="btn btn-warning" type="submit">Enviar</button>
          </div>

      </div>