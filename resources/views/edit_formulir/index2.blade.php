@extends('layouts.appuser')

@section('content')
    <main id="main">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
            <h1 class="mb-3">Riwayat Formulir</h1>
            <p class="text-center">Anda dapat dengan mudah meninjau kembali data yang telah dimasukkan, memastikan bahwa informasi tersebut akurat dan sesuai</p>
        </div>

        <section id="riwayat-transaksi" class="p-4">
            <div class="container">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama Siswa</th>
                            <th>Umur</th>
                            <th>Nama Ayah</th>
                            <th>Nama Ibu</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($siswas as $data)
                            <tr>
                                <td>{{ $data->nama_siswa }}</td>
                                <td>{{ $data->umur }}</td>
                                <td>{{ $data->nama_ayah }}</td>
                                <td>{{ $data->nama_ibu }}</td>
                                <td>
                                    <button class="btn btn-primary" onclick="window.location.href='{{ route('siswa.edit', $data->id) }}'">Lihat Formulir</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada data formulir yang diisi.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <!-- Detail Siswa -->
                <div id="siswa-detail" class="mt-4" style="display: none;">
                    <h3>Detail Siswa</h3>
                    <p><strong>Nama Siswa:</strong> <span id="detail-nama"></span></p>
                    <p><strong>Umur:</strong> <span id="detail-umur"></span></p>
                    <p><strong>Tempat Lahir:</strong> <span id="detail-tmpt_lhr"></span></p>
                    <p><strong>Tanggal Lahir:</strong> <span id="detail-tgl_lhr"></span></p>
                    <p><strong>Alamat:</strong> <span id="detail-alamat"></span></p>
                    <p><strong>Agama:</strong> <span id="detail-agama"></span></p>
                    <p><strong>Nama Ayah:</strong> <span id="detail-nama_ayah"></span></p>
                    <p><strong>Pekerjaan Ayah:</strong> <span id="detail-pekerjaan_ayah"></span></p>
                    <p><strong>Nama Ibu:</strong> <span id="detail-nama_ibu"></span></p>
                    <p><strong>Pekerjaan Ibu:</strong> <span id="detail-pekerjaan_ibu"></span></p>
                    <p><strong>No HP Ortu:</strong> <span id="detail-no_hp_ortu"></span></p>
                </div>
            </div>
        </section>
    </main>

    <script>
        function lihatFormulir(id) {
            // Fetch the student data using AJAX
            fetch(`/siswa/${id}`)
                .then(response => response.json())
                .then(data => {
                    // Populate the detail section with data
                    document.getElementById('detail-nama').innerText = data.nama_siswa;
                    document.getElementById('detail-umur').innerText = data.umur;
                    document.getElementById('detail-tmpt_lhr').innerText = data.tmpt_lhr;
                    document.getElementById('detail-tgl_lhr').innerText = data.tgl_lhr;
                    document.getElementById('detail-alamat').innerText = data.alamat;
                    document.getElementById('detail-agama').innerText = data.agama;
                    document.getElementById('detail-nama_ayah').innerText = data.nama_ayah;
                    document.getElementById('detail-pekerjaan_ayah').innerText = data.pekerjaan_ayah;
                    document.getElementById('detail-nama_ibu').innerText = data.nama_ibu;
                    document.getElementById('detail-pekerjaan_ibu').innerText = data.pekerjaan_ibu;
                    document.getElementById('detail-no_hp_ortu').innerText = data.no_hp_ortu;

                    // Show the detail section
                    document.getElementById('siswa-detail').style.display = 'block';
                })
                .catch(error => console.error('Error fetching student data:', error));
        }
    </script>
@endsection
