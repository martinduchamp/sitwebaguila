<?php

namespace App\Models\Features;

trait HasHelpers
{
    public static $table_name_cache;
    
    public static function getTableName()
    {
        if( is_null(self::$table_name_cache) )
            self::$table_name_cache = with(new self)->getTable();

        return self::$table_name_cache;
    }
}
