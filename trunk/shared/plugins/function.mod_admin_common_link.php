<?
function smarty_function_mod_admin_common_link($params, &$smarty)
{
        $value = $params['value'];
        // ����� �믮����� ��⥫����㠫�� ��ॢ�� ��ப� $content
        return "http://".HOST."/admin/common/".$value.".php";
}

?>