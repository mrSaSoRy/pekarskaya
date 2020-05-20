<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Repositories\PageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;
use Illuminate\Support\Str;

class PageController extends AppBaseController
{
    /** @var  PageRepository */
    private $pageRepository;

    public function __construct(PageRepository $pageRepo)
    {
        $this->pageRepository = $pageRepo;
    }

    /**
     * Display a listing of the Page.
     *
     * @param Request $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(Request $request)
    {
        $pages = $this->pageRepository->paginate(15);

        return view('pages.index')
            ->with('pages', $pages);
    }

    /**
     * Show the form for creating a new Page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|Response
     */
    public function create()
    {
        $category = \App\Models\Category::all('id','title')->pluck('title', 'id');
        return view('pages.create',['category'=>$category]);
    }

    /**
     * Store a newly created Page in storage.
     *
     * @param CreatePageRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function store(CreatePageRequest $request)
    {
        $input = $request->all();
        $input['slug'] = Str::slug($input['title']);

        $page = $this->pageRepository->create($input);

        Flash::success('Page saved successfully.');

        return redirect(route('pages.index'));
    }

    /**
     * Display the specified Page.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function show($id)
    {
        $page = $this->pageRepository->find($id);

        if (empty($page)) {
            Flash::error('Page not found');

            return redirect(route('pages.index'));
        }

        return view('pages.show')->with('page', $page);
    }

    /**
     * Show the form for editing the specified Page.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function edit($id)
    {
        $page = $this->pageRepository->find($id);
        $category = \App\Models\Category::all('id','title')->pluck('title', 'id');
        if (empty($page)) {
            Flash::error('Page not found');

            return redirect(route('pages.index'));
        }

        return view('pages.edit',['category'=>$category])->with('page', $page);
    }

    /**
     * Update the specified Page in storage.
     *
     * @param int $id
     * @param UpdatePageRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function update($id, UpdatePageRequest $request)
    {
        $page = $this->pageRepository->find($id);


        if (empty($page)) {
            Flash::error('Page not found');

            return redirect(route('pages.index'));
        }
        $input = $request->all();
        $input['slug'] = Str::slug($input['title']);

        $page = $this->pageRepository->update($input, $id);

        Flash::success('Page updated successfully.');

        return redirect(route('pages.index'));
    }

    /**
     * Remove the specified Page from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function destroy($id)
    {
        $page = $this->pageRepository->find($id);

        if (empty($page)) {
            Flash::error('Page not found');

            return redirect(route('pages.index'));
        }

        $this->pageRepository->delete($id);

        Flash::success('Page deleted successfully.');

        return redirect(route('pages.index'));
    }
}
