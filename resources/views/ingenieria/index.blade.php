@extends('layouts.app')

@section('content')
    <div class="container">
          

        <div class="card accordion-collapse collapse show" id="panelsStayOpen-collapseOne">
            <div class="card-header">
                Tiempos Standar
            </div>
            <div class="card-body">

    

                <h5 class="card-title">Estatus de la Ord:   {{  $datos[0]['Status'] }} </h5>
                <h5 class="card-title">Departamento:{{   $datos[0]['division'] }}</h5>
                <div class="row justify-content-center">


                  

                    <div class="col-md-3 ">


                        <form>
                        

                          
                            <div class="form-group">
                                <label for="" class="form-label">Locacion</label>
                                <select class="form-select form-select-lg" name="" id="">

                                    @foreach ($Localidades as $Localidade)
                                    <option>{{ $Localidade }}</option>
                                @endforeach
                               
                                </select>
                            </div>
                          

                            <div class="form-group">
                                <label for="" class="form-label">Team</label>
                                <select class="form-select form-select-lg" name="" id="">
                                    @foreach ($teams as $team )
                                    <option value="">{{ $team['nombre'] }} </option>
                                    @endforeach
                                   
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Setup</label>
                                <select class="form-select form-select-lg" name="" id="">
                                    <option selected>Select Setup</option>
                                    <option value="">No Apliqca</option>
                                    <option value="">Yes</option>
                                    <option value="">Sample</option>

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Type pellum </label>
                                <select class="form-select form-select-lg" name="" id="">

                                    <option value="">Tearaway</option>
                                    <option value="">Cutaway</option>

                                </select>
                            </div>


                            <div class="form-group">
                                <label for="" class="form-label">Operadores</label>
                                <select class="form-select form-select-lg" name="" id="">

                                    <option value="">2</option>
                                    <option value="">1</option>

                                </select>
                            </div>


                        </form>

                    </div>
              
                    <div class="col-md-4">

                        <div class="mb-3">
                            <label for="" class="form-label">Maquina</label>
                            <input type="text" name="" id="" class="form-control" placeholder=""
                                aria-describedby="helpId" value="Maquina 01" disabled />

                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">N° Cabezales</label>
                            <input type="text" name="" id="" class="form-control" placeholder=""
                                aria-describedby="helpId" value="8" disabled />
                        </div>
                     
                        <div class="mb-3">
                            <label for="" class="form-label">Cantidad</label>
                            <input type="text" name="" id="" class="form-control" placeholder=""
                                aria-describedby="helpId" value="{{ $datos[0]['Unidades'] }}" disabled />
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Cantidad Puntadas</label>
                            <input type="text" name="" id="" class="form-control" placeholder=""
                                aria-describedby="helpId" value="{{ $datos[0]['Stitches'] }}" disabled />
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Secuencia</label>
                            <input type="text" name="" id="" class="form-control" placeholder=""
                                aria-describedby="helpId" value="{{ $datos[0]['secuencia'] }}" disabled />
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Cantidad Aplique</label>
                            <input type="text" name="" id="" class="form-control" placeholder=""
                                aria-describedby="helpId" value="{{ $datos[0]['apliqueCantidad'] }}" disabled />
                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="" class="form-label">Estilo</label>
                                <input type="text" name="" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId" value="{{ $datos[0]['Style'] }}" disabled />
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Ciclo maquina</label>
                                <input type="text" name="" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId" value="8" disabled />
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Code</label>
                                <input type="text" name="" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId" value="{{ $datos[0]['Code'] }}" disabled />
                            </div>


                        </div>
                    </div>
                   
                </div>





            </div>
        </div>
  

        <div class="card ">
            <div class="card-header">
                Detalle Ciclos
                <div class="card-body">
                    <h5 class="card-title">Departamento:</h5>

                    <div class="mb-3 mt-3 table-responsive">
                        <table class="table table-bordered  table-sm">
                            <thead class="thead-dark ">
                                <tr>

                                    <th>ORD</th>
                                    <th>Production</th>
                                    <th>Setup</th>
                                    <th>TIempo Ciclo</th>
                                    <td># Ciclo</td>
                                    <td>Tiempo Devengado</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>{{ $datos[0]['ORD'] }}</td>
                                    <td>16</td>
                                    <td>20</td>
                                    <td>32</td>
                                    <td>2</td>
                                    <td>52</td>
                                </tr>


                            </tbody>
                        </table>

                    </div>
                    
                    <div class="mb-3 mt-3 table-responsive" >
                        <table class="table table-bordered  table-sm">
                            <thead class="thead-dark ">

                                <tr>
                                    @foreach ($ordTallas as $ordTalla )
                                    <th>{{ $ordTalla->talla }}</th>
                                    @endforeach

                                  
                                    <td>Total</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($ordTallas as $ordTalla )
                                    <td>{{ $ordTalla->cantidad }}</td>
                                    @endforeach

                                 
                                    <td>{{ $cantidadTallas }}</td>
                                </tr>


                            </tbody>
                        </table>

                    </div>


                    <div class="mb-3 mt-5 table-responsive" >
                        <table class="table table-hover table-bordered  table-sm">
                            <thead class="thead-light">
                                <tr>
                                    <th class="col-xs-2">ciclos</th>
                                    <th>XS</th>
                                    <th>S</th>
                                    <th>M</th>
                                    <th>L</th>
                                    <th>XL</th>
                                    <th>2XL</th>
                                    <th class="col-sm-2">T ciclo Acumulado</th>
                                    <th> accion </th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>1</td>
                                    <td>8</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>16</td>
                                    <td> <input class="form-check-input" type="checkbox" value="false" id=""
                                         disabled   checked />
                                        <label class="form-check-label" for=""> Ciclo</label>
                                    </td>
                                </tr>

                                <tr>

                                    <td>2</td>
                                    <td>2</td>
                                    <td>6</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>32</td>
                                    <td> <input class="form-check-input" type="checkbox" value="false"
                                            id="" />
                                        <label class="form-check-label" for=""> Ciclo</label>
                                    </td>
                                </tr>

                                <tr>

                                    <td>3</td>
                                    <td></td>
                                    <td>4</td>
                                    <td>4</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>48</td>
                                    <td> <input class="form-check-input" type="checkbox" value="false"
                                            id="" />
                                        <label class="form-check-label" for=""> Ciclo</label>
                                    </td>
                                </tr>


                                <tr>

                                    <td>4</td>
                                    <td></td>
                                    <td></td>
                                    <td>6</td>
                                    <td>2</td>
                                    <td></td>
                                    <td></td>
                                    <td>64</td>
                                    <td> <input class="form-check-input" type="checkbox" value="false"
                                            id="" />
                                        <label class="form-check-label" for=""> Ciclo</label>
                                    </td>
                                </tr>

                                <tr>

                                    <td>5</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>6</td>
                                    <td>2</td>
                                    <td></td>
                                    <td>80</td>
                                    <td> <input class="form-check-input" type="checkbox" value="false"
                                            id="" />
                                        <label class="form-check-label" for=""> Ciclo</label>
                                    </td>
                                </tr>

                                <tr>

                                    <td>6</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>6</td>
                                    <td>2</td>
                                    <td>96</td>
                                    <td> <input class="form-check-input" type="checkbox" value="false"
                                            id="" />
                                        <label class="form-check-label" for=""> Ciclo</label>
                                    </td>
                                </tr>

                            </tbody>

                    
                          
                        </table>

                        <div class="text-end">
                            <button type="button" class="btn btn-success">Guardar</button>
                           </div>
                    </div>

                   
                </div>

            </div>
        </div>
 
            
          
        

    </div>
@endsection
