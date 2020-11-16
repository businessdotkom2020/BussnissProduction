<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AppSetting;
use App\Models\Translation;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:option-edit', ['only' => ['edit','update']]);
    }
    public function edit()
    {
        $option = AppSetting::find(1);
        if(isset($option)){
            return view('backend.options.edit' , compact('option'));
        }else{
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }
    public function update(Request $request)
    {
        try {
            $option = AppSetting::find(1);
            $option->facebook = $request->face;
            $option->linked_in = $request->linkedin;
            $option->instagram = $request->insta;
            $option->whatsapp = $request->whats;
            $option->youtube = $request->youtube;
            $option->privacy_policy = $request->privacy_en;
            $option->terms_conditions = $request->terms_en;
            $option->about_us = $request->about_en;
            $option->save();
            if($request->privacy_ar){
                $translation_name = Translation::where('table_name' , 'app_settings')->where('column_name' , 'privacy_policy')->
                where('foreign_key' , 1)->first();
                $translation_name->value = $request->privacy_ar;
                $translation_name->save();
            }
            if($request->terms_ar){
                $translation_name = Translation::where('table_name' , 'app_settings')->where('column_name' , 'terms_conditions')->
                where('foreign_key' , 1)->first();
                $translation_name->value = $request->terms_ar;
                $translation_name->save();
            }
            if($request->about_ar){
                $translation_name = Translation::where('table_name' , 'app_settings')->where('column_name' , 'about_us')->
                where('foreign_key' , 1)->first();
                $translation_name->value = $request->about_ar;
                $translation_name->save();
            }
            return redirect()->back()->with('done', 'Edited Successfully ....');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }
}
