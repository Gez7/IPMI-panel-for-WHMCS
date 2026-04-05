<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* login/twofactor/webauthn_creation.twig */
class __TwigTemplate_a9012f07fb3483a293a5b5b3c8646adc extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<p class=\"card-text\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Please connect your WebAuthn/FIDO2 device. Then confirm registration on the device."), "html", null, true);
        yield "</p>

<input type=\"hidden\" id=\"webauthn_creation_response\" name=\"webauthn_creation_response\" value=\"\" data-creation-options=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["creation_options"]) || array_key_exists("creation_options", $context) ? $context["creation_options"] : (function () { throw new RuntimeError('Variable "creation_options" does not exist.', 3, $this->source); })()), "html_attr");
        yield "\">
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login/twofactor/webauthn_creation.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<p class=\"card-text\">{{ t('Please connect your WebAuthn/FIDO2 device. Then confirm registration on the device.') }}</p>

<input type=\"hidden\" id=\"webauthn_creation_response\" name=\"webauthn_creation_response\" value=\"\" data-creation-options=\"{{ creation_options|e('html_attr') }}\">
", "login/twofactor/webauthn_creation.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/login/twofactor/webauthn_creation.twig");
    }
}
