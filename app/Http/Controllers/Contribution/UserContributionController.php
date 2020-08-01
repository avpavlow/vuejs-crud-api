<?php

namespace App\Http\Controllers\Demo;

use App\Models\Contribution\UserContribution;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserContributionController extends Controller
{

    private $m = UserContribution::class;
    private $pk = 'id';

    public function index()
    {
        return UserContribution::all();
    }
    public function store(Request $request)
    {
        return $this->rStore($this->m, $request, $this->pk);
    }
    public function show($id)
    {
        return UserContribution::where('id', $id)->first();
    }
    public function update(Request $request, $id)
    {
        $model = UserContribution::where('id', $id)->first();
        return $this->rUpdate($this->m, $model, $request->all(), $this->pk);
    }
    public function destroy($id)
    {
        $model = UserContribution::where('id', $id)->first();
        return $this->rDestroy($model);
    }
    public function multipleUpdate(Request $request)
    {
        return $this->rMultipleUpdate($this->m, $request, $this->pk);
    }
    public function multipleDelete(Request $request)
    {
        return $this->rMultipleDelete($this->m, $request, $this->pk);
    }
}
