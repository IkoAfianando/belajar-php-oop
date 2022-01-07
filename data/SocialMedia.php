<?php

class SocialMedia
{
    public string $name;
}

//final class Facebook extends SocialMedia // final tidak bisa diwariskan ke class selanjutnya
//{
//
//}

//class Facebook extends SocialMedia
//{
//    final public function login(string $username): bool // final tidak bisa dioverride pada function berikutnya
//    {
//        return true;
//    }
//}

class Facebook extends SocialMedia
{
    public function login(string $username): bool
    {
        return true;
    }
}

class FakeFacebook extends Facebook
{
    public function login(string $username): bool
    {
        return false;
    }
}
