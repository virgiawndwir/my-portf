<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\User;

use App\Helpers\UploadImg;
use App\Helpers\UploadFile;
use View, DB;

class UserController extends Controller
{
    protected $model;
    protected $view = 'admin.user.';
    protected $title = 'User';
    protected $path = 'public/user/';

    public function __construct(User $model)
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
        $datas = $this->model->orderBy('name', 'desc')->get();

        return view($this->view.'index')->with(compact('datas'));
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
                'email',
                'password'
            );
            $input['password'] = bcrypt($input['password']);
            $img = $request->file('image');
            $cv = $request->file('cv');
            if(!is_null($img)){
                $uploadImg = new UploadImg($img);
                $uploadImg->setPath($this->path);
                $input['image'] = $uploadImg->getFileName();
            }elseif(!is_null($cv)){
                $uploadCv = new UploadFile($cv);
                $uploadCv->setPath($this->path);
                $input['cv'] = $uploadCv->getFileName();
            }

            $data = $this->model->create($input);
            if($data){
                if(!is_null($img)){
                    $uploadImg->upload();
                }elseif(!is_null($cv)){
                    $uploadCv->upload();
                }

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
            $input = $request->only(
                'name',
                'email',
            );
            $img = $request->file('image');
            $cv = $request->file('cv');
            if(!is_null($img)){
                $uploadImg = new UploadImg($img);
                $uploadImg->setPath($this->path);
                $input['image'] = $uploadImg->getFileName();
            }elseif(!is_null($cv)){
                $uploadCv = new UploadFile($cv);
                $uploadCv->setPath($this->path);
                $input['cv'] = $uploadCv->getFileName();
            }

            $data = $this->model->findOrFail($id);
            if($data->update($input)){
                if(!is_null($img)){
                    $uploadImg->upload();
                }elseif(!is_null($cv)){
                    $uploadCv->upload();
                }

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
        if($id == $this->user()->id){
            alert()->error('Failed', 'The account you are using!');
            return redirect()->back();
        }

        $data = $this->model->findOrFail($id);
        if($data->delete()){
            alert()->success('Success', 'Data has been deleted!');
            return redirect()->back();
        }

        alert()->error('Failed', 'Data failed to delete!');
        return redirect()->back();
    }
}
