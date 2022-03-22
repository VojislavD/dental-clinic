<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FrontPagesTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    public function test_welcome_page()
    {
        $response = $this->get(route('welcome'));

        $response->assertOk()
            ->assertSee(__('Achive Your Desired'));
    }

    /** @test */
    public function test_about_page()
    {
        $response = $this->get(route('about'));

        $response->assertOk()
            ->assertSee(__('About Us'));
    }

    /** @test */
    public function test_services_page()
    {
        $response = $this->get(route('services'));

        $response->assertOk()
            ->assertSee(__('Our Services'));
    }

    /** @test */
    public function test_gallery_page()
    {
        $response = $this->get(route('gallery'));

        $response->assertOk()
            ->assertSee(__('Our Work'));
    }

    /** @test */
    public function test_team_page()
    {
        $response = $this->get(route('team'));

        $response->assertOk()
            ->assertSee(__('Our Team'));
    }

    /** @test */
    public function test_contact_page()
    {
        $response = $this->get(route('contact'));

        $response->assertOk()
            ->assertSee(__('Contact Us'));
    }

    /** @test */
    public function test_book_appointment_page()
    {
        $response = $this->get(route('bookAppointment'));

        $response->assertOk()
            ->assertSee(__('Book an Appointment'));
    }
}
