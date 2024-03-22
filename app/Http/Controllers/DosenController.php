<?php

namespace App\Http\Controllers;

use App\Enums\GenderType;
use App\Http\Requests\UpdateDosenRequest;
use App\Models\Dosen;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DosenController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(Request $request)
  {
    $dsn = Dosen::all();
    if ($request->ajax()) {
      return DataTables::of($dsn)
        ->addIndexColumn()
        ->addColumn('action', function ($row) {
          $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Show" class="show btn btn-info btn-sm showStory"><i class="fas fa-eye fa-xs"></i></a>';
          $btn .= ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editStory"><i class="far fa-edit fa-xs"></i></a>';
          $btn .= ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteStory"><i class="fas fa-trash fa-xs"></i></a>';
          return $btn;
        })
        ->rawColumns(['action'])
        ->make(true);
    }
    return view('dosen.index', compact('dsn'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
//    $data = $request->validate([
//      'image' => 'required|file|jpg,png,jpeg|max:1000',
//      'nip' => 'required|unique',
//      'name' => 'required',
//      'email' => 'required|email',
//      'no_tlp' =>'required',
//      'alamat' =>'required',
//      'gender' =>'required', 'enum:' . GenderType::class,
//    ]);
//
//    Dosen::updateOrCreate(
//      ['id' => $request->id], [$data]
//    );
//    return response()->json(['success' => 'Data berhasil disimpan.'], 200);
  }

  /**
   * Display the specified resource.
   */
  public function show(Dosen $dosen)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Dosen $dosen)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateDosenRequest $request, Dosen $dosen)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Dosen $dosen)
  {
    //
  }
}
