@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="card">
            <div class="card-header">
                Tiempos Standar
            </div>
            <div class="card-body">

    

                <div class="row justify-content-center">


                  

                    <div class="col-md-3 ">


                        <form method="get" action="{{ route('tiempoBuscar_Ord')}}"  >
                            <div class="form-group">
                                <label for="Ord">ORD</label>
                                <input name="Ord" type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="0000000" required>
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-success mt-2">Search</button>
                                    </div>
                               


                            </div>

                          
                        </form>

                  
                    </div>

  



          
                </div>
                

    </div>
@endsection
