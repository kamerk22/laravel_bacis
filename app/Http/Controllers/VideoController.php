<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "<h3>INDEX</h3>";
        $videos = Video::all();
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Name</th>";
        echo "<th>Views</th>";
        echo "</tr>";

        foreach ($videos as $v) {
            echo "<tr>";
            echo "<td>$v->id</td>";
            echo "<td>$v->name</td>";
            echo "<td>$v->views</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "<h3>CREATE</h3>";
        echo '<form action="/video" method="POST">';
        echo '<input type="hidden" name="_token" value="' . csrf_token() . '" >';
        echo '<input type="text" name="name">';
        echo '<input type="number" name="views">';
        echo '<input type="submit">';
        echo '</form >';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo "<h3>STORE</h3>";
        Video::create($request->all());
        return redirect()->route('video.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        echo "<h3>SHOW</h3>";
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>Views</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>$video->name</td>";
        echo "<td>$video->views</td>";
        echo "</tr>";
        echo "</table>";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        echo "<h3>EDIT: $video->name</h3>";
        echo "<form action='/video/$video->id' method='POST'>";
        echo '<input type="hidden" name="_token" value="' . csrf_token() . '" >';
        echo '<input type="hidden" name="_method" value="PUT">';
        echo "<input type='text' name='name' value='$video->name'>";
        echo "<input type='number' name='view' value='$video->views'>";
        echo '<input type="submit">';
        echo '</form >';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $video->update($request->all());
        return redirect()->route('video.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('video.index');
    }

    public function extra()
    {
        return "Extra Function";
    }
}
