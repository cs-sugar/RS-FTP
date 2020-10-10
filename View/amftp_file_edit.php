<?php include('amftp_header.php');?>
<title>FTP管理-文件预览-云端FTP</title>
<script>
var amftp_am_ftp_pwd = <?php echo json_encode($amftp_am_ftp_pwd);?>;
</script>

<div id="content">
<?php 
$back_amftp_am_ftp_pwd = explode('/', $amftp_am_ftp_pwd);
$back_amftp_am_ftp_pwd = array_slice($back_amftp_am_ftp_pwd, 0, -2);
$back_amftp_am_ftp_pwd = implode('/', $back_amftp_am_ftp_pwd);
if (!empty($notice)) { ?>
	<div id="<?php echo $notice_status;?>"><?php echo $notice;?></div>
<?php } ?>

	<div class="title">
		<input type="button" value="根目录" onclick="window.location='./index.php'" class="input_button"/> 
		<input type="button" value="返回目录" onclick="window.location='./index.php?pwd=<?php echo $amftp_am_ftp_pwd;?>'" class="input_button"/> 

		<form action="./index.php" method="GET" style="display:inline"  id="go_pwd_form">
			<input type="text" value="<?php echo $amftp_am_ftp_pwd;?>" name="pwd" id="pwd" class="input_text" style="width:590px"/> 
			<input type="submit" value="跳转"  class="input_button"/>
		</form>
		<input type="button" value="刷新" onclick="window.location='<?php echo $_SERVER['REQUEST_URI'];?>'"  class="input_button"/> 
		<br />
		
		<p style="font-size:16px;margin:12px 3px 3px 3px;">
		<?php echo $_GET['pwd'] . '<font style="font-weight:bold;">' . $_GET['file'] . '</font> <img src="View/images/ico/'. functions::Gicon($_GET['file'], '-') . '" style="margin-bottom:-3px;"/> <font style="font-size:12px;">(名称编码 ' . $_GET['charset'] . ', 内容编码 ' . ($is_gbk == 'y' ? 'gbk' : 'utf8')  . ')</font>'; ?>
		</p>
	</div>

	<?php if ($file_type == 'txt') { ?>
		
	<form action="" id="" method="POST">
			<input type="hidden" name="is_gbk" value="<?php echo $is_gbk;?>" />
			<textarea id="file_content" name="file_content"><?php echo ($file_content);?></textarea>

			<div class="title">
				<input type="submit" value="保存" name="save"  class="input_button"/>
				<input type="button" value="返回" onclick="window.location='./index.php?pwd=<?php echo $amftp_am_ftp_pwd;?>'" class="input_button" />
			</div>
	</form>
	<?php } elseif ($file_type == 'img') { ?>
			<br />
			<img src="<?php echo $_SERVER['REQUEST_URI'];?>&img=y" />
			<br /><br />
			<div class="title">
				<input type="button" value="新窗口打开" onclick="window.open('<?php echo $_SERVER['REQUEST_URI'];?>&img=y')" class="input_button" />
				<input type="button" value="返回" onclick="window.location='./index.php?pwd=<?php echo $amftp_am_ftp_pwd;?>'" class="input_button" />
			</div>
	<?php } else {?>
			<p>文件不支持直接阅读，请返回列表下载文件查看。</p>
			<div class="title">
				<input type="button" value="返回" onclick="window.location='./index.php?pwd=<?php echo $amftp_am_ftp_pwd;?>'" class="input_button" />
			</div>
	<?php } ?>
</div>



<?php include('amftp_footer.php');?>