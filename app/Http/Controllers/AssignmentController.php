<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    // Question 1: Get Input value from form
    public function submitForm(Request $request)
    {
        $name = $request->name;
        return $name;
    }

    // get name from body request
    public function submitForm2(Request $request)
    {
$name = $request->input(key:'name');

        return $name;
    }

    // Question 2: Get User Agent from header
    public function userAgent(Request $request)
    {
        $userAgent = $request->header('User-Agent');
        return $userAgent;
    }

    // Question 3: Get Query String from URL
    public function getQuery(Request $request)
    {
        // http://127.0.0.1:8000/query/about?page=about
        $page = $request->query('page', null);
        return $page;
    }

    // Question 4: Get JSON response
    public function jsonResponse(Request $request)
    {
        $data = [
            'name' => 'John Doe',
            'age' => 25,
        ];

        $response = [
            'message' => 'Success',
            'data' => $data,
        ];

        return new JsonResponse($response);
    }

    // Question 5: Upload file
    public function uploadAvatar(Request $request)
    {
        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
            $file = $request->file('avatar');
            $filename = $file->getClientOriginalName();
            $file->storeAs('uploads', $filename, 'public');
        }
return 'Upload Successful';

    }

    // Question 6: Get Cookie
    public function getCookie(Request $request): string
    {
        $rememberToken = $request->cookie('remember_token', null);
        return $rememberToken;
    }

    // Question 7: This solution is in routes\web.php and routes\api.php  with post request
}
