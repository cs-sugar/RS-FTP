<?php include('amftp_header.php');?>
<title>FTP管理-帮助信息-云端FTP</title>

<div id="content">


<div style="">
<p><h2> » 上传大文件帮助：</h2></p>
<p>RS·FTP在线FTP极速上传，上传基本可以达到满速，如需上传大文件几十、几百MB的文件，PHP与Nginx配置需适当更改。<br>
1 ) php 配置更改。回到面板(Host版块 > PHP配置)调整 post 与 upload 参数限制：post_max_size、upload_max_filesize。 (注意不能大于 memory_limit 内存限制)</p>
<p>另外更改时间限制参数：max_execution_time。</p>
<p>2 ) 上传大于50M的文件，另需更改Nginx默认配置(/usr/local/nginx/conf/nginx.conf)参数： client_max_body_size。</p>
</div>
<br/>
<p><h2> » 关于压缩包支持</h2></p>
<p>1) Linux 环境全面支持 zip tar gzip(tar.gz) 格式解压与压缩。<p>
<p>1) Windows 环境zip支持良好。</p>
<br/>
<p><h2> » 关于响应速度</h2></p>
<p>RS·FTP同时支持本地或服务器线上运行，建议程序上传到服务器线上运行、响应快速。<p>

<br/>

<p><h2> » 关于在线FTP</h2></p>
<p>RS·FTP在线FTP - 基于web在线FTP文件管理客户端。<p>
<p>2020-10-10 发布首个版本，获取最新稳定版本与新功能支持请关注糖果云端。</p>

</div>

<center><a href="./index.php" ><button>回首</button></a></center><br>

<?php include('amftp_footer.php');?>