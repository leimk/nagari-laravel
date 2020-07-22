<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;

class DataController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    public function simpan(Request $request)
    {  
        // $periode = $periodeLength->m;
        
        
        $rules = [
            'nama'          =>  'required',
            'manfaat'       =>  'required',
            'no-pk'         =>  'required',
            'no-ktp'        =>  'required',
            'sdate'         =>  'required|date',
            'edate'         =>  'required|date|after:sdate',
            'tglLahir'      =>  'required|date',
            'periodeLength' =>  'required',
            'rate'          =>  'required',
            'jenisKelamin'  =>  'required',
            'pekerjaan'     =>  'required',
            'usia'          =>  'required',
            'tabel'         =>  'required'
        ];

        $err_msg = [
            'required'  => ':attribute WAJIB DIISI',
            'date' => 'Periksa kembali format Tanggal :attribute , format yg diperkenankan : yyyy-mm-dd (tahun[4 digit]-bulan[2 digit]-tanggal[2 digit] ',
            'after' => ':attribute HARUS LEBIH BESAR DARI :date.',
        ];
        
        $hasilValidasi = $request->validate($rules,$err_msg);
        $sdate = date_create($request['sdate']);
        $edate = date_create($request['edate']);
        $differenceFormat = '%m';
        $sdate = date_create($request->sdate);
        $edate = date_create($request->edate);
        $bdate = date_create($request->tglLahir);
        $periodeLength = $edate->diff($sdate);
        $cekUsia = $bdate->diff($sdate)->y;
        // dd($cekUsia);
        if($cekUsia != $request->usia){
            return response()->json([
                'status'    => 'fail',
                'message'   =>  'Usia tidak sesuai hitungan, harusnya :'.$cekUsia.' tahun'
            ]);
        }else{
            try{
                $data = new Data;
                $data->nama = $request['nama'];
                $data->nama = $request['manfaat'];
                $data->noPK = $request['no-pk'];
                $data->noKTP = $request['no-ktp'];
                $data->sdate = $request['sdate'];
                $data->edate = $request['edate'];
                $data->tglLahir = $request['tglLahir'];
                $data->periodeLength = $request['periodeLength'];
                $data->rate = $request['rate'];
                $data->jenisKelamin = $request['jenisKelamin'];
                $data->pekerjaan = $request['pekerjaan'];
                $data->usia = $request['usia'];
                $data->tabel = $request['tabel'];
                $data->save();
            } catch(\Exception $e){
                if($e->getCode()==23000){
                    return response()->json([
                        'status'    => 'fail',
                        'message'   =>  'No-PK sudah pernah kami terima sebelumnya.'
                    ],409);
                }
            }
            
            return response()->json([
                'status'    =>  'ok',
                'message'   =>  'Terima Kasih. Data berhasil kami terima',
                'data'      =>  $request->all()
            ],201);
        }
        
        $periodeLength=$periodeLength->y;
        $usia = $periodeLength + $request->usia;
        dd($usia);
        //  $periodeLength = date_diff($sdate,$edate);
        // $usia2 = $request->usia + $periodeLength;
        

        // switch($tabel){
        //     case 'tabel1' : $tb = 'baru';break;
        //     case 'tabel2' : $tb = 'Baki';break;
        //     case 'tabel3' : $tb = 'KCUCITRA';break;
        //     case 'tabel4' : $tb = 'meninggalSaja';break;
        //     case 'tabel5' : $tb = 'usia_60plus';break;
        //     default : $tb ='UNKNOWN';break;
        // }


        $result= Baki::get()
        ->Where($key1, $periode)
        ->first();
        return response()->json([
            'status'    =>  'ok',
            'message'   =>  'data berhasil terkirim.Terima Kasih ',
            'data'      =>  $request->all()
        ],201);
        // dump($request->errors);
        // return session()->flash('error','Error Message while sanitizing input:');
        
        // dd($periodeLength->y*12);
        // dump($request->all());
        // dump(request());

        // return 'siap menerima simpanan data';
    }
}
