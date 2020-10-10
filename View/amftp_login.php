<?php include('amftp_header.php');?>
<title>FTP管理-登录-云端FTP</title>
<body>
<div id="content">
<?php if (!empty($notice)) { ?>
	<div id="notice"><?php echo $notice;?></div>
<?php } ?>
<form action="./index.php?c=index&a=amftp_login" method="POST">
<center>IP域名 / 端口: <input type="text" id="ftp_ip" name="ftp_ip" value="127.0.0.1" class="input_text" style="width:190px"/>
<input type="text" id="ftp_port" name="ftp_port" value="21" class="input_text" style="width:25px"/></center><br>
<center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;用户名: <input type="text" name="ftp_user" value="<?php echo $ftp_user;?>"  class="input_text"/></center><br>
<center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;密码:  <input type="password" name="ftp_pass"  class="input_text"/></center><br>
<center><input type="submit" name="submit" value=" 登录 " class="input_button"/></center>
</form>

</div>

</body>
<?php include('amftp_footer.php');?>