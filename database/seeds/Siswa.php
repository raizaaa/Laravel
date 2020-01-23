<?php

use Illuminate\Database\Seeder;

class Siswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
        ['nis'=>'00001', 'nama'=>'Keiza', 'jenis_kelamin'=>'Perempuan', 'alamat'=>'Bandung', 'tgl_lahir'=>'2003-11-25', 'umur'=>16],
        ['nis'=>'00002', 'nama'=>'Kyein', 'jenis_kelamin'=>'Perempuan', 'alamat'=>'Bandung', 'tgl_lahir'=>'2004-09-25', 'umur'=>15],
        ['nis'=>'00003', 'nama'=>'Karin', 'jenis_kelamin'=>'Perempuan', 'alamat'=>'Bandung', 'tgl_lahir'=>'2004-04-19', 'umur'=>15],
        ['nis'=>'00004', 'nama'=>'Alvaro', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Bandung', 'tgl_lahir'=>'2001-05-19', 'umur'=>18],
        ['nis'=>'00005', 'nama'=>'Raden', 'jenis_kelamin'=>'Laki-laki', 'alamat'=>'Bandung', 'tgl_lahir'=>'2002-03-18', 'umur'=>17]
        ];

        // memasukkan data ke database
        DB::table('siswa')->insert($data);
    }
}
