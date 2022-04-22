<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhoneBookRequest;
use App\Models\PhoneBook;

class PhoneBookController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $contacts = PhoneBook::all();
        return view( 'phone_book.index', compact( 'contacts' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view( 'phone_book.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( PhoneBookRequest $request ) {
        // $this->validate( $request, [
        //     'name'  => 'required|min:3|max:50',
        //     'phone' => 'required|numeric|digits:11',
        // ] );
        PhoneBook::create( $request->all() );
        session()->flash( 'msg', 'Contact created successfully' );
        session()->flash( 'cls', 'success' );
        return redirect()->route( 'phone-book.index' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PhoneBook  $phoneBook
     * @return \Illuminate\Http\Response
     */
    public function show( PhoneBook $phoneBook ) {
        return view( 'phone_book.show', compact( 'phoneBook' ) );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PhoneBook  $phoneBook
     * @return \Illuminate\Http\Response
     */
    public function edit( PhoneBook $phoneBook ) {
        return view( 'phone_book.edit', compact( 'phoneBook' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PhoneBook  $phoneBook
     * @return \Illuminate\Http\Response
     */
    public function update( PhoneBookRequest $request, PhoneBook $phoneBook ) {
        // $this->validate( $request, [
        //     'name'  => 'required|min:3|max:50',
        //     'phone' => 'required|numeric|digits:11',
        // ] );
        $phoneBook->update( $request->all() );
        session()->flash( 'msg', 'Contact updated successfully' );
        session()->flash( 'cls', 'info' );
        return redirect()->route( 'phone-book.index' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PhoneBook  $phoneBook
     * @return \Illuminate\Http\Response
     */
    public function destroy( PhoneBook $phoneBook ) {
        $phoneBook->delete();
        session()->flash( 'msg', 'Contact Deleted successfully' );
        session()->flash( 'cls', 'danger' );
        return redirect()->route( 'phone-book.index' );
    }
}
