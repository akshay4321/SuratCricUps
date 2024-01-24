function update(bat_id)
{
	 
	 var run=document.getElementById("runs_text"+bat_id).value;
	var ball=document.getElementById("ball_text"+bat_id).value;
	var sr=run/ball*100;
	var sr1=sr.toFixed(2);
	document.getElementById("sr_text"+bat_id).value=sr1;
}
function edit_row(bat_id)
{
	
  
  var run=document.getElementById("run_val"+bat_id).innerHTML;
  var st=document.getElementById("status_val"+bat_id).innerHTML;
  var rn=document.getElementById("runs_val"+bat_id).innerHTML;
  var ball=document.getElementById("ball_val"+bat_id).innerHTML;
  var fr=document.getElementById("fr_val"+bat_id).innerHTML;
  var sx=document.getElementById("sx_val"+bat_id).innerHTML;
  var sr=document.getElementById("sr_val"+bat_id).innerHTML;
  
 
 document.getElementById("run_val"+bat_id).innerHTML="<input type='text' style='width:120px;' id='run_text"+bat_id+"' value='"+run+"'>";
 document.getElementById("status_val"+bat_id).innerHTML="<input type='text' style='width:100px;' id='status_text"+bat_id+"' value='"+st+"'>";	
document.getElementById("runs_val"+bat_id).innerHTML="<input type='text' style='width:100px;' id='runs_text"+bat_id+"' value='"+rn+"' onblur='update("+bat_id+")'>";	
document.getElementById("ball_val"+bat_id).innerHTML="<input type='text' style='width:100px;' id='ball_text"+bat_id+"' value='"+ball+"' onblur='update("+bat_id+")'>";	
document.getElementById("fr_val"+bat_id).innerHTML="<input type='text' style='width:100px;' id='four_text"+bat_id+"' value='"+fr+"'>";	
document.getElementById("sx_val"+bat_id).innerHTML="<input type='text' style='width:100px;' id='sx_text"+bat_id+"' value='"+sx+"'>";
document.getElementById("sr_val"+bat_id).innerHTML="<input type='text' style='width:100px;' id='sr_text"+bat_id+"' value='"+sr+"'>";
	
 document.getElementById("edit_button"+bat_id).style.display="none";
 document.getElementById("save_button"+bat_id).style.display="inline";
}

function save_row(bat_id)
{
	
 
 var run=document.getElementById("run_text"+bat_id).value;
 var st=document.getElementById("status_text"+bat_id).value;
 var rn=document.getElementById("runs_text"+bat_id).value;
 var ball=document.getElementById("ball_text"+bat_id).value;
 var fr=document.getElementById("four_text"+bat_id).value;
 var sx=document.getElementById("sx_text"+bat_id).value;
var sr=document.getElementById("sr_text"+bat_id).value; 
 
 $.ajax
 ({
  type:'post',
  url:'modify_records.php',
  data:{
   edit_row:'edit_row',
   row_id:bat_id,
   
   run_val:run,
   status_val:st,
   runs_val:rn,
   ball_val:ball,
   fr_val:fr,
   sx_val:sx,
   sr_val:sr,
  },
 //"edit_row='edit_row'&row_id="+bat_id+"&name_val="+name+"&age_val="+age+"&run_val="+run
  success:function(response) {
   if(response=="success")
   {
   
	document.getElementById("run_val"+bat_id).innerHTML=run;
	document.getElementById("status_val"+bat_id).innerHTML=st;
	document.getElementById("runs_val"+bat_id).innerHTML=rn;
	document.getElementById("ball_val"+bat_id).innerHTML=ball;
	document.getElementById("fr_val"+bat_id).innerHTML=fr;
	document.getElementById("sx_val"+bat_id).innerHTML=sx;
	document.getElementById("sr_val"+bat_id).innerHTML=sr;
    document.getElementById("edit_button"+bat_id).style.display="inline";
	document.getElementById("save_button"+bat_id).style.display="none";
   }
  }
 });
}

function delete_row(bat_id)
{
 $.ajax
 ({
  type:'post',
  url:'modify_records.php',
  data:{
   delete_row:'delete_row',
   row_id:bat_id,
  },
  success:function(response) {
   if(response=="success")
   {
    var row=document.getElementById("row"+bat_id);
    row.parentNode.removeChild(row);
   }
  }
 });
}

function insert_row()
{

  var run=document.getElementById("new_run").value;
   var st=document.getElementById("new_status").value;
  var rn=document.getElementById("new_runs").value;
   var ball=document.getElementById("new_ball").value;
  var fr=document.getElementById("new_fr").value;
  var sx=document.getElementById("new_sx").value;
  var sr=document.getElementById("new_sr").value;

 $.ajax
 ({
  type:'post',
  url:'modify_records.php',
  data:{
   insert_row:'insert_row',
  
   run_val:run,
   status_val:st,
   runs_val:rn,
   ball_val:ball,
   fr_val:fr,
   sx_val:sx,
   sr_val:sr,
  },
  success:function(response) {
   if(response!="")
   {
    var bat_id=response;
    var taballe=document.getElementById("scoretb");
    var taballe_len=(taballe.rows.length)-1;
    var row = taballe.insertRow(taballe_len).outerHTML="<tr id='row"+bat_id+"'><td id='run_val"+bat_id+"'>"+run+"</td><td id='status_val"+bat_id+"'>"+st+"</td><td id='runs_val"+bat_id+"'>"+rn+"</td><td id='ball_val"+bat_id+"'>"+ball+"</td><td id='fr_val"+bat_id+"'>"+fr+"</td><td id='sx_val"+bat_id+"'>"+sx+"</td><td id='sr_val"+bat_id+"'>"+sr+"</td> <td><input type='button' class='edit_button btn btn-info' id='edit_button"+bat_id+"' value='edit' onclick='edit_row("+bat_id+");'/><input type='button' class='save_button btn btn-success' id='save_button"+bat_id+"' value='save' onclick='save_row("+bat_id+");'/><input type='button' class='delete_button btn btn-danger' id='delete_button"+bat_id+"' value='delete' onclick='delete_row("+bat_id+");'/></td></tr>";

   
	document.getElementById("new_run").value="";
	document.getElementById("new_status").value="";
	document.getElementById("new_runs").value="";
	document.getElementById("new_ball").value="";
	document.getElementById("new_fr").value="";
	document.getElementById("new_sx").value="";
	document.getElementById("new_sr").value="";
   }
  }
 });
}