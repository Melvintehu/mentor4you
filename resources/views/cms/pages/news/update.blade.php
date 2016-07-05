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
                                                            {!! Form::label('title', ' Titel ') !!} 
                                                        </th>
                                                        <td>  
                                                            {!! Form::text('title', null, ['class' => 'form-control']); !!}
                                                        </td>
                                                    </tr>    
                                                    <tr>    
                                                        <th>
                                                            {!! Form::label('body', ' Tekst ') !!} 
                                                        </th>
                                                        <td>  
                                                            {!! Form::textarea('body', null, ['class' => 'form-control']); !!}
                                                        </td>
                                                    </tr>     
                                                    <tr>    
                                                        <th>
                                                            {!! Form::label('author', ' Auteur ') !!} 
                                                        </th>
                                                        <td>  
                                                            {!! Form::text('author', null, ['class' => 'form-control']); !!}
                                                        </td>
                                                    </tr> 
                                                    <tr>    
                                                        <th>
                                                            {!! Form::label('publish_date', ' Publicatiedatum ') !!} 
                                                        </th>
                                                        <td>  
                                                            {!! Form::date('publish_date', null, ['class' => 'form-control']); !!}
                                                        </td>
                                                    </tr> 
                                                    <tr>    
                                                        <th>
                                                            {!! Form::label('occurence_date', ' Datum ') !!} 
                                                        </th>
                                                        <td>  
                                                            {!! Form::date('occurence_date', null, ['class' => 'form-control']); !!}
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
