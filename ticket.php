<html>
<head>
<title>aadhaar</title>
<script src="pdf.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.js"> </script>
</head>
<body bgcolor="#7fad7b" style="font-family: sans-serif";>

<?php
// Connect to the database

$host="localhost";
$user="root";
$password="";
$connecto=mysqli_connect($host,$user,$password,"esevai");
$nums=$_POST['id2'];
$query = "SELECT * FROM aadhaar where num='$nums'";
$result=mysqli_query($connecto,$query);

require("fpdf.php");
$i=0;
while($row = mysqli_fetch_array($result))
{
$a=$row["name"];
$b=$row["number"];
$c=$row["result"];
$d=$row["dob"];
$e=$row["gender"];
$f=$row["father"];
$g=$row["mother"];
$h=$row["address"];
$i=$row["district"];
$j=$row["phone"];
$k=$row["pincode"];
$l=$row["number"];
}


?>

                    
<?php 
ob_start(); 
$pdf=new FPDF();

$pdf->AddPage();
$pdf->SetFont("Arial","B",16);

$pdf->Image('logo.jpg',90,0,33,25,'JPG',0,1,'C',true);
$pdf->Cell(0,17,"",0,1,'L');
$pdf->SetFillColor(34,139,34);

$pdf->Cell(0,10,"GOVERNMENT OF TAMILNADU",0,1,'C',true);
$pdf->Cell(0,5,"",0,1,'L');
$pdf->SetFillColor(255,127,80);
$pdf->Cell(0,10,"AADHAAR CARD",0,1,'C',true);
$pdf->Cell(0,8,"",0,1,'L');
$pdf->Cell(0,0,"",1,1,'L');
$pdf->Cell(0,8,"",0,1,'L');
$pdf->Cell(0,10,"Name:                          $a",0,1,'B');
$pdf->Cell(0,10,"",0,1,'L');
$pdf->Cell(0,10,"Data of Birth:               $d",0,1,'B');
$pdf->Cell(0,10,"",0,1,'L');
$pdf->Cell(0,10,"Gender:                         $e",0,1,'B');
$pdf->Cell(0,10,"",0,1,'L');
$pdf->Cell(0,10,"Father's name:              $f",0,1,'B');
$pdf->Cell(0,10,"",0,1,'L');
$pdf->Cell(0,10,"Mother's name:              $g",0,1,'B');
$pdf->Cell(0,10,"",0,1,'L');
$pdf->Cell(0,10,"Address:                         $h",0,1,'B');
$pdf->Cell(0,10,"",0,1,'L');
$pdf->Cell(0,10,"District:                           $i",0,1,'B');
$pdf->Cell(0,10,"",0,1,'L');
$pdf->Cell(0,10,"Pincode:                           $k",0,1,'B');
$pdf->Cell(0,10,"",0,1,'L');
$pdf->Cell(0,10,"Phone number:                $j",0,1,'B');
$pdf->Cell(0,10,"",0,1,'L');
$pdf->Cell(0,0,"",1,1,'L');
$pdf->Cell(0,8,"",0,1,'L');
$pdf->Cell(5,10,"Aadhaar number:              $b",0,1,'B');
$file=time().'.pdf';
$pdf->Output($file,'D');
ob_end_flush(); ?></h3>

</body>
</html>