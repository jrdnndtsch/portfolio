
var jdp = {};

jdp.back = [ "#FFE1CA", "#D4F2F3", "#FFF8A1", "#DBF3D0" ];
jdp.txt = ["ENTHUSIAST", "ADMIRER", "FRIEND", "EXPLORER", "CREATOR"];


$(function(){
	//your jQuery here

	$('body').ready(function() {
		console.log('merp');
	    var svg = new Walkway({ 
	    	selector: '#header',
	    	duration: '3000', 
	    }); 
	    svg.draw();
	});
	jdp.num = jdp.back.length;
	jdp.num2 = jdp.txt.length;
	jdp.newback= function(){
		var i = Math.floor(Math.random() * jdp.num);
		$('.hero').css('background', jdp.back[i]);
	};	
	jdp.newtext= function(){
		var i = Math.floor(Math.random() * jdp.num2);
		$('#dev').text(jdp.txt[i])
	};

	$('#Triangle-1').on('click', function(){
		jdp.newback();
		jdp.newtext();
	});

	$('#Triangle-2').on('click', function(){
		jdp.newback();
		jdp.newtext();
	});

	$('.navicon').on('click', function(){
		$('.naviconIcon').toggleClass('naviconIcon2');
		$('.dropDown').slideToggle(800);
		$('.logoSquare').fadeToggle(800);
		if ($('.logoSquare').css('display') === 'block') {
			$('.logoSquare').css('display', '');
		}
	});
	$('.logoRect').on('click', function(){
		$('.dropMenu').slideToggle(800);
	});

});


