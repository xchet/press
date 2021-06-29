<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function uploadImage(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|max:5000'
        ]);
        $type = $request->input('type', null);
        if ($request->expectsJson() || ($type != null && $type == 'xrt')) {
            $result = $this->imageRepository->uploadImageForBlog($request, false);
            return response()->json($result, array_key_exists('error', $result) ? 500 : 200);
        } else {
            if ($this->imageRepository->uploadImageForBlog($request, true))
                return back()->with('success', __('web.UPLOAD_SUCCESS'));
            return back()->withErrors(__('web.UPLOAD_FAIL'));
        }
    }
}
