



<?php 



date_default_timezone_set('PRC');



$TIMEA =date('Y-m-d H:i:s',time()); 







session_start () ; 



if($_SESSION['fj']!=="admin") { 



	exit(授权登录失败);



}







?>







<style type="text/css">



<!--



.STYLE13 {font-size: 14px; font-weight: bold; color: #FFFFCC;}



.STYLE15 {



	font-size: 12px;



	color: #000000;



}



.STYLE16 {font-size: 12}



.STYLE26 {font-size: 12px}



.STYLE28 {font-size: 12px; font-weight: bold; color: #000000; }



-->



</style>











<?php



 $link = mysql_connect("localhost","s220162","jizv%g-8");//连接MySQL服务器



 $db  = mysql_select_db("s220162");//选择数据库



 mysql_query("set names GB2312",$link);



 $page_size=30;  //每页多少条数



 $sql = "select *  , (case bj when '1'then '待发货'  when '2' then '已发货'when '3' then '作废'end ) AS bja   from jianbao order by id desc limit 0,$page_size";



 $result = mysql_query($sql,$link);//执行SELECT查询 



 $num = mysql_num_rows($result);//获取记录条数"
 

// $picUrl = explode(',',$row['tc'])


?>



<body>



<form name="form1" method="post" action="file:///E|/www/thx/it/xbzfcxdo.php">



<table width="1300" border="0" align="left" cellpadding="8" cellspacing="1" bgcolor="#335EA8">



  <tr>



    <td width="17%" height="13" align="center" bgcolor="#FFFFFF"><span class="STYLE26">当前时间</span></td>



    <td width="83%" height="13" bgcolor="#FFFFFF" ><span class="STYLE26"><?php echo $TIMEA ?></span></td>



  </tr>



</table>



</form>



<p><br>



<br>



  <?php



 if($num > 0)



 {



?>



</p>

<table width="1400" border="0" align="left" cellpadding="2" cellspacing="1" bordercolor="#315DAD" bgcolor="#315DAD">



        <tr align="center" bgcolor="#FFFFf0"> 



          <td height="18" colspan="9" valign="middle" bgcolor="#FFFFFF"><strong>天意典藏订单信息</strong></td>



      </tr>



        <tr align="center" bgcolor="#ffaaaa">



        <td width="86" align="center" valign="middle" bgcolor="#FFFFFF" class="STYLE13"><span class="STYLE28"><strong>订单编号</strong></span></td>



       <td width="137" height="23" align="center" valign="middle" bgcolor="#FFFFFF" class="STYLE28"><span class="STYLE26">订购时间</span></td>



       <td width="86" align="center" valign="middle" bgcolor="#FFFFFF" class="STYLE13"><span class="STYLE28"><strong>客户</strong>姓名</span></td>



       <td width="100" valign="middle" bgcolor="#FFFFFF" class="STYLE28"><strong>客户电话</strong></td>



       <td width="200" height="23" valign="middle" bgcolor="#FFFFFF" class="STYLE28">IP地址</td>



        <td width="100" height="23" valign="middle" bgcolor="#FFFFFF" class="STYLE28">图片1</td>
        
        <td width="100" height="23" valign="middle" bgcolor="#FFFFFF" class="STYLE28">图片2</td>
        
        <td width="100" height="23" valign="middle" bgcolor="#FFFFFF" class="STYLE28">图片3</td>
        
        <td width="100" height="23" valign="middle" bgcolor="#FFFFFF" class="STYLE28">图片4</td>

        <td width="100" height="23" valign="middle" bgcolor="#FFFFFF" class="STYLE28">图片5</td>

         <td width="300" height="23" valign="middle" bgcolor="#FFFFFF" class="STYLE28">下单链接</td>



       <td width="70" valign="middle" bgcolor="#FFFFFF" class="STYLE28">用途</td>



       <td width="450" valign="middle" bgcolor="#FFFFFF" class="STYLE28">客户留言</td>



          <td width="100" valign="middle" bgcolor="#FFFFFF" class="STYLE28">数量</td>



          <td width="80" valign="middle" bgcolor="#FFFFFF" class="STYLE28"><span class="STYLE26">状态</span></td>



          <td width="200" align="center" valign="middle" bgcolor="#FFFFFF" class="STYLE28">操作</td>



        </tr>



<?php



  while($row = mysql_fetch_array($result))



  {



  ?>


<tr align="center"> 



<td height="8" align="center" valign="middle" bgcolor="#F3F7FC" class="STYLE16"><span class="STYLE26"><?php echo $row['id']?></span></td>



<td height="8" align="center" valign="middle" bgcolor="#F3F7FC" class="STYLE16"><div align="center" class="STYLE26"><?php echo $row['time']?></div></td>



<td height="8" align="center" valign="middle" bgcolor="#F3F7FC" class="STYLE16"><span class="STYLE26"><?php echo $row['xm']?></span></td>



<td valign="middle" bgcolor="#F3F7FC" class="STYLE16"><div align="center" class="STYLE26"><?php echo $row['tel']?></div></td>



<td height="8" valign="middle" bgcolor="#F3F7FC" class="STYLE16"><span class="STYLE26"><?php echo $row['lx']?></span></td>




<td width="100" height="8" valign="middle" bgcolor="#F3F7FC" class="STYLE16"><span class="STYLE26"><a target="_blank" href="http://dd.cacca.cn/Huploadify/uploads/<?php echo $row['tc'] ?>"><img width="100" src="http://dd.cacca.cn/Huploadify/uploads/<?php echo $row['tc'] ?>"></a></span></td>

<td width="100" height="8" valign="middle" bgcolor="#F3F7FC" class="STYLE16"><span class="STYLE26"><a target="_blank" href="http://dd.cacca.cn/Huploadify/uploads/<?php echo $row['tc2'] ?>"><img width="100" src="http://dd.cacca.cn/Huploadify/uploads/<?php echo $row['tc2'] ?>"></a></span></td>

<td width="100" height="8" valign="middle" bgcolor="#F3F7FC" class="STYLE16"><span class="STYLE26"><a target="_blank" href="http://dd.cacca.cn/Huploadify/uploads/<?php echo $row['tc3'] ?>"><img width="100" src="http://dd.cacca.cn/Huploadify/uploads/<?php echo $row['tc3'] ?>"></a></span></td>

<td width="100" height="8" valign="middle" bgcolor="#F3F7FC" class="STYLE16"><span class="STYLE26"><a target="_blank" href="http://dd.cacca.cn/Huploadify/uploads/<?php echo $row['tc4'] ?>"><img width="100" src="http://dd.cacca.cn/Huploadify/uploads/<?php echo $row['tc4'] ?>"></a></span></td>

<td width="100" height="8" valign="middle" bgcolor="#F3F7FC" class="STYLE16"><span class="STYLE26"><a target="_blank" href="http://dd.cacca.cn/Huploadify/uploads/<?php echo $row['tc5'] ?>"><img width="100" src="http://dd.cacca.cn/Huploadify/uploads/<?php echo $row['tc5'] ?>"></a></span></td>



<td height="8" valign="middle" bgcolor="#F3F7FC" class="STYLE16"><span class="STYLE26"><?php echo $row['url']?></span></td>

<td height="8" valign="middle" bgcolor="#F3F7FC" class="STYLE16"><span class="STYLE26"><?php echo $row['pt']?></span></td>



<td height="8" valign="middle" bgcolor="#F3F7FC" class="STYLE16"><div align="left"><span class="STYLE26"><?php echo $row['dz']?></span></div></td>



<td height="8" valign="middle" bgcolor="#F3F7FC" class="STYLE16"><span class="STYLE26"><?php echo $row['sl']?></span></td>



<td valign="middle" bgcolor="#F3F7FC" class="STYLE16"><div align="center" class="STYLE26"><?php echo $row['bja']?></div></td>



<td width="84" height="8" align="center" valign="middle" bgcolor="#F3F7FC" class="STYLE26"><a href="fh.php?id=<?PHP echo $row['id']?>">发货</a>&nbsp;&nbsp;<a href="zf.php?id=<?PHP echo $row['id']?>">作废</a></td>



</tr>  



<?php 



  }



?>



</table>



<p>



  <?php



 }



 else



 {



  echo "无数据";



 }



 



  mysql_close($link) ;



?>



  <br>



  <br>



</p>



<p>&nbsp;</p>



</body>



</html>
<script type="text/javascript" src="../jquery.js"></script>
<script>
$(document).ready(function() {
	
	for(var i=0; i<$('img').length;i++)
	
	{
		
		if($('img').eq(i).attr('src')=='http://dd.cacca.cn/Huploadify/uploads/'){
			
			$('img').eq(i).attr('src','http://dd.cacca.cn/Huploadify/sms.png')
		
		
		
		}
		
	}
	
	
    
});


</script>





































