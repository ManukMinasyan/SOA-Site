<?php

namespace App\Http\Controllers;

use App\Services\JsonRpcClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SiteController extends Controller
{
    /**
     * Protected $client
     */
    protected $client;

    /**
     * Input JsonRpcClient
     */
    public function __construct(JsonRpcClient $client)
    {
        $this->client = $client;
    }

    /**
     * General Index
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Data Show By Page Uuid
     */
    public function show($page_uuid)
    {
        $data = $this->client->send('Data@find', ['page_uuid' => $page_uuid]);

        return view('show', ['data' => $data['result']]);
    }

    /**
     * Data Store & Checking Existing Data
     */
    public function store(Request $request)
    {
        $data = $this->client->send('Data@store', $request->all());

        if (isset($data['error'])) {
            return Redirect::back()->withErrors($data['error']['data']);
        }

        return redirect()->route('data.show', $data['result']['page_uuid']);
    }
}