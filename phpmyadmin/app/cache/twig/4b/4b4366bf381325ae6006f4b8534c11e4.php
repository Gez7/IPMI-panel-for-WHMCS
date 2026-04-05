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

/* login/twofactor/key.twig */
class __TwigTemplate_7d3f191e55614a1383a03d1df97be66a extends Template
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
        yield from $this->load("login/twofactor/key-https-warning.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "<div class=\"alert alert-danger\" role=\"alert\">
  <h4 class=\"alert-heading\">";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Deprecated!"), "html", null, true);
        yield "</h4>
  <p>";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("The FIDO U2F API has been deprecated in favor of the Web Authentication API (WebAuthn)."), "html", null, true);
        yield "</p>
  <p class=\"mb-0\">
    ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("You can still use Firefox to authenticate your account using the FIDO U2F API, however it's recommended that you use the WebAuthn authentication instead."), "html", null, true);
        yield "
  </p>
</div>
<p>
";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Please connect your FIDO U2F device into your computer's USB port. Then confirm login on the device."), "html", null, true);
        yield "
</p>
<input id=\"u2f_authentication_response\" name=\"u2f_authentication_response\" value=\"\" type=\"hidden\" data-request=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "\">
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login/twofactor/key.twig";
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
        return array (  68 => 12,  63 => 10,  56 => 6,  51 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% include 'login/twofactor/key-https-warning.twig' %}
<div class=\"alert alert-danger\" role=\"alert\">
  <h4 class=\"alert-heading\">{{ t('Deprecated!') }}</h4>
  <p>{{ t('The FIDO U2F API has been deprecated in favor of the Web Authentication API (WebAuthn).') }}</p>
  <p class=\"mb-0\">
    {{ t('You can still use Firefox to authenticate your account using the FIDO U2F API, however it\\'s recommended that you use the WebAuthn authentication instead.') }}
  </p>
</div>
<p>
{{ t(\"Please connect your FIDO U2F device into your computer's USB port. Then confirm login on the device.\") }}
</p>
<input id=\"u2f_authentication_response\" name=\"u2f_authentication_response\" value=\"\" type=\"hidden\" data-request=\"{{ request }}\">
", "login/twofactor/key.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/login/twofactor/key.twig");
    }
}
