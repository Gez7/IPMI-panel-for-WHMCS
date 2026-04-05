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

/* sql/set_column.twig */
class __TwigTemplate_2d115ffad5991b9c58efac22d874a784 extends Template
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
        $context["values_amount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 1, $this->source); })()));
        // line 2
        yield "<select class=\"resize-vertical\" size=\"";
        yield ((((isset($context["values_amount"]) || array_key_exists("values_amount", $context) ? $context["values_amount"] : (function () { throw new RuntimeError('Variable "values_amount" does not exist.', 2, $this->source); })()) < 10)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["values_amount"]) || array_key_exists("values_amount", $context) ? $context["values_amount"] : (function () { throw new RuntimeError('Variable "values_amount" does not exist.', 2, $this->source); })()), "html", null, true)) : (10));
        yield "\" multiple>
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 4
            yield "    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\"";
            yield ((CoreExtension::inFilter($context["value"], (isset($context["current_values"]) || array_key_exists("current_values", $context) ? $context["current_values"] : (function () { throw new RuntimeError('Variable "current_values" does not exist.', 4, $this->source); })()))) ? (" selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        yield "</select>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sql/set_column.twig";
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
        return array (  66 => 6,  53 => 4,  49 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set values_amount = values|length %}
<select class=\"resize-vertical\" size=\"{{ values_amount < 10 ? values_amount : 10 }}\" multiple>
  {% for value in values %}
    <option value=\"{{ value }}\"{{ value in current_values ? ' selected' }}>{{ value }}</option>
  {% endfor %}
</select>
", "sql/set_column.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/sql/set_column.twig");
    }
}
