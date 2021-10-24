<?php


namespace LudioAo\Shortcut\Services\Endpoints;


class StoryEndpoint extends Endpoint
{
    public const BASE_URI = '/stories/';

    public function getBaseUri(): string
    {
        return '/stories/';
    }

    public function history(int $id)
    {
        return $this->client()->get(
            $this->getBaseUri() . "/$id/history"
        );
    }

    public function get(int $storyPublicId, int $taskPublicId)
    {
        return $this->client()->get(
            $this->getBaseUri() . "/{$storyPublicId}/tasks/{$taskPublicId}"
        );
    }

    public function update(int $storyPublicId, int $taskPublicId, array $data)
    {
        return $this->client()->put(
            $this->getBaseUri() . "/$storyPublicId/tasks/$taskPublicId",
            $data
        );
    }

    public function create(int $storyPublicId, array $data)
    {
        return $this->client()->post(
            $this->getBaseUri() . "/$storyPublicId/tasks",
            $data
        );
    }
}
