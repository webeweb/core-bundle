<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Service;

/**
 * Symfony backward compatibility service trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Service
 */
trait SymfonyBCServiceTrait {

    /**
     * Symfony backward compatibility service.
     *
     * @var SymfonyBCServiceInterface|null
     */
    protected $symfonyBCService;

    /**
     * Get the Symfony backward compatibility service.
     *
     * @return SymfonyBCServiceInterface|null Returns the Symfony backward compatibility service.
     */
    public function getSymfonyBCService(): ?SymfonyBCServiceInterface {
        return $this->symfonyBCService;
    }

    /**
     * Set the Symfony backward compatibility service.
     *
     * @param SymfonyBCServiceInterface|null $symfonyBCService The Symfony backward compatibility service.
     * @return self Returns this instance.
     */
    protected function setSymfonyBCService(?SymfonyBCServiceInterface $symfonyBCService): self {
        $this->symfonyBCService = $symfonyBCService;
        return $this;
    }
}
