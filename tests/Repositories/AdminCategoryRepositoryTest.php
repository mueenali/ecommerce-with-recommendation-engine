<?php namespace Tests\Repositories;

use App\Models\AdminCategory;
use App\Repositories\AdminCategoryRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class AdminCategoryRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var AdminCategoryRepository
     */
    protected $adminCategoryRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->adminCategoryRepo = \App::make(AdminCategoryRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_admin_category()
    {
        $adminCategory = factory(AdminCategory::class)->make()->toArray();

        $createdAdminCategory = $this->adminCategoryRepo->create($adminCategory);

        $createdAdminCategory = $createdAdminCategory->toArray();
        $this->assertArrayHasKey('id', $createdAdminCategory);
        $this->assertNotNull($createdAdminCategory['id'], 'Created AdminCategory must have id specified');
        $this->assertNotNull(AdminCategory::find($createdAdminCategory['id']), 'AdminCategory with given id must be in DB');
        $this->assertModelData($adminCategory, $createdAdminCategory);
    }

    /**
     * @test read
     */
    public function test_read_admin_category()
    {
        $adminCategory = factory(AdminCategory::class)->create();

        $dbAdminCategory = $this->adminCategoryRepo->find($adminCategory->id);

        $dbAdminCategory = $dbAdminCategory->toArray();
        $this->assertModelData($adminCategory->toArray(), $dbAdminCategory);
    }

    /**
     * @test update
     */
    public function test_update_admin_category()
    {
        $adminCategory = factory(AdminCategory::class)->create();
        $fakeAdminCategory = factory(AdminCategory::class)->make()->toArray();

        $updatedAdminCategory = $this->adminCategoryRepo->update($fakeAdminCategory, $adminCategory->id);

        $this->assertModelData($fakeAdminCategory, $updatedAdminCategory->toArray());
        $dbAdminCategory = $this->adminCategoryRepo->find($adminCategory->id);
        $this->assertModelData($fakeAdminCategory, $dbAdminCategory->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_admin_category()
    {
        $adminCategory = factory(AdminCategory::class)->create();

        $resp = $this->adminCategoryRepo->delete($adminCategory->id);

        $this->assertTrue($resp);
        $this->assertNull(AdminCategory::find($adminCategory->id), 'AdminCategory should not exist in DB');
    }
}
