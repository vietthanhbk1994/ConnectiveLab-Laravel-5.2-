<?php
    /*
    *----------------------------
    * CREATE: Ngo-Viet-Thanh
    * DATE: 03/08/2016
    * CONTENT: List, Add, Edit, Delete feedback
    *----------------------------
    */

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateFeedbackRequest;
use App\Http\Requests\UpdateFeedbackRequest;
use App\Repositories\FeedbackRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Feedback;
use Yajra\Datatables\Datatables;
use Webpatser\Uuid\Uuid;

class FeedbackController extends InfyOmBaseController {

    /** @var  FeedbackRepository */
    private $feedbackRepository;

    public function __construct(FeedbackRepository $feedbackRepo) {
        $this->feedbackRepository = $feedbackRepo;
    }

    /**
     * Display a listing of the Feedback.
     *
     * @param Request $request
     * @return Response
     */
    public function get() {
        $feedbacks = Feedback::select(['id', 'content', 'name_client', 'company']);
        $datatables = Datatables::of($feedbacks)
                ->addColumn('action', function($feedback) {
                    return view('admin.feedbacks.action')->with('feedback', $feedback);
                })
                ->editColumn('id', '{{$id}}')
                ->editColumn('content', '{{$content}}')
                ->editColumn('name_client', '{{$name_client}}')
                ->editColumn('company', '{{$company}}')
        ;
        return $datatables->make(true);
    }

    public function index(Request $request) {
        return view('admin.feedbacks.index');
    }

    /**
     * Show the form for creating a new Feedback.
     *
     * @return Response
     */
    public function create() {
        return view('admin.feedbacks.create');
    }

    /**
     * Store a newly created Feedback in storage.
     *
     * @param CreateFeedbackRequest $request
     *
     * @return Response
     */
    public function store(CreateFeedbackRequest $request) {
        $input = $request->all();

        $file = $request->file('image');

        $destination_path = 'uploads';
        $name_file = 'feedback-' . Uuid::generate(4) . '.' . $file->getClientOriginalExtension();
        $file->move($destination_path, $name_file);
        $input['image'] = $name_file;

        $feedback = $this->feedbackRepository->create($input);

        Flash::success('Feedback saved successfully.');

        return redirect(route('admin.feedbacks.index'));
    }

    /**
     * Display the specified Feedback.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id) {
        $feedback = $this->feedbackRepository->findWithoutFail($id);

        if (empty($feedback)) {
            Flash::error('Feedback not found');

            return redirect(route('admin.feedbacks.index'));
        }

        return view('admin.feedbacks.show')->with('feedback', $feedback);
    }

    /**
     * Show the form for editing the specified Feedback.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id) {
        $feedback = $this->feedbackRepository->findWithoutFail($id);

        if (empty($feedback)) {
            Flash::error('Feedback not found');

            return redirect(route('admin.feedbacks.index'));
        }

        return view('admin.feedbacks.edit')->with('feedback', $feedback);
    }

    /**
     * Update the specified Feedback in storage.
     *
     * @param  int              $id
     * @param UpdateFeedbackRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFeedbackRequest $request) {
        $feedback = $this->feedbackRepository->findWithoutFail($id);

        if (empty($feedback)) {
            Flash::error('Feedback not found');

            return redirect(route('admin.feedbacks.index'));
        }
        $inputs = $request->all();
        $file = $request->file('image');
        // Co chon file khac
        if ($file) {
            //Xoa file cu. Luu file moi
            @unlink('uploads/' . $category->image);
            $destination_path = 'uploads';
            $name_file = 'food-' . Uuid::generate(4) . '.' . $file->getClientOriginalExtension();
            $file->move($destination_path, $name_file);
            $inputs['image'] = $name_file;
        } else {
            //Ko xoa file cu.
            $inputs['image'] = $feedback->image;
        }
        $feedback = $this->feedbackRepository->update($inputs, $id);

        Flash::success('Feedback updated successfully.');

        return redirect(route('admin.feedbacks.index'));
    }

    /**
     * Remove the specified Feedback from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id) {
        $feedback = $this->feedbackRepository->findWithoutFail($id);

        if (empty($feedback)) {
            Flash::error('Feedback not found');

            return redirect(route('feedbacks.index'));
        }

        $this->feedbackRepository->delete($id);

        Flash::success('Feedback deleted successfully.');

        return redirect(route('admin.feedbacks.index'));
    }

}
