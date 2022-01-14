<?php

namespace App\Http\Controllers\Xref;

use App\Http\Requests\CreateArticleTypeRequest;
use App\Http\Requests\UpdateArticleTypeRequest;
use App\Repositories\ArticleTypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ArticleTypeController extends AppBaseController
{
    /** @var  ArticleTypeRepository */
    private $articleTypeRepository;

    public function __construct(ArticleTypeRepository $articleTypeRepo)
    {
        $this->articleTypeRepository = $articleTypeRepo;
    }

    /**
     * Display a listing of the ArticleTypes.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $articleTypes = $this->articleTypeRepository->all();

        return view('article_types.index')
            ->with('articleTypes', $articleTypes);
    }

    /**
     * Show the form for creating a new ArticleTypes.
     *
     * @return Response
     */
    public function create()
    {
        return view('article_types.create');
    }

    /**
     * Store a newly created ArticleTypes in storage.
     *
     * @param CreateArticleTypesRequest $request
     *
     * @return Response
     */
    public function store(CreateArticleTypesRequest $request)
    {
        $input = $request->all();

        $articleTypes = $this->articleTypeRepository->create($input);

        Flash::success('Article Types saved successfully.');

        return redirect(route('articleTypes.index'));
    }

    /**
     * Display the specified ArticleTypes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $articleTypes = $this->articleTypeRepository->find($id);

        if (empty($articleTypes)) {
            Flash::error('Article Types not found');

            return redirect(route('articleTypes.index'));
        }

        return view('article_types.show')->with('articleTypes', $articleTypes);
    }

    /**
     * Show the form for editing the specified ArticleTypes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $articleTypes = $this->articleTypeRepository->find($id);

        if (empty($articleTypes)) {
            Flash::error('Article Types not found');

            return redirect(route('articleTypes.index'));
        }

        return view('article_types.edit')->with('articleTypes', $articleTypes);
    }

    /**
     * Update the specified ArticleTypes in storage.
     *
     * @param int $id
     * @param UpdateArticleTypesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArticleTypesRequest $request)
    {
        $articleTypes = $this->articleTypeRepository->find($id);

        if (empty($articleTypes)) {
            Flash::error('Article Types not found');

            return redirect(route('articleTypes.index'));
        }

        $articleTypes = $this->articleTypeRepository->update($request->all(), $id);

        Flash::success('Article Types updated successfully.');

        return redirect(route('articleTypes.index'));
    }

    /**
     * Remove the specified ArticleTypes from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $articleTypes = $this->articleTypeRepository->find($id);

        if (empty($articleTypes)) {
            Flash::error('Article Types not found');

            return redirect(route('articleTypes.index'));
        }

        $this->articleTypeRepository->delete($id);

        Flash::success('Article Types deleted successfully.');

        return redirect(route('articleTypes.index'));
    }
}
