<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */


$setting['auther']='tylerchao.sh@gmail.com';
$setting['version']='v1.0';
$setting['name']='专家解读政策';
$setting['stime']='2015-11';
$setting['catalog']='资讯中心';
$setting['usual'] = '0';
$setting['description'] = '展示模板使用的站点主导航挂件';
$setting['userinfo'] ='';
$setting['template'] = array(
                            'default.html'=>app::get('b2c')->_('默认')
                        );
$sql="SELECT literarycat FROM sysexpert_literarycat";
$literarycat = app::get("base")->database()->executeQuery($sql)->fetchAll();
$setting["literarycat"]=$literarycat;

?>
