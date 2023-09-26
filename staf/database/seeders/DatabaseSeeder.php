<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Activity;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Activity::factory(8)->create();

        // Activity::create([
        //     'title' => 'Phonological Awareness Assessment + Intervention Bundle',
        //     'creatorName' => 'The Happy Teacher',
        //     'location' => 'Boston, MA',
        //     'website' => 'thehappyteacher.com',
        //     'email' => 'happyteacher@gmail.com',
        //     'tags' => 'Preschool, Reading, Phonics, Early Intervention',
        //     'description' => 'This is a truly NO PREP set of over 650+ Phonological Awareness activities that guide you through differentiated phonics and reading lessons. It covers Alphabet Letters and Sounds, Phonemes, Phonics, CVC Words, Sight Words, Sentence Writing, and Comprehension. There is also an entire unit to help you introduce and practice Guided Spelling Strategies as well.'
        // ]);
        
        // Activity::create([
        //     'title' => 'Stuttering Assessment & Activities Bundle',
        //     'creatorName' => 'Stuttering Resources',
        //     'location' => 'Dallas, TX',
        //     'website' => 'thehappyteacher.com',
        //     'email' => 'happyteacher@gmail.com',
        //     'tags' => 'Preschool, Reading, Phonics, Early Intervention',
        //     'description' => 'This is a truly NO PREP set of over 650+ Phonological Awareness activities that guide you through differentiated phonics and reading lessons. It covers Alphabet Letters and Sounds, Phonemes, Phonics, CVC Words, Sight Words, Sentence Writing, and Comprehension. There is also an entire unit to help you introduce and practice Guided Spelling Strategies as well.'
        // ]);
    }
}
