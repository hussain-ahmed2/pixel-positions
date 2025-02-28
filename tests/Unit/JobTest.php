<?php

namespace Tests\Unit;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

use PHPUnit\Framework\Attributes\Test;

class JobTest extends TestCase
{
    use RefreshDatabase; 

    #[Test]
    public function a_job_belongs_to_an_employer(): void
    {
        // Arrange
        $employer = Employer::factory()->create();
        $job = Job::factory()->create([
            'employer_id' => $employer->id
        ]);

        // Act & Assert
        $this->assertTrue(
            $job->employer->is($employer),
            "The job's employer does not match the expected employer."
        );
    }

    #[Test]
    public function a_job_can_have_tags(): void
    {
        $job = Job::factory()->create();
        
        $job->tag("Frontend");

        $this->assertCount(1, $job->tags, "can have tags");
    }
}
