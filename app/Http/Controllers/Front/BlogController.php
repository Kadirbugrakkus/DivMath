<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\BlogcategoryModel;
use App\Models\Blogmodel;

class BlogController extends Controller
{
    public function blog()
    {
        $blogContent = BlogModel::orderBy('created_at', 'DESC')->paginate(2);
        $blogCategory = BlogcategoryModel::all();
        $blogRecent = Blogmodel::orderBy('created_at','DESC')->take(3)->get();


        return view('frontend.blog',
        [
            'blogRecent'=>$blogRecent,
            'blogCategory'=>$blogCategory,
            'blogContent'=>$blogContent
        ]);
    }

    public function blogDetails($category, $slug)
    {
        $category = BlogcategoryModel::whereSlug($category)->first() ?? abort(404);
        $blogContent = Blogmodel::whereSlug($slug)->whereCategoryId($category->id)->first() ?? abort(404);
        $blogRecent = Blogmodel::orderBy('created_at','DESC')->take(3)->get();
        $blogCategory = BlogcategoryModel::all();


        return view('frontend.blogDetails',
        [
            'blogContent'=> $blogContent,
            'blogRecent'=>$blogRecent,
            'blogCategory'=>$blogCategory,
        ]);
    }

    public function blogCategory($slug)
    {
        $blogCategory = BlogcategoryModel::all();
        $category = BlogcategoryModel::whereSlug($slug)->first() ?? abort(404);
        $blogContent = BlogModel::where('category_id',$category->id)->orderBy('created_at', 'DESC')->paginate(2);
        $blogRecent = Blogmodel::orderBy('created_at','DESC')->take(3)->get();

        return view('frontend.blogCategoryList',
            [
                'blogCategory'=>$blogCategory,
                'blogContent'=>$blogContent,
                'category'=>$category,
                'blogRecent'=> $blogRecent

            ]);
    }

    public function blogRecent($slug)
    {
        $blogCategory = BlogcategoryModel::all();
        $category = BlogcategoryModel::whereSlug($slug)->first() ?? abort(404);
        $blogContent = BlogModel::where('category_id',$category->id)->orderBy('created_at', 'DESC')->paginate(2);
        $blogRecent = Blogmodel::orderBy('created_at','DESC')->take(3)->get();
        return view('frontend.widget.blogRecent',
        [
            'blogCategory' => $blogCategory,
            'blogContent' => $blogContent,
            'blogRecent'=> $blogRecent
        ]);
    }
}
