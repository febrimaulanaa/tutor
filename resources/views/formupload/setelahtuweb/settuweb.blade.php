@extends('templateuser.master_user')

@section('content')


<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="row">

        <h1 class="header-w3ls" style="color:black">
          UPLOAD FILE SETELAH TUWEB
        </h1>
        <!-- multistep form -->
        <div class=" col-lg-10">
          <div class="card-body">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            <form method="post" enctype="multipart/form-data" action="{{route('uploadsettuweb')}}">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="rekap">1. Rekap nilai yang sudah di ttd<span>*</span></label>
                <input type="file" value="{{old('rekap')}}" name="rekap" class="form-control-file" id="rekap">
              </div>
              <br>
              <br>
              <div class="form-group">
                <label for="kompetensi">2. Peta kompetensi mata kuliah<span>*</span></label>
                <input type="file" value="{{old('kompetensi')}}" name="kompetensi" class="form-control-file" id="kompetensi" >
              </div>
              <br>
              <br>
              <div class="form-group">
                <label for="rat">3. RAT tervalidasi<span>*</span></label>
                <input type="file" value="{{old('rat')}}" name="rat" class="form-control-file" id="rat" >
              </div>
              <br>
              <br>
              <div class="form-group">
                <label for="sat">4. SAT<span>*</span></label>
                <input type="file" value="{{old('sat')}}" name="sat" class="form-control-file" id="sat" >
              </div>
              <br>
              <br>
              <div class="form-group">
                <label for="sat">5.Kisi - kisi tugas tutorial<span>*</span></label>
                <input type="file" value="{{old('kisitugastutorial')}}" name="kisitugastutorial" class="form-control-file" id="kisitugastutorial" >
              </div>
              <br>
              <br>
              <div class="form-group">
                <label for="materi">6. Materi (PPT/PDF/Word)<span>*</span></label>
                <h5>Materi 1</h5>
                <input type="file" value="{{old('materi1')}}" name="materi" class="form-control-file" id="materi" >

                <label for="materi2"></label>
                <h5>Materi 2</h5>
                <input type="file" value="{{old('materi2')}}" name="materi2" class="form-control-file" id="materi2" >

                <label for="materi3"></label>
                <h5>Materi 3</h5>
                <input type="file" value="{{old('materi3')}}" name="materi3" class="form-control-file" id="materi3" >

                <label for="materi4"></label>
                <h5>Materi 4</h5>
                <input type="file" value="{{old('materi4')}}" name="materi4" class="form-control-file" id="materi4" >

                <label for="materi5"></label>
                <h5>Materi 5</h5>
                <input type="file" value="{{old('materi5')}}" name="materi5" class="form-control-file" id="materi5" >

                <label for="materi6"></label>
                <h5>Materi 6</h5>
                <input type="file" value="{{old('rekap')}}" name="materi6" class="form-control-file" id="materi6" >

                <label for="materi7"></label>
                <h5>Materi 7</h5>
                <input type="file" value="{{old('rekap')}}" name="materi7" class="form-control-file" id="materi7" >

                <label for="materi8"></label>
                <h5>Materi 8</h5>
                <input type="file" value="{{old('rekap')}}" name="materi8" class="form-control-file" id="materi8" >
              </div>
              <br>
              <br>
              <div class="form-group">
                <label for="catatan">7. Catatan pertemuan<span>*</span></label>
                <input type="file" value="{{old('catatan')}}" name="catatan" class="form-control-file" id="catatan" >
              </div>
              <br>
              <br>
              <div class="form-group">
                <label for="kisi">8. Kisi - kisi tugas<span>*</span></label>
                <input type="file" value="{{old('kisi')}}" name="kisi" class="form-control-file" id="kisi" >
                <label for="kisi2"></label>
                <input type="file" value="{{old('kisi2')}}" name="kisi2" class="form-control-file" id="kisi2" >
                <label for="kisi3"></label>
                <input type="file" value="{{old('kisi3')}}" name="kisi3" class="form-control-file" id="kisi3" >
                <br>
              </div>
              <br>
              <br>
              <div class="form-group">
                <label for="pedoman">9. Pedoman penskoran<span>*</span></label>
                <input type="file" value="{{old('pedoman')}}" name="pedoman" class="form-control-file" id="pedoman" >
                <label for="pedoman2"></label>
                <input type="file" value="{{old('pedoman2')}}" name="pedoman2" class="form-control-file" id="pedoman2" >
                <label for="pedoman3"></label>
                <input type="file" value="{{old('pedoman3')}}" name="pedoman3" class="form-control-file" id="pedoman3" >
                <br>
              </div>
              <br>
              <br>
              <div class="form-group">
                <label for="tandaterima">10. Tanda terima tugas<span>*</span></label>
                <input type="file" value="{{old('tandaterima')}}" name="tandaterima" class="form-control-file" id="tandaterima" >
                <label for="tandaterima2"></label>
                <input type="file" value="{{old('tandaterima2')}}" name="tandaterima2" class="form-control-file" id="tandaterima2" >
                <label for="tandaterima3"></label>
                <input type="file" value="{{old('tandaterima3')}}" name="tandaterima3" class="form-control-file" id="tandaterima3" >
                <br>
              </div>
              <br>
              <br>
              <div class="form-group">
                <label for="nilaitertinggi">11. Nilai tertinggi<span>*</span></label>
                <input type="file" value="{{old('nilaitertinggi')}}" name="nilaitertinggi" class="form-control-file" id="nilaitertinggi" >
              </div>
              <br>
              <br>
              <div class="form-group">
                <label for="nilaiterendah">12. Nilai terendah<span>*</span></label>
                <input type="file" value="{{old('nilaiterendah')}}" name="nilaiterendah" class="form-control-file" id="nilaiterendah" >
              </div>
              <br>
              <br>
              <div class="form-group">
                <label for="sspertemuan">13. Screenshoot tiap pertemuan (dikumpulkan dalam bentuk word)<span>*</span></label>
                <input type="file" value="{{old('sspertemuan')}}" name="sspertemuan" class="form-control-file" id="sspertemuan" >
              </div>
              <br>
              <br>
              <div class="col-auto">
                <button class="button" onclick="window.location.href='/settuweb'" />SUBMIT</button>
              </div>
              <br>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection