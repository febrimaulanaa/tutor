@extends('templateadmin.master_admin')

@section('content')


<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Basic</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>First name</th>
                                            <th>Download</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @php
                                    $no = 1 ;
                                    @endphp
                                    <tbody>
                                    @foreach ($upload_settuweb as $d)
                                        <tr>
                                            <th>{{$no++}}</th>
                                            <td style="text-align:center">{{$d->nama}}</td>
                                            <td style="font-size:10px"><h4>Rekap nilai yang sudah di ttd</h4><a href="/download/file/{{$d->id}}/rekap">{{$d->rekap}}</a>
                                                <br>
                                                <h4>Peta kompetensi Mata Kuliah</h4><a href="/download/file/{{$d->id}}/kompetensi">{{$d->kompetensi}}</a>
                                                <br>
                                                <h4>RAT tervalidasi</h4><a href="/download/file/{{$d->id}}/rat">{{$d->rat}}</a>
                                                <br>
                                                <h4>SAT</h4><a href="/download/file/{{$d->id}}/sat">{{$d->sat}}</a>
                                                <br>
                                                <h4>Kisi - kisi tugas tutorial</h4><a href="/download/file/{{$d->id}}/kisitugastutorial">{{$d->kisitugastutorial}}</a>
                                                <br>
                                                <h4>Materi (PPT/PDF/Word)</h4><a href="/download/file/{{$d->id}}/materi">{{$d->materi}}</a>
                                                <br>
                                                <h4></h4><a href="/download/file/{{$d->id}}/materi2">{{$d->materi2}}</a>
                                                <br>
                                                <h4></h4><a href="/download/file/{{$d->id}}/materi3">{{$d->materi3}}</a>
                                                <br>
                                                <h4></h4><a href="/download/file/{{$d->id}}/materi4">{{$d->materi4}}</a>
                                                <br>
                                                <h4></h4><a href="/download/file/{{$d->id}}/materi5">{{$d->materi5}}</a>
                                                <br>
                                                <h4></h4><a href="/download/file/{{$d->id}}/materi6">{{$d->materi6}}</a>
                                                <br>
                                                <h4></h4><a href="/download/file/{{$d->id}}/materi7">{{$d->materi7}}</a>
                                                <br>
                                                <h4></h4><a href="/download/file/{{$d->id}}/materi8">{{$d->materi8}}</a>
                                                <br>
                                                <h4>Catatan pertemuan</h4><a href="/download/file/{{$d->id}}/catatan">{{$d->catatan}}</a>
                                                <br>
                                                <h4>Kisi - kisi tes sumatif</h4><a href="/download/file/{{$d->id}}/kisi">{{$d->kisi}}</a>
                                                <br>
                                                <h4></h4><a href="/download/file/{{$d->id}}/kisi2">{{$d->kisi2}}</a>
                                                <br>
                                                <h4></h4><a href="/download/file/{{$d->id}}/kisi3">{{$d->kisi3}}</a>
                                                <br>
                                                <h4>Pedoman penskoran</h4><a href="/download/file/{{$d->id}}/pedoman">{{$d->pedoman}}</a>
                                                <br>
                                                <h4></h4><a href="/download/file/{{$d->id}}/pedoman2">{{$d->pedoman2}}</a>
                                                <br>
                                                <h4></h4><a href="/download/file/{{$d->id}}/pedoman3">{{$d->pedoman3}}</a>
                                                <br>
                                                <h4>Tanda terima tugas</h4><a href="/download/file/{{$d->id}}/tandaterima">{{$d->tandaterima}}</a>
                                                <br>
                                                <h4></h4><a href="/download/file/{{$d->id}}/tandaterima2">{{$d->tandaterima2}}</a>
                                                <br>
                                                <h4></h4><a href="/download/file/{{$d->id}}/tandaterima3">{{$d->tandaterima3}}</a>
                                                <br>
                                                <h4>Nilai tertinggi</h4><a href="/download/file/{{$d->id}}/nilaitertinggi">{{$d->nilaitertinggi}}</a>
                                                <br>
                                                <h4>Nilai terendah</h4><a href="/download/file/{{$d->id}}/nilaiterendah">{{$d->nilaiterendah}}</a>
                                                <br>
                                                <h4>Screenshoot setiap pertemuan</h4><a href="/download/file/{{$d->id}}/sspertemuan">{{$d->sspertemuan}}</a>
                                                <br>
                                            </td>
                                            <td>
                                            <a style = "position:relative; top:-400px;" href="/downloadZip/{{ $d->id }}" class="btn btn-info">Download ZIP</a>	
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

@section('js')
<!-- <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script> -->
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
@endsection