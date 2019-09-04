<?php

namespace App\Repositories;

use App\Helper\Helper;
use App\Models\Photo;
use App\Repositories\BaseRepository;

/**
 * Class PhotoRepository
 * @package App\Repositories
 * @version September 1, 2019, 9:38 am UTC
*/

class PhotoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [

    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }
    public function unlinkPhotos($photos) {
        if (typeOf(array($photos))){
            foreach ($photos->path as $path){
                Helper::unlinkFiles($path);
            }
            return true;
        }
        Helper::unlinkFiles($photos->path);
        return true;
    }
    /**
     * Configure the Model
     **/
    public function model()
    {
        return Photo::class;
    }
}
