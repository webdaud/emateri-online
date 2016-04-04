@extends('layouts.layout_dosen')

@section('title')
    @parent
    - Menu Utama Dosen.
@stop
@section('content')

<div class="container">
 
    <h3>Edit Nama File</h3>
  </div>
</div>


{{Form::open(array('url'=>'/dosen/konten_edit/input_data'))}}
 
    
    <div class="row">
    <div class="form-group col-xs-6 col-md-offset-3"> 
    <div class=" "> 
     <input type="text" name="namafile" class="form-control input-lg" value="{{ $edit->nama_file}}"  >
     <p>&nbsp;</p>
     <div  > 
     <input type="hidden" name="id" readonly="readonly" class="form-control input-lg" value="{{ $edit->id}}"  >
     </div>
    </div>
</div>
 <button type="submit" class="btn btn-lg btn-default"> Simpan
        </button>
        <div class="form-group col-xs-1"> 
             <a href="/upload_materi" class="btn btn-lg btn-default btn-block">Batal</a>
        </div>

     {{Form::close()}}
    @endsection



 