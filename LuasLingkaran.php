<?php
class LuasLingkaran
{
    public const phi = 3.14;
    public int $jari;

    public function __construct($isiJari = 1)
    {
        $this->jari = $isiJari;
    }

    public function tampil($nama)
    {
        $rumus = LuasLingkaran::phi * $this->jari * $this->jari;
        echo "Ukuran Lingkaran dari {$nama} adalah : $rumus ";
    }

    public static function testing()
    {
        echo "ini dari static ";
    }

    public function __destruct()
    {
        echo "dah ah cape pisan ";
    }
}

$lingkaran = new LuasLingkaran(16);
$lingkaran->tampil('kepala lu');

LuasLingkaran::testing();
