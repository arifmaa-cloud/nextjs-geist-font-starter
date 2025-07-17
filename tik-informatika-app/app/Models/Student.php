<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nisn', 'nis', 'nama_lengkap', 'nama_panggilan', 'jenis_kelamin', 'nik',
        'tempat_lahir', 'tanggal_lahir', 'agama', 'kewarganegaraan', 'anak_ke',
        'jumlah_saudara_kandung', 'jumlah_saudara_tiri', 'jumlah_saudara_angkat',
        'status_anak', 'bahasa_sehari_hari', 'alamat_jalan', 'rt', 'rw', 'dusun',
        'desa_kelurahan', 'kecamatan', 'kode_pos', 'lintang', 'bujur',
        'tempat_tinggal', 'moda_transportasi', 'nomor_kks', 'penerima_kps_pkh',
        'nomor_kps_pkh', 'penerima_kip', 'nomor_kip', 'nama_kip', 'alasan_layak_kip',
        'bank', 'nomor_rekening_bank', 'rekening_atas_nama', 'nama_ayah', 'nik_ayah',
        'tahun_lahir_ayah', 'pendidikan_ayah', 'pekerjaan_ayah', 'penghasilan_ayah',
        'kebutuhan_khusus_ayah', 'nama_ibu', 'nik_ibu', 'tahun_lahir_ibu',
        'pendidikan_ibu', 'pekerjaan_ibu', 'penghasilan_ibu', 'kebutuhan_khusus_ibu',
        'nama_wali', 'nik_wali', 'tahun_lahir_wali', 'pendidikan_wali', 'pekerjaan_wali',
        'penghasilan_wali', 'nomor_telepon_rumah', 'nomor_telepon_hp', 'email',
        'jenjang_sekolah', 'kelas', 'jurusan', 'rombel', 'kk_path', 'akte_path',
        'kk_validated', 'akte_validated', 'is_active', 'can_edit'
    ];

    protected $dates = ['tanggal_lahir', 'deleted_at'];

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }

    public function assignmentSubmissions()
    {
        return $this->hasMany(AssignmentSubmission::class);
    }

    public function whatsappLogs()
    {
        return $this->hasMany(WhatsappLog::class);
    }
}
