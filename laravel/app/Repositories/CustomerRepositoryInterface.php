<?php

namespace App\Repositories;

interface CustomerRepositoryInterface
{
    public function all();

    public function findById($customerId): array;

    public function update($customerId);

    public function delete($customerId);
}
