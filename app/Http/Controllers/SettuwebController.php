<?php

namespace App\Http\Controllers;

use App\upload_settuweb;
use App\UploadSettuweb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ZipArchive;

class SettuwebController extends Controller
{
    public function index(Request $request)
    {
        return view('formupload.setelahtuweb.settuweb');
    }

    public function upload_settuweb(Request $request)
    {
       
        $request->validate([
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

        return dd($data);

        $upload = UploadSettuweb::create($data);

        
        if (isset($filename)) {
            $upload->rekap = $filename;
        } else {
            $upload->rekap = '';
        }
        if ($request->hasFile('kompetensi')) {
            $file = $request->file('kompetensi');
            $extension = $file->getClientOriginalName();
            $filename2 = time() . '.' . $extension;
            $file->move('file/kompetensi', $filename2);
            $upload->kompetensi = $filename2;
        }
        if (isset($filename2)) {
            $upload->kompetensi = $filename2;
        } else {
            $upload->kompetensi = '';
        }
        if ($request->hasFile('rat')) {
            $file = $request->file('rat');
            $extension = $file->getClientOriginalName();
            $filename3 = time() . '.' . $extension;
            $file->move('file/rat', $filename3);
            $upload->rat = $filename3;
        }
        if (isset($filename3)) {
            $upload->rat = $filename3;
        } else {
            $upload->rat = '';
        }
        if ($request->hasFile('sat')) {
            $file = $request->file('sat');
            $extension = $file->getClientOriginalName();
            $filename4 = time() . '.' . $extension;
            $file->move('file/sat', $filename4);
            $upload->sat = $filename4;
        }
        if (isset($filename4)) {
            $upload->sat = $filename4;
        } else {
            $upload->sat = '';
        }
        if ($request->hasFile('kisitugastutorial')) {
            $file = $request->file('kisitugastutorial');
            $extension = $file->getClientOriginalName();
            $filename5 = time() . '.' . $extension;
            $file->move('file/kisitugastutorial', $filename5);
            $upload->kisitugastutorial = $filename5;
        }
        if (isset($filename5)) {
            $upload->kisitugastutorial = $filename5;
        } else {
            $upload->kisitugastutorial = '';
        }
        if ($request->hasFile('materi')) {
            $file = $request->file('materi');
            $extension = $file->getClientOriginalName();
            $filename6 = time() . '.' . $extension;
            $file->move('file/materi', $filename6);
            $upload->materi = $filename6;
        }
        if (isset($filename6)) {
            $upload->materi = $filename6;
        } else {
            $upload->materi = '';
        }
        if ($request->hasFile('materi2')) {
            $file = $request->file('materi2');
            $extension = $file->getClientOriginalName();
            $filename7 = time() . '.' . $extension;
            $file->move('file/materi2', $filename7);
            $upload->materi2 = $filename7;
        }
        if (isset($filename7)) {
            $upload->materi2 = $filename7;
        } else {
            $upload->materi2 = '';
        }
        if ($request->hasFile('materi3')) {
            $file = $request->file('materi3');
            $extension = $file->getClientOriginalName();
            $filename8 = time() . '.' . $extension;
            $file->move('file/materi3', $filename8);
            $upload->materi3 = $filename8;
        }
        if (isset($filename8)) {
            $upload->materi3 = $filename8;
        } else {
            $upload->materi3 = '';
        }
        if ($request->hasFile('materi4')) {
            $file = $request->file('materi4');
            $extension = $file->getClientOriginalName();
            $filename9 = time() . '.' . $extension;
            $file->move('file/materi4', $filename9);
            $upload->materi4 = $filename9;
        }
        if (isset($filename9)) {
            $upload->materi4 = $filename9;
        } else {
            $upload->materi4 = '';
        }
        if ($request->hasFile('materi5')) {
            $file = $request->file('materi5');
            $extension = $file->getClientOriginalName();
            $filename10 = time() . '.' . $extension;
            $file->move('file/materi5', $filename10);
            $upload->materi5 = $filename10;
        }
        if (isset($filename10)) {
            $upload->materi5 = $filename10;
        } else {
            $upload->materi5 = '';
        }
        if ($request->hasFile('materi6')) {
            $file = $request->file('materi6');
            $extension = $file->getClientOriginalName();
            $filename11 = time() . '.' . $extension;
            $file->move('file/materi6', $filename11);
            $upload->materi6 = $filename11;
        }
        if (isset($filename11)) {
            $upload->materi6 = $filename11;
        } else {
            $upload->materi6 = '';
        }
        if ($request->hasFile('materi7')) {
            $file = $request->file('materi7');
            $extension = $file->getClientOriginalName();
            $filename12 = time() . '.' . $extension;
            $file->move('file/materi7', $filename12);
            $upload->materi7 = $filename12;
        }
        if (isset($filename12)) {
            $upload->materi7 = $filename12;
        } else {
            $upload->materi7 = '';
        }
        if ($request->hasFile('materi8')) {
            $file = $request->file('materi8');
            $extension = $file->getClientOriginalName();
            $filename13 = time() . '.' . $extension;
            $file->move('file/materi8', $filename13);
            $upload->materi8 = $filename13;
        }
        if (isset($filename13)) {
            $upload->materi8 = $filename13;
        } else {
            $upload->materi8 = '';
        }
        if ($request->hasFile('catatan')) {
            $file = $request->file('catatan');
            $extension = $file->getClientOriginalName();
            $filename14 = time() . '.' . $extension;
            $file->move('file/catatan', $filename14);
            $upload->catatan = $filename14;
        }
        if (isset($filename14)) {
            $upload->catatan = $filename14;
        } else {
            $upload->catatan = '';
        }
        if ($request->hasFile('kisi')) {
            $file = $request->file('kisi');
            $extension = $file->getClientOriginalName();
            $filename15 = time() . '.' . $extension;
            $file->move('file/kisi', $filename15);
            $upload->kisi = $filename15;
        }
        if (isset($filename15)) {
            $upload->kisi = $filename15;
        } else {
            $upload->kisi = '';
        }
        if ($request->hasFile('kisi2')) {
            $file = $request->file('kisi2');
            $extension = $file->getClientOriginalName();
            $filename16 = time() . '.' . $extension;
            $file->move('file/kisi2', $filename16);
            $upload->kisi2 = $filename16;
        }
        if (isset($filename16)) {
            $upload->kisi2 = $filename16;
        } else {
            $upload->kisi2 = '';
        }
        if ($request->hasFile('kisi3')) {
            $file = $request->file('kisi3');
            $extension = $file->getClientOriginalName();
            $filename17 = time() . '.' . $extension;
            $file->move('file/kisi3', $filename17);
            $upload->kisi3 = $filename17;
        }
        if (isset($filename17)) {
            $upload->kisi3 = $filename17;
        } else {
            $upload->kisi3 = '';
        }
        if ($request->hasFile('pedoman')) {
            $file = $request->file('pedoman');
            $extension = $file->getClientOriginalName();
            $filename18 = time() . '.' . $extension;
            $file->move('file/pedoman', $filename18);
            $upload->pedoman = $filename18;
        }
        if (isset($filename18)) {
            $upload->pedoman = $filename18;
        } else {
            $upload->pedoman = '';
        }
        if ($request->hasFile('pedoman2')) {
            $file = $request->file('pedoman2');
            $extension = $file->getClientOriginalName();
            $filename19 = time() . '.' . $extension;
            $file->move('file/pedoman2', $filename19);
            $upload->pedoman2 = $filename19;
        }
        if (isset($filename19)) {
            $upload->pedoman2 = $filename19;
        } else {
            $upload->pedoman2 = '';
        }
        if ($request->hasFile('pedoman3')) {
            $file = $request->file('pedoman3');
            $extension = $file->getClientOriginalName();
            $filename20 = time() . '.' . $extension;
            $file->move('file/pedoman3', $filename20);
            $upload->pedoman3 = $filename20;
        }
        if (isset($filename20)) {
            $upload->pedoman3 = $filename20;
        } else {
            $upload->pedoman3 = '';
        }
        if ($request->hasFile('tandaterima')) {
            $file = $request->file('tandaterima');
            $extension = $file->getClientOriginalName();
            $filename21 = time() . '.' . $extension;
            $file->move('file/tandaterima', $filename21);
            $upload->tandaterima = $filename21;
        }
        if (isset($filename21)) {
            $upload->tandaterima = $filename21;
        } else {
            $upload->tandaterima = '';
        }
        if ($request->hasFile('tandaterima2')) {
            $file = $request->file('tandaterima2');
            $extension = $file->getClientOriginalName();
            $filename22 = time() . '.' . $extension;
            $file->move('file/tandaterima2', $filename22);
            $upload->tandaterima2 = $filename22;
        }
        if (isset($filename22)) {
            $upload->tandaterima2 = $filename22;
        } else {
            $upload->tandaterima2 = '';
        }
        if ($request->hasFile('tandaterima3')) {
            $file = $request->file('tandaterima3');
            $extension = $file->getClientOriginalName();
            $filename23 = time() . '.' . $extension;
            $file->move('file/tandaterima3', $filename23);
            $upload->tandaterima3 = $filename23;
        }
        if (isset($filename23)) {
            $upload->tandaterima3 = $filename23;
        } else {
            $upload->tandaterima3 = '';
        }
        if ($request->hasFile('nilaitertinggi')) {
            $file = $request->file('nilaitertinggi');
            $extension = $file->getClientOriginalName();
            $filename24 = time() . '.' . $extension;
            $file->move('file/nilaitertinggi', $filename24);
            $upload->nilaitertinggi = $filename24;
        }
        if (isset($filename24)) {
            $upload->nilaitertinggi = $filename24;
        } else {
            $upload->nilaitertinggi = '';
        }
        if ($request->hasFile('nilaiterendah')) {
            $file = $request->file('nilaiterendah');
            $extension = $file->getClientOriginalName();
            $filename25 = time() . '.' . $extension;
            $file->move('file/nilaiterendah', $filename25);
            $upload->nilaiterendah = $filename25;
        }
        if (isset($filename25)) {
            $upload->nilaiterendah = $filename25;
        } else {
            $upload->nilaiterendah = '';
        }
        if ($request->hasFile('sspertemuan')) {
            $file = $request->file('sspertemuan');
            $extension = $file->getClientOriginalName();
            $filename26 = time() . '.' . $extension;
            $file->move('file/sspertemuan', $filename26);
            $upload->sspertemuan = $filename26;
        }
        if (isset($filename26)) {
            $upload->sspertemuan = $filename26;
        } else {
            $upload->sspertemuan = '';
        }

        return redirect()->back();
    } 

    public function tampil()
    {
          $upload_settuweb = UploadSettuweb::all();
          return view('admin.dashboard_settuweb', compact('upload_settuweb'));
    }

    public function download_file($id, $type)
    {
        $upload_settuweb = DB::table('upload_settuweb')->where('id',$id)->get();
        foreach ($upload_settuweb as $upload_settuweb) {
            $name = $upload_settuweb->$type;
            $filename = public_path() . '/file/'.$type.'/' . $upload_settuweb->$type;

            if (file_exists($filename)) {
                return response()->download(public_path() . '/file/'.$type.'/' . $name,$name, [], 'inline' );
            } else {   
                Alert::success('Gagal', 'Data Tidak Ada yang Didownload');
                return redirect()->back();
            }
        }
    }

   function downloadZip(upload_settuweb $id)
   {

        $data = $id->toArray();

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