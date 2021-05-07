<?php


class Model
{
    private static function _getTable()
    {
        $class = get_called_class();
        return strtolower($class);
    }

    public static function all()
    {
        $request= 'SELECT * FROM '.self::_getTable();
        return Connection::safeQuery($request,[], get_called_class());
    }

    public static function where($where)
    {
        $request= 'SELECT * FROM '.self::_getTable().' WHERE '.$where;
        return Connection::safeQuery($request,[], get_called_class());
    }

    public static function create($params)
    {
        return Connection::insert(self::_getTable(),$params,get_called_class());
    }

    public static function find($id)
    {
        return self::where('id='.$id)[0];

    }
}