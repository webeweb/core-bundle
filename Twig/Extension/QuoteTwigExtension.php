<?php

/*
 * This file is part of the core-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\CoreBundle\Twig\Extension;

use DateTime;
use Throwable;
use Twig\Environment;
use Twig\TwigFunction;
use WBW\Library\Symfony\Manager\QuoteManager;
use WBW\Library\Symfony\Manager\QuoteManagerTrait;
use WBW\Library\Symfony\Model\QuoteInterface;
use WBW\Library\Symfony\Provider\QuoteProviderInterface;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Quote Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\CoreBundle\Twig\Extension
 */
class QuoteTwigExtension extends AbstractTwigExtension {

    use QuoteManagerTrait;

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.core.twig.extension.quote";

    /**
     * Constructor.
     *
     * @param Environment $twigEnvironment The Twig environment.
     * @param QuoteManager $quoteManager The quote manager.
     */
    public function __construct(Environment $twigEnvironment, QuoteManager $quoteManager) {
        parent::__construct($twigEnvironment);

        $this->setQuoteManager($quoteManager);
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {

        return [
            new TwigFunction("quote", [$this, "quoteFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("quoteAuthor", [$this, "quoteAuthorFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("quoteContent", [$this, "quoteContentFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Get the quote provider.
     *
     * @param string|null $domain The domain.
     * @return QuoteProviderInterface|null Returns the quote provider.
     */
    protected function getQuoteProvider(string $domain = null): ?QuoteProviderInterface {

        if (false === $this->getQuoteManager()->hasProviders()) {
            return null;
        }

        if (null !== $domain) {
            return $this->getQuoteManager()->getProvider($domain);
        }

        return $this->getQuoteManager()->getProviders()[0];
    }

    /**
     * Display a quote author.
     *
     * @param string|null $domain The domain.
     * @return string Returns the quote author.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function quoteAuthorFunction(string $domain = null): string {

        $quote = $this->quoteFunction($domain);
        if (null === $quote) {
            return "";
        }

        return $quote->getAuthor();
    }

    /**
     * Display a quote content.
     *
     * @param string|null $domain The domain.
     * @return string Returns the quote content.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function quoteContentFunction(string $domain = null): ?string {

        $quote = $this->quoteFunction($domain);
        if (null === $quote) {
            return "";
        }

        return $quote->getContent();
    }

    /**
     * Get the quote.
     *
     * @param string|null $domain The domain.
     * @return QuoteInterface|null Returns the quote.
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function quoteFunction(string $domain = null): ?QuoteInterface {

        $provider = $this->getQuoteProvider($domain);
        if (null === $provider) {
            return null;
        }

        return ArrayHelper::get($provider->getQuotes(), (new DateTime())->format("m.d"));
    }
}
