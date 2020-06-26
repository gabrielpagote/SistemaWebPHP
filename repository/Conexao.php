<?php

class Conexao
{
    public static function criar()
    {
        return new PDO("sqlite:sistemas.db");
    }
}
