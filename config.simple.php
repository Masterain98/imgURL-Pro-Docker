<?php
/**
 * 全局配置文件
*/

/*-------------------------------------ImgURL授权密钥，请前往：http://shop.imgurl.org/order购买-------------------------------------*/
$config['key']	=	'{key}';

/*-------------------------------------SMTP信息，暂时用不着，保留用-------------------------------------*/
//邮件发送协议，默认不用修改
$config['smtp']['protocol']	=	'smtp';
//SMTP 服务器地址
$config['smtp']['smtp_host']	=	'';
//SMTP 用户名
$config['smtp']['smtp_user']	=	'';
//SMTP 密码
$config['smtp']['smtp_pass']	=	'';
//SMTP 端口
$config['smtp']['smtp_port']	=	'';
//SMTP 加密方式,tls或ssl
$config['smtp']['smtp_crypto']	=	'ssl';
//不用管
$config['smtp']['crlf']	=	'\r\n';
//不用管
$config['smtp']['newline']	=	'\r\n';
//不用管
$config['smtp']['mailtype']	=	'html';

/*-------------------------------------Redis配置信息，2022.03新增-------------------------------------*/
$config['socket_type'] = 'tcp'; //`tcp` or `unix`
// $config['socket'] = '/var/run/redis.sock'; // in case of `unix` socket type
$config['redis']['host'] = 'redis';
$config['redis']['password'] = NULL;
$config['redis']['port'] = 6379;
$config['redis']['timeout'] = 10;
/*-------------------------------------Redis配置END--------------------------------------------------*/


/*-------------------------------------B2存储设置-------------------------------------*/
//请先阅读帮助文档：https://dwz.ovh/5
//保留参数，不用理会
$config['b2']['status']	=	'ON';
//B2 keyID
$config['b2']['b2_app_key_id']	=	'';
//B2主程序密钥
$config['b2']['b2_app_key']	=	'';
//B2 bucket ID
$config['b2']['b2_bucket_id']	=	'';
//B2绑定域名，不需要设置
$config['b2']['b2_domain']	=	'';
/*-------------------------------------B2存储设置END-------------------------------------*/


/*-------------------------------------FTP设置-------------------------------------*/
//请先阅读帮助文档：https://dwz.ovh/6
//FTP主机名（连接地址）
$config['ftp']['hostname']	=	'';
//FTP用户名
$config['ftp']['username']	=	'';
//FTP密码
$config['ftp']['password']	=	'';
//FTP端口，一般保持默认不用修改
$config['ftp']['port']	=	21;
//FTP传输模式，TRUE:被动模式，FALSE:主动模式
$config['ftp']['passive']	=	TRUE;
//DEBUG模式
$config['ftp']['debug']    = FALSE;
/*-------------------------------------FTP设置END-------------------------------------*/


/*-------------------------------------腾讯COS设置-------------------------------------*/
//请先阅读帮助文档：https://dwz.ovh/7
$config['cos']['app_id']	=	'';
$config['cos']['access_key_id']	=	'';
$config['cos']['access_key_secret']	=	'';
$config['cos']['bucket']	=	'';
//腾讯COS可用地域，示例地址：cos.ap-guangzhou.myqcloud.com，更多参见：https://cloud.tencent.com/document/product/436/6224
$config['cos']['host']	=	'';
//COS所绑定的域名，不需要设置
$config['cos']['domain']	=	'https://backup-1251029189.cos.ap-guangzhou.myqcloud.com/';
/*-------------------------------------腾讯COS设置END-------------------------------------*/

/*-------------------------------------七牛云设置-------------------------------------*/
//请先阅读帮助文档：https://dwz.ovh/a
$config['qiniu']['AccessKey']	=	'';
$config['qiniu']['SecretKey']	=	'';
$config['qiniu']['bucket']	=	'';
//上传地址,参见：https://developer.qiniu.com/kodo/manual/1671/region-endpoint
$config['qiniu']['up_host']	=	'';
/*-------------------------------------七牛云设置END-------------------------------------*/

/*------------------------------------- S3设置 -------------------------------------*/
//请先阅读帮助文档：https://dwz.ovh/f5cxv
$config['s3']['region']	=	'us-east-1';
$config['s3']['endpoint']	=	'';
$config['s3']['key']	=	'';
$config['s3']['secret']	=	'';
$config['s3']['bucket']	=	'';
/*------------------------------------- S3设置END -------------------------------------*/

/*------------------------------------- 接口频率限制 -------------------------------------*/
//单IP，10分钟内，上传接口请求频率限制
$config['limit']['up_qps']	=	500;
//单IP，24H内，发送邮件频率
$config['limit']['mail_qps']	=	20;
//单IP，1分钟内，删除接口频率限制
$config['limit']['delete_qps']	=	30;
/*------------------------------------- 接口频率限制END -------------------------------------*/

/*------------------------------------- 多语言配置 -------------------------------------*/
$config['language']	= 'chinese';
/*------------------------------------- 多语言配置END -------------------------------------*/

// 页面缓存设置，单位为分钟
$config['page']['cache'] = 60;