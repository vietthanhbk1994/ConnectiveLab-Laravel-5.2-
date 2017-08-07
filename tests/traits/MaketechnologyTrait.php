<?php

use Faker\Factory as Faker;
use App\Models\technology;
use App\Repositories\technologyRepository;

trait MaketechnologyTrait
{
    /**
     * Create fake instance of technology and save it in database
     *
     * @param array $technologyFields
     * @return technology
     */
    public function maketechnology($technologyFields = [])
    {
        /** @var technologyRepository $technologyRepo */
        $technologyRepo = App::make(technologyRepository::class);
        $theme = $this->faketechnologyData($technologyFields);
        return $technologyRepo->create($theme);
    }

    /**
     * Get fake instance of technology
     *
     * @param array $technologyFields
     * @return technology
     */
    public function faketechnology($technologyFields = [])
    {
        return new technology($this->faketechnologyData($technologyFields));
    }

    /**
     * Get fake data of technology
     *
     * @param array $postFields
     * @return array
     */
    public function faketechnologyData($technologyFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'image' => $fake->word,
            'link' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $technologyFields);
    }
}
