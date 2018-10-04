<?php

namespace App\Http\Controllers\soalmarlin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Hash; 
//use DB;
//use App\Penunggu;
//use Session;
//use Carbon\Carbon;
//use App\helpers\Globalhelper;
// https://github.com/ammezie/laravel-chat


class SoalMarlinController extends Controller
{
	
	public function soal2()
    {
        return view('soal2');
    }
	public function ceksoal(Request $request)
    {	$cetak=[];
    	$no=1;
    	for($i=1; $i<=$request->input("bilangan"); $i++)
    	{
    		if($i%3==0 and $i%5==0)
    		{
    			$cetak[$no] ="marlin booking";
    		}
    		elseif($i%3==0)
    		{

    			$cetak[$no] ="marlin";
    		}
    		elseif($i%5==0)
    		{
				$cetak[$no]="booking";
    		}

    		$no++;
    	}
   $j=1;
   $jml=1;
$contbatas=$request->input("bilangan");
  	 $cetak2=$cetak;
    	foreach ($cetak as $key => $val) 
    	{
    		if($val=='marlin booking')
    		{    		
    			$jml++;
    			$j=$key;
    		}
    	}
    
		if($jml>2)
		{
		
			for($s=30; $s<=$contbatas; $s++)
			{
				if(@$cetak2[$s]=='booking')
				{
					@$cetak2[$s]="marlin";
				}
				elseif(@$cetak2[$s]=='marlin')
				{
					@$cetak2[$s]="booking";
				}
			}

		}
	
		if($jml>5)
		{
			for($s=75+1; $s<=$contbatas; $s++)
			{
				unset($cetak2[$s]);
			}

		}
	
	dd($cetak2);
        
    }
    
    public  function cekongkir(Request $request)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "origin=501&destination=".$request->input("kota")."&weight=".$request->input("berat")."&courier=jne",
		CURLOPT_HTTPHEADER => array(
		"content-type: application/x-www-form-urlencoded",
		"key: 10053c676cc02d16f6bedadec0894880"
		),
        ));

        $response   = curl_exec($curl);
        $err        = curl_error($curl);
        curl_close($curl);
        $cost_json_decode = empty($error)?json_decode($response, true):array();
        $responseData = array('response'=>$cost_json_decode);
        echo '<pre>';
       	print_r($responseData['response']['rajaongkir']['results'] );
 echo '</pre>';
        }



}