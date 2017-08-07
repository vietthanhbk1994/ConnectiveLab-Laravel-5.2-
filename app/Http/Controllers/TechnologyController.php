<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateTechnologyRequest;
use App\Http\Requests\UpdatetechnologyRequest;
use App\Repositories\TechnologyRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Yajra\Datatables\Datatables;
use App\Models\Technology;
  /*
    *----------------------------
    * CREATE: Pham Thi Duyen
    * DATE: 02/08/2016
    * CONTENT: Route Technology
    *----------------------------
    */

class TechnologyController extends InfyOmBaseController {

    /** @var  technologyRepository */
    private $technologyRepository;

    public function __construct(TechnologyRepository $technologyRepo) {
        $this->technologyRepository = $technologyRepo;
    }

    /**
     * Display a listing of the technology.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request) {
//$technologies = $this->technologyRepository->all();
//return $technologies;
        return view('admin.technologies.index');
    }

      /*
    *----------------------------
    * CREATE: Pham Thi Duyen
    * DATE: 3/6/2016
    * MODIFY: actioncolumn
              view home
    * CONTENT: Route Technology
    *----------------------------
    */
   

  
   
    public function get() {
        $technologies = Technology::select(['id', 'link', 'name']);
        return Datatables::of($technologies)
                        ->editColumn('link', function($technology) {
                            return "<a target='_blank' href='$technology->link' class='btn btn-default btn-xs'>$technology->link </a>";
                        })
                        ->addColumn('action', function($technology) {
                            return view("admin.technologies.action")->with('technology', $technology);
                        })
                        ->make(true);
    }

      /**
     * Show the form for creating a new technology.
     *
     * @return Response
     */
    public function create() {
        return view('admin.technologies.create');
    }

    /**
     * Store a newly created technology in storage.
     *
     * @param CreatetechnologyRequest $request
     *
     * @return Response
     */
    public function store(CreateTechnologyRequest $request) {
        $input = $request->all();
        $image = Input::file('image');
        // up load file
        $destinationPath = public_path() . "/uploads"; // give path of directory where you want to save your files
        $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
        $filename = 'tech-' . $timestamp . '.' . $image->getClientOriginalExtension();
        $input['image'] = $filename;
        $upload_success = $image->move($destinationPath, $filename);

        if ($upload_success) {
            $this->technologyRepository->create($input);
        }
        Flash::success('technology saved successfully.');

        return redirect(route('admin.technologies.index'));
    }

    /**
     * Display the specified technology.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id) {
        $technology = $this->technologyRepository->findWithoutFail($id);

        if (empty($technology)) {
            Flash::error('technology not found');

            return redirect(route('admin.technologies.index'));
        }

        return view('admin.technologies.show')->with('technology', $technology);
    }

    /**
     * Show the form for editing the specified technology.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id) {
        $technology = $this->technologyRepository->findWithoutFail($id);

        if (empty($technology)) {
            Flash::error('technology not found');

            return redirect(route('admin.technologies.index'));
        }

        return view('admin.technologies.edit')->with('technology', $technology);
    }

    /**
     * Update the specified technology in storage.
     *
     * @param  int              $id
     * @param UpdatetechnologyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetechnologyRequest $request) {
        $technology = $this->technologyRepository->findWithoutFail($id);

        if (empty($technology)) {
            Flash::error('technology not found');

            return redirect(route('admin.technologies.index'));
        }
        // up load file
        $input = $request->all();
        $image = Input::file('image');
        // Co chon file khac
        if ($image) {
            //Xoa file cu. Luu file moi
            $destinationPath = public_path() . "/uploads"; // give path of directory where you want to save your files
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $filename = 'tech-' . $timestamp . '.' . $image->getClientOriginalExtension();
            $input['image'] = $filename;
            $image->move($destinationPath, $filename);
            @unlink('uploads/' . $technology->image);
        } else {
            //Ko xoa file cu.
            $input['image'] = $technology->image;
        }
        $this->technologyRepository->update($input, $id);

        Flash::success('technology updated successfully.');

        return redirect(route('admin.technologies.index'));
    }

    /**
     * Remove the specified technology from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id) {
        $technology = $this->technologyRepository->findWithoutFail($id);

        if (empty($technology)) {
            Flash::error('technology not found');

            return redirect(route('admin.technologies.index'));
        }

        $this->technologyRepository->delete($id);
        @unlink('uploads/' . $technology->image);
        Flash::success('technology deleted successfully.');
        return redirect(route('admin.technologies.index'));
    }

}
