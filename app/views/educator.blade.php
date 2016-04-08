@extends('layouts.layout_lihat_dosen_theme')

@section('title')
    @parent

    - Aplikasi Materi Kuliah Online.
@stop

@section('content')

<link href="../video-js/video-js.css" rel="stylesheet">
<script type="text/javascript" src="../video-js/video.js"></script>
<script>
  videojs.options.flash.swf = "../video-js/video-js.swf"
</script>

{{-- Fancybox --}}
<script type="text/javascript" src="../Fancybox/jquery-1.10.1.min.js"></script>
  <script type="text/javascript" src="../Fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
  <script type="text/javascript" src="../Fancybox/jquery.fancybox.js?v=2.1.5"></script>
  <link rel="stylesheet" type="text/css" href="../Fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
  <link rel="stylesheet" type="text/css" href="../Fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
  <script type="text/javascript" src="../Fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
  <link rel="stylesheet" type="text/css" href="../Fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
  <script type="text/javascript" src="../Fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
  <script type="text/javascript" src="../Fancybox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>





  <script type="text/javascript">
    $(document).ready(function() {
      /*
       *  Simple image gallery. Uses default settings
       */

      $('.fancybox').fancybox();

      /*
       *  Different effects
       */

      // Change title type, overlay closing speed
      $(".fancybox-effects-a").fancybox({
        helpers: {
          title : {
            type : 'outside'
          },
          overlay : {
            speedOut : 0
          }
        }
      });

      // Disable opening and closing animations, change title type
      $(".fancybox-effects-b").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',

        helpers : {
          title : {
            type : 'over'
          }
        }
      });

      // Set custom style, close if clicked, change title type and overlay color
      $(".fancybox-effects-c").fancybox({
        wrapCSS    : 'fancybox-custom',
        closeClick : true,

        openEffect : 'none',

        helpers : {
          title : {
            type : 'inside'
          },
          overlay : {
            css : {
              'background' : 'rgba(238,238,238,0.85)'
            }
          }
        }
      });

      // Remove padding, set opening and closing animations, close if clicked and disable overlay
      $(".fancybox-effects-d").fancybox({
        padding: 0,

        openEffect : 'elastic',
        openSpeed  : 150,

        closeEffect : 'elastic',
        closeSpeed  : 150,

        closeClick : true,

        helpers : {
          overlay : null
        }
      });

      /*
       *  Button helper. Disable animations, hide close button, change title type and content
       */

      $('.fancybox-buttons').fancybox({
        openEffect  : 'none',
        closeEffect : 'none',

        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,

        helpers : {
          title : {
            type : 'inside'
          },
          buttons : {}
        },

        afterLoad : function() {
          this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
        }
      });


      /*
       *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
       */

      $('.fancybox-thumbs').fancybox({
        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,
        arrows    : false,
        nextClick : true,

        helpers : {
          thumbs : {
            width  : 50,
            height : 50
          }
        }
      });

      /*
       *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
      */
      $('.fancybox-media')
        .attr('rel', 'media-gallery')
        .fancybox({
          openEffect : 'none',
          closeEffect : 'none',
          prevEffect : 'none',
          nextEffect : 'none',

          arrows : false,
          helpers : {
            media : {},
            buttons : {}
          }
        });

      /*
       *  Open manually
       */

      $("#fancybox-manual-a").click(function() {
        $.fancybox.open('1_b.jpg');
      });

      $("#fancybox-manual-b").click(function() {
        $.fancybox.open({
          href : 'iframe.html',
          type : 'iframe',
          padding : 5
        });
      });

      $("#fancybox-manual-c").click(function() {
        $.fancybox.open([
          {
            href : '1_b.jpg',
            title : 'My title'
          }, {
            href : '2_b.jpg',
            title : '2nd title'
          }, {
            href : '3_b.jpg'
          }
        ], {
          helpers : {
            thumbs : {
              width: 75,
              height: 50
            }
          }
        });
      });


    });
  </script>




<style type="text/css">
.warna {
  color: #FFF;
 font-family: Tahoma, Geneva, sans-serif;

   text-shadow: 1px 1px #000;
}
 .gradient{
    background: -moz-linear-gradient(top, #fff, #eee);
    background: -webkit-linear-gradient(top, #fff, #eee);
    background: -o-linear-gradient(top, #fff,#eee);
    background: linear-gradient(top, #fff, #eee);
    /* versions of IE use these */
    filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=0, StartColorStr='#ffffff',EndColorStr='#eeeeee');
    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#ffffff, endColorstr=#eeeeee)";
}
a {
  color:#1185ff;
}

/* Specific CSS code for the magnifying glass icon */
a.zoomable {
  display:block;
  /* Adjust the width and height properties
  according to your “zoomable thumbnail”’s dimensions;*/
  width:0px;
  height:50px;
  position:relative;
  -webkit-box-shadow:rgba(0,0,0,0.4) 0 4px 10px;
  -moz-box-shadow:rgba(0,0,0,0.4) 0 4px 10px;
  box-shadow:rgba(0,0,0,0.4) 0 4px 10px;
}
*, *:before, *:after{ 
    box-sizing: border-box; 
    -moz-box-sizing: border-box; 
    -webkit-box-sizing: border-box; 
} 
.css-shapes{ 
    position: relative; 
    height: 150px; 
    width: 700px; 
    padding: 0px; 
    background-color: #4DA4CA; 
    border-radius: 150px; 
    top: 1px; 
    -webkit-transform: skew(0deg); 
    transform: skew(0deg); 
    border-top: 0px transparent; 
}
</style>

<div class="row">
<?php if(Session::has('register_success')): ?>
  <div class="col-xs-6 col-sm-4"></div>
  <div class="col-xs-6 col-sm-4">
      <div class="alert alert-info alert-dismissible" role="alert">
         <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
         <?php echo Session::get('register_success') ?>
         <?php endif; ?>  
  </div>
</div>
<div class="container">
  <div class=" ">
      {{Form::open(array('url'=>'list_matakuliah/' . $dosen->id,  'files'=>true))}} 
   <p> <h4 align="left">

<div class="container">
 

<div class="list-group">
 <table align="right">
 <tbody>
 <td>
  

<button type="submit" class="btn btn-primary btn-xs">
          <span class="glyphicon glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> 
          Tambahkan Ke Daftar Favorit</button> 
      {{Form::close()}}
      </td>
      </tbody>
   </table> 
</div>

<p></p>
  <a  class="list-group-item">   {{$dosen->nama_lengkap; }} 
 <p></p>
<div>

<h6>Pesan Dari Dosen :</h6>
<p>
@if ($dosen->pesan===null)
-
@else
{{$dosen->pesan}}
@endif
<h6>NIK Dosen :</h6>
@if ($dosen->nik===null)
-
@else
{{$dosen->nik}}
@endif

</p>
     
  
    </div>
    </a>
  </div>
 




{{-- isi dari materi  --}}
<div class="row">
  <div class="col-md-8 col-md-offset-2">
<p>&nbsp;</p>
@foreach ($matakuliah as $matakuliah2)
<div class="bs-example" data-example-id="hoverable-table">
    <table class="table table-hover">
      <thead>
        <tr>
         <h3  > {{$matakuliah2->matakuliah}}</h3>
        </tr>
      </thead>
      <tbody>
         
      @foreach ($isi_konten as $konten)
      @if ( $matakuliah2->id === $konten->id_matakuliah)
        <tr>

          <td style="width:50px">
               {{Form::open(array('url'=>'download/' .  $konten->id,  'files'=>true))}}
                  <button type="submit" class="btn btn-default"> <span class="glyphicon glyphicon-download-alt"></span> 
                </button>
                {{Form::close()}}
          </td>

          <td style="width:70px" align="left">

               @if ($konten->tipe_file === 'docx' )
                {{ HTML::image('/icon/doc.png') }}
                @elseif ($konten->tipe_file === 'doc')
                {{ HTML::image('/icon/doc.png') }}
              @elseif ($konten->tipe_file === 'xlsx')
              {{ HTML::image('/icon/xlsx.png') }}  
              @elseif ($konten->tipe_file === 'xls')
              {{ HTML::image('/icon/xlsx.png') }}    
              @elseif ($konten->tipe_file === 'pptx')
              {{ HTML::image('/icon/pptx.png') }}  
               @elseif ($konten->tipe_file === 'ppt')
              {{ HTML::image('/icon/pptx.png') }}   
              @elseif ($konten->tipe_file === 'flv')
              {{ HTML::image('/icon/flv.png') }} 
              @elseif ($konten->tipe_file === 'iso')
              {{ HTML::image('/icon/iso.png') }} 
              @elseif ($konten->tipe_file === 'mp4')
         
              

<a class="fancybox" href="{{'#video'. $konten->id;}}" title="{{$konten->nama_file;}}">
<img src="/icon/mp4.png" />
</a>





<div style="display:none">
<video id="{{'video'. $konten->id;}}" class="video-js vjs-default-skin vjs-big-play-centered" 
  controls preload="auto" width="720" height="400" preload="none"  
  data-setup='{"example_option":true}' >
 <source src="{{URL::to($konten->lokasi);}}" type='video/mp4' />

</video>
</div>





              @elseif ($konten->tipe_file === 'pdf')
              {{ HTML::image('/icon/pdf.png') }} 
              @else
              {{ HTML::image('/icon/file.png') }}
              @endif
 

            </td>
            <td>{{$konten->nama_file}}</td>

            <td></td>
            @endif
      @endforeach 
        </tr>
      
      </tbody>
    </table>
  </div><!-- /example -->

 @endforeach 


</div>
</div>




@stop