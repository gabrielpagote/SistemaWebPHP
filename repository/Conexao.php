<?php

class Conexao
{
    public static function criar()
    {
        return new PDO("sqlite:db/sistemas.db");
    }
}
