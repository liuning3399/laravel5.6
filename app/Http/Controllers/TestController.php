<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Laravel\Socialite\Facades\Socialite;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use Illuminate\Validation\ValidationException;

use Closure;

use Illuminate\Auth\Access\AuthorizationException;
class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function qq(){
        return Socialite::with('qq')->redirect();
    }
    public function qqlogin(){
        $user = Socialite::driver('qq')->user();
        dd($user);
        // $userQQ =  UniUserQq::where('id',$user->getId())->first();

        // if($userQQ){

        //     $uniUser = UniUser::where('ID',$userQQ->user_id)->first();

        //     $this->guard()->login($uniUser);

        //     return redirect('/user/login');
        // }else{

        //     $userQQ = new  UniUserQq();
        //     $userQQ->id = $user->getId();
        //     $userQQ->unionid = $user->getAttributes()['unionid'];
        //     $userQQ->nickname = $user->getNickname();
        //     $userQQ->name = $user->getName();
        //     $userQQ->email = $user->getEmail();
        //     $userQQ->avatar = $user->getAvatar();
        //     $userQQ->gender = $user->getOriginal()['gender'];
        //     $userQQ->province = $user->getOriginal()['province'];
        //     $userQQ->city = $user->getOriginal()['city'];
        //     $userQQ->year = $user->getOriginal()['year'];

        //     session(['userAuth'=>$userQQ]);

        //     $this->redirectReg($user->getNickname());

        // }

    }
    public function weibo() {
        return Socialite::with('weibo')->redirect();
    }
    public function callback() {
        $user = Socialite::driver('weibo')->user();

        // $userWeibo =  User::where('id',$user->getId())->first();

        // if($userWeibo){
        //     return redirect('/');
        // }else{
        //     $userWeibo = new  User();
        //     $userWeibo->id = $user->getOriginal()['id'];
        //     $userWeibo->idstr = $user->getOriginal()['idstr'];
        //     $userWeibo->class = $user->getOriginal()['class'];
        //     $userWeibo->screen_name = $user->getOriginal()['screen_name'];
        //     $userWeibo->name = $user->getOriginal()['name'];
        //     $userWeibo->location = $user->getOriginal()['location'];
        //     $userWeibo->url = $user->getOriginal()['url'];
        //     $userWeibo->avatar = $user->getOriginal()['avatar_large'];
        //     $userWeibo->gender = $user->getOriginal()['gender'];
        //     $userWeibo->domain = $user->getOriginal()['domain'];
        //     $userWeibo->remark = $user->getOriginal()['remark'];

        //     session(['userAuth'=>$userWeibo]);

        //    return redirect('/login');

        // }
        dd($user);
        // var_dump($oauthUser->getId());
        // var_dump($oauthUser->getNickname());
        // var_dump($oauthUser->getName());
        // var_dump($oauthUser->getEmail());
        // var_dump($oauthUser->getAvatar());
    }
    
}
