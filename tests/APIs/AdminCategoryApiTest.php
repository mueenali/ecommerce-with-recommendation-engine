<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\AdminCategory;

class AdminCategoryApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_admin_category()
    {
        $adminCategory = factory(AdminCategory::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/admin_categories', $adminCategory
        );

        $this->assertApiResponse($adminCategory);
    }

    /**
     * @test
     */
    public function test_read_admin_category()
    {
        $adminCategory = factory(AdminCategory::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/admin_categories/'.$adminCategory->id
        );

        $this->assertApiResponse($adminCategory->toArray());
    }

    /**
     * @test
     */
    public function test_update_admin_category()
    {
        $adminCategory = factory(AdminCategory::class)->create();
        $editedAdminCategory = factory(AdminCategory::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/admin_categories/'.$adminCategory->id,
            $editedAdminCategory
        );

        $this->assertApiResponse($editedAdminCategory);
    }

    /**
     * @test
     */
    public function test_delete_admin_category()
    {
        $adminCategory = factory(AdminCategory::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/admin_categories/'.$adminCategory->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/admin_categories/'.$adminCategory->id
        );

        $this->response->assertStatus(404);
    }
}
