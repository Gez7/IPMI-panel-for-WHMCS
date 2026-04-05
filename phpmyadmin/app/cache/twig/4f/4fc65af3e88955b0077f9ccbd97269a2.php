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

/* login/twofactor/webauthn_request.twig */
class __TwigTemplate_b864f331a777892def2a1d775dc44401 extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Please connect your WebAuthn/FIDO2 device. Then confirm login on the device."), "html", null, true);
        yield "</p>

<input type=\"hidden\" id=\"webauthn_request_response\" name=\"webauthn_request_response\" value=\"\" data-request-options=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["request_options"]) || array_key_exists("request_options", $context) ? $context["request_options"] : (function () { throw new RuntimeError('Variable "request_options" does not exist.', 3, $this->source); })()), "html_attr");
        yield "\">
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login/twofactor/webauthn_request.twig";
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
        return new Source("<p class=\"card-text\">{{ t('Please connect your WebAuthn/FIDO2 device. Then confirm login on the device.') }}</p>

<input type=\"hidden\" id=\"webauthn_request_response\" name=\"webauthn_request_response\" value=\"\" data-request-options=\"{{ request_options|e('html_attr') }}\">
", "login/twofactor/webauthn_request.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/login/twofactor/webauthn_request.twig");
    }
}
