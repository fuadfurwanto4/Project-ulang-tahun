<?php date_default_timezone_set('Asia/Jakarta'); if(isset($_POST['pesan'])){ $fp = fopen('p.txt', 'a'); fwrite($fp, '
<div class="cp"><p><span>Pesan :</span><br />'.$_POST['pesan'].'</p><h6>'.date("d-M-Y (H:i)").'</h6></div>'); echo json_encode(array("s"=>200)); fclose($fp); die; } if(isset($_POST['d'])){ $fa = fopen('p.txt', 'a'); fwrite($fa,$_POST['d']); echo json_encode(array("s"=>200)); fclose($fa); die; } if(isset($_GET['d'])){ $fa = fopen('p.txt', 'a'); fclose($fa); $fr = fopen('p.txt', 'r'); echo json_encode(array("d"=>fgets($fr))); fclose($fr); die; } ?> <!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8" /> <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <title>Selamat Ulang Tahun Cayang!</title> <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script> <script src="https://dekatutorial.github.io/crd/s.js"></script> <link rel="stylesheet" type="text/css" href="https://dekatutorial.github.io/crd/s.css" /> </head> <body> <?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('p.txt', 'r'); fgets($fp); while(!feof($fp)){ echo "".fgets($fp); } fclose($fp); echo "</div></body></html>"; die; } ?> <script>dt()</script>
    <div class="ctnr">
      <div class="lv">
        <img src="https://dekatutorial.github.io/crd/lv.svg" />
        <p>Coba klik lovenya</p>
      </div>
      <div class="ctn">
        <button class="btn next">[ Lanjut ]</button>
        <button class="btn send">[ Kirim Pesan ]</button>
      </div>
    </div>
<script>
/*=========================*/

konten = [
  {
    gambar: "s1.gif",
    ucapan: "Hai kamu anak cantik yang disana!",
  },
  {
    gambar: "s2.gif",
    ucapan: "Udah cukup besar ya sekarang",
  },
  {
    gambar: "s3.gif",
    ucapan: "Udah 19 Tahun!",
  },
  {
    gambar: "s4.gif",
    ucapan: "Gimana kabarnya?",
  },
  {
    gambar: "s5.gif",
    ucapan: "Semoga baik dan sehat ya!",
  },
  {
    gambar: "s41.gif",
    ucapan: "Gimana hari-harinya?",
  },
  {
    gambar: "s6.gif",
    ucapan: "Semoga menyenangkan ya!",
  },
  {
    gambar: "s42.gif",
    ucapan: "Dan gimana pekerjaanya?",
  },
  {
    gambar: "s7.gif",
    ucapan: "Semoga dilancarin terus ya!",
  },
  {
    ucapan: "Maaf belum bisa kasih apa-apa hehe",
  },
  {
    ucapan: "Semoga kamu senang dengan ini ya",
  },
  {
    ucapan: "Aku cuma mau bilang ...",
  },
  {
    gambar: "s8.gif",
    ucapan: "SELAMAT ULANG TAHUN YANG KE 19!",
  },
  {
    gambar: "s9.gif",
    ucapan: "Semoga Panjang umur!",
  },
  {
    gambar: "s91.gif",
    ucapan: "Disehatkan selalu badanya!",
  },
  {
    gambar: "s92.gif",
    ucapan: "Di senangkan hatinya!",
  },
  {
    gambar: "s93.gif",
    ucapan: "Di mudahkan dengan semua urusan urusanya",
  },
  {
    ucapan: "Pokoknya sehat sehat terus ya cantik!",
  },
  {
    gambar: "s10.gif",
    ucapan: "Udah dulu ya! sampai sini dulu",
  },
  {
    ucapan: "Pokoknya Dijaga kesehatanya yaa! Jangan lupa mam! Tidur yang cukup!",
  },
  {
    gambar: "s11.gif",
  },
  {
    ucapan: "EHhh ... hehe",
  },
  {
    ucapan: "Terakhir...",
  },
  {
    ucapan: "Aku masih sayang sama kamu sampai hari ini!",
  },
  {
    ucapan: "LOVE YOU Cantik❤️",
  },
  {
    gambar: "s12.gif"
  },
  {
    gambar: "s13.gif"
  },
];

musik = "musik.mp3";
nomorWhatsapp = "6281xxx";

/*=========================*/
</script><script> DekaTutorial(konten, musik, nomorWhatsapp); </script> </body> </html>