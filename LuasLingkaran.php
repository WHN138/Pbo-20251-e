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
}

$lingkaran = new LuasLingkaran();
$lingkaran->jari = 16;
$lingkaran->tampil('kepala lu');
