<?php

namespace App\Repositories;

use App\Helpers\Helper;
use App\Models\Photo;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Storage;

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

    /**
     * Configure the Model
     **/

    public function deletePhoto($id) {
        $photo = $this->find($id);
        Storage::disk('s3')->delete($photo->filename);
        return $photo->delete();
    }

    public function model()
    {
        return Photo::class;
    }
}
