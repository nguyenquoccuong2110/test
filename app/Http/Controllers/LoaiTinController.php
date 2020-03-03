<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TheLoai;

use App\LoaiTin;

class LoaiTinController extends Controller
{
    //
	public function getDanhSach()	
	{
		$loaitin = LoaiTin::all();
		return view('admin.loaitin.danhsach',['loaitin' =>$loaitin]);

	}

	public function getThem()	
	{
		$theloai = TheLoai::all();

		return view('admin.loaitin.them',['theloai'=>$theloai]);
	}

	public function postThem(Request $request)	
	{
		
		
	}

	public function getSua($id)	
	{
		
	}

	public function postSua(Request $request,$id)	
	{
		

	}
	
	public function getXoa($id)
	{
		$loaitin = LoaiTin::find($id);
		$loaitin ->delete();

		return redirect('admin/theloai/danhsach') ->with('thongbao','Bạn đã xóa thành công');

	}
}
