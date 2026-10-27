
<?php

class Buku
{
    public $judul;
    public $penulis;
    public $Tahunterbit;

    function Tampilkaninformasi()
    {
        echo "Judul: " . $this->judul . "<br>";
        echo "Penulis: " . $this->penulis . "<br>";
        echo "Tahun Terbit: " . $this->Tahunterbit . "<br>";
    
    }
}


$buku1 = new Buku();
$buku1->judul = "TERBITLAH";
$buku1->penulis = "Fadhil";
$buku1->Tahunterbit = "2007";


$buku2 = new Buku();
$buku2->judul = "LASKAR PELANGI";
$buku2->penulis = "Andrea Hirata";
$buku2->Tahunterbit = "2005";


$buku1->Tampilkaninformasi();
$buku2->Tampilkaninformasi();

?>
