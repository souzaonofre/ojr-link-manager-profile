<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinkListRequest;
use App\Http\Requests\UpdateLinkListRequest;
use App\Models\LinkList;

class LinkListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLinkListRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(LinkList $linkList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLinkListRequest $request, LinkList $linkList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LinkList $linkList)
    {
        //
    }
}
