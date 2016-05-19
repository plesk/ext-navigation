<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH.
class Modules_Navigation_Pictures
{
    public static $data = [
        [
            'id' => '1',
            'title' => 'Picture 1',
            'description' => 'Picture 1 description',
            'name' => 'Picture 1 name',
            'image' => 'photo1.jpg',
        ],
        [
            'id' => '2',
            'title' => 'Picture 2',
            'description' => 'Picture 2 description',
            'name' => 'Picture 2 name',
            'image' => 'photo2.jpg',
        ],
        [
            'id' => '3',
            'title' => 'Picture 3',
            'description' => 'Picture 3 description',
            'name' => 'Picture 3 name',
            'image' => 'photo3.jpg',
        ],
    ];

    public static function getById($id)
    {
        foreach (self::$data as $item) {
            if ($item['id'] == $id) {
                return $item;
            }
        }

        throw new pm_Exception("Picture with id '{$id}' not found.");
    }
}
