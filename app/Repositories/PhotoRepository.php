<?php

namespace App\Repositories;

use App\Helpers\Helper;
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
            foreach ($photos->url as $url){
                Helper::unlinkFiles($url);
            }
            return true;
        }
        Helper::unlinkFiles($photos->url);
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
