<?php

use Faker\Factory as Faker;
use App\Models\Feedback;
use App\Repositories\FeedbackRepository;

trait MakeFeedbackTrait
{
    /**
     * Create fake instance of Feedback and save it in database
     *
     * @param array $feedbackFields
     * @return Feedback
     */
    public function makeFeedback($feedbackFields = [])
    {
        /** @var FeedbackRepository $feedbackRepo */
        $feedbackRepo = App::make(FeedbackRepository::class);
        $theme = $this->fakeFeedbackData($feedbackFields);
        return $feedbackRepo->create($theme);
    }

    /**
     * Get fake instance of Feedback
     *
     * @param array $feedbackFields
     * @return Feedback
     */
    public function fakeFeedback($feedbackFields = [])
    {
        return new Feedback($this->fakeFeedbackData($feedbackFields));
    }

    /**
     * Get fake data of Feedback
     *
     * @param array $postFields
     * @return array
     */
    public function fakeFeedbackData($feedbackFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'content' => $fake->text,
            'image' => $fake->word,
            'name_client' => $fake->word,
            'company' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $feedbackFields);
    }
}
