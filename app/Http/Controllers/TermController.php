<?php

namespace App\Http\Controllers;

use App\Http\Requests\TermRequest;
use App\Models\Term;
use Illuminate\Http\Request;

class TermController extends Controller
{
    private $term;

    public function __construct(Term $term)
    {
        $this->term = $term;
    }

    public function index()
    {
        $terms = $this->term->paginate(10);

        return response($terms, 200);
    }

    public function store(TermRequest $request)
    {
        $data = $request->all();

        $term = $this->term->create($data);

        return response($term, 201);
    }

    public function show($id)
    {
        $term = $this->term->findOrFail($id);

        return response($term, 200);
    }

    public function update(TermRequest $request, $id)
    {
        $data = $request->all();

        $term = $this->term->findOrFail($id);
        $term->fill($data);
        $term->save();

        return response($term, 200);
    }

    public function destroy($id)
    {
        $term = $this->term->findOrFail($id);
        $term->delete();

        return response([], 204);
    }
}
