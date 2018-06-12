
// if (!Array.prototype.filter)
// {
// 	Array.prototype.filter = function(fun /*, thisp*/)
// 	{
// 		var len = this.length;

// 		if (typeof fun != "function")
// 			throw new TypeError();

// 		var res = new Array();
// 		var thisp = arguments[1];

// 		for (var i = 0; i < len; i++)
// 		{
// 			if (i in this)
// 			{
//                      var val = this[i]; // in case fun mutates this
//                      if (fun.call(thisp, val, i, this))
//                      	res.push(val);
//                  }
//              }
//              return res;
//          };
//      }


     // function isBigEnough(element, index, array) {
     // 	return (element['parent']!='');
     // }
     // $.ajax({
     // 	url: "https://graph.facebook.com/1094916933927327_1708435035908844/comments?fields=message,from,comment_count,parent&access_token=EAAAAUaZA8jlABAJ2bKMCJvQ6Lks4yKrcEFdm8ouIOVnkymoWp6lEmMXWpYsTcaLGhjoLsG3W3psjrIZBSHVcappsLZBix0q16UnotZCGmKFPqp8K7dveLtZCXK6gxOBgMo4xj0avCALeir3lkHAPl8w0CZCJF1tdKW3rAOMnsZAtQZDZD",
     // 	data: {},
     // 	type: "get",
     // 	dataType: "jsonp",
     // 	success: function(smg) { 

// console.log(smg);
// console.log( smg['data'][1]);
// var i = 0;
// smg['data'].each(function( k ) {
// 	var ck = smg['data'][i].filter(isBigEnough);
// 	console.log(ck);
// });


// 	},
// });



angular.module('myApp', []).controller('namesCtrl', function($scope) {
	$scope.data = [];
	$scope.names = function(){
		$.ajax({
			url: "https://graph.facebook.com/1094916933927327_1708435035908844/comments?fields=message,from,comment_count,parent&access_token=EAAAAUaZA8jlABAJ2bKMCJvQ6Lks4yKrcEFdm8ouIOVnkymoWp6lEmMXWpYsTcaLGhjoLsG3W3psjrIZBSHVcappsLZBix0q16UnotZCGmKFPqp8K7dveLtZCXK6gxOBgMo4xj0avCALeir3lkHAPl8w0CZCJF1tdKW3rAOMnsZAtQZDZD",
			data: {},
			type: "get",
			dataType: "jsonp",
			success: function(smg) { 
				$scope.data.push.apply($scope.data, smg);
			},
		});
	}
	$scope.v = function(e){
		return e['parent'] != '';
	}

});