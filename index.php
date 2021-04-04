<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic PDF</title>
    <link rel="icon" href="asset/images/logo-rs-1.gif" type="image/jpg" sizes="16x16">
    <link type="text/css" rel="stylesheet" href="asset/css/main.css">
    <link type="text/css" rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="asset/jquery/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="asset/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
</head>
<body>
    <div class="container">
    <main>
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="TCPDF-main\TCPDF-main\examples\images\pokeball.png" alt="" width="72" height="57">
            <h2>Checkout form</h2>
            <p class="lead">Example Pdf Generate with website form and connected with database</p>
        </div>
        <form action="generatepdf.php" method="GET" target="_blank">
        <div class="col-sm-8 contact-info center"> 		
                    <table class="table">
                            <tr style="background:#ffc107;">
                                <td style="font-weight: bold;">No. Registrasi</td>
                                <td style="font-weight: bold;">
                                    <input type="text" class="form-control" name='id_registrasi' value="QWRTZ-054"  readonly >
                                </td>
                                    
                            </tr>
                            <tr>
                                <td> NIM</td>
                                <td>
                                    <input type="text" class="form-control" name="frmCode" id='frmCode' value='' required> 
                                    </td>
                            </tr>
                            <tr>
                                <td> Nama Lengkap</td>
                                <td> 
                                    <input type="text" class="form-control" name="frmName" value="" id="frmName" placeholder="" required> 
                                    </td>
                            </tr>
                            <td> Progam Studi</td>
                                <td> 
                                <select class='form-control' name="frmStudi" id="frmStudi" value="" required>
                                            <option value='Pend. Informatika dan Komputer' >Pendidikan Informatika dan Komputer</option>
                                            <option value='Pend. Fisika' >Pendidikan Fisika</option>
                                    </select>
                                </td>	
                            <tr>
                                <td> Tingkat/Semester </td>
                                <td>
                                    <select class='form-control' name="frmSemester" id="frmSemester" value="" required>
                                            <option value='1' >1</option>
                                            <option value='2' >2</option>
                                            <option value='3' >3</option>
                                            <option value='4' >4</option>
                                            <option value='5' >5</option>
                                            <option value='6' >6</option>
                                    </select>
                                </td>
                            <tr>
                            <tr>
                                <td> Tahun Ajaran</td>
                                <td> 
                                    <input type="number" class="form-control" name="frmThnAjaran" value="" id="frmThnAjaran" placeholder="" required> 
                                </td>
                            </tr>
                            <tr>
                                <td> Nama Orang Tua</td>
                                <td> 
                                    <input type="teks" class="form-control" name="frmOrtu" value="" id="frmOrtu" placeholder="" required> 
                                </td>
                            </tr>
                            <tr>
                                <td> NIP / NRP </td>
                                <td> 
                                    <input type="number" class="form-control" name="frmNIP" value="" id="frmNIP" placeholder="" required> 
                                </td>
                            </tr>
                            <tr>
                                <td> Pangkat </td>
                                <td> 
                                    <select class='form-control' name="frmPangkat" id="frmPangkat" value="" required>
                                            <option value='Penata Tk.1' >Penata Tingkat 1</option>
                                            <option value='Penata Tk.2' >Penata Tingkat 2</option>
                                    </select> 
                                </td>
                            </tr>	
                            <tr>
                                <td>Golongan</td>
                                <td> 
                                    <select class='form-control' name="frmGolongan" id="frmGolongan" value="" required>
                                            <option value='I' >I</option>
                                            <option value='II' >II</option>
                                    </select> 
                                </td>
                            </tr>
                            <tr>
                                <td> Ruang </td>
                                <td> 
                                    <select class='form-control' name="frmRuang" id="frmRuang" value="" required>
                                            <option value='a' >a</option>
                                            <option value='b' >b</option>
                                    </select> 
                                </td>
                            </tr>
                            <tr>
                                <td>Instansi </td>
                                <td> 
                                    <input type="text" class="form-control" name="frmInstansi" value="" id="frmInstansi" placeholder="" required> 
                                </td>
                            </tr>		
                    </table>
            <button type="submit" class="btn btn-primary" name="pdf_report_generate">Generate PDF</button>
        </div>
        </form>
    </div>
    </main>
    </div>
</body>
</html>