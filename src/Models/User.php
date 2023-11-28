<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/src/models/Model.php";

class User extends Model
{
    protected $table = "usuarios";
}