<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class FileUploadControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_uploads_a_file_successfully()
    {
        Storage::fake('public');

        $file = UploadedFile::fake()->image('testfile.jpg');

        $response = $this->post('/upload', [
            'file' => $file,
        ]);

        $response->assertStatus(200);
        $response->assertJson([
            'message' => 'File uploaded successfully',
        ]);

        Storage::disk('public')->assertExists('uploads/' . $file->hashName());
    }

    /** @test */
    public function it_fails_if_no_file_is_provided()
    {
        $response = $this->post('/upload', []);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors('file');
    }

    /** @test */
    public function it_fails_if_the_file_is_not_allowed_type()
    {
        $file = UploadedFile::fake()->create('document.txt', 100);

        $response = $this->post('/upload', [
            'file' => $file,
        ]);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors('file');
    }

    /** @test */
    public function it_fails_if_the_file_is_too_large()
    {
        $file = UploadedFile::fake()->create('image.jpg')->size(3000);

        $response = $this->post('/upload', [
            'file' => $file,
        ]);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors('file');
    }
}
