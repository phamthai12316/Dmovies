<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;
class newsletterController extends Controller
{
  public function store(Request $request)
{
 if ( ! Newsletter::isSubscribed($request->user_email) ) {
     Newsletter::subscribe($request->user_email);
      return redirect('/')->with('status', 'Thanku for Subcription..!');

 }

return redirect('/')->with('status', 'you are already subscribed..');

}
}
