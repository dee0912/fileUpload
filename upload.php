<?php

require "fileupload.class.php";

$up = new FileUpload;

/* 可以通过set方法设置上传的属性 */
$up -> set('path','./myuploadfile')
    -> set('size',1000000)
	-> set('allowtype',array('gif','jpg','png','bmp'))
	-> set('israndname',false);

if( $up->upload('myfile') ){

	print_r($up->getFileName());

}else{

	print_r($up->getErrorMsg());
}