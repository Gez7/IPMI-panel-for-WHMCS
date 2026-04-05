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

/* javascript/variables.twig */
class __TwigTemplate_8919b15e2a48be58e4617787c59b5ebe extends Template
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
        // line 2
        yield "var firstDayOfCalendar = '";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["first_day_of_calendar"]) || array_key_exists("first_day_of_calendar", $context) ? $context["first_day_of_calendar"] : (function () { throw new RuntimeError('Variable "first_day_of_calendar" does not exist.', 2, $this->source); })()), "js", null, true);
        yield "';
var themeImagePath = '";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('PhpMyAdmin\Theme\ThemeManager')->getThemeImagePath(), "js", null, true);
        yield "';
var mysqlDocTemplate = '";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(PhpMyAdmin\Util::getMySQLDocuURL("%s"), "js", null, true);
        yield "';
var maxInputVars = ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["max_input_vars"]) || array_key_exists("max_input_vars", $context) ? $context["max_input_vars"] : (function () { throw new RuntimeError('Variable "max_input_vars" does not exist.', 5, $this->source); })()), "js", null, true);
        yield ";
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "javascript/variables.twig";
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
        return array (  55 => 5,  51 => 4,  47 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% autoescape 'js' %}
var firstDayOfCalendar = '{{ first_day_of_calendar }}';
var themeImagePath = '{{ image() }}';
var mysqlDocTemplate = '{{ get_mysql_docu_url('%s') }}';
var maxInputVars = {{ max_input_vars }};
{% endautoescape %}
", "javascript/variables.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/javascript/variables.twig");
    }
}
