<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Repositories\TeamRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TeamController extends InfyOmBaseController
{
    /** @var  TeamRepository */
    private $teamRepository;

    public function __construct(TeamRepository $teamRepo)
    {
        $this->teamRepository = $teamRepo;
    }

    /**
     * Display a listing of the Team.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view('admin.teams.index');
    }
    public function getIndex(Request $request) {
        $teams = \App\Models\Team::all();
        return \Datatables::of($teams)
                        ->addColumn('action', function($team) {
                            return view('admin.teams.actions')->with('team', $team);
                        })
                        ->editColumn('name', '{{$name}}')
                        ->editColumn('desciption', '{{$desciption}}')
                        ->make(true);
    }
    /**
     * Show the form for creating a new Team.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.teams.create');
    }

    /**
     * Store a newly created Team in storage.
     *
     * @param CreateTeamRequest $request
     *
     * @return Response
     */
    public function store(CreateTeamRequest $request)
    {
        $input = $request->all();

        $team = $this->teamRepository->create($input);

        Flash::success('Team saved successfully.');

        return redirect(route('admin.teams.index'));
    }

    /**
     * Display the specified Team.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $team = $this->teamRepository->findWithoutFail($id);

        if (empty($team)) {
            Flash::error('Team not found');

            return redirect(route('admin.teams.index'));
        }

        return view('admin.teams.show')->with('team', $team);
    }

    /**
     * Show the form for editing the specified Team.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $team = $this->teamRepository->findWithoutFail($id);

        if (empty($team)) {
            Flash::error('Team not found');

            return redirect(route('admin.teams.index'));
        }

        return view('admin.teams.edit')->with('team', $team);
    }

    /**
     * Update the specified Team in storage.
     *
     * @param  int              $id
     * @param UpdateTeamRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTeamRequest $request)
    {
        $team = $this->teamRepository->findWithoutFail($id);

        if (empty($team)) {
            Flash::error('Team not found');

            return redirect(route('admin.teams.index'));
        }

        $team = $this->teamRepository->update($request->all(), $id);

        Flash::success('Team updated successfully.');

        return redirect(route('admin.teams.index'));
    }

    /**
     * Remove the specified Team from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $team = $this->teamRepository->findWithoutFail($id);

        if (empty($team)) {
            Flash::error('Team not found');

            return redirect(route('admin.teams.index'));
        }

        $this->teamRepository->delete($id);

        Flash::success('Team deleted successfully.');

        return redirect(route('admin.teams.index'));
    }
}
