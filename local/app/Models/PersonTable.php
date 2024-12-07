<?php
namespace Models;

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ORM\Data\DataManager;
use Bitrix\Main\ORM\Fields\IntegerField;
use Bitrix\Main\ORM\Fields\StringField;
use Bitrix\Main\ORM\Fields\Validators\LengthValidator;

/**
 * Class PersonTable
 *
 * @package Models
 */

class PersonTable extends DataManager
{
    /**
     * Returns DB table name for entity.
     *
     * @return string
     */
    public static function getTableName()
    {
        return 'private_person';
    }

    /**
     * Returns entity map definition.
     *
     * @return array
     */
    public static function getMap()
    {
        return [
            'id' => (new IntegerField('id',
                []
            ))->configureTitle(Loc::getMessage('PERSON_ENTITY_ID_FIELD'))
                ->configurePrimary(true)
                ->configureAutocomplete(true)
            ,
            'first_name' => (new StringField('first_name',
                [
                    'validation' => function()
                    {
                        return[
                            new LengthValidator(null, 50),
                        ];
                    },
                ]
            ))->configureTitle(Loc::getMessage('PERSON_ENTITY_FIRST_NAME_FIELD'))
            ,
            'job_title_id' => (new IntegerField('job_title_id',
                []
            ))->configureTitle(Loc::getMessage('PERSON_ENTITY_JOB_TITLE_ID_FIELD'))
            ,
            'year_of_admission' => (new IntegerField('year_of_admission',
                []
            ))->configureTitle(Loc::getMessage('PERSON_ENTITY_YEAR_OF_ADMISSION_FIELD'))
                ->configureSize(1)
            ,
            'experience_id' => (new IntegerField('experience_id',
                []
            ))->configureTitle(Loc::getMessage('PERSON_ENTITY_EXPERIENCE_ID_FIELD'))
            ,
            'departament' => (new StringField('departament',
                [
                    'validation' => function()
                    {
                        return[
                            new LengthValidator(null, 50),
                        ];
                    },
                ]
            ))->configureTitle(Loc::getMessage('PERSON_ENTITY_DEPARTAMENT_FIELD'))
            ,
            'surcharge_id' => (new IntegerField('surcharge_id',
                []
            ))->configureTitle(Loc::getMessage('PERSON_ENTITY_SURCHARGE_ID_FIELD'))
            ,
            'birthday_year' => (new IntegerField('birthday_year',
                []
            ))->configureTitle(Loc::getMessage('PERSON_ENTITY_BIRTHDAY_YEAR_FIELD'))
            ,
            'telephone' => (new StringField('telephone',
                [
                    'validation' => function()
                    {
                        return[
                            new LengthValidator(null, 20),
                        ];
                    },
                ]
            ))->configureTitle(Loc::getMessage('PERSON_ENTITY_TELEPHONE_FIELD'))
            ,
            'place_of_birth' => (new StringField('place_of_birth',
                [
                    'validation' => function()
                    {
                        return[
                            new LengthValidator(null, 50),
                        ];
                    },
                ]
            ))->configureTitle(Loc::getMessage('PERSON_ENTITY_PLACE_OF_BIRTH_FIELD'))
            ,
        ];
    }
}