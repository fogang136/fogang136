<?php
 echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;"><h2 style="font-size:60px;margin-bottom:32px;">傻逼不要扒皮</h2>抱歉，沒有找到您需要的内容！！</div>';
 die();
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML><HEAD><TITLE>404错误页面</TITLE></HEAD>
<BODY>
<table border=0 cellpadding=0 cellspacing=0 width="100%" height="100%">
<tr><td align="center" style="padding-top:20px;font-size:6em;">What?页面去哪了？</td></tr>
<tr><td align="center" style="padding-top:10px;font-size:8em;">404!</td></tr>
<tr><td align="center" style="padding-top:20px;font-size:5em;">佛冈德星市场智能手机店</td></tr>
<tr>
<form name=loading>
<td align=center>
<p><font color=gray>正在载入首页，请稍候.......</font></p>
<p>
<input type=text name=chart size=46 style="font-family:Arial;
font-weight:bolder; color:gray;
background-color:white; padding:0px; border-style:none;">
</br>
<input type=text name=percent size=46 style="font-family:Arial;
color:gray; text-align:center;
border-width:medium; border-style:none;">
<script>var bar = 0
var line = "||"
var amount ="||"
count()
function count(){
bar= bar+2
amount =amount + line
document.loading.chart.value=amount
document.loading.percent.value=bar+"%"
if (bar<99)
{setTimeout("count()",100);}//这里修改载入时间
else
{window.location = "{$host}";}//这里改成你的网站地址
}
</script>
</p>
</td>
</form>
</tr>
</table>
</BODY></HTML>
