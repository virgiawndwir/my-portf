<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Product;

use App\Helpers\UploadImg;
use View, DB;

class ProductController extends Controller
{
    protected $model;
    protected $view = 'admin.product.';
    protected $title = 'Product';

    public function __construct(Product $model)
    {
        $this->model = $model;

        View::share('title', $this->title);
        View::share('view', $this->view);
    }

    protected function user()
    {
        return auth()->user();
    }

    public function index()
    {
        $datas = $this->model->orderBy('id', 'asc')->get();

        return view($this->view.'index')->with(compact('datas'));
    }

    public function fetch_data(Request $request)
    {
        if($request->ajax()){
            $data = $this->model->orderBy('id', 'asc')->get();
            return json_encode($data);
        }

    }

    public function create()
    {
        return view($this->view.'create');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try{
            $input = $request->only(
                'name',
            );

            $data = $this->model->create($input);
            if($data){
                DB::commit();
                alert()->success('Success', 'Data has been inputed!');
                return redirect()->route($this->view.'index');
            }
        }catch (\Exception $e){
            DB::rollback();

            alert()->error('Failed', $e->getMessage());
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $data = $this->model->findOrFail($id);
        return view($this->view.'edit')->with(compact('data', 'id'));
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $input = $request->only(['name']);
            
            $data = $this->model->findOrFail($id);
            if($data->update($input)){

                DB::commit();

                alert()->success('Success', 'Data has been updated!');
                return redirect()->route($this->view.'index');
            }
        } catch (\Exception $e) {
            DB::rollback();

            alert()->error('Failed', $e->getMessage());
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        $data = $this->model->findOrFail($id);
        if($data->delete()){
            alert()->success('Success', 'Data has been deleted!');
            return redirect()->back();
        }

        alert()->error('Failed', 'Data failed to delete!');
        return redirect()->back();
    }
}
