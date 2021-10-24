<?php


namespace LudioAo\Shortcut\Services\Endpoints;


use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Validator;

abstract class Endpoint
{
    abstract public function getBaseUri(): string;

    protected $http;

    public function __construct(PendingRequest $http)
    {
        $this->http = $http;
    }

    protected function client(): PendingRequest
    {
        return $this->http;
    }

    protected function validate(array $attributes): array
    {
        return Validator::validate($attributes, $this->rules(), $this->messages());
    }

    protected function rules(): array
    {
        return [];
    }

    protected function messages(): array
    {
        return [];
    }

    public function list()
    {
        return $this->client()->get($this->getBaseUri());
    }

    public function create(array $data)
    {
        return $this->client()->create($this->getBaseUri(), $data);
    }

    public function update($id, array $data)
    {
        return $this->client()->put(
            $this->getBaseUri() . "/{$id}",
            $data
        );
    }

    public function destroy($id)
    {
        return $this->client()->delete(
            $this->getBaseUri() . "/{$id}"
        );
    }

    public function get($id)
    {
        return $this->client()->get(
            $this->getBaseUri() . "/{$id}"
        );
    }

}
