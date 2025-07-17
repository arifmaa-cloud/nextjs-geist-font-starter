<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nisn')->unique();
            $table->string('nis')->unique();
            $table->string('nama_lengkap');
            $table->string('nama_panggilan')->nullable();
            $table->string('jenis_kelamin');
            $table->string('nik')->unique();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('kewarganegaraan')->default('Indonesia');
            $table->string('anak_ke')->nullable();
            $table->string('jumlah_saudara_kandung')->nullable();
            $table->string('jumlah_saudara_tiri')->nullable();
            $table->string('jumlah_saudara_angkat')->nullable();
            $table->string('status_anak')->nullable();
            $table->string('bahasa_sehari_hari')->nullable();
            
            // Alamat
            $table->string('alamat_jalan');
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('dusun')->nullable();
            $table->string('desa_kelurahan');
            $table->string('kecamatan');
            $table->string('kode_pos');
            $table->string('lintang')->nullable();
            $table->string('bujur')->nullable();
            
            // Tempat tinggal
            $table->string('tempat_tinggal');
            $table->string('moda_transportasi');
            
            // KKS/KPS/PKH/KIP
            $table->string('nomor_kks')->nullable();
            $table->string('penerima_kps_pkh')->default('Tidak');
            $table->string('nomor_kps_pkh')->nullable();
            $table->string('penerima_kip')->default('Tidak');
            $table->string('nomor_kip')->nullable();
            $table->string('nama_kip')->nullable();
            $table->string('alasan_layak_kip')->nullable();
            
            // Bank
            $table->string('bank')->nullable();
            $table->string('nomor_rekening_bank')->nullable();
            $table->string('rekening_atas_nama')->nullable();
            
            // Data ayah
            $table->string('nama_ayah');
            $table->string('nik_ayah');
            $table->string('tahun_lahir_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('penghasilan_ayah');
            $table->string('kebutuhan_khusus_ayah')->default('Tidak');
            
            // Data ibu
            $table->string('nama_ibu');
            $table->string('nik_ibu');
            $table->string('tahun_lahir_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('penghasilan_ibu');
            $table->string('kebutuhan_khusus_ibu')->default('Tidak');
            
            // Data wali
            $table->string('nama_wali')->nullable();
            $table->string('nik_wali')->nullable();
            $table->string('tahun_lahir_wali')->nullable();
            $table->string('pendidikan_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('penghasilan_wali')->nullable();
            
            // Kontak
            $table->string('nomor_telepon_rumah')->nullable();
            $table->string('nomor_telepon_hp');
            $table->string('email')->unique();
            
            // Data sekolah
            $table->string('jenjang_sekolah')->default('SMP');
            $table->string('kelas');
            $table->string('jurusan')->nullable();
            $table->string('rombel');
            
            // Dokumen
            $table->string('kk_path')->nullable();
            $table->string('akte_path')->nullable();
            $table->boolean('kk_validated')->default(false);
            $table->boolean('akte_validated')->default(false);
            
            // Status
            $table->boolean('is_active')->default(true);
            $table->boolean('can_edit')->default(true);
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
};
