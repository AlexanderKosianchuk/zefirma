jQuery(document).ready(function(){


	var obj1 = function(){
		console.log('constr');
	};
	
	var obj = new obj1();
	
	obj1.add = function(e) {
		console.log('1');
	};
	
	obj.add(1);
	
	
	console.log(obj);
});