<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Clinic
 * @package App
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property string|null $additional_information
 * @property string|null $transport_details
 * @property int $country_id
 * @property string $city
 * @property string|null $address
 * @property string|null $phone_number
 * @property string|null $website
 * @property string|null $contact_person_name
 * @property string|null $contact_person_phone
 * @property string|null $contact_person_email
 * @property DateTime|null $created_at
 * @property DateTime|null $updated_at
 * @property DateTime|null $deleted_at
 */
class Clinic extends Model
{
    use SoftDeletes;

    /**
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * @return BelongsTo
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * @return BelongsToMany
     */
    public function specialities()
    {
        return $this->belongsToMany(Speciality::class);
    }
}
