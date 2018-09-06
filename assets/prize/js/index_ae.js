$('button').click(function(){
			alertName();
		});

		$("span").appendTo($("body"));

		var names = [
		    'Khun Mae ANN',
        'MAPRANG',
		    'PING',
		    'NUENG',
		    'FANN',
		    'BUEM',
		    'BEW',
		    'BEE',
		    'NOOM',
		    'TANGMO',
		    'NING',
		    'PAINT',
		    'PAM',
		    'KWANG',
		    'PLOY',
		    'NAN',
        'JOM'
		];

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
			    names.splice(rnd,1);
			}

			var theLetters = "abcdefghijklmnopqrstuvwxyz#%&^+=-"; //You can customize what letters it will cycle through
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