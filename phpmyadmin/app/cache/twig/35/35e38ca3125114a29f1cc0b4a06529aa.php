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

/* login/twofactor/application.twig */
class __TwigTemplate_ce891b072a12c9fb7e3fe2521732f66f extends Template
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
        yield "<div class=\"mb-3\">
  <label class=\"form-label\" for=\"2faCodeInput\">";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Authentication code:"), "html", null, true);
        yield "</label>
  <input class=\"form-control\" id=\"2faCodeInput\" type=\"text\" name=\"2fa_code\" autocomplete=\"off\" autofocus>
</div>
<p>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Open the two-factor authentication app on your device to view your authentication code and verify your identity."), "html", null, true);
        yield "</p>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login/twofactor/application.twig";
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
        return array (  51 => 5,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"mb-3\">
  <label class=\"form-label\" for=\"2faCodeInput\">{{ t('Authentication code:') }}</label>
  <input class=\"form-control\" id=\"2faCodeInput\" type=\"text\" name=\"2fa_code\" autocomplete=\"off\" autofocus>
</div>
<p>{{ t('Open the two-factor authentication app on your device to view your authentication code and verify your identity.') }}</p>
", "login/twofactor/application.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/login/twofactor/application.twig");
    }
}
