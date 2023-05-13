<?php
use WHMCS\Database\Capsule;

function immdraselkhan_getData()
{
    if(isset($_POST["immdraselkhan"]))
        return $_POST["immdraselkhan"];
    
    $query = Capsule::table('tbladdonmodules')->where('module', '=' , 'header_footer_custom_codes');

    $data = [];
    foreach($query->get() as $res)
        $data[$res->setting] = $res->value;

    $_POST["immdraselkhan"] = $data;

    return $_POST["immdraselkhan"];
}

function immdraselkhan_head($vars)
{   
    $data = immdraselkhan_getData();
    
    return $data["head-enable"] == "on" && $data["head"]? trim($data["head"]): '';
}

function immdraselkhan_body($vars) 
{   
    $data = immdraselkhan_getData();
    
    return $data["body-enable"] == "on" && $data["body"]? trim($data["body"]): '';
}

function immdraselkhan_footer($vars) 
{
	$data = immdraselkhan_getData();
    
    return $data["footer-enable"] == "on" && $data["footer"]? trim($data["footer"]): '';
}

add_hook("ClientAreaHeadOutput",1,"immdraselkhan_head");
add_hook("ClientAreaHeaderOutput",1,"immdraselkhan_body");
add_hook("ClientAreaFooterOutput",1,"immdraselkhan_footer");

