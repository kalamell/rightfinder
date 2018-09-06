<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>RighFinder</title>
      <link rel="stylesheet" href="<?=base_url();?>assets/prize/css/style.css">
  </head>

  <body>
    <div class="content">
      <div class="wrapper" style="width: 980px;">
        <h1 style="padding:0px; margin:0px; margin-left: 20%; color: #fff; font-size: 1.4em;"><?=$f->campaign_name;?></h1>

        <div style="margin-left:.5em; float:left;"><img src="<?=base_url();?>assets/prize/img/logo_rightfinder.jpg" style="height:2em;"> 
        <img src="<?=base_url();?>upload/<?=$f->customer_logo;?>" style="height:2em;"></div>

        <div class="content">
          <div class="circle">
            <center>
              <div style="margin-top:5.5em;">
                <div class="name" style="font-size:1.6em;" id="output">ผู้โชคดี</div>
                <br><br><br>
                <div style="font-size:1em; color:yellow;"><?=$f->product_name;?></div>
              
                <button>RightFinder</button>
              </div>
            </center>
          </div>
        </div>
        <div style="float:right; margin-left:18em; margin-top:18em;"><img src="<?=base_url();?>assets/prize/img/broughtyouby.jpg" style="height:3em;"></div>
      </div>
      <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
      <script>
        $('button').click(function(){
      alertName();
    });

    $("span").appendTo($("body"));

    var names = [];

    $.getJSON('<?=site_url("campaign/getmember/".$f->campaign_id."/".$f->product_id);?>', function(res) {
      names = res;
    });

    function alertName() {
      names.sort();
      $('.name').empty();
        var num = names.length;
      if(num < 1) {
        $('.name').append('No One Else T^T');
        $('button').attr('disabled','disabled');
      } else {
        var rnd = Math.floor(Math.random()*num);
          var randomName = names[rnd];
          // console.log(randomName);
          $('.name').append(randomName);
          // $('<span>' + randomName + '</span>').appendTo(".name");
          $.post('<?=site_url('campaign/do_save');?>', { 
            'campaign_id': '<?=$f->campaign_id;?>',
            'product_id': '<?=$f->product_id;?>',
            'member_name':  randomName
          }, function() {

          });
          names.splice(rnd,1);
      }

      var theLetters = "abcdefghijklmnopqrstuvwxyz#%&^+=-กขฃคฅฆงจฉชซฌญฎฏฐฑฒณดตถทธนบปผฝพฟภมยรลวศษสหฬอฮ"; //You can customize what letters it will cycle through
      var ctnt = randomName; // Your text goes here
      var speed = 50; // ms per frame
      var increment = 8; // frames per step. Must be >2

          
      var clen = ctnt.length;       
      var si = 0;
      var stri = 0;
      var block = "";
      var fixed = "";
      //Call self x times, whole function wrapped in setTimeout
      (function rustle (i) {          
        setTimeout(function () {
            if (--i){rustle(i);}
            nextFrame(i);
            si = si + 1;        
        }, speed);
      })(clen*increment+1); 
      function nextFrame(pos){
        for (var i=0; i<clen-stri; i++) {
            //Random number
            var num = Math.floor(theLetters.length * Math.random());
            //Get random letter
            var letter = theLetters.charAt(num);
            block = block + letter;
          }
        if (si == (increment-1)){
          stri++;
        }
          if (si == increment){
          // Add a letter; 
          // every speed*10 ms
            fixed = fixed +  ctnt.charAt(stri - 1);
            si = 0;
        }
          $("#output").html(fixed + block);
            block = "";
        }
      }
      </script>
  </body>
</html>
