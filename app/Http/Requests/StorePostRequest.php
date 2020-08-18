<?php

namespace App\Http\Requests;

use App\Post;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'body' => 'required',
            'thumbnail' => 'required|image'
        ];
    }

    public function isValid()
    {
        if($this->hasFile('thumbnail')){

            $request = $this;

            // filename krijgen met extensie
            $filenameWithExt = $request->file('thumbnail')->getClientOriginalName();
            // alleen file naam krijgen
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // alleen extensie
            $extension = $request->file('thumbnail')->getClientOriginalExtension();
            // Filename to store
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('thumbnail')->storeAs('public/thumbnails', $filenameToStore);
        }

        $data = [
            'name' => $this->name,
            'slug' => Str::slug($this->name),
            'description' => $this->description,
            'body' => $this->body,
            'thumbnail' => $filenameToStore,
            'user_id' => Auth::user()->id
        ];

       return Post::create($data);


    }

}
