<?php

namespace Spatie\MediaLibrary\Tests\Feature\ResponsiveImages;

use Spatie\MediaLibrary\Tests\TestCase;

class ResponsiveImageGeneratorTest extends TestCase
{
    /** @test */
    public function it_can_generate_responsive_images()
    {
        $this->testModel
                ->addMedia($this->getTestJpg())
                ->withResponsiveImages()
                ->toMediaCollection();

        $this->assertFileExists($this->getTempDirectory('media/1/responsive-images/test___medialibrary_original_237_195.jpg'));
        $this->assertFileExists($this->getTempDirectory('media/1/responsive-images/test___medialibrary_original_284_233.jpg'));
        $this->assertFileExists($this->getTempDirectory('media/1/responsive-images/test___medialibrary_original_340_280.jpg'));
    }

    /** @test */
    public function its_conversions_can_have_responsive_images()
    {
        $this->testModelWithResponsiveImages
                    ->addMedia($this->getTestJpg())
                    ->withResponsiveImages()
                    ->toMediaCollection();

        $this->assertFileExists($this->getTempDirectory('media/1/responsive-images/test___thumb_50_41.jpg'));
    }
}
