<?php

namespace App\Http\Livewire\App\Blog;

use App\Models\BlogCategory;
use App\Models\Category;
use App\Models\Media;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Categories extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $item_id;
    public $categories;
    public $category;
    public $category_id;
    public $image;
    public $name;
    public $name_ar;
    public $description_en;
    public $description_ar;
    public $sort;
    public $enabled;
    public $readOnly = false;
    public $isOpen = false;
    public $isDeleteOpen = false;
    public $search;

    protected $rules = [
        'name' => 'required',
        'name_ar' => 'required',
        'sort' => 'numeric', // 5MB Max
    ];

    public function render()
    {
        if (!empty($this->search)) {
            //DB::enableQueryLog(); // Enable query log
            $this->categories = BlogCategory::where('enabled', 1)
                ->where('slug', 'LIKE', "%" . strtolower($this->search) . "%")
                ->orderBy('sort')
                ->get();
            //dd(DB::getQueryLog());
        } else {
            $this->categories = BlogCategory::orderBy('sort')->get();
        }

        return view('livewire.app.blog.categories');
    }

    public function removePreview()
    {
        $this->image = '';
        Media::where('type', 'BlogCategory')->where('item_id', $this->item_id)->delete();
    }

    public function resetFields()
    {
        $this->item_id = '';
        $this->category = '';
        $this->image = '';
        $this->name = '';
        $this->name_ar = '';
        $this->description_en = '';
        $this->description_ar = '';
        $this->sort = 0;
        $this->enabled = 1;
        $this->readOnly = false;
    }
    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function openDeleteModal()
    {
        $this->isDeleteOpen = true;
    }

    public function closeDeleteModal()
    {
        $this->isDeleteOpen = false;
    }

    public function create()
    {
        $this->resetFields();
        $this->category = new BlogCategory;
        $this->openModal();
    }
    public function edit($id, $readOnly = false)
    {
        $this->item_id = $id;
        $this->readOnly = $readOnly;
        $category = BlogCategory::findOrFail($id);
        $this->category = $category;
        $this->name = $category->getTranslation('name', 'en');
        $this->name_ar = $category->getTranslation('name', 'ar');
        $this->description_en = $category->description_en;
        $this->description_ar = $category->description_ar;
        $this->sort = $category->sort;
        $this->enabled = $category->enabled;
        $this->image = $category->media() ? $category->media() : '';
        $this->openModal();
    }
    public function view($id)
    {
        $this->edit($id, true);
    }
    public function save()
    {
        $this->validate();
        $name['en'] = $this->name;
        $name['ar'] = $this->name_ar;
        $data['name'] = $name;
        $data['description_en'] = $this->description_en;
        $data['description_ar'] = $this->description_ar;
        $data['sort'] = $this->sort != '' ? $this->sort : 0;
        if ($this->item_id) {
            $this->category->Update($data);
        } else {
            $category = $this->category->Create($data);
            $this->item_id = $category->id;
        }

        if ($this->image && !isset($this->image->path)) {
            //dd($this->image);
            $file_info = $this->image->getClientOriginalName();
            $file_name = pathinfo($file_info, PATHINFO_FILENAME);
            $file_extension = pathinfo($file_info, PATHINFO_EXTENSION);
            // $name =  Str::slug($file_name, '-') . '-' . $product->id . '.' . $file_extension;
            $size = $this->image->getSize();
            $path = $this->image->storeAs('blog', $file_info, 'public');
            $name['ar'] = $file_info;
            $name['en'] = $file_info;
            $media = Media::where('type', 'BlogCategory')->where('item_id', $this->item_id)->first();
            if ($media) {
                $media->update([
                    'name' => $name,
                    'path' => $path,
                    'size' => $size,
                    'type' => 'BlogCategory',
                    'item_id' => $this->item_id,
                ]);
            } else {
                Media::create([
                    'name' => $name,
                    'path' => $path,
                    'size' => $size,
                    'type' => 'BlogCategory',
                    'item_id' => $this->item_id,
                ]);
            }

        }
        $this->resetFields();
        session()->flash('success', 'Blog category updated successfully.');
        $this->closeModal();
    }

    public function enabled($id)
    {
        //dd('ggg');
        $this->enabled = !$this->enabled;
        $category = BlogCategory::findOrFail($id);
        $category->enabled = !$category->enabled;
        $category->update();
        //dd($category);
    }
    public function deleteId($id)
    {
        $this->item_id = $id;
        $this->category = BlogCategory::findOrFail($id);
        $this->openDeleteModal();
    }
    public function delete()
    {
        if ($this->item_id == 1) {
            return;
        }

        $category = BlogCategory::findOrFail($this->item_id);
        $category->delete();
        $this->resetFields();
        $this->closeDeleteModal();
    }
}