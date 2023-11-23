<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Category\CategoryInterface;
use App\Models\Category;

class CategoryController extends Controller
{
    protected $category;

    public function __construct(CategoryInterface $category)
    {
        $this->category = $category;
    }



    public function index(Request $request)
    {
        $data = $this->category->index($request);
        return view('dashboard.category.index',compact('data'))
        ->with([
            'name'      => $request->name,
            'from_date' => $request->from_date,
            'to_date'   => $request->to_date,
        ]);
    }



    public function store(Request $request)
    {
        return $this->category->store($request);
    }



    public function update(Request $request)
    {
        return $this->category->update($request);
    }



    public function destroy(Request $request)
    {
        // return $this->category->destroy($request);
        try {
            // $related_table = realed_model::where('user_id', $request->id)->pluck('user_id');
            // if($related_table->count() == 0) { 
                $category = Category::findOrFail($request->id);
                if (!$category) {
                    session()->flash('error');
                    // return redirect()->back();
                    return response()->json([
                        'status'   => false,
                        'messages' => 'لقد حدث خطأ ما برجاء المحاولة مجدداً',
                    ]);
                }
                $category->delete();
                session()->flash('success');
                // return redirect()->back();
                return response()->json([
                    'status'   => true,
                    'messages' => 'تم الحذف بنجاح',
                ]);
            // } else {
                // session()->flash('canNotDeleted');
                // return redirect()->back();
            // }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }



    public function deleteSelected(Request $request)
    {
        return $this->category->deleteSelected($request);
    }



    public function showNotification($route_id,$notification_id)
    {
        $data = $this->category->showNotification($route_id,$notification_id);
        return view('dashboard.category.index',compact('data'))
        ->with([
            'name'      => null,
            'from_date' => null,
            'to_date'   => null,
        ]);
    }
}
