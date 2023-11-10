<?php

namespace Modules\DomainSetting\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\DomainSetting\Http\Controllers\Actions\SearchDomainQueryAction;
use Modules\DomainSetting\Http\Controllers\Actions\CreateDomainAction;
use Modules\DomainSetting\Http\Controllers\Actions\UpdateDomainAction;
use Modules\DomainSetting\Http\Controllers\Actions\DeleteDomainAction;
use Modules\DomainSetting\Http\Controllers\Actions\ApplydomainsAction;
use Modules\DomainSetting\Http\Requests\CreatedomainsRequest;
use Modules\DomainSetting\Http\Requests\UpdatedomainsRequest;
use Modules\DomainSetting\Http\Requests\DeletedomainsRequest;
use Modules\DomainSetting\Http\Requests\ApplydomainsRequest;
use Modules\DomainSetting\Domain;
use App\Http\Helpers\ServiceResponse;
use Auth, Lang;
use Yajra\Datatables\Datatables;
use App\Language;

class DomainController extends Controller
{
    /**
     * Store domains
     *
     * @param  [integer] number_of_available_vacancies
     * @param  [array] translations 
     * @return [json] ServiceResponse object
     */
    public function store(Request $request, CreateDomainAction $action)
    {
        // Create the domains
        $domains = $action->execute($request->except([]));

        // Return the response
        $resp = new ServiceResponse;
        $resp->message = 'domains created successfully';
        $resp->status = true;
        $resp->data = ['redirect_to' => route('domains.index'), 'domains' => $domains];
        return response()->json($resp, 200);
    }

    /**
     * Update domains
     *
     * @param  [integer] id
     * @param  [integer] number_of_available_vacancies
     * @param  [array] translations 
     * @return [json] ServiceResponse object
     */
    public function update(UpdatedomainsRequest $request, UpdateDomainAction $action)
    {
        // Update the domains
        $domains = $action->execute($request->input('id'), $request->except(['id']));

        // Return the response
        $resp = new ServiceResponse;
        $resp->message = 'domains updated successfully';
        $resp->status = true;
        $resp->data = ['redirect_to' => route('domains.index'), 'domains' => $domains];
        return response()->json($resp, 200);
    }

    /**
     * Delete domains
     *
     * @param  [integer] id
     * @return [json] ServiceResponse object
     */
    public function delete(DeletedomainsRequest $request, DeleteDomainAction $action)
    {
        // Delete the domains
        $action->execute($request->input('id'));

        // Return the response
        $resp = new ServiceResponse;
        $resp->message = 'domains deleted successfully';
        $resp->status = true;
        $resp->data = null;
        return response()->json($resp, 200);
    }

    /**
     * Index domains
     * @return Response
     */
    public function index(Request $request)
    {
        // Auth user
        $auth_user = Auth::user();

        if ($request->isMethod('POST')) {
            // Search the domains
            $action = new SearchDomainQueryAction;
            $domains = $action->execute($auth_user, $request);

            return Datatables::of($domains)
                ->addColumn('value', function ($domains) {
                    return $domains->value;
                })
                ->filterColumn('value', function($query, $keyword) {
                    $query->whereHas('translations', function($translation) use ($keyword) {
                        $translation->where('title', 'like', '%'.$keyword.'%');
                    });
                })
                ->addColumn('created_at', function ($domains) {
                    return $domains->created_at ? $domains->created_at->toDateTimeString() : null;
                })
                ->addColumn('last_updated_at', function ($domains) {
                    return $domains->updated_at ? $domains->updated_at->toDateTimeString() : null;
                })
                ->orderColumn('created_at', function ($query, $order) {
                    return  $query->orderBy('created_at', $order);
                })
                ->orderColumn('last_updated_at', function ($query, $order) {
                    return  $query->orderBy('updated_at', $order);
                })
                ->make(true);
        } else {
            $blade_name = ($request->ajax() ? 'index-partial' : 'index'); // Handle Partial Return
            return view('domainsetting::domains.' . $blade_name);
        }
    }

    /**
     * Create domains
     * @return Response
     */
    public function create(Request $request)
    {
        // Auth user
        $auth_user = Auth::user();

        // Get the languages
        $languages = Language::all();

        $blade_name = ($request->ajax() ? 'create-partial' : 'create'); // Handle Partial Return

        return view('domainsetting::domains.' . $blade_name, compact('languages'), []);
    }

    public function createdomainsModal(Request $request)
    {
        // Auth user
        $auth_user = Auth::user();

        // Get the languages
        $languages = Language::all();

        return view('domainsetting::domains.create', compact('languages'), [])->render();
    }

    public function UpdatedomainsModal(Request $request, $id = null)
    {
        // Auth user
        $auth_user = Auth::user();

        $domains = Domain::find($id);

        // If domains does not exist, return error div
        if (!$domains) {
            $error = Lang::get('Domain::domains.domain_not_found_or_you_are_not_authorized_to_edit_the_domains');
            return view('dashboard.components.error', compact('error'))->render();
        }

        // Get the languages
        $languages = Language::all();

        return view('domainsetting::domains.modals.update', compact('domains', 'languages'), [])->render();
    }

}
