@extends('cms.master')

@section('title')
    Nieuws
@stop

@section('content')
    <h1>Nieuws aanpassen </h1>
    <hr>

    <div class="row">
        <div class="col-lg-12"> 
            
            <hr>
            <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                           
                            <div class="panel-body">
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        
                                        <div class="table-responsive">        
                                            <div>
                                                 {!! Form::model($data['news'],
                                                    array(
                                                        'method' => 'PUT',
                                                        'action' => ['NewsController@update', $data['news']->id]
                                                        )
                                                    )
                                                !!}
                                                <thead>
                                                    <tr>    
                                                        <th>
                                                            {!! Form::label('first_name', ' Voornaam ') !!} 
                                                        </th>
                                                        <td>  
                                                            {!! Form::textarea('first_name', null, ['class' => 'form-control']); !!}
                                                        </td>
                                                    </tr>    
                                                    <tr>    
                                                        <th>
                                                            {!! Form::label('last_name', ' Achternaam ') !!} 
                                                        </th>
                                                        <td>  
                                                            {!! Form::textarea('last_name', null, ['class' => 'form-control']); !!}
                                                        </td>
                                                    </tr>     
                                                    <tr>    
                                                        <th>
                                                            {!! Form::label('description', ' Beschrijving ') !!} 
                                                        </th>
                                                        <td>  
                                                            {!! Form::textarea('description', null, ['class' => 'form-control']); !!}
                                                        </td>
                                                    </tr> 
                                                    <tr>    
                                                        <th>
                                                            {!! Form::label('date_of_birth', ' Geboortedatum ') !!} 
                                                        </th>
                                                        <td>  
                                                            {!! Form::textarea('date_of_birth', null, ['class' => 'form-control']); !!}
                                                        </td>
                                                    </tr> 
                                                </thead>    


                                               
                                                    
                                                    <div class='form-group'>
                                                        <input type='submit' class='btn btn-primary' value='aanpassen' />
                                                    </div>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>

                </div> <!-- End row -->
                
        </div>
    </div>
@stop
