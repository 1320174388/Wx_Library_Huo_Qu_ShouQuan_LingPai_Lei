<?php
/**
 *  版权声明 :  地老天荒科技有限公司
 *  文件名称 :  index_cheshi_demo.php
 *  创 建 者 :  Shi Guang Yu
 *  创建日期 :  2018/08/15 20:27
 *  文件描述 :  Wx_小程序：获取授权令牌示例
 *  历史记录 :  -----------------------
 */
include('../library/AccessTokenRequest.php');

// 获取success_token
$accessTokenArr = AccessTokenRequest::wxRequest(
    'wx6516385261fa963a',
    'dc9823245780a506e679a121bb535e0b',
    './project_access_token/'
);

// 打印返回信息
print_r($accessTokenArr);

