<link href="{{ asset('public/css/multi-select.css') }}" rel="stylesheet">
<script src="{{ asset('public/js/jquery.quicksearch.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/js/jquery.multi-select.js') }}" type="text/javascript"></script>



  <script type="text/javascript">

    var url ='';

    function asigna_usuario(url, permiso){
        var rol_id = $('#val_rol').val();
        
        $.get(url, {permiso: permiso, rol_id: rol_id} ,
                function(data){
                    var div = '<div class="card-panel white-text green lighten-1 z-depth-1 ">'+data+' <i class="material-icons right">done_all</i></div>';
                    $("#resultados_json").html(div).fadeIn('slow')
                            
                },"html"
            );


    }
   
   


$( document ).ready(function() {




            $('.modal-trigger').click(function() {
                  var rol_id =  $(this).attr('id');
                  $('#val_rol').val(rol_id);

                   $("#resultados_json").html("");

                  $.get( 'permisos/ajax/' + rol_id, function( data ) {

 
                      $('#callbacks option').attr('selected', false);

                         $.each(data ,function(index, value){
                            $('#callbacks option[value="'+value.permission_id+'"]').attr('selected', true);
                        });

                        $('#callbacks').multiSelect('refresh');


                    });

                  




                  $("#modalPermisos").openModal();
             });


            $('#callbacks').multiSelect({
                                selectableHeader: "<input type='text' style='width=100%;' class='form-control' autocomplete='off' placeholder='Buscar...'>",
                                selectionHeader: "<br><div class='custom-header'><h5>Seleccionados</h5</div>",
                                keepOrder: true,
                                  afterInit: function(ms){
                                    var that = this,
                                        $selectableSearch = that.$selectableUl.prev(),
                                        $selectionSearch = that.$selectionUl.prev(),
                                        selectableSearchString = '#'+that.$container.attr('id')+' .ms-elem-selectable:not(.ms-selected)',
                                        selectionSearchString = '#'+that.$container.attr('id')+' .ms-elem-selection.ms-selected';

                                    that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                                    .on('keydown', function(e){
                                      if (e.which === 40){
                                        that.$selectableUl.focus();
                                        return false;
                                      }
                                    });

                                    that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                                    .on('keydown', function(e){
                                      if (e.which == 40){
                                        that.$selectionUl.focus();
                                        return false;
                                      }
                                    });
                                  },
                                  afterSelect: function(values){

                                    url ='permisos/asignar';
                                    asigna_usuario(url, values[0]);

                                  },
                                  afterDeselect: function(values){

                                    url ='permisos/desasignar';

                                    asigna_usuario(url, values[0]);

                                  }
                                });
    });




</script>







<div id="modalPermisos" class="modal modal-fixed-footer">
    <div class="modal-content">
      
    <h5> Perisos Asignados </h5>

      <div id="resultados_json" >

      </div>

       <div class="s12 col">
           
           
             <select id='callbacks' multiple='multiple'>

                @foreach($permisos as $permisos)
                      <option value="{!! $permisos->id !!}"> {!! $permisos->name !!} </option>  
                @endforeach

                
                                      
              </select>

      </div>


      <input type="hidden" id="val_rol">

    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
    </div>
  </div>



            