<?php

/**
 * @author     Jirka Svoboda <code@svobik.com>
 * @copyright  2017 © svobik.com
 * @license    https://www.svobik.com/license.md
 * @timestamp  31/05/2017 11:00
 */

namespace dlds\mlm\kernel\patterns\facades;

use dlds\mlm\app\models\Participant;
use dlds\mlm\helpers\MlmRuleHelper;
use dlds\mlm\kernel\interfaces\MlmParticipantInterface;
use dlds\mlm\kernel\interfaces\MlmSubjectInterface;

/**
 * Class MlmSubjectFacade
 * @package dlds\mlm\kernel\patterns\facades
 */
abstract class MlmSubjectFacade
{

    /**
     * Retrieves all basic profiteers
     * ---
     * @param MlmSubjectInterface $subject
     * @return array
     */
    public static function profiteersBasic(MlmSubjectInterface $subject)
    {
        $profiteers = $subject->__mlmBasicProfiteers();

        if (!is_array($profiteers)) {
            $profiteers = [$profiteers];
        }

        return $profiteers;
    }

    /**
     * Retrieves all extra profiteers
     * ---
     * @param MlmSubjectInterface $subject
     * @return array
     */
    public static function profiteersExtra(MlmSubjectInterface $subject)
    {
        $profiteers = $subject->__mlmExtraProfiteers();

        if (!is_array($profiteers)) {
            $profiteers = [$profiteers];
        }

        return $profiteers;
    }

    /**
     * Retrieves all custom profiteers
     * ---
     * @param MlmSubjectInterface $subject
     * @return array
     */
    public static function profiteersCustom(MlmSubjectInterface $subject)
    {
        $profiteers = $subject->__mlmCustomProfiteers();

        if (!is_array($profiteers)) {
            $profiteers = [$profiteers];
        }

        return $profiteers;
    }
}