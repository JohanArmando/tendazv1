<?php
/**
 * Created by PhpStorm.
 * User: johins
 * Date: 1/12/16
 * Time: 12:07 PM
 */

namespace Tendaz\Components;

use Tendaz\Models\Domain\Domain;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Files\ExcelFile;

class ProductListImport extends  ExcelFile
{
    public $fileName;
    public $folder = 'imports';

    public function getFile()
    {
        if(!Input::file('import_file')){
            if(Input::get('file')) {
                return Input::get('file');
            }else{
                return  redirect()->to('admin/products/import');
            }
        }else{
            $name = Input::file('import_file')->getClientOriginalName();
            $path = auth('admins')->user()->shop->id.'/'.$name;
            \Storage::disk($this->folder)->put($path, \File::get(Input::file('import_file')));
            $this->fileName = $this->folder.'/'.$path;
            return $this->fileName;
        }
    }
    
    public function getFilters()
    {
        return [
            'chunk'
        ];
    }

}