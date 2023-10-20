<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use PhpParser\Node\Stmt\TryCatch;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
        }
    public function callbackGoogle()
    {
        try {
            $google_user = Socialite::driver('google')->user();
            $user = User::where('google_id', $google_user->getId())->first();
            if (!$user) {
                $new_user = User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId()
                ]);

                Auth::login($new_user);

                return redirect()->intended('redirects');
            }
            else {
            Auth::login($user);
            

            return redirect()->intended('redirects');
        }
        } catch (\Throwable $th) {
           // Log the error for debugging
           dd('Something went wrong! '.$th->getMessage());
        
        // Redirect with a user-friendly error message
        return redirect()->back()->with('error', 'Something went wrong during authentication. Please try again later.');
    
        //  return redirect()->intended('redirects');
        //     $usertype = Auth::user()->usertype;

        //     if($usertype=='1')
        // {
        //     return view('admin.adminhome');
        // }

        // else 
        // {

        //     $user_id=Auth::id();
            
        //     $count=cart::where('user_id',$user_id)->count();

        //     return view('home', compact('data','data2','count'));
        // }
        }
//     try{
//                 $google_user = Socialite::driver('google')->user();
//                 $email =$google_user->email;

//                 $user = User::get()->where('email', $email)->first();
//                 if ($user)
//                  {
//                     try{
//                         Auth::login($user);
//                         return redirect('redirects');
                    
//                 }catch (\Throwable $th) {
//                         dd('Something went wrong! '.$th->getMessage());
//                         }
//                     }
                
//                         else{
//                             dd("none");
//                         }
//     }
//     catch (\Throwable $th) {
//         dd('Something went wrong! '.$th->getMessage());
//         }
// }
}
}




