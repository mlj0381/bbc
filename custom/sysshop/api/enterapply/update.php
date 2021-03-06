<?php
class sysshop_api_enterapply_update{
    public $apiDescription = "企业入驻申请更改";
    public function getParams()
    {
        $return['params'] = array(
            'seller_id' => ['type'=>'int','valid'=>'required','description'=>'入驻申请编号','default'=>'','example'=>''],
            'shop_name' => ['type'=>'int','valid'=>'required','description'=>'申请企业名称','default'=>'','example'=>''],
            'shop_type' => ['type'=>'int','valid'=>'required','description'=>'申请企业类型{flag,brand,cat}','default'=>'','example'=>''],
            'shopuser_name' => ['type'=>'int','valid'=>'required','description'=>'申请企业店主名称','default'=>'','example'=>''],
            'company_name' => ['type'=>'int','valid'=>'required','description'=>'申请企业公司名称','default'=>'','example'=>''],
            'shop' => ['type'=>'json','valid'=>'required','description'=>'企业基本信息集合','default'=>'','example'=>''],
            'shop_info' => ['type'=>'json','valid'=>'required','description'=>'企业详细信息集合','default'=>'','example'=>''],
        );
        return $return;
    }
    public function update($params)
    {
    }
}
