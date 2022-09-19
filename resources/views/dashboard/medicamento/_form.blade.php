@include('dashboard.partials.sesion-flash-status')
                <section class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label class="sub" ><b>Nombre:</b></label><br>
                        <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese Nombre de Medicamento" aria-label="Disabled input example"  rows="1" type="text" name="nombre" value ="{{old('nombre',$medicamento->nombre)}}"> <br>
                        @error('nombre')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <label for=""><b>Descripción:</b></label>
                        <textarea class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese Descripción" aria-label="Disabled input example"  rows="3" name="descripcion">{{old('descripcion',$medicamento->descripcion)}}</textarea><br>
                        @error('descripcion')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                        
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label class="sub" ><b>Laboratorio:</b></label><br>
                        <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese Laboratorio" aria-label="Disabled input example"  rows="1" type="text" name="laboratorio" value ="{{old('laboratorio',$medicamento->laboratorio)}}"><br>
                        @error('laboratorio')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                        
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label class="sub" ><b>Presentación:</b></label><br>
                        <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese tipo de presentación" aria-label="Disabled input example"  rows="1" type="text" name="presentacion" value ="{{old('presentacion',$medicamento->presentacion)}}"><br>
                        @error('presentacion')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                        
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label class="sub" ><b>Precio Unidad:</b></label><br>
                        <input class="fo" id="exampleFormControlTextarea1" placeholder="Ingrese Precio por unidad " aria-label="Disabled input example"  rows="1" type="text" name="precio_unidad" value ="{{old('precio_unidad',$medicamento->precio_unidad)}}"><br>
                        @error('precio_unidad')
                            <small class="text-danger">{{$message}}</small>
                        @enderror 
                    </div> 
                        
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <label class="sub" ><b>Imagen:</b></label><br>
                        <input type="file" name="imagen" value ="{{old('imagen',$medicamento->imagen)}}"><br>
                        @error('imagen')
                            <small class="text-danger">{{$message}}</small>
                        @enderror 
                    </div>
                        
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button id="but"  class="btn btn-warning" type="submit">Enviar</button>
                    </div>
                </section>