<?php

namespace Database\Seeders;

// Laravel
use Illuminate\Database\Seeder;

// Models
use App\Models\Review;

class ReviewsSeeder extends Seeder {

    public function run(): void {

        $reviews = [];

        if (env('RP_SEED') === 'demo') {

            $reviews = [
                [ /* 1 */
                    'sender_type' => 'CITIZEN',
                    'sender_id' => 1,
                    'receiver_type' => 'CITIZEN',
                    'receiver_id' =>  2,
                    'review' => 'Lovely citizen, never found someone like Her.',
                    'rate' => 5
                ],
                [ /* 2 */
                    'sender_type' => 'CITIZEN',
                    'sender_id' => 1,
                    'receiver_type' => 'COMPANY',
                    'receiver_id' =>  4,
                    'review' => "So, Nicorizz is so scared about the project failure? I mean... you... one of the Admin 😂",
                    'rate' => 1
                ],
            ];

        } else if (env('RP_SEED') === 'default') {

            $reviews = [
                [ /* 1 */
                    'sender_type' => 'CITIZEN',
                    'sender_id' => 1,
                    'receiver_type' => 'CITIZEN',
                    'receiver_id' =>  2,
                    'review' => 'Lovely citizen, never found someone like You ❤️',
                    'rate' => 5
                ],
                [ /* 2 */
                    'sender_type' => 'COMPANY',
                    'sender_id' => 2,
                    'receiver_type' => 'COMPANY',
                    'receiver_id' =>  1,
                    'review' => "Great quality service. Their combination of outstanding service, technological innovation, and community involvement makes them a standout in the banking industry.",
                    'rate' => 4
                ],
                [ /* 3 */
                    'sender_type' => 'COMPANY',
                    'sender_id' => 2,
                    'receiver_type' => 'CITIZEN',
                    'receiver_id' =>  6,
                    'review' => "I've had the pleasure of working closely with Sarah Johnson for the past year, and I can confidently say that they are an invaluable asset to our team. Sarah Johnson consistently demonstrates exemplary technical expertise and a strong commitment to our company's goals.",
                    'rate' => 4
                ],
            ];

        }

        foreach ($reviews as $review) { Review::create($review); }
    }
}
