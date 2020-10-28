<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Http\Requests;

class BrandController extends Controller
{

    protected $brands;

    public function __construct(Brand $brands)
    {
        $this->brands = $brands;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = $this->brands->paginate();

        return view('admin.pages.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequest $request)
    {
        $brands = $this->brands->create($request->all());

        if(!$brands){
            return redirect()->back()->with('warning', 'Erro no cadastro');
        }

        return redirect()->route('brand.index')->with('success', 'Marca cadastrada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        
        if(!$brand = $this->brands->find($id)){
            return redirect()->back()
                            ->with('error', 'Houve um erro na consulta');
        }


        return view('admin.pages.brands.edit', compact('brand'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!$brand = $this->brands->find($id)){
            return redirect()->back()
                            ->with('error', 'Houve um erro na consulta');
        }

        $brand->update($request->all());

        return redirect()->route('brand.index')->with('success', 'Marca alterada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$brand = $this->brands->find($id)){
            return redirect()->back()
                            ->with('error', 'Houve um erro na consulta');
        }

        $brand->delete();

        return redirect()->route('brand.index')->with('warning', 'Marca deletada com sucesso');
    }
}
