function update1(bowl_id)
{
	
	var run=document.getElementById("run_text"+bowl_id).value;
	var over=document.getElementById("over_text"+bowl_id).value;
	var eco=run/over;
	var eco1=eco.toFixed(2);
	document.getElementById("eco_text"+bowl_id).value=eco1;
}

function edit1_row(bowl_id)
{
 
  var bowl1=document.getElementById("bowl_val"+bowl_id).innerHTML;
  var over1=document.getElementById("over_val"+bowl_id).innerHTML;
  var madien1=document.getElementById("madien_val"+bowl_id).innerHTML;
  var run1=document.getElementById("rn_val"+bowl_id).innerHTML;
  var wicket1=document.getElementById("wicket_val"+bowl_id).innerHTML;
  var nb1=document.getElementById("nb_val"+bowl_id).innerHTML;
  var wd1=document.getElementById("wd_val"+bowl_id).innerHTML;
  var eco1=document.getElementById("eco_val"+bowl_id).innerHTML;
  
 
 document.getElementById("bowl_val"+bowl_id).innerHTML="<input type='text' style='width:120px;' id='bowl_text"+bowl_id+"' value='"+bowl1+"'>";
 document.getElementById("over_val"+bowl_id).innerHTML="<input type='text' style='width:80px;' id='over_text"+bowl_id+"' value='"+over1+"' onblur='update1("+bowl_id+")'>";	
 document.getElementById("madien_val"+bowl_id).innerHTML="<input type='text' style='width:80px;' id='madien_text"+bowl_id+"' value='"+madien1+"'>";	
 document.getElementById("rn_val"+bowl_id).innerHTML="<input type='text' style='width:80px;' id='run_text"+bowl_id+"' value='"+run1+"' onblur='update1("+bowl_id+")'>";	
 document.getElementById("wicket_val"+bowl_id).innerHTML="<input type='text' style='width:80px;' id='wicket_text"+bowl_id+"' value='"+wicket1+"'>";	
 document.getElementById("nb_val"+bowl_id).innerHTML="<input type='text' style='width:80px;' id='nb_text"+bowl_id+"' value='"+nb1+"'>";
 document.getElementById("wd_val"+bowl_id).innerHTML="<input type='text' style='width:80px;' id='wd_text"+bowl_id+"' value='"+wd1+"'>";
 document.getElementById("eco_val"+bowl_id).innerHTML="<input type='text' style='width:80px;' id='eco_text"+bowl_id+"' value='"+eco1+"'>";
 
 document.getElementById("edit1_button"+bowl_id).style.display="none";
 document.getElementById("save1_button"+bowl_id).style.display="inline";
	
}

function save1_row(bowl_id)
{
	
  var bowl1=document.getElementById("bowl_text"+bowl_id).value;
 var over1=document.getElementById("over_text"+bowl_id).value;
 var madien1=document.getElementById("madien_text"+bowl_id).value;
 var run1=document.getElementById("run_text"+bowl_id).value;
 var wicket1=document.getElementById("wicket_text"+bowl_id).value;
 var nb1=document.getElementById("nb_text"+bowl_id).value;
 var wd1=document.getElementById("wd_text"+bowl_id).value;
 var eco1=document.getElementById("eco_text"+bowl_id).value;
 
 $.ajax
 ({
  type:'post',
  url:'modify_records1.php',
  data:{
   edit1_row:'edit1_row',
   row_id:bowl_id,
   bowl_val:bowl1,
   over_val:over1,
   madien_val:madien1,
   rn_val:run1,
   wicket_val:wicket1,
   nb_val:nb1,
   wd_val:wd1,
   eco_val:eco1,
  },
 
  success:function(response) {
   if(response=="success")
   {
    
	document.getElementById("bowl_val"+bowl_id).innerHTML=bowl1;
	document.getElementById("over_val"+bowl_id).innerHTML=over1;
	document.getElementById("madien_val"+bowl_id).innerHTML=madien1;
	document.getElementById("rn_val"+bowl_id).innerHTML=run1;
	document.getElementById("wicket_val"+bowl_id).innerHTML=wicket1;
	document.getElementById("nb_val"+bowl_id).innerHTML=nb1;
	document.getElementById("wd_val"+bowl_id).innerHTML=wd1;
	document.getElementById("eco_val"+bowl_id).innerHTML=eco1;
	
    document.getElementById("edit1_button"+bowl_id).style.display="inline";
	document.getElementById("save1_button"+bowl_id).style.display="none";
   }
  }
 });
}


function delete1_row(bowl_id)
{
 $.ajax
 ({
  type:'post',
  url:'modify_records1.php',
  data:{
   delete1_row:'delete1_row',
   row_id:bowl_id,
  },
  success:function(response) {
   if(response=="success")
   {
    var row1=document.getElementById("row1"+bowl_id);
    row1.parentNode.removeChild(row1);
   }
  }
 });
}

function insert1_row()
{
 
  var bowl1=document.getElementById("new_bowl").value;
   var over1=document.getElementById("new_over").value;
  var madien1=document.getElementById("new_madien").value;
   var run1=document.getElementById("new_rn").value;
  var wicket1=document.getElementById("new_wicket").value;
  var nb1=document.getElementById("new_nb").value;
  var wd1=document.getElementById("new_wd").value;
  var eco1=document.getElementById("new_eco").value;

 $.ajax
 ({
  type:'post',
  url:'modify_records1.php',
  data:{
   insert1_row:'insert1_row',
   bowl_val:bowl1,
   over_val:over1,
   madien_val:madien1,
   rn_val:run1,
   wicket_val:wicket1,
   nb_val:nb1,
   wd_val:wd1,
   eco_val:eco1,
  },
  success:function(response) {
   if(response!="")
   {
    var bowl_id=response;
    var taballe=document.getElementById("scoretb1");
    var taballe_len=(taballe.rows.length)-1;
    var row = taballe.insertRow(taballe_len).outerHTML="<tr id='row1"+bowl_id+"'><td id='bowl_val"+bowl_id+"'>"+bowl1+"</td><td id='over_val"+bowl_id+"'>"+over1+"</td><td id='madien_val"+bowl_id+"'>"+madien1+"</td><td id='rn_val"+bowl_id+"'>"+run1+"</td><td id='wicket_val"+bowl_id+"'>"+wicket1+"</td><td id='nb_val"+bowl_id+"'>"+nb1+"</td><td id='wd_val"+bowl_id+"'>"+wd1+"</td><td id='eco_val"+bowl_id+"'>"+eco1+"</td> <td><input type='button' class='edit_button btn btn-info' id='edit1_button"+bowl_id+"' value='edit' onclick='edit1_row("+bowl_id+");'/><input type='button' class='save_button btn btn-success' id='save1_button"+bowl_id+"' value='save' onclick='save1_row("+bowl_id+");'/><input type='button' class='delete_button btn btn-danger' id='delete1_button"+bowl_id+"' value='delete' onclick='delete1_row("+bowl_id+");'/></td></tr>";

   
	document.getElementById("new_bowl").value="";
	document.getElementById("new_over").value="";
	document.getElementById("new_madien").value="";
	document.getElementById("new_rn").value="";
	document.getElementById("new_wicket").value="";
	document.getElementById("new_nb").value="";
	document.getElementById("new_wd").value="";
	document.getElementById("new_eco").value="";
   }
  }
 });
}