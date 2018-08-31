<?php 

	include 'plantilla.php';

	$pdf=new PDF('L','mm',[250,290]);

	$pdf->AddPage();

	// Set font
	$pdf->SetFont('Arial','B',16);
	//$pdf->SetY(10);
	//$pdf->SetX(0);
	// Move to 8 cm to the right
	$pdf->Cell(1);
	// Centered text in a framed 20*10 mm cell and line break
	$pdf->Cell(70,10,'Corte de Toallas x Mes',1,1,'C');

	$pdf->SetY(45);
	$pdf->SetWidths(array(20, 20, 25, 25, 25,25));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(85,107,47);
	$pdf->SetTextColor(255);

	for($i=0;$i<1;$i++){

    $pdf->Row(array('Precios',' ', 'Costo Renta', 'Costo Repo', 'Costo D'));
  	}
  	for ($i=0; $i <2 ; $i++) { 
  		$pdf->SetFont('Arial','B',10);
  		$pdf->SetFillColor(255);
		$pdf->SetTextColor(0);
  		if($i%2 == 1){
			$pdf->Row(array('','Hola','Hola','Hola','hola'));
			$pdf->SetFillColor(255);
			$pdf->SetTextColor(0);
		}else{
			$pdf->Row(array('','Hola','Hola','Hola','Hola'));
			$pdf->SetFillColor(255);
			$pdf->SetTextColor(0);
		}
		
  	}
	
	//============================================================================
  	//                                  Cantidad	

  	//-----
  	/*Cantidad*/
  	$pdf->SetY(65);
  	$pdf->SetX(10);
	$pdf->SetWidths(array(25, 25, 25));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(85,107,47);
	$pdf->SetTextColor(255);

	for($i=0;$i<1;$i++){

    $pdf->Row(array('Cantidad','Toallas GR', 'Toallas CH'));
 	}

 	/*LLENADO*/
 	for ($i=0; $i <2 ; $i++) { 
  		$pdf->SetFont('Arial','B',10);
  		$pdf->SetFillColor(255);
		$pdf->SetTextColor(0);
  		if($i%2 == 1){
			$pdf->Row(array('','Hola','Hola'));
			$pdf->SetFillColor(255);
			$pdf->SetTextColor(0);
		}else{
			$pdf->Row(array('','Hola','hoLA'));
			$pdf->SetFillColor(255);
			$pdf->SetTextColor(0);
		}
		
  	}

  	/*Salida Toallas*/
  	$pdf->SetY(81);
  	$pdf->SetX(35);
	$pdf->SetWidths(array(50));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(85,107,47);
	$pdf->SetTextColor(255);

	for($i=0;$i<1;$i++){

    $pdf->Row(array('Salida Toallas $00'));
 	}

 	/*Entrada Toallas*/

 	$pdf->SetY(87);
  	$pdf->SetX(35);
	$pdf->SetWidths(array(50));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(85,107,47);
	$pdf->SetTextColor(255);

	for($i=0;$i<1;$i++){

    $pdf->Row(array('Entrada Toallas $00'));
 	}

 	/*Subtotales*/
  	$pdf->SetY(95);
  	$pdf->SetX(10);
	$pdf->SetWidths(array(25, 25, 25));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(85,107,47);
	$pdf->SetTextColor(255);

	for($i=0;$i<1;$i++){

    $pdf->Row(array('SubTotales','Toallas GR', 'Toallas CH'));
 	}

 	/*LLENADO*/
 	for ($i=0; $i <2 ; $i++) { 
  		$pdf->SetFont('Arial','B',10);
  		$pdf->SetFillColor(255);
		$pdf->SetTextColor(0);
  		if($i%2 == 1){
			$pdf->Row(array('','Hola','Hola'));
			$pdf->SetFillColor(255);
			$pdf->SetTextColor(0);
		}else{
			$pdf->Row(array('','Hola','hoLA'));
			$pdf->SetFillColor(255);
			$pdf->SetTextColor(0);
		}
		
  	}

  	/*Total Facturas*/

 	$pdf->SetY(106);
  	$pdf->SetX(10);
	$pdf->SetWidths(array(75));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(85,107,47);
	$pdf->SetTextColor(255);

	for($i=0;$i<1;$i++){

    $pdf->Row(array('Total a Facturar'));
 	}

 	/*Calculo toallas Pagadas*/

 	$pdf->SetY(112);
  	$pdf->SetX(10);
	$pdf->SetWidths(array(75));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(85,107,47);
	$pdf->SetTextColor(255);

	for($i=0;$i<1;$i++){

    $pdf->Row(array('Rentas del dia + toallas pagadas $000'));
 	}

 	/*Rentas del Dia*/

 	$pdf->SetY(117.5);
  	$pdf->SetX(10);
	$pdf->SetWidths(array(75));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(85,107,47);
	$pdf->SetTextColor(255);

	for($i=0;$i<1;$i++){

    $pdf->Row(array('Total de Rentas al dia $000'));
 	}




  //============================================================================
  //                              Segunda Fila 		
  	
 	//Tabla de Dañadas Rotas Y Manchadas
  	$pdf->SetY(65);
  	$pdf->SetX(100);
	$pdf->SetWidths(array(25, 25, 25));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(85,107,47);
	$pdf->SetTextColor(255);

	for($i=0;$i<1;$i++){

    $pdf->Row(array('Danadas','Manchadas', 'Rotas'));
  	
  	}

  	$pdf->SetY(70);
  	$pdf->SetX(100);
	$pdf->SetWidths(array(12.5, 12.5,12.5,12.5,12.5,12.5));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(85,107,47);
	$pdf->SetTextColor(255);

	for($i=0;$i<1;$i++){

    $pdf->Row(array('G','CH','G','CH','G','CH'));
  	
  	}

  	/*LLENADO*/
  	
 	for ($i=0; $i <2 ; $i++) { 
  		$pdf->SetFont('Arial','B',10);
  		$pdf->SetFillColor(255);
		$pdf->SetTextColor(0);
  		if($i%2 == 1){
  			//$pdf->SetY(80);
  			//$pdf->SetX(100);	
			//$pdf->Row(array('1','2','3','4',5,6));
			//$pdf->SetFillColor(255);
			//$pdf->SetTextColor(0);
		}else{
			$pdf->SetY(75);
  			$pdf->SetX(100);
			$pdf->Row(array('1','2','3',4,5,6));
			$pdf->SetFillColor(255);
			$pdf->SetTextColor(0);
		}
		
  	}

  	//Tabla de Dañadas Rotas Y Manchadas
  	$pdf->SetY(82);
  	$pdf->SetX(100);
	$pdf->SetWidths(array(25, 25, 25));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(85,107,47);
	$pdf->SetTextColor(255);

	for($i=0;$i<1;$i++){

    $pdf->Row(array(utf8_decode('SubTotal Dañadas'),'SubTotal Manchadas', 'SubTotal Rotas'));
  	
  	}

  	$pdf->SetY(92);
  	$pdf->SetX(100);
	$pdf->SetWidths(array(12.5, 12.5,12.5,12.5,12.5,12.5));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(85,107,47);
	$pdf->SetTextColor(255);

	for($i=0;$i<1;$i++){

    $pdf->Row(array('G','CH','G','CH','G','CH'));
  	
  	}

  	/*LLENADO*/
  	
 	for ($i=0; $i <2 ; $i++) { 
  		$pdf->SetFont('Arial','B',10);
  		$pdf->SetFillColor(255);
		$pdf->SetTextColor(0);
  		if($i%2 == 1){
  			//$pdf->SetY(80);
  			//$pdf->SetX(100);	
			//$pdf->Row(array('1','2','3','4',5,6));
			//$pdf->SetFillColor(255);
			//$pdf->SetTextColor(0);
		}else{
			$pdf->SetY(97);
  			$pdf->SetX(100);
			$pdf->Row(array('1','2','3',4,5,6));
			$pdf->SetFillColor(255);
			$pdf->SetTextColor(0);
		}
		
  	}

  	/*Toallas Pagadas*/

 	$pdf->SetY(103);
  	$pdf->SetX(100);
	$pdf->SetWidths(array(75));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(85,107,47);
	$pdf->SetTextColor(255);

	for($i=0;$i<1;$i++){
    	$pdf->Row(array('Toallas Pagadas'));
 	}

 	/*Toallas Pagadas en total de desglose*/

 	$pdf->SetY(108);
  	$pdf->SetX(100);
	$pdf->SetWidths(array(75));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(255);
	$pdf->SetTextColor(0);

	for($i=0;$i<1;$i++){

    $pdf->Row(array(utf8_decode(
    ' Total rentas dañadas manchadas y rotas $00')));
 	}


 	/*Rentas del Dia*/

 	$pdf->SetY(119);
  	$pdf->SetX(100);
	$pdf->SetWidths(array(75));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(255);
	$pdf->SetTextColor(0);

	for($i=0;$i<1;$i++){

    $pdf->Row(array(utf8_decode('Toallas dañadas $000')));
 	}


 	/*Toallas del Manchadas*/

 	$pdf->SetY(124.5);
  	$pdf->SetX(100);
	$pdf->SetWidths(array(75));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(255);
	$pdf->SetTextColor(0);

	for($i=0;$i<1;$i++){

    $pdf->Row(array(utf8_decode('Toallas Manchadas  $000')));
 	}

 	/*Toallas del Rotas*/

 	$pdf->SetY(130);
  	$pdf->SetX(100);
	$pdf->SetWidths(array(75));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(255);
	$pdf->SetTextColor(0);

	for($i=0;$i<1;$i++){

    $pdf->Row(array(utf8_decode('Toallas dañadas $000')));
 	}


	//--------------------------------------------------------------------------------
 	//								Tercera fila 
 	//----
  	//Tabla de no pagadas no devueltas
  	$pdf->SetY(45);
  	$pdf->SetX(180);
	$pdf->SetWidths(array(25, 25));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(85,107,47);
	$pdf->SetTextColor(255);

	for($i=0;$i<1;$i++){

    $pdf->Row(array(utf8_decode('SubTotal Pagadas'),'SubTotal Manchadas'));
  	
  	}

  	//Tabla de Subtotal pagadas y SubnoPagadas 
  	$pdf->SetY(55);
  	$pdf->SetX(180);
	$pdf->SetWidths(array(12.5,12.5,12.5, 12.5));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(85,107,47);
	$pdf->SetTextColor(255);

	for($i=0;$i<1;$i++){
   		$pdf->Row(array('G','CH','G','CH'));
  	}

  	//Tabla de no pagadas no devueltas
  	$pdf->SetY(60);
  	$pdf->SetX(180);
	$pdf->SetWidths(array(12.5,12.5,12.5, 12.5));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(255);
	$pdf->SetTextColor(0);

	for($i=0;$i<1;$i++){
  		$pdf->Row(array('1','1','1','1'));
  	}

  	//--------
  	//Tabla de no pagadas no devueltas 2
  	$pdf->SetY(68);
  	$pdf->SetX(180);
	$pdf->SetWidths(array(25, 25));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(85,107,47);
	$pdf->SetTextColor(255);

	for($i=0;$i<1;$i++){

    $pdf->Row(array(utf8_decode('SubTotal Nopagadas'),'SubTotal Nodevueltas'));
  	
	}


	//Tabla de Subtotal NOpagadas y SubPagadas 
  	$pdf->SetY(73);
  	$pdf->SetX(180);
	$pdf->SetWidths(array(12.5,12.5,12.5, 12.5));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(85,107,47);
	$pdf->SetTextColor(255);

	for($i=0;$i<1;$i++){
   		$pdf->Row(array('G','CH','G','CH'));
  	}

  	//Tabla de no pagadas no devueltas
  	$pdf->SetY(78);
  	$pdf->SetX(180);
	$pdf->SetWidths(array(12.5,12.5,12.5, 12.5));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(255);
	$pdf->SetTextColor(0);

	for($i=0;$i<1;$i++){
  		$pdf->Row(array('1','1','1','1'));
  	}

  	//-----------
  	/*Toallas No Pagadas*/

 	$pdf->SetY(85);
  	$pdf->SetX(180);
	$pdf->SetWidths(array(50));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(255);
	$pdf->SetTextColor(0);

	for($i=0;$i<1;$i++){
    	$pdf->Row(array(utf8_decode('Toallas No Pagadas')));
 	}

 	/*Toallas del Rotas dañadas rotas y manchadas en tabla de no pagadas*/

 	$pdf->SetY(85);
  	$pdf->SetX(180);
	$pdf->SetWidths(array(50));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(255);
	$pdf->SetTextColor(0);

	for($i=0;$i<1;$i++){
    	$pdf->Row(array(utf8_decode('Toallas No Pagadas')));
 	}


 	/*Toallas total manchadas rotas y dañadas*/

 	$pdf->SetY(90);
  	$pdf->SetX(180);
	$pdf->SetWidths(array(50));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(255);
	$pdf->SetTextColor(0);

	for($i=0;$i<1;$i++){
    	$pdf->Row(array(utf8_decode('Total restas dañadas, manchadas y rotas    $000')));
 	}

 	//---------
 	/*Toallas total dañadas*/

 	$pdf->SetY(95);
  	$pdf->SetX(180);
	$pdf->SetWidths(array(50));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(255);
	$pdf->SetTextColor(0);

	for($i=0;$i<1;$i++){
    	$pdf->Row(array(utf8_decode('Total dañadas              $00')));
 	}

 	//---------
 	/*Toallas total manchadas*/

 	$pdf->SetY(100);
  	$pdf->SetX(180);
	$pdf->SetWidths(array(50));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(255);
	$pdf->SetTextColor(0);

	for($i=0;$i<1;$i++){
    	$pdf->Row(array(utf8_decode('Total manchadas         $00')));
 	}


 	//---------
 	/*Toallas total rotas*/

 	$pdf->SetY(106);
  	$pdf->SetX(180);
	$pdf->SetWidths(array(50));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(255);
	$pdf->SetTextColor(0);

	for($i=0;$i<1;$i++){
    	$pdf->Row(array(utf8_decode('Total rotas                    $00')));
 	}

 	//--------
  	//Tabla de rentas del dia
  	$pdf->SetY(115);
  	$pdf->SetX(180);
	$pdf->SetWidths(array(50));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(85,107,47);
	$pdf->SetTextColor(255);

	for($i=0;$i<1;$i++){

    $pdf->Row(array('Rentas del dia'));
  	
	}

	//--------
  	//Tabla de rentas del dia
  	$pdf->SetY(120);
  	$pdf->SetX(180);
	$pdf->SetWidths(array(50));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(255);
	$pdf->SetTextColor(0);

	for($i=0;$i<1;$i++){

    $pdf->Row(array('Total rentas del dia         $00'));
  	
	}

	//--------
  	//Total a facturar
  	$pdf->SetY(125);
  	$pdf->SetX(180);
	$pdf->SetWidths(array(50));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(85,107,47);
	$pdf->SetTextColor(255);

	for($i=0;$i<1;$i++){

    $pdf->Row(array('Total a Facturar'));
  	
	}

	//--------
  	//Tabla de rentas del dia + toallas pagadas
  	$pdf->SetY(130);
  	$pdf->SetX(180);
	$pdf->SetWidths(array(50));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(255);
	$pdf->SetTextColor(0);

	for($i=0;$i<1;$i++){

    $pdf->Row(array('Total rentas del dia + toallas pagadas    $00'));
  	
	}

	//--------------------------------------------------------------------------------
 	//								Cuerta fila 
 	//----
  	//Tabla de recuperadas
  	$pdf->SetY(45);
  	$pdf->SetX(235);
	$pdf->SetWidths(array(50));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(85,107,47);
	$pdf->SetTextColor(255);

	for($i=0;$i<1;$i++){

    $pdf->Row(array('Recuperadas'));
  	
  	}

  	//----
  	//Tabla de recuperadas
  	$pdf->SetY(50);
  	$pdf->SetX(235);
	$pdf->SetWidths(array(25,25));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(85,107,47);
	$pdf->SetTextColor(255);

	for($i=0;$i<1;$i++){

    $pdf->Row(array('G','CH'));
  	
  	}

  	//----
  	//Tabla de recuperadas
  	$pdf->SetY(55);
  	$pdf->SetX(235);
	$pdf->SetWidths(array(25,25));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(255);
	$pdf->SetTextColor(0);

	for($i=0;$i<1;$i++){

    $pdf->Row(array('1','10'));
  	
  	}

  	//--------
  	//Tabla de no pagadas no devueltas 2
  	$pdf->SetY(68);
  	$pdf->SetX(235);
	$pdf->SetWidths(array(50));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(85,107,47);
	$pdf->SetTextColor(255);

	for($i=0;$i<1;$i++){

    $pdf->Row(array('SubTotal Recuperadas'));
  	
	}

	//----
  	//Tabla de recuperadas
  	$pdf->SetY(73);
  	$pdf->SetX(235);
	$pdf->SetWidths(array(25,25));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(85,107,47);
	$pdf->SetTextColor(255);

	for($i=0;$i<1;$i++){

    $pdf->Row(array('G','CH'));
  	
  	}

  	//----
  	//Tabla de recuperadas
  	$pdf->SetY(78);
  	$pdf->SetX(235);
	$pdf->SetWidths(array(25,25));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(255);
	$pdf->SetTextColor(0);

	for($i=0;$i<1;$i++){

    $pdf->Row(array('$  _','$  _'));
  	
  	}


	$pdf->Output();


 ?>