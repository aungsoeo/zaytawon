var baseurl="http://localhost/ezrare/";
var listApp = angular.module('listpp', ['ui.bootstrap']);    

listApp.filter('startFrom', function() {
return function(input, start) {
	if(input) {
		start = +start; //parse to int
		return input.slice(start);
	}
	return [];
}
});

listApp.factory('Scopes', function ($rootScope) {
	var mem = {};
 
	return {
		store: function (key, value) {
			$rootScope.$emit('scope.stored', key);
			mem[key] = value;
		},
		get: function (key) {
			return mem[key];
		}
	};
});

listApp.run(function ($rootScope) {
	$rootScope.$on('scope.stored', function (event, data) {
		console.log("scope.stored", data);
	});
});


listApp.factory('commonfunctions', function($http, $rootScope){

	function getuseritems(callback){
		$http({
			method: 'GET',
			url: baseurl+"assets/items_json/itemstest.json",	//to change this in server //"Hc_profile/getuseritems", local assets/items_json/itemstest.json
			cache: true
		}).success(callback);
	}
	
	function factoryposttest(paras, callback) {
		$http({
			url: baseurl + 'Bets/factoryposttest',
			method: "POST",
			data: paras
		}).success(function (data, status, headers, config) {
            callback(data); 
        });
    }
	
	function getserveritems(callback){
		$http({
			method: 'GET',
			url: baseurl+"assets/items_json/items_server_hha.json",		// to change this in server
			cache: true
		}).success(callback);
	}
	
	function getallmatch(callback){
		$http({
			method: 'GET',
			url: baseurl+"Home/getallmatch",
			cache: true
		}).success(callback);
	}
	
	function getitemprice(callback){
		$http({
			method: 'GET',
			url: baseurl+"assets/items_json/items_price.json",		// to change this in server
			cache: true
		}).success(callback);
	}
			
	return {
		getuseritems	: getuseritems,
		getallmatch  	: getallmatch,
		getserveritems  	: getserveritems,
		getitemprice	: getitemprice,
		factoryposttest : factoryposttest
	};
});

listApp.controller('profile_controller', function ($scope, $controller, $http, filterFilter, commonfunctions, Scopes) {
	
	$scope.filteredItems =  [];
	$scope.pagedItems    =  [];
	$scope.currentPage   =  1;
	$scope.noOfPages	 = 0;
	$scope.maxSize = 5;
	
	$scope.datas=[];
	
	$scope.qualitysel="Quality";
	$scope.raritysel="Rarity All";
	$scope.herosel="Heroes All";
	
	$scope.showinfo = function(id){
		$('#i'+id).show();
	}
	$scope.hideinfo = function(id){
		$('#i'+id).hide();
	}
	
	$scope.checkfilter = function(qualityname, rarity, hero){
		if($scope.qualitysel!="Quality"){
			if($scope.qualitysel!=qualityname){
				return true;
			}
		}
		
		if($scope.raritysel!="Rarity All"){
			if($scope.raritysel!=rarity){
				return true;
			}
		}
		
		if($scope.herosel!="Heroes All"){
			if($scope.herosel!=hero){
				return true;
			}
		}
		
		return false;
	};
	
	$scope.setPage = function(pageNo) {
		$scope.currentPage = pageNo;
	};
	
	$scope.add_btn = true;
	
	$scope.getuseritems = function(){	
		
		commonfunctions.getuseritems(function(data) {
			$scope.datas = data;   
			$scope.pagedItems = data;    
			$scope.filteredItems = $scope.pagedItems.length; 
			$scope.totalItems = $scope.pagedItems.length;
		});
		
	}
	
	$scope.$watch('search', function(term) {
		$scope.filtered = filterFilter($scope.pagedItems, term);
		$scope.filteredItems = $scope.filtered.length;
	});
	
	$scope.sortField="rarity";
	
	$scope.getitemprice = function(){
		commonfunctions.getitemprice(function(data) {
			$scope.itemprices = data;  			
		});
	}
	
});


listApp.controller('home_controller', function ($scope, $controller, $http, filterFilter, commonfunctions, Scopes) {
	
	$scope.getallmatch = function(){	
		commonfunctions.getallmatch(function(data) {
			$scope.datas = data;   
			$scope.pagedItems = data;    
			$scope.filteredItems = $scope.pagedItems.length; 
			$scope.totalItems = $scope.pagedItems.length;
			
			$scope.currentPage = 1; //current page
			$scope.entryLimit = 10; //max no of items to display in a page
		});
	}
	
});

listApp.controller('bets_controller', function ($scope, $controller, $http, filterFilter, commonfunctions, Scopes) {
	
	$scope.loader=false;
	//old
	$scope.team1_percent = 0;
	$scope.team2_percent = 0;
	$scope.totalbet_for_team1 = 0;
	$scope.totalbet_for_team2 = 0;
	$scope.totalbet_for_all	  = 0;
	
	//new
	$scope.totalbet1 = 0;			
	$scope.totalbet2 = 0;
	$scope.totalbet_for_all_t1  = 0;
	$scope.totalbet_for_all_t2  = 0;
	
	$scope.totalitemprices = 0.0;
	$scope.reward1	= 0;
	$scope.reward2	= 0;
	
	
	$scope.itemprices = [];
	
	$scope.datas=[];
	
	$scope.datas=[];
	
	$scope.betitems=[];
	
	$scope.select_team=0;
	$scope.showbyteam1=true;
	$scope.showbyteam2=true;
	
	$scope.qualitysel="Quality";
	$scope.raritysel="Rarity All";
	$scope.herosel="Heroes All";
	
	$scope.showinfo = function(id){
		$('#i'+id).show();
	}
	$scope.hideinfo = function(id){
		$('#i'+id).hide();
	}
	
	$scope.showbetiteminfo = function(id){
		$('#ib'+id).show();
	}
	$scope.hidebetiteminfo = function(id){
		$('#ib'+id).hide();
	}
	
	$scope.showinfo2 = function(id){
		$('#ibt'+id).show();
	}
	$scope.hideinfo2 = function(id){
		$('#ibt'+id).hide();
	}
	
	
	$scope.checkfilter = function(qualityname, rarity, hero){
		if($scope.qualitysel!="Quality"){
			if($scope.qualitysel!=qualityname){
				return true;
			}
		}
		
		if($scope.raritysel!="Rarity All"){
			if($scope.raritysel!=rarity){
				return true;
			}
		}
		
		if($scope.herosel!="Heroes All"){
			if($scope.herosel!=hero){
				return true;
			}
		}
		
		return false;
	};
	
	$scope.getuseritems = function(){	
		$scope.loader=true;
		commonfunctions.getuseritems(function(data) {
			$scope.loader=false;
			$scope.datas = data;   
			$scope.pagedItems = data;    
			$scope.filteredItems = $scope.pagedItems.length; 
			$scope.totalItems = $scope.pagedItems.length;
		});
		
	}
	
	$scope.paras=[];
	$scope.factoryposttest = function() {
		var paras={ 'p1':'hein', 'p2':'ei' };
		commonfunctions.factoryposttest(paras, function(data) { //note the tmpl argument
			$scope.paras = data;
			console.log($scope.paras);
		});
	}
	
	$scope.sortField="rarity";
	
	$scope.placebetloadingtest = function(){
		$scope.loader=true;
		$http.get(baseurl+"Bets/placebetloadingtest").success(function(data){
			$scope.loader=false;
		});
	}
	
	$scope.placebetitem = function(item, price){
		if(price==undefined){
			//alert("ei");
			price=0;
		}
		item.price = price;
		$scope.betitems.push(item);
		
		var oriprice=$scope.totalitemprices;
		oriprice=parseFloat(oriprice);
		
		var price=parseFloat(price);
		var total=oriprice+price;
		
		total=total.toFixed(2);
		$scope.totalitemprices=total;
		
		$scope.Betting_Formula(total);
		
		$('#item'+item.id).hide();
	}
	
	$scope.Betting_Formula = function(total){
		
		var total=parseFloat(total);
		var team1_percent=parseFloat($scope.team1_percent);
		var team2_percent=parseFloat($scope.team2_percent);
		var totalbet_for_team1	=	parseFloat($scope.totalbet_for_team1);
		var totalbet_for_team2	=	parseFloat($scope.totalbet_for_team2);
		var totalbet_for_all  	=	parseFloat($scope.totalbet_for_all);
		
		team1_percent=(totalbet_for_team1+total)*(100/(totalbet_for_all+total));
		team2_percent=(totalbet_for_team2+total)*(100/(totalbet_for_all+total));
		
		var reward1=0;
		var reward2=0;
		if(team1_percent!=0){
			reward1=(total * 100)/team1_percent;
		}
		if(team2_percent!=0){
			reward2=(total * 100)/team2_percent;
		}
		
		var admintake1=reward1*(1/100);	// 1% take = 1/100
		var admintake2=reward2*(1/100);	// 1% take = 1/100
		admintake1=admintake1.toFixed(2);
		admintake2=admintake2.toFixed(2);
		
		reward1=reward1-admintake1;
		reward2=reward2-admintake2;
		
		$scope.reward1=reward1.toFixed(2);
		$scope.reward2=reward2.toFixed(2);
		
	}
	
	$scope.removebetitem = function(itemid, price){
		if(price==undefined){
			//alert("ei");
			price=0;
		}
		
		var barr=$scope.betitems;
		for(i=0; i < barr.length; i++){
			if(barr[i].id==itemid){
				$scope.betitems.splice( i, 1 );
				break;
			}
		}
		
		var oriprice=$scope.totalitemprices;
		oriprice=parseFloat(oriprice);
		
		var price=parseFloat(price);
		var total=oriprice-price;
		
		total=total.toFixed(2);
		$scope.totalitemprices=total;
		
		$scope.Betting_Formula(total);
		
		$('#item'+itemid).show();
	}
	
	$scope.selectteam = function(id){
		$scope.select_team=id;
	}
	
	
	
	$scope.placebet = function(){
		$http.post(baseurl+"Bets/placebet", 
			{
				'reward1'		: $scope.reward1,
				'reward2'		: $scope.reward2,
				'total'			: $scope.totalitemprices,
				'items'     	: $scope.betitems,
				'match_id'		: $('#match_id').val(),
				'team_id'		: $scope.select_team,
				'tournament_id' : $('#tournament_id').val()
			}
		)         
		.success(function (data, status, headers, config) {   
			
			if(data.tradeofferid!=""){
				alert("Your trade offer is complete. Please go this link to accept. https://steamcommunity.com/tradeoffer/"+data.tradeofferid);
				$http.post(baseurl+"Bets/check_tradeofferstate", {
						'tradeofferid'		: data.tradeofferid,
						'temp_id'			: data.temp_id,
						'apikey'			: data.apikey
					}
				).success(function (data, status, headers, config) {
					alert(data);
					if(data==6){
						alert("Trade Offer request is canceled cause the user didn't response anything within 5 minutes.");
					}else if(data==3){
						alert("Your items are sussessfully moved to ezrare's bot");
					}
				});
			}else{
				alert(data.error);
			}
			//alert("Finish Betting");
			//location.reload();  
		});
	}
	
	/* test check_tradeofferstate
	$scope.placebet = function(){
			var data={
				'tradeofferid' : 904205997,
				'temp_id' : 30,
				'apikey' : '7DB3F1912464E97893FADF6CAEDB3DFB'
				
			};
			if(data.tradeofferid!=""){
				alert("Your trade offer is complete. Please go this link to accept. https://steamcommunity.com/tradeoffer/"+data.tradeofferid);
				$http.post(baseurl+"Bets/check_tradeofferstate", {
						'tradeofferid'		: data.tradeofferid,
						'temp_id'			: data.temp_id,
						'apikey'			: data.apikey
					}
				).success(function (data, status, headers, config) {
					alert(data);
					if(data==6){
						alert("Trade Offer request is canceled cause the user didn't response anything within 5 minutes.");
					}else if(data==3){
						alert("Your items are sussessfully moved to ezrare's bot");
					}
				});
			}else{
				alert(data.error);
			}
			//alert("Finish Betting");
			//location.reload();  		
	}
	*/
	
	$scope.getlast30bettingitems = function(match_id){
		$http.get(baseurl+"Bets/getlast30bettingitems/"+match_id).success(function(data){
			$scope.bettingitems = data;   
		});
	}
	
	$scope.getitemprice = function(){
		commonfunctions.getitemprice(function(data) {
			$scope.itemprices = data;  			
		});
	}
	
});



listApp.controller('search_controller', function ($scope, $controller, $http, filterFilter, commonfunctions, Scopes) {

	$scope.datas=[];
	$scope.useritems=[];
	
	$scope.showinfo = function(id){
		$('#i'+id).show();
	}
	$scope.hideinfo = function(id){
		$('#i'+id).hide();
	}
	
	$scope.showinfo2 = function(id){
		$('#i2'+id).show();
	}
	$scope.hideinfo2 = function(id){
		$('#i2'+id).hide();
	}
	
	$scope.getuseritems = function(){	
		commonfunctions.getuseritems(function(data) {
			$scope.datas = data;   			
		});
	}
	
	$scope.placeuseritem = function(item){
		$scope.useritems.push(item);
		$('#useritem'+item.id).hide();
	}
	
	$scope.removeuseritem = function(itemid){
		var is=$scope.useritems;
		for(i=0; i < is.length; i++){
			if(is[i].id==itemid){
				$scope.useritems.splice( i, 1 );
				break;
			}
		}
		$('#useritem'+itemid).show(); 
	}
	
	/** Filter in useritems { **/
	
	$scope.qualitysel="Quality";
	$scope.raritysel="Rarity All";
	$scope.herosel="Heroes All";
	
	$scope.checkfilter = function(qualityname, rarity, hero){
		if($scope.qualitysel!="Quality"){
			if($scope.qualitysel!=qualityname){
				return true;
			}
		}
		
		if($scope.raritysel!="Rarity All"){
			if($scope.raritysel!=rarity){
				return true;
			}
		}
		
		if($scope.herosel!="Heroes All"){
			if($scope.herosel!=hero){
				return true;
			}
		}
		
		return false;
	};
	/** Filter in useritems } **/
	
	
	
	$scope.searchitems=[];
	$scope.filtered=[];
	$scope.filteredItems =  [];
	$scope.pagedItems    =  [];
	
	$scope.showinfo1 = function(id){
		$('#i1'+id).show();
	}
	$scope.hideinfo1 = function(id){
		$('#i1'+id).hide();
	}
	
	$scope.showinfo3 = function(id){
		$('#i3'+id).show();
	}
	$scope.hideinfo3 = function(id){
		$('#i3'+id).hide();
	}
	
	$scope.getserveritems = function(){
		commonfunctions.getserveritems(function(data) {
			$scope.serveritemsdatas = data;   
			$scope.pagedItems = data;    
			$scope.filteredItems = $scope.pagedItems.length; 
			$scope.totalItems = $scope.pagedItems.length;
		});
	}
	
	/******* for pagination { **********/
	$scope.currentPage = 1; //current page
	$scope.entryLimit = 35; //max no of items to display in a page
	$scope.setPage = function(pageNo) {
		$scope.currentPage = pageNo;
	};
	/******* for pagination } **********/
	
	/** Filter in server items { **/
	
	$scope.qualitysel1="";
	$scope.raritysel1="";
	$scope.herosel1="";
	
	$scope.$watch('search1', function(term) {		// Begin from this
		$scope.filtered = filterFilter( $scope.pagedItems, {itemname: $scope.search1, type: $scope.search1, hero:$scope.herosel1,  rarity:$scope.raritysel1});
		$scope.filteredItems = $scope.filtered.length;
	});
	$scope.$watch('raritysel1', function(term) {
		$scope.filtered = filterFilter( $scope.pagedItems, {itemname: $scope.search1, type: $scope.search1, hero:$scope.herosel1,  rarity:$scope.raritysel1});
		$scope.filteredItems = $scope.filtered.length;
	});
	$scope.$watch('herosel1', function(term) {
		$scope.filtered = filterFilter( $scope.pagedItems, {itemname: $scope.search1, type: $scope.search1, hero:$scope.herosel1,  rarity:$scope.raritysel1});
		$scope.filteredItems = $scope.filtered.length;
	});
	
	/** Filter in server items } **/
	
	$scope.sortField="rarity";
	$scope.uniqueid=0;
	$scope.placesearchitem = function(item){
		item.bordercolor="";
		item.quality="";
		$scope.searchitems.push(item);		
	}
	
	
	
	$scope.removesearchitem = function(itemid){
		var is=$scope.searchitems;
		for(i=0; i < is.length; i++){
			if(is[i].defindex==itemid){
				$scope.searchitems.splice( i, 1 );
				break;
			}
		}		
	}
	
	$scope.tradeitem = function(){
		$http.post(baseurl+"Add_trade/tradeitem", 
			{
				'useritems'     	: $scope.useritems,
				'searchitems'     	: $scope.searchitems,
				'trade_msg'			: $('#trade_msg').val()
			}
		)         
		.success(function (data, status, headers, config) {   
			alert("Finish Trade");
			//location.href=baseurl;
		});
	}
	
	$scope.searchtradeitem = function(){
		$http.post(baseurl+"Search/searchtradeitem", 
			{
				'useritems'     	: $scope.useritems,
				'searchitems'     	: $scope.searchitems
			}
		)         
		.success(function (data, status, headers, config) {   
			
		});
	}
	
	$scope.getitemprice = function(){
		commonfunctions.getitemprice(function(data) {
			$scope.itemprices = data;  			
		});
	}
	
	$scope.showqbox = function(id){
		$('#i3'+id).hide();
		$('#qbox'+id).show();
	}
	$scope.hideqbox = function(id){
		$('#qbox'+id).hide();
	}
	$scope.changequality = function(id, quality, color, item){		
	
		obj=[];
		obj={ 'defindex': item.defindex, 'itemname': item.itemname, 'type': item.type, 'rarity': item.rarity, 'creation_date': item.creation_date, 'hero': item.hero, 'status': item.status, 'text_color': item.text_color, 'bordercolor': color, 'quality': quality }
		$scope.searchitems.splice(id,1, obj);		// array update code
		
	}
	
});




listApp.controller('offer_controller', function ($scope, $controller, $window, $http, filterFilter, commonfunctions, Scopes) {
	$scope.wons=[];
	$scope.selectedrow=0;
	$scope.place_bet_id="";
	$scope.pickitems=[];
	$scope.picktotal=0;
	$scope.picktotalfromdb=0;
	$scope.reward=0;
	$scope.botitems=[];
	$scope.bots=[];
	$scope.selectedbot="";
	
	$scope.initializefun = function(){
		$scope.place_bet_id="";
		$scope.pickitems=[];
		$scope.picktotal=0;
		$scope.picktotalfromdb=0;
		$scope.reward=0;
		$scope.botitems=[];
		$scope.bots=[];
		$scope.selectedbot="";
	}
	
	$scope.getwonmatch = function(userid){
		$http.get(baseurl+"Offers/getwonmatch/"+userid).success(function(data){
			if(data.length!=0){
				$scope.wons = data; 	
				$scope.reward=$scope.wons[0].reward;
				
				$scope.picktotal=$scope.wons[0].taken_amount;
				$scope.picktotalfromdb=$scope.wons[0].taken_amount;
				
				$scope.place_bet_id=$scope.wons[0].place_bet_id;;
				$scope.getwonitems($scope.wons[0].team_id, $scope.wons[0].match_id);
				$scope.getitemsfrombot($scope.wons[0].match_id);
				
			}
		});
		
	}
	
	$scope.getwonmatchbyindex = function($i){
		$scope.initializefun();
		$scope.reward=$scope.wons[$i].reward;
				
		$scope.picktotal=$scope.wons[$i].taken_amount;
		$scope.picktotalfromdb=$scope.wons[$i].taken_amount;
		
		$scope.place_bet_id=$scope.wons[$i].place_bet_id;;
		$scope.getwonitems($scope.wons[$i].team_id, $scope.wons[$i].match_id);
		$scope.getitemsfrombot($scope.wons[$i].match_id);
		
		$scope.selectedrow=$i;
	}
	
	$scope.getwonitems = function(team_id, match_id){
		$http.get(baseurl+"Offers/getwonitems/"+team_id+"/"+match_id).success(function(data){
			$scope.wonitems = data; 
		}); 
	}
	
	$scope.getitemsfrombot = function(match_id){
		$http.get(baseurl+"Offers/getitemsfrombot/"+match_id).success(function(data){
			$scope.botitems = data.items; 
			$scope.bots = data.bots; 
			$scope.selectedbot = data.bots[0].bot_id;
			
		}); 
	}
	
	$scope.pickitem = function(id, item){
		var barr=$scope.pickitems;
		var total=0;
		for(i=0; i < barr.length; i++){
			total=total+parseFloat(barr[i].price);
		}
		total=total+item.price;
		total=total+parseFloat($scope.picktotalfromdb);
		total=total.toFixed(2);
		//alert($scope.reward);
		//alert(total);
		if(total>parseFloat($scope.reward)){ 
			alert("You haven't enough money to pick this item.")
			return false; 
		}
		
		
		var original_id=item.original_id; //to change this in testing
		
		var filteritem = $scope.botitems.filter(function(entry){
			return entry.original_id == original_id;	// return array contain hein
		})[0];
		
		item.asset_id=filteritem.id;
		
		$scope.picktotal=total;
		$('#item'+id).hide();
		$scope.pickitems.push(item);
			
	}
	
	$scope.alertsth = function(msg){
		alert(msg);
	}
	
	$scope.removepickitem = function(id, item){
		var barr=$scope.pickitems;
		for(i=0; i < barr.length; i++){
			if(barr[i].id==id){
				$scope.pickitems.splice( i, 1 );
				break;
			}
		}
		var total=$scope.picktotal;
		total=parseFloat(total)-parseFloat(item.price);
		total=total.toFixed(2);
		$scope.picktotal=total;
		
		$('#item'+id).show();
	}
	
	$scope.showinfo = function(id){
		$('#i'+id).show();
	}
	
	$scope.hideinfo = function(id){
		$('#i'+id).hide();
	}
	
	$scope.showinfo1 = function(id){
		$('#i1'+id).show();
	}
	
	$scope.hideinfo1 = function(id){
		$('#i1'+id).hide();
	}
	
	$scope.pickconfirm = function(){
		var arr=$scope.pickitems;
		res=false;
		for(i=0; i<arr.length; i++){
			if(arr[i].bot_id==$scope.selectedbot){
				res=true;
				break;
			}
		}
		if(res!=true){ alert("No pick items from this bot"); return false; } 
		
		$http.post(baseurl+"Offers/pickconfirm", 
			{
				'place_bet_id' : $scope.place_bet_id,
				'pickitems'    : $scope.pickitems,
				'picktotal'	   : $scope.picktotal,
				'selectedbot'  : $scope.selectedbot
			}
		)         
		.success(function (data, status, headers, config) {   
			if(data.tradeofferid!=""){
				if(data.tradeofferid!=undefined){
					alert("You now get this picked items. Please go this link to accept. https://steamcommunity.com/tradeoffer/"+data.tradeofferid);
					$http.post(baseurl+"Offers/check_tradeofferstate", {
							'tradeofferid'		: data.tradeofferid,
							'temp_id'			: data.temp_id,
							'apikey'			: data.apikey
						}
					).success(function (data, status, headers, config) {
						alert(data);
						if(data==6){
							alert("Trade Offer request is canceled cause the user didn't response anything within 5 minutes.");
						}else if(data==3){
							alert("Items are sussessfully moved to your inventory");
						}
					});
				}else{
					alert("Something error occoured");
				}
			}else{
				alert(data.error);
			}
		}); 
	}
	
	/* test check_tradeofferstate
	$scope.pickconfirm = function(){
			var data={
				'tradeofferid' : 906597743,
				'temp_id' : 7,
				'apikey' : '299F4B7F6D556E30179361FF5F581F9B'
				
			};
			if(data.tradeofferid!=""){
				$http.post(baseurl+"Offers/check_tradeofferstate", {
						'tradeofferid'		: data.tradeofferid,
						'temp_id'			: data.temp_id,
						'apikey'			: data.apikey
					}
				).success(function (data, status, headers, config) {
					alert(data);
					if(data==6){
						alert("Trade Offer request is canceled cause the user didn't response anything within 5 minutes.");
					}else if(data==3){
						alert("Items are sussessfully moved to your inventory");
					}
				});
			}else{
				alert(data.error);
			}
			//alert("Finish Betting");
			//location.reload();  		
	}
	*/
	
	
	$scope.changebot = function(b){
		$scope.selectedbot=b;
	}
	
});



























