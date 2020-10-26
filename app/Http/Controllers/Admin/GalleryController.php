<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Gallery;

use App\Helpers\UploadImg;
use App\Helpers\UploadFile;
use View, DB;

class GalleryController extends Controller
{
    protected $model;
    protected $view = 'admin.gallery.';
    protected $title = 'Galleries';
    protected $path = 'public/gallery/';

    public function __construct(Gallery $model)
    {
        $this->model = $model;

        View::share('title',$this->title);
        View::share('view',$this->view);
    }

    public function index()
    {
        $datas = $this->model->orderBy('order_list', 'asc')->get();

        return view($this->view.'index')->with(compact('datas'));
    }

    public function create()
    {
        return view($this->view.'create');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $input = $request->only([
                'title',
                'summary',
                'subtitle',
                'image',
                'order_list'
            ]);
            $img = $request->file('image');
            if(!is_null($img)){
                $uploadImg = new UploadImg($img);
                $uploadImg->setPath($this->path);
                $input['image'] = $uploadImg->getFileName();
            }

            $data = $this->model->create($input);
            if($data){
                if(!is_null($img)) $uploadImg->upload();

                DB::commit();

                alert()->success('Success', 'Data has been inputed');
                return redirect()->route($this->view.'index');
            }
        } catch (\Exception $e) {
            DB::rollback();

            alert()->error('Failed', $e->getMessage());
            return redirect()->back();
        }
    }
}
