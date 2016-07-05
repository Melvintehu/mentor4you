@extends('cms.master')

@section('title')
    Aanpassen
@stop

@section('content')
    <h1>Mentor aanpassen </h1>
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
                                                 {!! Form::model($data['section'],
                                                    array(
                                                        'method' => 'PUT',
                                                        'action' => ['PagesController@update', $data['section']->id]
                                                        )
                                                    )
                                                !!}
                                                <thead>
                                                    <tr>
                                                           <td>
                                                                {!! Form::label('title', ' De titel die weergegeven wordt op de website ') !!} 
                                                                {!! Form::text('title', null, ['class' => 'form-control']); !!} 
                                                           </td>
                                                        </tr>
                                                        <tr>
                                                           <td>
                                                                {!! Form::label('body', ' De text die weergegeven wordt op de website ') !!} 
                                                                {!! Form::textarea('body', null, ['class' => 'form-control']); !!} 
                                                           </td>
                                                        </tr>
                                                        <tr>
                                                           <td>
                                                                {!! Form::label('page_id', 'Waarop komt deze sectie ?') !!} 
                                                                {!! Form::select('page_id', $data['pages'], null, ['class' => 'form-control']); !!} 
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
