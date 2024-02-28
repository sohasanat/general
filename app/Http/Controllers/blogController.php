<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog_model;
use App\Models\User;

class blogController extends Controller
{




    public function singleblog($id)
    {
        $id = session('id');
        $username = User::find($id);
        $blogvar = blog_model::all();
        $blog = blog_model::find($id);
        if ($blog) {
            return view('single-page', compact('blog', 'blogvar', 'username'));
        }
    }

    public function blogallmain()
    {
        $id = session('id');
        $username = User::find($id);
        $blogvarall = blog_model::all();
        return view('blog', compact('blogvarall', 'username'));
    }
    public function bloglist()
    {
        $id = session('id');
        $username = User::find($id);
        $blogvar = blog_model::all();
        return view('blogList', compact('blogvar', 'username'));
    }
    public function editblog($id)
    {
        $id = session('id');
        $username = User::find($id);
        $blogidvar = blog_model::find($id);
        if ($blogidvar) {
            return view('editBlog', compact('blogidvar', 'username'));
        }
    }

    public function editsave(Request $request, $id)
    {
        $edit = blog_model::find($id);
        $edit->name = $request->name;
        $edit->title = $request->title;
        $edit->photo = $request->photo;
        $edit->Description = $request->Description;
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('assets/images/blogimages'), $filename);
            $edit['photo'] = $filename;
        }
        $edit->push();
        session()->flash('message', 'تغییرات وبلاگ شما با موفقیت ثبت شد');
        return redirect()->back();
    }
    public function blogsave(Request $request)
    {
        $saveblog = new blog_model;
        $saveblog->name = $request->name;
        $saveblog->title = $request->title;
        $saveblog->photo = $request->photo;
        $saveblog->Description = $request->Description;
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('assets/images/blogimages'), $filename);
            $saveblog['photo'] = $filename;
        }
        $saveblog->save();
        session()->flash('message', ' وبلاگ شما با موفقیت ثبت شد');
        return redirect()->back();
    }

    public function blogcreate()
    {
        $id = session('id');
        $username = User::find($id);
        return view('createBlog', compact('username'));
    }


    public function blogdelete($id)
    {

        $deleteblog = blog_model::find($id);
        $deleteblog->delete();
        session()->flash('message', 'وبلاگ شما با موفقیت حذف شد');
        return redirect()->back();
    }
}
