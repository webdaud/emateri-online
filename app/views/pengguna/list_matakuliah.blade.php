@extends('layouts.layout_lihat_dosen_theme')

@section('title')
    @parent

    - List Guru/Dosen Anda.
@stop

@section('content')
<div class="row">
<div class="row">
<?php if(Session::has('info_box')): ?>
  <div class="col-xs-6 col-sm-4"></div>
  <div class="col-xs-6 col-sm-4">
      <div class="alert alert-info alert-dismissible" role="alert">
         <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
         <?php echo Session::get('info_box') ?>
         <?php endif; ?>  
  </div>
</div>
</div>

 
<p>&nbsp;</p>
<div class="container">
 
    <h3>List Pengajar yang diikuti</h3>
   <p>&nbsp;</p>
</div>

<div class="row">
  <div class="col-md-5 col-md-offset-3">
 
<div class="bs-example" data-example-id="hoverable-table">
    <table class="table table-hover">
      
            
      <tbody>
        @foreach ($list_dosen as $list_dosen2)
        @foreach ($dosen as $dosen2)
             @if ( $list_dosen2->id_dosen_favorit === $dosen2->id)
           <tr>
           
            <td style="width:50px">
             
            
              <a href="{{'/educator/'.$dosen2->id}}"> <h5>{{$dosen2->nama_lengkap}} </h5>  </a> 
               
 
{{-- <h5>Dosen Belum ada  </h5>
 --}}
           
            </td>

            <td style="width:4px" align="right">
                
             <button type="button" class="glyphicon glyphicon-remove btn btn-default" data-toggle="modal" data-target="{{'#konfirmasi'.$dosen2->id}}"></button>


             <div class="modal fade" id="{{'konfirmasi'.$dosen2->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Tidak</span></button>
                                  <h4 ><p align="center" class="modal-title" id="myModalLabel">Konfirmasi </p> </h4> 
                                </div>
                                <div class="modal-body"><p align="center">
                                      Apakkah Anda Yakin Menghapus Ini.</p>
                                </div>
                                <div class="modal-footer">
                                  <a data-dismiss="modal" class="btn btn-default">Tidak</a>

                                 <a class="btn btn btn-primary" href="{{URL::route('favorit_hapus',$list_dosen2->id)}}"  >Ya</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          </div>      
                          </a></span></td>

            </td>  
        </tr>
        @endif

                @endforeach 
                @endforeach 
      </tbody>

 
    </table>









<p>&nbsp;</p>
 

 
</div>
</div>




@stop