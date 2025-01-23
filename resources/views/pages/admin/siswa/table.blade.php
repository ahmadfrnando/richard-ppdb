<table>
  <thead>
    <tr>
      <th><b>NOMER PENDAFTARAN</b></th>
      <th><b>NAMA</b></th>
      <th><b>TEMPAT LAHIR</b></th>
      <th><b>TANGGAL LAHIR</b></th>
      <th><b>JENIS KELAMIN</b></th>
      <th><b>ALAMAT</b></th>
      <th><b>AGAMA</b></th>
      <th><b>NOMOR HP</b></th>
      <th><b>NISN</b></th>
      <th><b>ASAL SEKOLAH</b></th>
      <th><b>NAMA AYAH</b></th>
      <th><b>UMUR AYAH</b></th>
      <th><b>PENDIDIKAN AYAH</b></th>
      <th><b>PEKERJAAN AYAH</b></th>
      <th><b>NAMA IBU</b></th>
      <th><b>UMUR IBU</b></th>
      <th><b>PENDIDIKAN IBU</b></th>
      <th><b>PEKERJAAN IBU</b></th>
      <th><b>NOMOR HP ORTU</b></th>
      <th><b>ALAMAT ORTU</b></th>
      <th><b>NILAI SKHU</b></th>
      <th><b>RATA - RATA SKHU</b></th>
      <th><b>NOMOR IJAZAH</b></th>
      <th><b>RATA - RATA NILAI IJAZAH</b></th>
      <th><b>NILAI IJAZAH</b></th>
      <th><b>STATUS PENDAFTARAN</b></th>
    </tr>
  </thead>
  <tbody>
    @foreach($siswa as $data)
    <tr>
      <td>{{ $data->nomor_pendaftaran }}</td>
      <td>{{ $data->nama }}</td>
      <td>{{ $data->tempat_lahir }}</td>
      <td>{{ $data->tanggal_lahir }}</td>
      <td>{{ $data->jenis_kelamin }}</td>
      <td>{{ $data->alamat }}</td>
      <td>{{ $data->agama }}</td>
      <td>{{ $data->nomor_hp }}</td>
      <td>{{ $data->nisn }}</td>
      <td>{{ $data->asal_sekolah }}</td>
      <td>{{ $data->nama_ayah }}</td>
      <td>{{ $data->umur_ayah }}</td>
      <td>{{ $data->pendidikan_ayah }}</td>
      <td>{{ $data->pekerjaan_ayah }}</td>
      <td>{{ $data->nama_ibu }}</td>
      <td>{{ $data->umur_ibu }}</td>
      <td>{{ $data->pendidikan_ibu }}</td>
      <td>{{ $data->pekerjaan_ibu }}</td>
      <td>{{ $data->nomor_hp_ortu }}</td>
      <td>{{ $data->alamat_orang_tua }}</td>
      <td>{{ $data->nilai_skhu }}</td>
      <td>{{ $data->rata_rata_skhu }}</td>
      <td>{{ $data->nomor_ijazah }}</td>
      <td>{{ $data->nilai_ijazah }}</td>
      <td>{{ $data->rata_rata_ijazah }}</td>
      <td>{{ $data->status == 1 ? 'Belum Dikonfirmasi' : 'Sudah dikonfirmasi' }}</td>
    </tr>
    @endforeach
  </tbody>
</table>