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
    'wx211a9e456c091db4',
    '43be5e180ff000c6089c9765797c2096',
    './project_access_token/'
);

// 打印返回信息
print_r($accessTokenArr);

