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

/* preferences/autoload.twig */
class __TwigTemplate_d38cf84673817dc96de0236ecf660ed7 extends Template
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
        yield "<div id=\"prefs_autoload\" class=\"alert alert-primary d-print-none hide\" role=\"alert\">
    <form action=\"";
        // line 2
        yield PhpMyAdmin\Url::getFromRoute("/preferences/manage");
        yield "\" method=\"post\" class=\"disableAjax\">
        ";
        // line 3
        yield (isset($context["hidden_inputs"]) || array_key_exists("hidden_inputs", $context) ? $context["hidden_inputs"] : (function () { throw new RuntimeError('Variable "hidden_inputs" does not exist.', 3, $this->source); })());
        yield "
        <input type=\"hidden\" name=\"json\" value=\"\">
        <input type=\"hidden\" name=\"submit_import\" value=\"1\">
        <input type=\"hidden\" name=\"return_url\" value=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["return_url"]) || array_key_exists("return_url", $context) ? $context["return_url"] : (function () { throw new RuntimeError('Variable "return_url" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "\">
        ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Your browser has phpMyAdmin configuration for this domain. Would you like to import it for current session?"), "html", null, true);
        yield "
        <br>
        <a href=\"#yes\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Yes"), "html", null, true);
        yield "</a>
        / <a href=\"#no\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No"), "html", null, true);
        yield "</a>
        / <a href=\"#delete\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Delete settings"), "html", null, true);
        yield "</a>
    </form>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "preferences/autoload.twig";
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
        return array (  72 => 11,  68 => 10,  64 => 9,  59 => 7,  55 => 6,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"prefs_autoload\" class=\"alert alert-primary d-print-none hide\" role=\"alert\">
    <form action=\"{{ url('/preferences/manage') }}\" method=\"post\" class=\"disableAjax\">
        {{ hidden_inputs|raw }}
        <input type=\"hidden\" name=\"json\" value=\"\">
        <input type=\"hidden\" name=\"submit_import\" value=\"1\">
        <input type=\"hidden\" name=\"return_url\" value=\"{{ return_url }}\">
        {{ t('Your browser has phpMyAdmin configuration for this domain. Would you like to import it for current session?') }}
        <br>
        <a href=\"#yes\">{{ t('Yes') }}</a>
        / <a href=\"#no\">{{ t('No') }}</a>
        / <a href=\"#delete\">{{ t('Delete settings') }}</a>
    </form>
</div>
", "preferences/autoload.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/preferences/autoload.twig");
    }
}
