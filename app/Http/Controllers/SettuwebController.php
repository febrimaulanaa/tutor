<?php

namespace App\Http\Controllers;

use App\upload_settuweb;
use App\UploadSettuweb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Zipper;

class SettuwebController extends Controller
{
    public function index(Request $request)
    {
        return view('formupload.setelahtuweb.settuweb');
    }

    public function upload_settuweb(Request $request)
    {
       
        $this->validate($request, [
            'rekap' => 'required|mimes:pdf,csv,xlsx,xls,docx,ppt|max:10000',
            'kompetensi' => 'required|mimes:pdf,csv,xlsx,xls,docx,ppt|max:10000',
            'rat' => 'required|mimes:pdf,csv,xlsx,xls,docx,ppt|max:10000',
            'sat' => 'required|mimes:pdf,csv,xlsx,xls,docx,ppt|max:10000',
            'kisitugastutorial' => 'required|mimes:pdf,csv,xlsx,xls,docx,ppt|max:10000',
            'materi' => 'required|mimes:pdf,csv,xlsx,xls,docx,ppt|max:10000',
            'materi2' => 'required|mimes:pdf,csv,xlsx,xls,docx,ppt|max:10000',
            'materi3' => 'required|mimes:pdf,csv,xlsx,xls,docx,ppt|max:10000',
            'materi4' => 'required|mimes:pdf,csv,xlsx,xls,docx,ppt|max:10000',
            'materi5' => 'required|mimes:pdf,csv,xlsx,xls,docx,ppt|max:10000',
            'materi6' => 'required|mimes:pdf,csv,xlsx,xls,docx,ppt|max:10000',
            'materi7' => 'required|mimes:pdf,csv,xlsx,xls,docx,ppt|max:10000',
            'materi8' => 'required|mimes:pdf,csv,xlsx,xls,docx,ppt|max:10000',
            'catatan' => 'required|mimes:pdf,csv,xlsx,xls,docx,ppt|max:10000',
            'kisi' => 'required|mimes:pdf,csv,xlsx,xls,docx,ppt|max:10000',
            'kisi2' => 'required|mimes:pdf,csv,xlsx,xls,docx,ppt|max:10000',
            'kisi3' => 'required|mimes:pdf,csv,xlsx,xls,docx,ppt|max:10000',
            'pedoman' => 'required|mimes:pdf,csv,xlsx,xls,docx,ppt|max:10000',
            'pedoman2' => 'required|mimes:pdf,csv,xlsx,xls,docx,ppt|max:10000',
            'pedoman3' => 'required|mimes:pdf,csv,xlsx,xls,docx,ppt|max:10000',
            'tandaterima' => 'required|mimes:pdf,csv,xlsx,xls,docx,ppt|max:10000',
            'tandaterima2' => 'required|mimes:pdf,csv,xlsx,xls,docx,ppt|max:10000',
            'tandaterima3' => 'required|mimes:pdf,csv,xlsx,xls,docx,ppt|max:10000',
            'nilaitertinggi' => 'required|mimes:pdf,csv,xlsx,xls,docx,ppt|max:10000',
            'nilaiterendah' => 'required|mimes:pdf,csv,xlsx,xls,docx,ppt|max:10000',
            'sspertemuan' => 'required|mimes:jpg,jpeg,png|max:10000'

        ]);

        $data = [
            "rekap" => $request->rekap,
            "kompetensi" => $request->kompetensi,
            "rat" => $request->rat,
            "sat" => $request->sat,
            "kisitugastutorial" => $request->kisitugastutorial,
            "materi" => $request->materi,
            "materi2" => $request->materi2,
            "materi3" => $request->materi3,
            "materi4" => $request->materi4,
            "materi5" => $request->materi5,
            "materi6" => $request->materi6,
            "materi7" => $request->materi7,
            "materi8" => $request->materi8,
            "catatan" => $request->catatan,
            "kisi" => $request->kisi,
            "kisi2" => $request->kisi2,
            "kisi3" => $request->kisi3,
            "pedoman" => $request->pedoman,
            "pedoman2" => $request->pedoman2,
            "pedoman3" => $request->pedoman3,
            "tandaterima" => $request->tandaterima,
            "tandaterima2" => $request->tandaterima2,
            "tandaterima3" => $request->tandaterima3,
            "nilaitertinggi" => $request->nilaitertinggi,
            "nilaiterendah" => $request->nilaiterendah,
            "sspertemuan" => $request->sspertemuan,
        ];

        foreach($data as $key => $value) {
            if ($request->hasFile($key)) {
                $file = $request->file($key);
                $extension = $file->getClientOriginalName();
                $filename = time() . '.' . $extension;
                $file->move('file/'.$key, $filename);
                $data[$key] = $filename;
            }
        }

        $upload = UploadSettuweb::create($data);

        return redirect()->back();
    } 

    public function tampil()
    {
          $upload_settuweb = UploadSettuweb::all();
          return view('admin.dashboard_settuweb', compact('upload_settuweb'));
    }

    public function download_file($id, $type)
    {
        $upload = UploadSettuweb::find($id);
        $nama = $upload->$type;
        $filename = public_path() . '/file/'.$type.'/' . $nama;
        if (file_exists($filename)) {
            return response()->download(public_path() . '/file/'.$type.'/' . $nama,$nama, [], 'inline' );
        } else {  
            return redirect()->back();
        }
    }

   function downloadZip(UploadSettuweb $upload)
   {
        $data = $upload->toArray();

        $nama = $data['nama'];

        unset($data['id'], $data['nama'], $data['created_at'], $data['updated_at']);
        
        foreach($data as $index => $val) {
            if($val === "") {
                continue;
            }
            // $files[$index] = glob(public_path("files/{$val}"));
            $files[] = public_path("file/{$index}/{$val}");
        }

        \Zipper::make(public_path("{$nama}.zip"))->add($files)->close();

        return response()->download(public_path("{$nama}.zip"))->deleteFileAfterSend(true);

    }

}