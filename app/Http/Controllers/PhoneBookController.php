<?php

namespace App\Http\Controllers;

use App\Models\PhoneBook;
use Illuminate\Http\Request;

class PhoneBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = PhoneBook::all();
        return view('phone_book.index',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('phone_book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PhoneBook::create($request->all());
        return redirect()->route('phone-book.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PhoneBook  $phoneBook
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = PhoneBook::find($id);
        return view('phone_book.show',compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PhoneBook  $phoneBook
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = PhoneBook::find($id);
        return view('phone_book.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PhoneBook  $phoneBook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact = PhoneBook::find( $id );
        $contact->update($request->all());
        return redirect()->route('phone-book.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PhoneBook  $phoneBook
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = PhoneBook::find($id);

        $contact->delete();
        return redirect()->route('phone-book.index');
    }
}
