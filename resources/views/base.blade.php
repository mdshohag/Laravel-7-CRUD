<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel 7 & MySQL CRUD Tutorial</title>
  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="container">
    @yield('main')
  </div>

  
  <script src="{{ asset('js/bootstrap.js') }}" type="text/js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){

      $(document).on('change','.emaillist',function(){
       // console.log("Chnage it");

        var email_id=$(this).val();
        //console.log(email_id);

        var a=$(this).parent();
        //console.log(email_id);
        var op="";
        $.ajax({
          type:'get',
          url:'{!!URL::to('findEmail')!!}',
          data:{'id':email_id},
          dataType:'json',
          success:function(data){
            alert(data.first_name);
           // console.log('success');
           console.log("first_name");
            console.log(data.first_name);

           // op+='<option value="0" selected disabled>Chose name</option>';
            //for(var i=0;i<data.length;i++){
            //  op+='<option value="'+data[i].id+'">'+data[i].first_name+'</option>';
           // }

            //div.find('.namelist').html("");
            //div.find('.namelist').append(op);

            a.find('.firstname').val(data.first_name);

          },error:function(){

          }


        });

      });

    });
  </script>
</body>
</html>