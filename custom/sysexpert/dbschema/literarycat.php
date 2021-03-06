<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */

return array (
    'columns' =>
    array (
        'literarycat_id' =>array (
            'type' => 'number',
            'required' => true,
            'comment'=> app::get('sysexpert')->_('名人专家文章类型ID'),
            'autoincrement' => true,   //序号自增
            'width' => 50,
            'order'=>1,
            ),
        
        
        'literarycat' => array(
            'type' => 'string',
            'required' => true,
            'in_list' => true,
            'default_in_list' => true,
            'label' => app::get('sysexpert')->_('文章类型'),
            'comment' => app::get('sysexpert')->_('文章类型'),
            'order'=>5,
        ),
        'order_sort'=> array (
            'type' => 'number',
            'required' => true,
            'default' => 0,  
            'editable' => true,
            'comment' => app::get('sysexpert')->_('排序'),
        ),
        'modified'=> array (
            'type' => 'time',
            'editable' => true,
            'in_list' => true,
            'label' => app::get('sysexpert')->_('修改时间'),
            'comment' => app::get('sysexpert')->_('修改时间'),
        ),


       

  ),
    'primary' => 'literarycat_id',
    'comment' => app::get('sysexpert')->_('专家文章类型表'),
);
