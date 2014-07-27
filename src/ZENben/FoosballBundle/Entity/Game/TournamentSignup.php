<?php

namespace ZENben\FoosballBundle\Entity\Game;

use Doctrine\ORM\Mapping as ORM;

/**
 * TournamentSignup
 */
class TournamentSignup
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \ZENben\FoosballBundle\Entity\Game\Tournament
     */
    private $tournament;

    /**
     * @var \ZENben\FoosballBundle\Entity\User\User
     */
    private $user;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param  \DateTime $date
     * @return TournamentSignup
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set tournament
     *
     * @param  \ZENben\FoosballBundle\Entity\Game\Tournament $tournament
     * @return TournamentSignup
     */
    public function setTournament(\ZENben\FoosballBundle\Entity\Game\Tournament $tournament = null)
    {
        $this->tournament = $tournament;

        return $this;
    }

    /**
     * Get tournament
     *
     * @return \ZENben\FoosballBundle\Entity\Game\Tournament
     */
    public function getTournament()
    {
        return $this->tournament;
    }

    /**
     * Set user
     *
     * @param  \ZENben\FoosballBundle\Entity\User\User $user
     * @return TournamentSignup
     */
    public function setUser(\ZENben\FoosballBundle\Entity\User\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \ZENben\FoosballBundle\Entity\User\User
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * @var integer
     */
    private $seed;


    /**
     * Set seed
     *
     * @param  integer $seed
     * @return TournamentSignup
     */
    public function setSeed($seed)
    {
        $this->seed = $seed;
    
        return $this;
    }

    /**
     * Get seed
     *
     * @return integer
     */
    public function getSeed()
    {
        return $this->seed;
    }
}
