<?php
declare(strict_types=1);

namespace App\Model;

use Hyperf\DbConnection\Model\Model;

/**
 * @property $id
 * @property $name
 */
class User extends Model
{

    /**
     * @var string
     */
    public string $keyType = 'string';

    /**
     * @var bool
     */
    public bool $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected array $fillable = ['id', 'name'];
}
