	$(document).ready(function($) {
		$(".checkOutSuccess").hide();
		showData();
		cartNoti();

		$(".addToCart").click(function(event) {
			var id=$(this).data('id');
			var photo=$(this).data('photo');
			var name=$(this).data('name');
			var price=$(this).data('price');
			var qty=1;

			var song={
				id:id,
				photo:photo,
				name:name,
				price:price,
				qty:qty
			}

			var songlist=localStorage.getItem("songs");
			var songArray;
			if(songlist==null){
				songArray=Array();
			}else{
				songArray=JSON.parse(songlist);
			}
			var status=false;

			$.each(songArray,function(i,v){
				if(id==v.id){
					v.qty++;
					status=true;
				}
			})

			if(status==false){
				songArray.push(song);
			}
			

			var songString=JSON.stringify(songArray);
			localStorage.setItem("songs", songString);

			showData();		
			cartNoti();
		});

		function showData(){
		var songlist=localStorage.getItem("songs");
		var songArray=JSON.parse(songlist);

		var no=1;
		var html="";
		var subtotal;
		var total=0;
		$.each(songArray,function(i,v){
			var qty=v.qty;
			var price=v.price;
			subtotal=qty*price;
			total+=subtotal;


			html+=`<tr>
			<td>${no++}</td>
			<td>${v.name}</td>
			<td><img src="${v.photo}" width="50px" height ="50px"></td>
			<td><button class="btn btn_increase_decrease purple-gradient btn-sm px-3" data-id="${i}" data-info="minus">-</button>${v.qty}<button class="btn btn_increase_decrease peach-gradient btn-sm px-3" data-id="${i}" data-info="plus">+</button></td>
			<td>${v.price}</td>
			<td>${subtotal}</td>
			<td><button class="btn btn_remove ripe-malinka-gradient btn-sm" style="margin-left:-50px; margin-top:-2px;" data-id="${i}"><span class="font-weight-bold text-white">remove</span></button></td>
			</tr>`

		})
		if (total <= 0) {
			html+=`<tr>
			<td colspan="7"><h6 class="text-black-50 font-weight-bold">Nothing in the Cart. Buy Something.</h6></td>
			</tr>`;
		}else{
			html+=`<tr>
			<td colspan="6" class="font-weight-bold">Total</td><td class="font-weight-bold"> $`+`${total}
			</td>
			</tr>` +
			`<tr>
			<td colspan="7"><button class="btn checkOut aqua-gradient btn-lg btn-block"><span class="text-white">Check Out</span></button></td>
			</tr>`;
		}
		$("tbody").html(html);

	}

	function cartNoti(){
		var total=0;
		var songlist=localStorage.getItem("songs");
		var songArray=JSON.parse(songlist);

		$.each(songArray,function(i,v){
			total+=parseInt(v.qty);
		})

		$("#cart").html(total);


	}

	function removeSong(id) {
		var songlist=localStorage.getItem("songs");
		var songArray=JSON.parse(songlist);

		songArray.splice(id,1);

		var songString=JSON.stringify(songArray);
		localStorage.setItem("songs",songString);
	}

	$("tbody").on('click','.btn_remove',function(){
		var id=$(this).data('id');
		removeSong(id);
		showData();
		cartNoti();

	})

	$("tbody").on('click','.btn_increase_decrease',function(i,v){
		var id=$(this).data('id');
		var info=$(this).data('info');
		
		var songlist=localStorage.getItem("songs");
		var songArray=JSON.parse(songlist);
		$.each(songArray,function(i,v){
			if(id==i){
				if(info=="plus"){
					v.qty++;
				}else if (info=="minus") {
					if(v.qty<=0){
						v.qty = 0;
					}else{
						v.qty--;
					}
					
				}
			}
		})

		var songString=JSON.stringify(songArray);
		localStorage.setItem("songs", songString);
		showData();
		cartNoti();

	});

	$("tbody").on('click','.checkOut',function(i,v){
		$(".checkOutSuccess").show();
		localStorage.clear();
		showData();
		cartNoti();
	})

});