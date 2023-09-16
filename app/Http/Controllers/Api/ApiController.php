<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\D_Project;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Word;
use App\Models\Contact;

class ApiController extends Controller
{
    public function posts(Request $request)
    {
        try {
            $about = Post::all();
            return response()->json([
                'ok'=>true,
                'lang'=>$about,
            ]);
        }
        catch (\Exception $e){
            return  response()->json([
                'ok'=>false,
                'mag'=>$e->getMessage(),
            ]);
        }
    }
    public function projects(Request $request)
    {
        try {
            $about = Project::all();
            return response()->json([
                'ok'=>true,
                'lang'=>$about,
            ]);
        }
        catch (\Exception $e){
            return  response()->json([
                'ok'=>false,
                'mag'=>$e->getMessage(),
            ]);
        }
    }
    public function d_projects(Request $request)
    {
        try {
            $about = D_Project::all();
            return response()->json([
                'ok' => true,
                'lang' => $about,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'mag' => $e->getMessage(),
            ]);
        }}
        public function uz(Request $request)
        {
            try {
                $about = Word::select('key', 'name_uz')->get();
                return response()->json([
                    'ok' => true,
                    'lang' => $about,
                ]);
            } catch (\Exception $e) {
                return response()->json([
                    'ok' => false,
                    'mag' => $e->getMessage(),
                ]);
            }
        }

        public function ru(Request $request)
        {
            try {
                $about = Logo::select('key', 'name_ru')->get();
                return response()->json([
                    'ok' => true,
                    'lang' => $about,
                ]);
            } catch (\Exception $e) {
                return response()->json([
                    'ok' => false,
                    'mag' => $e->getMessage(),
                ]);
            }
        }

        public function en(Request $request)
        {
            try {
                $about = Word::select('key', 'name_en')->get();
                return response()->json([
                    'ok' => true,
                    'lang' => $about,
                ]);
            } catch (\Exception $e) {
                return response()->json([
                    'ok' => false,
                    'mag' => $e->getMessage(),
                ]);
            }
        }
    public function contacts(Request $request) {
        $request->validate([
            'name'=>'required|max:50',
            'phone'=>'required|min:2|max:15',
        ]);
        $connect = NEW Contact();
        $connect->name = $request->name;
        $connect->phone = $request->phone;
        $connect->save();
        return response()->json([
            'massage' => 'Send Contact User:',
            'User:'=> $connect->name,
            'Phone:'=> $connect->phone,
        ],200);
    }
    }
