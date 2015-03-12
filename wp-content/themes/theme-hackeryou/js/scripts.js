
var jdp = {};

jdp.back = [ "#FFE1CA", "#D4F2F3", "#FFF8A1", "#DBF3D0" ];



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
	jdp.newback= function(){
		var i = Math.floor(Math.random() * jdp.num);
		console.log('random working');
		$('.hero').css('background', jdp.back[i]);
	};	

	$('#Triangle-1').on('click', function(){
		jdp.newback();
	});

	$('#Triangle-2').on('click', function(){
		jdp.newback();
	});

});


