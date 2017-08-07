<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use Yajra\Datatables\Datatables;
use App\Repositories\MemberRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MemberController extends InfyOmBaseController {

    /** @var  MemberRepository */
    private $memberRepository;

    public function __construct(MemberRepository $memberRepo) {
        $this->memberRepository = $memberRepo;
    }

    /**
     * Display a listing of the Member.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request) {
        $teams = \App\Models\Team::all(['id', 'name']);
        $array[''] = '';
        foreach ($teams as $team) {
            $array[$team->id] = $team->name;
        }
        return view('admin.members.index')
                        ->with('teams', $array);
    }

    public function getIndex(Request $request) {
        $members = \App\Models\Member::all();
        return Datatables::of($members)
                        ->addColumn('action', function($member) {
                            return view('admin.members.actions')->with('member', $member);
                        })
                        ->editColumn('name', '{{$name}}')
                        ->editColumn('position', '{{$position}}')
                        ->editColumn('team_id', function ($member) {
                            return $member->team->name;
                        })
                        ->make(true);
    }

    /**
     * Show the form for creating a new Member.
     *
     * @return Response
     */
    public function create() {
        $teams = \App\Models\Team::all(['id', 'name']);
        foreach ($teams as $team) {
            $array[$team->id] = $team->name;
        }
        return view('admin.members.create')->with('teams', $array);
    }

    /**
     * Store a newly created Member in storage.
     *
     * @param CreateMemberRequest $request
     *
     * @return Response
     */
    public function store(CreateMemberRequest $request) {
        $input = $request->all();
        $file = $request->file('image');
        $file_name = $file->getClientOriginalName();
        $ext_name = $file->getClientOriginalExtension();
        $file_name = "Mem-" . time() . "." . $ext_name;
        $input['image'] = $file_name;
        $member = $this->memberRepository->create($input);
        $destinationPath = 'uploads';
        $file->move($destinationPath, $file_name);


        Flash::success('Member saved successfully.');

        return redirect(route('admin.members.index'));
    }

    /**
     * Display the specified Member.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id) {
        $member = $this->memberRepository->findWithoutFail($id);

        if (empty($member)) {
            Flash::error('Member not found');

            return redirect(route('admin.members.index'));
        }

        return view('admin.members.show')->with('member', $member);
    }

    /**
     * Show the form for editing the specified Member.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id) {
        $teams = \App\Models\Team::all(['id', 'name']);
        foreach ($teams as $team) {
            $array[$team->id] = $team->name;
        }
        $member = $this->memberRepository->findWithoutFail($id);

        if (empty($member)) {
            Flash::error('Member not found');

            return redirect(route('admin.members.index'));
        }

        return view('admin.members.edit')->with('member', $member)
                        ->with('teams', $array);
    }

    /**
     * Update the specified Member in storage.
     *
     * @param  int              $id
     * @param UpdateMemberRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMemberRequest $request) {
        $input = $request->all();
        $member = $this->memberRepository->findWithoutFail($id);
        $input['image'] = $member->image;
        if (empty($member)) {
            Flash::error('Member not found');

            return redirect(route('admin.members.index'));
        }
        $file = $request->file('image');
        if ($file != null) {
            $file_name = $file->getClientOriginalName();
            $ext_name = $file->getClientOriginalExtension();
            $file_name = "Mem-" . time() . "." . $ext_name;
            $input['image'] = $file_name;
            $destinationPath = 'uploads';
            $file->move($destinationPath, $file_name);
            @(\File::delete(public_path() . '\uploads' . '\\' . $member->image));
        }
        $member = $this->memberRepository->update($input, $id);

        Flash::success('Member updated successfully.');

        return redirect(route('admin.members.index'));
    }

    /**
     * Remove the specified Member from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id) {
        $member = $this->memberRepository->findWithoutFail($id);

        if (empty($member)) {
            Flash::error('Member not found');

            return redirect(route('admin.members.index'));
        }

        $this->memberRepository->delete($id);
        @(\File::delete(public_path() . '\uploads' . '\\' . $member->image));
        Flash::success('Member deleted successfully.');

        return redirect(route('admin.members.index'));
    }

}
