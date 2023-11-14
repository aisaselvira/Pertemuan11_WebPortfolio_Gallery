<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required',
            'picture' => 'image|nullable|max:1999',
        ]);

        // Membuat folder 'posts_image' jika belum ada
        $folderPath = public_path('storage/posts_image');
        if (!File::isDirectory($folderPath)) {
            File::makeDirectory($folderPath, 0777, true, true);
        }

        $filenameSimpan = 'noimage.png';

        if ($request->hasFile('picture')) {
            $filenameWithExt = $request->file('picture')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('picture')->getClientOriginalExtension();
            $basename = uniqid() . time();
            $filenameSimpan = "{$basename}.{$extension}";

            $savepath = public_path('storage/posts_image/' . $filenameSimpan);

            $image = Image::make($request->file('picture'))
                ->fit(375, 235)
                ->save($savepath);
        }

        $post = new Post;
        $post->picture = $filenameSimpan;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->save();

        return redirect('dashboard')->with('success', 'Berhasil menambahkan data baru');
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('auth.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required',
            'picture' => 'image|nullable|max:1999',
        ]);

        $post = Post::find($id);

        if (!$post) {
            return redirect()->route('dashboard')->with('error', 'Data not found');
        }

        if ($request->hasFile('picture')) {
            $filenameWithExt = $request->file('picture')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('picture')->getClientOriginalExtension();
            $basename = uniqid() . time();
            $filenameSimpan = "{$basename}.{$extension}";

            try {
                
                $savepath = public_path('storage/posts_image/' . $filenameSimpan);
                // Simpan gambar baru
                $image = Image::make($request->file('picture'))
                    ->fit(375, 235)
                    ->save($savepath);
                

                Storage::put("posts_image/{$filenameSimpan}", $image->stream());

                // Hapus gambar lama jika perlu
                if ($post->picture !== 'noimage.png') {
                    // Path penghapusan sesuai dengan path store
                    Storage::delete("posts_image/{$post->picture}");
                }

                // Perbarui nama gambar dalam database
                $post->picture = $filenameSimpan;
            } catch (\Exception $e) {
                return redirect()->back()->withInput()->withErrors(['picture' => 'Gagal menyimpan gambar. Pastikan gambar valid.']);
            }
        }

        // Update data post
        $post->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'picture' => $filenameSimpan,
        ]);

        return redirect('dashboard')->with('success', 'Berhasil memperbarui data');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);

        if ($post->picture !== 'noimage.png') {
            $imagePath = public_path('storage/posts_image/' . $post->picture);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }
        $post->delete();

        return redirect('dashboard')->with('success', 'Berhasil menghapus data');
    }

}
