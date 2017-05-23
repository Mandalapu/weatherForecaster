
<html>
 <head>	
 <title>Step-1</title>
 <meta http-equiv="Content-Type" content="text/html;
charset=ISO-8859-1">
<script type="text/javascript"> 
  function validate() 
	 { 
	 var str=document.forms['myform'].streetaddress.value;
	 var city=document.forms['myform'].city.value;
	 var flag=true;
	 var message="please fill the missing values:";
	 var state=document.forms['myform'].state.options[document.forms['myform'].state.selectedIndex].value;

	 if(str == null || str == "")
	 {
		 flag=false;
		 message=message + "\nstreet address\n";
		 
	 }
	  if(city == null || city == "")
	 {
		 flag=false;
		 message=message + "city\n";
		 
	 }
	 if(state == "manu")
	 {
		 flag=false;
		 message=message + "state\n";
		 
	 }
	 if(!flag)
	 {
		 alert(message);
		 return(false);
	 }
	 
	 }
	 function resetting()
	 {
	 
	 document.forms['myform'].streetaddress.value="";
	 document.forms['myform'].city.value="";
	 document.forms['myform'].state.value="manu";
	 document.forms['myform'].degree="Farenheit";
	 document.getElementById("table2").innerHTML="";
	 
	 }

</script>


 </head>
 <body>
 <h1><center>Forecast Search</center</h1>
 <form name="myform" action="forecast.php" method="POST">
 <table style="border: 1px solid; width: 500px; align:center; margin:auto; margin-bottom:20;">
 <tr>
 <td>
<label>Street Address:* </label></td><td>  <input type="text" name="streetaddress" value= "" ></td></tr>
<tr><td><label>City:*  </label></td><td><input type="text" name="city" value=""></td></tr>
<tr><td><label>State:*   </label> </td><td><SELECT NAME="state" >
<OPTION disabled selected value="manu"  >Select your state....</OPTION>
<OPTION value="AL" >Alabama</OPTION>
<OPTION value="AK" >Alaska</OPTION>
<OPTION value="AZ" >Arizona</OPTION>
<OPTION value="AR" >Arkansas</OPTION>
<OPTION value="CA"  >California</OPTION>
<OPTION value="CO" >Colorado</OPTION>
<OPTION value="CT" >Connecticut</OPTION>
<OPTION value="DE" >Delaware</OPTION>
<OPTION value="DC" >District Of Columbia</OPTION>
<OPTION value="FL" >Florida</OPTION>
<OPTION value="GA" >Georgia</OPTION>
<OPTION value="HI" >Hawaii</OPTION>
<OPTION value="ID" >Idaho</OPTION>
<OPTION value="IL" >Illinois</OPTION>
<OPTION value="IN" >Indiana</OPTION>
<OPTION value="IA" >Iowa</OPTION>
<OPTION value="KS" >Kansas</OPTION>
<OPTION value="KY" >Kentucky</OPTION>
<OPTION value="LA" >Lousiana</OPTION>
<OPTION value="ME" >Maine</OPTION>
<OPTION value="MD" >Maryland</OPTION>
<OPTION value="MA" >Massachusetts</OPTION>
<OPTION value="MI" >Michigan</OPTION>
<OPTION value="MN" >Minnesota</OPTION>
<OPTION value="MS" >Mississippi</OPTION>
<OPTION value="MO" >Missouri</OPTION>
<OPTION value="MT" >Montana</OPTION>
<OPTION value="NE" >Nebraska</OPTION>
<OPTION value="NV" >Nevada</OPTION>
<OPTION value="NH" >New Hampshire</OPTION>
<OPTION value="NJ" >New Jersey</OPTION>
<OPTION value="NM" >New Mexico</OPTION>
<OPTION value="NY" >New York</OPTION>
<OPTION value="NC" >North Carolina</OPTION>
<OPTION value="ND" >North Dakota</OPTION>
<OPTION value="OH" >Ohio</OPTION>
<OPTION value="OK" >Oklahoma</OPTION>
<OPTION value="OR" >Oregon</OPTION>
<OPTION value="PA" >Pennsylvania</OPTION>
<OPTION value="RI" >Rhode Island</OPTION>
<OPTION value="SC" >South Carolina</OPTION>
<OPTION value="SD" >South Dakota</OPTION>
<OPTION value="TN" >Tennessee</OPTION>
<OPTION value="TX" >Texas</OPTION>
<OPTION value="UT" >Utah</OPTION>
<OPTION value="VT" >Vermount</OPTION>
<OPTION value="VA" >Virginia</OPTION>
<OPTION value="WA" >Washington</OPTION>
<OPTION value="WV" >West Virginia</OPTION>
<OPTION value="WI" >Wisconsin</OPTION>
<OPTION value="WY" >Wyoming</OPTION>
</SELECT></td></tr>

<tr>
<td><label>Degree:* </label></td><td><input type="radio" name="degree" value="Farenheit"  checked>Farenheit <input type="radio" name="degree" value="Celsius"  >Celsius </td></tr>
<tr><td></td><td><input type="submit" name="submit" value="Search" onClick="return(validate())">
<input type="button" name="reset"  value="clear" onclick="resetting()"></td></tr>
<tr><td><i>*-Mandatory Fields</i></td></tr>
<br/><tr><td colspan="2" style="align:center;"><a href="http://forecast.io/">Powered by Forecast.io</a></td></tr>
</table>
</form>


	  
  <div id="table2">
  <table 