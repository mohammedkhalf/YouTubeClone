<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Channel;
class ChannelController extends Controller
{
    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }



    public function show(Channel $channel)
    {
        return view('channels.show', compact('channel'));
    }



    public function edit($id)
    {
        //
    }

    public function update(Request $request,  Channel $channel)
    {
        if($request->hasFile('image')){

            $channel->clearMediaCollection('images');

            $channel->addMediaFromRequest('image')
                ->toMediaCollection('images');
        }
        return redirect()->back();
    }

    public function destroy($id)
    {
        //
    }
}
