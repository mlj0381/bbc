<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */


$setting['author']='tylerchao.sh@gmail.com';
$setting['name'] ='供应列表';
$setting['version'] ='v1.0';
$setting['stime'] ='2015-10';
$setting['catalog'] ='交易中心';
$setting['usual'] = '1';
$setting['tag']='auto';
$setting['description'] = '首页供应信息列表.';
$setting['userinfo'] = '首页供应信息列表.';
$setting['template'] = array(
                            'default.html'=>app::get('b2c')->_('默认')
                        );
 // $userMdlcat = app::get("sysspfb")->model('supplyInfo');
 // $supplyList =  $userMdlcat ->getList("*","");
 // $setting['supplyList'] = $supplyList;
?>
