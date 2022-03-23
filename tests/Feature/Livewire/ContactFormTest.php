<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\ContactForm as LivewireContactForm;
use App\Mail\ContactForm;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Mail;
use Livewire\Livewire;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    /** @test */
    public function test_component_shows_correct_info()
    {
        Livewire::test(LivewireContactForm::class)
            ->assertSeeInOrder([
                __('Your Name'),
                __('Your email address'),
                __('Message'),
            ]);
    }

    /** @test */
    public function test_validation()
    {
        Livewire::test(LivewireContactForm::class)
            ->call('submit')
            ->assertHasErrors([
                'state.name' => 'required',
                'state.email' => 'required',
                'state.body' => 'required',
            ]);
        
        Livewire::test(LivewireContactForm::class)
            ->set('state.name', 1)
            ->set('state.email', 'invalidemail')
            ->set('state.body', 1)
            ->call('submit')
            ->assertHasErrors([
                'state.name' => 'string',
                'state.email' => 'email',
                'state.body' => 'string',
            ]);

        Livewire::test(LivewireContactForm::class)
            ->set('state.name', 'Valid Name')
            ->set('state.email', 'validemail@example.com')
            ->set('state.body', file_get_contents(__DIR__.'/../../helpers/longText.txt'))
            ->call('submit')
            ->assertHasErrors([
                'state.body' => 'max',
            ]);
        
        Livewire::test(LivewireContactForm::class)
            ->set('state.name', 'Valid Name')
            ->set('state.email', 'validemail@example.com')
            ->set('state.body', 'Valid body')
            ->call('submit')
            ->assertHasNoErrors();
    }

    /** @test */
    public function test_send_message()
    {
        Mail::fake();

        Mail::assertNothingSent();

        Livewire::test(LivewireContactForm::class)
            ->set('state.name', 'Valid Name')
            ->set('state.email', 'validemail@example.com')
            ->set('state.body', 'Valid body')
            ->call('submit')
            ->assertHasNoErrors();

        Mail::assertSent(ContactForm::class);
    }
}
