<html>
<head>
<title>ตรวจสอบข้อมูลอาจารย์ผู้สอน :: academic e-evalution of kasetsart university ::</title>
<link rel="shortcut icon" href="images/favicon.ico">
<meta http-equiv="content-type" content="text/html; charset=windows-874">
<link href="templates/assess_style.css" rel="stylesheet" type="text/css">
<link href="templates/css_assess.css" rel="stylesheet" type="text/css">
<script language="javascript">
<!-- begin
/*var arritems = new array();
var arritemsgrp = new array();
var arritemvalue = new array();

var arritems2 = new array();
var arritemsgrp2 = new array();
var arritemsgrpb2 = new array();
var arritemvalue2 = new array();*/

function selectchange(control, controltopopulate, itemarray, grouparray)
{
  var myele ;
  var x ;
  for (var q=controltopopulate.options.length;q>=0;q--) controltopopulate.options[q]=null;
  myele = document.createelement("option") ;
  myele.value = 0 ;
  myele.text = " ทุกคณะ " ;
  controltopopulate.add(myele) ;
  for ( x = 0 ; x < itemarray.length  ; x++ )
    {
      if ( grouparray[x] == control.value )
        {
          myele = document.createelement("option") ;
		  myele.value = arritemvalue[x];
          myele.text = itemarray[x] ;
          controltopopulate.add(myele) ;
        }
    }
}
function selectchange2(control2, controltopopulate2,controlb2, itemarray2, grouparray2)
{
  var myele ;
  var x ;
  for (var q=controltopopulate2.options.length;q>=0;q--) controltopopulate2.options[q]=null;
  myele = document.createelement("option") ;
  myele.value = 0 ;
  myele.text = " ทุกภาควิชา" ;
  controltopopulate2.add(myele) ;
  for ( x = 0 ; x < itemarray2.length  ; x++ )
    {
  //    if ( grouparray2[x] == control2.value && arritemsgrpb2[x]==controlb2.value )
  if ( grouparray2[x] == control2.value && arritemsgrpb2[x]==controlb2.value )
        {
          myele = document.createelement("option") ;
		  myele.value = arritemvalue2[x];
          myele.text = itemarray2[x] ;
          controltopopulate2.add(myele) ;
        }
    }
}
// end -->

function dochange(){ 
var valuelabelpair  = new array();
var towho=document.mychoices.fac_id;
var fromwho=document.mychoices.campus_id;
var url="xml/getfaculty.php?campus="+fromwho.value+"&choice=fac&rand="+math.random(); 
document.mychoices.fac_id.options.length = 0; 
    var str=loadxmlcomboitem(url,towho,'select one');
    var str_array =str.split("-");
	document.mychoices.fac_id.options[0] = new option("ทุกคณะ",0);
	for (i=0;i<str_array.length-1;i++) {   
		valuelabelpair = str_array[i].split(",") ;
		towho.options[i+1] = new option(valuelabelpair[1], valuelabelpair[0]);
   }
}      // function

function dochangedept(){ 
var valuelabelpair  = new array();
var towho=document.mychoices.dept_id;
var fromwho=document.mychoices.fac_id;
var fromwho2=document.mychoices.campus_id;
var url="xml/getfaculty.php?fac="+fromwho.value+"&campus="+fromwho2.value+"&choice=dept&rand="+math.random(); 
document.mychoices.dept_id.options.length = 0; 
   var str=loadxmlcomboitem(url,towho,'select one');
    var str_array =str.split("-");
	document.mychoices.dept_id.options[0] = new option("ทุกภาควิชา",0);
	for (i=0;i<str_array.length-1;i++) {   
		valuelabelpair = str_array[i].split(",") ;
		towho.options[i+1] = new option(valuelabelpair[0]+"  -  "+valuelabelpair[1], valuelabelpair[0]);
   }
}      // function

function loadxmlcomboitem(url,towho,firstoption){ 
var str ; 
 //var adele
var urltarget ; 
urltarget = url ;  
var xmlhttp = false;
var valuelabelpair  = new array();
try{
xmlhttp = new activexobject("msxml2.xmlhttp");
}catch(e){
try{
xmlhttp = new activexobject("microsoft.xmlhttp");
}catch(e){
xmlhttp = false;
}
}
xmlhttp.open("get",urltarget, false); 
xmlhttp.send(); 
str = xmlhttp.responsetext;
return str;
}    // function
</script>
<style type="text/css" >
a:link {
	font-family: "microsoft sans serif", "ms serif"; 	
	font-size: 9pt; 
	color: #000033;
}
a:visited {
    font-family: "microsoft sans serif", "ms serif"; 	
	font-size: 9pt; 
	color: #000066;
}
a:hover {
	font-family: "microsoft sans serif", "ms serif";
	font-size: 9pt;
	color: #f86b0a;
}
a:active {
    font-family: "microsoft sans serif", "ms serif"; 	
	font-size: 9pt; 
	color: #f86b0a;
}
</style>
</head>
<body bgcolor="#ffffff" text="#000000">
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
       <tr>       
    <td width="8%" valign="top"><img src="images/index01.jpg" width="191"  height="72"></td>
          <td width="92%" height="68" valign="top" background="../images/bk_head.jpg" ><img src="../images/banner.jpg" width="517" height="72"></td>
        </tr>
</table>
 <center>
</center>
  <form name="mychoices" method="post" action=""><!-- action="disp_advisor.php"-->
    <table width="37%" border="1" align=center class="que_txt">
	<tr><td colspan=2 align=center><font color="#3333ff"><b>ตรวจสอบข้อมูลอาจารย์ผู้สอน</b></font><br>
		</td></tr>
	<tr>
	  <td align=center><div align="right"><font color="#3333ff"><b>ปีการศึกษา&nbsp;</b></font></div></td>
	  <td align=center><div align="left">
	  <select name="tyr">
	  			<option value="52" >2552</option>
	  			<option value="53" >2553</option>
	  			<option value="54" >2554</option>
	  			<option value="55" >2555</option>
	  			<option value="56" >2556</option>
	  			<option value="57" >2557</option>
	  			<option value="58" >2558</option>
	       <!--<option value="53">2553</option>
	 <option value="52">2552</option>-->
	 </select></div></td>
	</tr>
	<tr>
	  <td align=center><div align="right"><font color="#3333ff"><b>ภาค&nbsp;</b></font></div></td>
	  <td align=center><div align="left"><select name="tsm">
	  	  <option value="1" selected="selected">ภาคต้น</option>
	  <option value="2" >ภาคปลาย</option>
	  </select>
	  	  </div></td>
	</tr>
	<!--<tr>   //  19/11/2552
      <td width="118"> 
        <div align="right"><font color="#3333ff"><b>วิทยาเขต</b></font></div>
      </td>
      <td width="332">  onchange="selectchange(this, mychoices.fac_id, arritems, arritemsgrp);" 
<select id=campus_id name=campus_id onchange="dochange()">
	<option value=0 selected>[คลิกเลือก]</option>
	<option value="b" >บางเขน</option>
	<option value="k" >กำแพงแสน</option>
	<option value="p" >สุพรรณบุรี</option>
	<option value="i" >สถาบันสบทบ</option>
	<option value="r" >กระบี่</option>
</select>
      </td>
    </tr>-->
    <tr> 
      <td width="118">
        <div align="right"><font color="#3333ff"><b>รหัสวิชา</b></font></div>      </td>
      <td width="332"><input type="text" name="cs_code"  value="" size="20" maxlength="8">  <font face="cordia new"; size="2" color="red">** รหัสวิชา 8 หลัก หรือ 5 หลักแรก</font></td>
    </tr>

    <tr> 
      <td width="118">&nbsp;</td>
      <td width="332">
        <input type="submit" name="submit" value="search">      </td>
    </tr>
  </table>
  <div align="center"></div>
</form>
</body>
</html>