<?php

namespace Controller;

use Model\Post;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;
use Model\abonents;
use Src\Validator\Validator;
use Model\podrazdeleniya;
use Model\pomeshcheniya;



class Site
{
    public function index(Request $request): string
    {
       $posts = Post::where('id', $request->id)->get();
       return (new View())->render('site.post', ['posts' => $posts]);
    }

   public function hello(): string
   {
       return new View('site.hello', ['message' => 'hello working']);
   }
   
   public function signup(Request $request): string
    {
    if ($request->method === 'POST' && User::create($request->all())) {
        app()->route->redirect('/hello');
    }
    {
        if ($request->method === 'POST') {
     
            $validator = new Validator($request->all(), [
                'name' => ['required'],
                'login' => ['required', 'unique:users,login'],
                'password' => ['required']
            ], [
                'required' => 'Поле :field пусто',
                'unique' => 'Поле :field должно быть уникально'
            ]);
     
            if($validator->fails()){
                return new View('site.signup',
                    ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
            }
     
            if (User::create($request->all())) {
                app()->route->redirect('/login');
            }
        }
        return new View('site.signup');
     }
     
    }

    public function login(Request $request): string
    {
    //Если просто обращение к странице, то отобразить форму
    if ($request->method === 'GET') {
        return new View('site.login');
    }
    //Если удалось аутентифицировать пользователя, то редирект
    if (Auth::attempt($request->all())) {
        app()->route->redirect('/hello');
    }
    //Если аутентификация не удалась, то сообщение об ошибке
    return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
    Auth::logout();
    app()->route->redirect('/hello');
    }

    public function abonents(Request $request): string
    {
        $abonents = abonents::all();   
        return new View('site.abonents', ['abonents' => $abonents]);
    }

    public function podrazdeleniya (Request $request): string
    {
        $podrazdeleniya = podrazdeleniya::all();   
        return new View('site.podrazdeleniya', ['podrazdeleniya' => $podrazdeleniya]);
    }

    public function  pomeshcheniya (Request $request): string
    {
        $pomeshcheniya =  pomeshcheniya::all();   
        return new View('site.pomeshcheniya', [' pomeshcheniya' => $pomeshcheniya]);
    }

    
}


