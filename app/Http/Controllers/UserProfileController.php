<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserProfileStoreValidation;
use App\Http\Requests\UserProfileUpdateValidation;
use App\Http\Resources\UserProfileDeleteResource;
use App\Http\Resources\UserProfileShowResource;
use App\Http\Resources\UserProfileStoreResource;
use App\Http\Resources\UserProfileUpdateResourser;
use App\Models\UserProfile;
use Couchbase\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserProfileController extends Controller
{
    public function index(UserProfile $userprofile)
    {
        $user = UserProfile::all();
        return response()->json([
            'message'=>"Show index has been successfully",
            'data'=>$user
        ]);
    }

        public function createtoken(UserProfile $userprofile)
        {
            $usertoken = $userprofile->createToken('User | Api');
            return response()->json([
                'message'=>'توکن کاربر با موفقیت صادر شد',
                'token'=>$usertoken->plainTextToken,
                'user'=>$userprofile
            ],200);
        }
    public function store(UserProfileStoreValidation $userprofilestorevalidation)
    {
        $UserProfile = UserProfile::create($userprofilestorevalidation -> except('image_url'));
        $image_url = Storage::putFile('/userprofile',$userprofilestorevalidation->image_url);
        $UserProfile->update(['image_url'=>$image_url]);
        return response()->json([
           'message'=>'create has been successfully',
            'data' => new UserProfileStoreResource($UserProfile)
        ]);
    }

    public function show(UserProfile $userprofile)
    {
            return response() -> json([
               'message' => 'userprofile has been fetch successfully',
                'data' => new UserProfileStoreResource($userprofile)
            ]);
    }

    public function update(UserProfile $userprofile, UserProfileUpdateValidation $userprofileupdatevalidation)
    {
       $userprofile -> update($userprofileupdatevalidation->all());
       $userprofile = UserProfile::find($userprofile->id);
       return response()->json([
          'message'=>'update has been successfully',
           'data'=> new UserProfileUpdateResourser($userprofile)
       ]);
    }

    public function delete(UserProfile $userprofile)
    {
        $userprofile -> delete();
        return response()->json([
           'message'=>'delete has been successfully',
           'data'=> new UserProfileDeleteResource($userprofile)
        ]);
    }
}
