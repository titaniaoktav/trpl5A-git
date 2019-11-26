<html>
 <head>
  <title>Surat Perizinan Usaha</title>
 </head>

 <body bgcolor="white">
  <font face="Arial" color="black"> <h2 align="center"> PEMERINTAH KABUPATEN JEMBER </h2></font>
  <font face="Arial" color="black"> <h4 align="center"> DINAS PERDAGANGAN DAN PERINDUSTRIAN </h4></font>
  <font face="Arial" color="black"> <p align="center"> BADAN PELAYANAN TERPADU SATU PINTU </p></font>
  <font face="Arial" color="black" size="3"> <p align="center"> JL. PB Sudirman,Pagah,Jemberlor,Kec.Patrang,Kabupaten Jember, Jawa Timur 68118 </p></font>
  <hr>

  <font face="Arial" color="black" size="6"> <p align="center"> <u> <b> SURAT IZIN USAHA PERDAGANGAN (SIUP)</b></u></font><br>
  <font face="Arial" color="black" size="4"> Nomor {{$p->id}}/46/M-DAG/PER/9/2009  </p></font>






  <p align="center">
   Berdasarkan surat peraturan Menteri Perdagangan Nomor 46/M-DAG/PER/9/2009 tentang Perubahan atas Peraturan Menteri Perdagangan RI <br>Nomor 36/M-DAG/PER/9/2007 <br> tentang Surat Izin Usaha Perdagangan maka dengan ini kami menyatakan bahwa :
  </p>


    <pre>
    Nama Usaha / Perusahaan : {{$p->nama_usaha}}

    Status Usaha : {{$p->status_usaha}}

    Nama Pemilik/ Penanggung Jawab : {{$p->wirausaha->nama_lengkap}}

    No. Telp : {{$p->wirausaha->nohp}}

    Nomor Pokok Wajib Pajak (NPWP) : {{$p->wirausaha->nohp}}

    Nilai Modal Kekayaan Bersih : {{$p->nilai_investasi}}

    Bidang Usaha : {{$p->barang_yang_dijual}}

    </pre>



  <p align="left"><font face="Arial">
   SIUP ini diterbitkan dengan ketentuan : <br> PERTAMA : Surat izin usaha perdagangan (SIUP) ini berlaku untuk melakukan kegiatan usaha perdagangan di seluruh wilayah Republik Indonesia. Selama pelaku usaha masih menjalankan kegiatan usaha perdagangan <br> KEDUA : Pemilik/ Penanggung jawab wajib menyampaikan laporan kegiatan usaha perdagangannya dua kali dalam setahun <br>
  </font></p>
 </body>
</html>