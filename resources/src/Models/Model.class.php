<?php


interface Model
{
    public static function getAll();
    public static function getById($id);
    public function save();
    public function add();
    public function delete();
}
