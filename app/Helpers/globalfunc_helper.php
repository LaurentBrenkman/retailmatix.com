<?php
//https://codeigniter4.github.io/userguide/general/helpers.html#using-a-helper
//halaman ini untuk global function
//cara panggil nya:
//helper('globalfunc');
//
//cara pake nya :
//contoh untuk checkModul:
//checkModul(nama_module);
//gausah pake $this->checkModul lagi
//!function_exists(nama_function) buat handle klo misal di controllernya ada nama function sama biar gak error

if (!function_exists('checkModule')) {
    function checkModule($module)
    {
        $session = session();
        $module_list = $session->get('module');
        if (isset($module_list[$module])) {
            return true;
        } else {
            return false;
        }
    }
}

if (!function_exists('checkMethod')) {
    function checkMethod($module, $method)
    {
        $session = session();
        $module_list = $session->get('module');
        $method_list = $module_list[$module]['method'];
        foreach ($method_list as $row){
            if($row['id'] == $method){
                return true;
            }
        }
        return false;
    }
}
if(!function_exists('getAllFilterArray')){
    function getAllFilterArray($filter){

        $filterList = array("month","year","region","subregion","area","channel","subchannel","account","province","city");
        $filterArray = array();
        foreach ($filterList as $index){
            if(isset($filter[$index])){
                $filterArray[$index] = $filter[$index];
            }

        }
        return $filterArray;
    }

}
?>