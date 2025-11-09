<?php
class LuasLingkaran
{
    public const phi = 3.14;
    public int $jari;

    public function tampil($nama)
    {
        $rumus = LuasLingkaran::phi * $this->jari * $this->jari;
        echo "Ukuran Lingkaran dari {$nama} adalah : $rumus";
    }

    public static function testing()
    {
        echo "ini dari static";
    }
}

$lingkaran = new LuasLingkaran();
$lingkaran->jari = 16;
$lingkaran->tampil('kepala lu');

LuasLingkaran::testing();
