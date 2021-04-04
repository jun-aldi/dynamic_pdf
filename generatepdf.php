<?php
//if use database
//require 'config.php';
require_once('TCPDF-main\TCPDF-main\tcpdf.php');

if (isset($_GET['pdf_report_generate'])) {
    $frmName = $_GET['frmName'];
    $frmCode = $_GET['frmCode'];
    $frmStudi = $_GET['frmStudi'];
    $frmSemester = $_GET['frmSemester'];
    $frmThnAjaran = $_GET['frmThnAjaran'];
    $frmOrtu = $_GET['frmOrtu'];
    $frmNIP = $_GET['frmNIP'];
    $frmPangkat = $_GET['frmPangkat'];
    $frmGolongan = $_GET['frmGolongan'];
    $frmRuang = $_GET['frmRuang'];
    $frmInstansi = $_GET['frmInstansi'];


}

class PDF extends TCPDF
{
        //Page header
        public function Header() {
            // Logo
            $image_file = K_PATH_IMAGES.'pokeball.png';
                                //margin-left,margin-top,size, 
            $this->Image($image_file, 25, 10, 30, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
            $this->Ln(4); //space
            $this->SetFont('helvetica', '', 12);
            $this->Cell(189,5,'KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN',0,1,'C');
            //Set font fontname,style,size
            $this->SetFont('helvetica', 'B', 12);
            //189 is total width of A4 page,height,border,line
            $this->Cell(189,3,'UNIVERSITAS POKEMON',0,1,'C');
            $this->Cell(189,3,'FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN',0,1,'C');
            $this->SetFont('helvetica', '', 8);
            $this->Cell(189,3,'Jln. Pokeball No. 56 A Surakarta 57126 Telp./Fax. (0271) 99939,999924',0,1,'C');
            $this->Cell(189,3,'Website : http//www.fkip.pokemon.ac.id  E-mail : fkip@fkip.pokemon.ac.id',0,1,'C');
            $this->Ln(5);
            $style = ['width' => 1, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => [0, 0, 0]];
            $this->SetLineStyle($style);
            $this->Line(PDF_MARGIN_LEFT, $this->getY(), $this->getPageWidth()-PDF_MARGIN_LEFT, $this->getY());
            
        }
    
        // Page footer
        public function Footer() {
            // Position at 15 mm from bottom
            $this->SetY(-40);
            // Set font
            $this->SetFont('helvetica', '', 9);
            $column_content='<p> <br>&nbsp;Acuan = Lampiran  surat edaran bersama Menteri Keuangan dan Kepala Badan Administrasi <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kepegawaian Negara nomkor : SE-138.DJA/1.o/7/80,19/SE/1980 tanggal 7 juli <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1980 SEKPN Surakarta Nomor : 012/SE/KPN/1980 tanggal 23 Juli 1980</p>
            <p>&nbsp;Tunjukan kartu identitas anda ! <br></p>';
            // set color for background
            $this->SetFillColor(255, 255, 255);
            // set color for text
            $this->SetTextColor(0, 0, 0);
            // get current vertical position
            $y = $this->getY();
            // write the first column
            $this->writeHTMLCell(150, '', 35, $y, $column_content, 1, 0, 1, true, '', true);
        }
}


// create new PDF document
$pdf = new PDF('p', 'mm', 'A4', true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Juniar Aldi Nugroho');
$pdf->SetTitle('PDF gen');
$pdf->SetSubject('');
$pdf->SetKeywords('');

//=================================================

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

//==============================

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 14, '', true);

// This method has several options, check the source code documentation for more information.
$pdf->AddPage();


$pdf->Ln(18);
$pdf->SetFont('helvetica','U',12);
$pdf->writeHTML('<b>SURAT KETERANGAN MASIH KULIAH<b>',true,false,true,false,'C');
$pdf->SetFont('helvetica','',9);
$pdf->Cell(175,3,'Nomor :                /UN27.02/KM/2021',0,1,'C');


$pdf->Ln(10);
$pdf->SetFont('times','',10);
$pdf->Cell(189,3,'Yang bertandatangan dibawah ini : ',0,1,'L');
$pdf->Ln(1);
$pdf->Cell(189,3,'          1. Nama/NIP                                            : Jabrik, ST, M.Si /999999392999931991',0,1,'L');
$pdf->Ln(1);
$pdf->Cell(189,3,'          2. Pangkat, Golongan, Ruang                  : Penata Tk. I / III / d',0,1,'L');
$pdf->Ln(1);
$pdf->Cell(189,3,'          3. Jabatan                                                 : Kepala Bagian Tata Usaha',0,1,'L');
$pdf->Ln(1);
$pdf->Cell(189,3,'          4. Pada                                                     : FKIP Universitas Pokemon',0,1,'L');

$pdf->Ln(8);
$pdf->Cell(189,3,'Menerangkan  dengan sebenarnya, bahwa :',0,1,'L');
$pdf->Cell(189,3,'          5. Nama Mahasiswa                                : '.$frmName,0,1,'L');
$pdf->Cell(189,3,'          6. NIM / Progam Jurusan                        : '.$frmCode ." / " .$frmStudi,0,1,'L');
$pdf->Cell(189,3,'          7. Tingkat / Semester                              : '.$frmSemester,0,1,'L');
$pdf->Cell(189,3,'          8. Pada Tahun Ajaran                             : '.$frmThnAjaran,0,1,'L');
$pdf->Cell(189,3,'Adalah benar-benar mahasiswa Fakultas Keguruan dan Ilmu Pendidikan Universitas Pokemon.',0,1,'L');

$pdf->Cell(189,3,'Orang tua / wali mahasiswa tersebut adalah :',0,1,'L');
$pdf->Cell(189,3,'          9. Nama                                                  : '.$frmOrtu,0,1,'L');
$pdf->Cell(189,3,'          10. NIP / NRP                                        : '.$frmNIP,0,1,'L');
$pdf->Cell(189,3,'          11. Pangkat / Golongan / Ruang            : '.$frmPangkat .$frmGolongan .$frmRuang,0,1,'L');
$pdf->Cell(189,3,'          12. Instansi                                             : '.$frmInstansi,0,1,'L');

$pdf->Ln(5);
$pdf->writeHTML('<p>Mahasiswa tersebut  di atas benar-benar menjadi  tanggungan  orang  tua / wali, belum menikah, dan tidak memperoleh beasiswa atau ikatan Dinas. <br>
Surat  keterangan  ini  dibuat untuk memenuhi  permintaan  yang bersangkutan  sebagai lampiran  
pengusulan  tunjangan   anak.  Apabila  dikemudian   hari  surat  pernyataan  ini ternyata tidak benar 
sehingga mengakibatkan  kerugian  Negara Republik Indonesia, 
maka saya bersedia menaggung kerugian tersebut.<p>',true,false,true,false,'J');
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}


$mydate=tgl_indo(date('Y-m-d'));

$pdf->Cell(160,3,'Surakarta, '.$mydate,0,1,'R');
$pdf->Cell(158,3,'Koordinator Tata Usaha',0,1,'R');
$pdf->Ln(15);
$pdf->Cell(158,3,'___________________',0,1,'R');
$pdf->Cell(148,3,'Jabrik, ST, M.Si ',0,1,'R');
$pdf->Cell(162,3,'NIP 999999392999931991',0,1,'R');
// Close and output PDF document
$pdf->Output('example_002.pdf', 'I');
