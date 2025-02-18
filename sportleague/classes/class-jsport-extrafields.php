<?php
/**
 * WP-JoomSport
 * @author      BearDev
 * @package     JoomSport
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

require_once JOOMSPORT_ACHV_PATH_ENV.'classes'.DIRECTORY_SEPARATOR.'class-jsport-ef.php';
class classJsportAchvExtrafields
{
    public static function getExtraFieldValue($id, $uid, $type, $season_id)
    {
        $obj = new classJsportAchvEf($type);

        return $obj->getValue($uid, $id, $season_id);
    }
    public static function getExtraFieldList($uid, $type, $season_id)
    {
        $obj = new classJsportAchvEf($type);

        return $obj->getList($uid, $season_id);
    }
    public static function getExtraFieldListTable($type, $table = true)
    {
        $obj = new classJsportAchvEf($type);
        if($table){
            return $obj->getListTable();
        }else{
            return $obj->getListDisplay();
        }
    }
}
