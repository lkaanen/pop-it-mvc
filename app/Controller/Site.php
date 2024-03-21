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
use Model\telefoni;

class Site
{
    public function index(Request $request): string
    {
       $posts = Post::where('id', $request->id)->get();
       return (new View())->render('site.post', ['posts' => $posts]);
    }

    public function hello(): string
    {
       return (new View())->render('site.hello', ['message' => 'hello working']);
    }

    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/hello');
        }

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
                return (new View())->render('site.signup', ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
            }

            if (User::create($request->all())) {
                app()->route->redirect('/login');
            }
        }

        return (new View())->render('site.signup');
    }

    public function login(Request $request): string
    {
        if ($request->method === 'GET') {
            return (new View())->render('site.login');
        }

        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }

        return (new View())->render('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }

    public function abonents(Request $request): string
    {
        $abonents = abonents::all();
        return (new View())->render('site.abonents', ['abonents' => $abonents]);
    }

    public function podrazdeleniya(Request $request): string
    {
        $podrazdeleniya = podrazdeleniya::all();
        return (new View())->render('site.podrazdeleniya', ['podrazdeleniya' => $podrazdeleniya]);
    }

    public function telefoni(): string
    {
        $telefoni = telefoni::all();
        return (new View())->render('site.telefoni', ['telefoni' => $telefoni]);
    }

    public function pomeshcheniya(): string
    {
        $pomeshcheniya = pomeshcheniya::all();
        return (new View())->render('site.pomeshcheniya', ['pomeshcheniya' => $pomeshcheniya]);
    }
}