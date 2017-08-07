<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Repositories\ServiceRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Yajra\Datatables\Datatables;
use App\Models\Service;
/**
    *----------------------------
    * CREATE: Hoàng Tuấn Nhân
    * DATE: 2016/08/03
    * CONTENT: Controller of Service
    *----------------------------
    * MODIFY:
    * DATE:
    * CONTENT
    *----------------------------
    * @param request
    * @return view get company
    *----------------------------
    */
class ServiceController extends InfyOmBaseController {

    /** @var  serviceRepository */
    private $serviceRepository;

    public function __construct(ServiceRepository $serviceRepo) {
        $this->serviceRepository = $serviceRepo;
    }

    public function get() {
        $services = Service::select(['id', 'name','content']);
        return Datatables::of($services)
                        ->addColumn('action', function($service) {
                            return view('admin.services.action')->with('service', $service);
                        })
                        ->editColumn('id', '{{$id}}')
                        ->editColumn('name', '{{$name}}')
                        ->make(true);
    }
    /**
     * Display a listing of the service.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request) {
        $this->serviceRepository->pushCriteria(new RequestCriteria($request));
        $services = $this->serviceRepository->all();

        return view('admin.services.index')
                        ->with('services', $services);
    }

    /**
     * Show the form for creating a new service.
     *
     * @return Response
     */
    public function create() {
        return view('admin.services.create');
    }

    /**
     * Store a newly created service in storage.
     *
     * @param CreateserviceRequest $request
     *
     * @return Response
     */
    public function store(CreateServiceRequest $request) {
        $input = $request->all();
        $file = $request->file('image');
        $file_name = $file->getClientOriginalName();
        $ext_file = $file->getClientOriginalExtension();
        $file_name = "service-" . time() . "." . $ext_file;
        $destination_path = 'uploads';

        $file->move($destination_path, $file_name);
        $input['image'] = $file_name;
        $service = $this->serviceRepository->create($input);
        Flash::success('service saved successfully.');
        return redirect(route('admin.services.index'));
    }

    /**
     * Display the specified service.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id) {
        $service = $this->serviceRepository->findWithoutFail($id);

        if (empty($service)) {
            Flash::error('service not found');

            return redirect(route('services.index'));
        }

        return view('admin.services.show')->with('service', $service);
    }

    /**
     * Show the form for editing the specified service.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id) {
        $service = $this->serviceRepository->findWithoutFail($id);

        if (empty($service)) {
            Flash::error('service not found');

            return redirect(route('services.index'));
        }

        return view('admin.services.edit')->with('service', $service);
    }

    /**
     * Update the specified service in storage.
     *
     * @param  int              $id
     * @param UpdateserviceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServiceRequest $request) {
        $service = $this->serviceRepository->findWithoutFail($id);

        if (empty($service)) {
            Flash::error('service not found');

            return redirect(route('services.index'));
        }
        $this->validate($request, [
            'name' => 'unique:services' . ($id ? ",name,$id" : '')
        ]);
        $inputs = $request->all();
        $file = $request->file('image');
        if ($file) {
            //Xoa file cu. Luu file moi
            @unlink('uploads/' . $service->image);
            $file_name = $file->getClientOriginalName();
            $ext_file = $file->getClientOriginalExtension();
            $file_name = "category-" . time() . "." . $ext_file;
            $destination_path = 'uploads';

            $file->move($destination_path, $file_name);
            $inputs['image'] = $file_name;
        } else {
            //Ko xoa file cu.
            $inputs['image'] = $service->image;
        }
        $service = $this->serviceRepository->update($inputs, $id);
        Flash::success('service updated successfully.');
        return redirect(route('admin.services.index'));
    }

    /**
     * Remove the specified service from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id) {
        $service = $this->serviceRepository->findWithoutFail($id);

        if (empty($service)) {
            Flash::error('service not found');

            return redirect(route('services.index'));
        }

        $this->serviceRepository->delete($id);
        if (\File::exists(public_path() . '\uploads' . '\\' . $service->image)) {
            \File::delete(public_path() . '\uploads' . '\\' . $service->image);
        }
        Flash::success('service deleted successfully.');

        return redirect(route('admin.services.index'));
    }

}
