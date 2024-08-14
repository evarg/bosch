<?php

namespace App\Http\Controllers;

use App\Enums\EventsUploadStatus;
use App\Models\EventsUpload;
use App\Http\Requests\StoreEventsUploadRequest;
use App\Http\Requests\UpdateEventsUploadRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class EventsUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventsUpload = EventsUpload::get();

        // var_dump($cns); die();
        return view('events_upload.index', compact('eventsUpload'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events_upload.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventsUploadRequest $request): RedirectResponse
    {
        $file = $request->file('ufile');
        $path = $file->store('history_bosch_fpa5000');

        $eventsUpload = new EventsUpload($request->validated());
        $eventsUpload->org_file_name = $file->getClientOriginalName();
        $eventsUpload->hash_file_name = $path;
        $eventsUpload->status = EventsUploadStatus::UPLOADED;
        $eventsUpload->size = Storage::size($path);
        $eventsUpload->mime_type =  Storage::mimeType($path);
        $eventsUpload->save();

        return to_route('events_upload.show', ['events_upload' => $eventsUpload->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(EventsUpload $eventsUpload)
    {
        return view('events_upload.show', compact('eventsUpload'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EventsUpload $eventsUpload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventsUploadRequest $request, EventsUpload $eventsUpload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EventsUpload $eventsUpload)
    {
        //
    }
}
