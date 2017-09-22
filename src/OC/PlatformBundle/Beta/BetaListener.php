<?php

namespace OC\PlatformBundle\Beta;

class BetaListener
{
    // Notre processeur
    protected $betaHTML;

    // La date de fin de la version bêta :
    // - Avant cette date, on affichera un compte à rebours
    // - Arpès cette date, on n'affichera plus le bêta
    protected $endDate;

    public function __construct(BetaHTMLAdder $betaHTML, $endDate)
    {
        $this->betaHTML = $betaHTML;
        $this->endDate = new \DateTime($endDate);
    }

    public function processBeta()
    {
        $remainingDays = $this->endDate->diff(new \DateTime())->days;

        if ($remainingDays <= 0) {
            // Si la date est dépassée, on ne fait rien
            return;
        }

//        $this->betaHTML->addBeta();
    }
}