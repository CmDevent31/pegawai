<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Carbon\Carbon;
use DataTables;
use Illuminate\Support\Facades\DB;

 
 
class PegawaiController extends Controller
{
    public function index(Request $request)
    {
    	// mengambil data dari table pegawai
    	$pegawai = DB::table('pegawai2')->paginate(8);
		if ($request->ajax()) {
            $data = Pegawai::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function ($row) {
                    $btn = '<button type="button" class="btn btn-primary">Edit</button>';
                    $btn .= ' <button type="button" class="btn btn-danger">Delete</button>';
                    return $btn;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }
		// DB::table('pegawai2')->get([
		// 	'pegawai_nama' => $request->nama,
		// 	'pegawai_jabatan' => $request->jabatan,
		// 	'tanggal_lahir' => $request->tanggal_lahir,
		// 	'pegawai_alamat' => $request->alamat,
		// 	// 'pegawai_umur' => intval($umur),
		// ]);
          
    	// mengirim data pegawai ke view index
		
    	return view('index',['pegawai' => $pegawai]);

    }
	
    public function data()
    {
        return DataTables::of(Pegawai::query())->toJson();
    }

    public function tambah()
    {
	return view('tambah');
 
    }
    // method untuk insert data ke table pegawai
	// public function coba()
	// {
		
	// }
	
			public function store(Request $request)
			{
				// Validasi data input
				$request->validate([
					'nama' => 'required',
					'jabatan' => 'required',
					'alamat' => 'required',
					'tanggal_lahir' => 'required|date',
				]);
		
				// Menghitung umur berdasarkan tanggal lahir
				$tanggalLahir = $request->input('tanggal_lahir');
				$tanggalLahirObj = Carbon::createFromFormat('Y-m-d', $tanggalLahir);
				$umur = $tanggalLahirObj->diffInYears(Carbon::now());
		
				// Insert data ke tabel pegawai2
				DB::table('pegawai2')->insert([
					'pegawai_nama' => $request->nama,
					'pegawai_jabatan' => $request->jabatan,
					'tanggal_lahir' => $request->tanggal_lahir,
					'pegawai_alamat' => $request->alamat,
					'pegawai_umur' => intval($umur),
				]);
				
		
				// Alihkan halaman ke halaman pegawai
				$umur = DB::table('pegawai2')->get();
				return redirect('/pegawai')->with('umur', $umur);
			}
		
public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$pegawai = DB::table('pegawai2')->where('pegawai_id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit',['pegawai' => $pegawai]);
 
}
public function update(Request $request)
{
	$request->validate([
		'nama' => 'required',
		'jabatan' => 'required',
		'alamat' => 'required',
		'tanggal_lahir' => 'required|date',
	]);
	$tanggalLahir = $request->input('tanggal_lahir');
	$tanggalLahirObj = Carbon::createFromFormat('Y-m-d', $tanggalLahir);
	$umur = $tanggalLahirObj->diffInYears(Carbon::now());

	// update data pegawai
	DB::table('pegawai2')->where('pegawai_id',$request->id)->update([
		'pegawai_nama' => $request->nama,
		'pegawai_jabatan' => $request->jabatan,
		'pegawai_alamat' => $request->alamat,
		'pegawai_umur' => intval($umur),
		'pegawai_alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');
}
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('pegawai2')->where('pegawai_id',$id)->delete();
	
		
	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');
}
public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('pegawai2')
		->where('pegawai_nama','like',"%".$cari."%")
		->orWhere('pegawai_jabatan', 'like', "%$cari%")
		->orWhere('pegawai_umur', 'like', "%$cari%")
		->orWhere('pegawai_alamat', 'like', "%$cari%")
		->paginate(10);
		if ($request->ajax()) {
            $data = Pegawai::where('pegawai_nama', 'like', '%' . $request->cari . '%')->get();
            return DataTables::of($data)->make(true);}
 
    		// mengirim data pegawai ke view index
		  return view('index', compact('pegawai'));
	}
 
}