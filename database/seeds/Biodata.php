<?php

use Illuminate\Database\Seeder;

class Biodata extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        ['nis'=>'00001', 'nama'=>'Keiza', 'alamat'=>'Bandung', 'jenis_kelamin'=>'Perempuan', 'tempat_lahir'=>'Bandung', 'tanggal_lahir'=>'2003-11-25', 'hobi'=>'Masak'],
        ['nis'=>'00002', 'nama'=>'Kyein', 'alamat'=>'Bandung', 'jenis_kelamin'=>'Perempuan', 'tempat_lahir'=>'Bandung', 'tanggal_lahir'=>'2004-09-25', 'hobi'=>'Berenang'],
        ['nis'=>'00003', 'nama'=>'Karin', 'alamat'=>'Bandung', 'jenis_kelamin'=>'Perempuan', 'tempat_lahir'=>'Bandung', 'tanggal_lahir'=>'2004-04-19', 'hobi'=>'Badminton'],
        ['nis'=>'00004', 'nama'=>'Cika', 'alamat'=>'Bandung', 'jenis_kelamin'=>'Perempuan', 'tempat_lahir'=>'Bandung', 'tanggal_lahir'=>'2001-05-19', 'hobi'=>'Olahraga'],
        ['nis'=>'00005', 'nama'=>'Sandra', 'alamat'=>'Bandung', 'jenis_kelamin'=>'Perempuan', 'tempat_lahir'=>'Bandung', 'tanggal_lahir'=>'2002-03-18', 'hobi'=>'Makan'],
        ['nis'=>'00006', 'nama'=>'Queenra', 'alamat'=>'Bandung', 'jenis_kelamin'=>'Perempuan', 'tempat_lahir'=>'Bandung', 'tanggal_lahir'=>'2003-11-25', 'hobi'=>'Masak'],
        ['nis'=>'00007', 'nama'=>'Queenza', 'alamat'=>'Bandung', 'jenis_kelamin'=>'Perempuan', 'tempat_lahir'=>'Bandung', 'tanggal_lahir'=>'2004-09-25', 'hobi'=>'Berenang'],
        ['nis'=>'00008', 'nama'=>'Tracy', 'alamat'=>'Bandung', 'jenis_kelamin'=>'Perempuan', 'tempat_lahir'=>'Bandung', 'tanggal_lahir'=>'2004-04-19', 'hobi'=>'Badminton'],
        ['nis'=>'00009', 'nama'=>'Inara', 'alamat'=>'Bandung', 'jenis_kelamin'=>'Perempuan', 'tempat_lahir'=>'Bandung', 'tanggal_lahir'=>'2001-05-19', 'hobi'=>'Olahraga'],
        ['nis'=>'00010', 'nama'=>'Rania', 'alamat'=>'Bandung', 'jenis_kelamin'=>'Perempuan', 'tempat_lahir'=>'Bandung', 'tanggal_lahir'=>'2002-03-18', 'hobi'=>'Makan']
        ];

        DB::table('biodata')->insert($data);
    }
}
