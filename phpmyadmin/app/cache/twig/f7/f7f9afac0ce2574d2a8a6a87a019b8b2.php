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

/* columns_definitions/column_attribute.twig */
class __TwigTemplate_db987ebf683ce738ab87f347ea7cafa5 extends Template
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
        if ((array_key_exists("submit_attribute", $context) && ((isset($context["submit_attribute"]) || array_key_exists("submit_attribute", $context) ? $context["submit_attribute"] : (function () { throw new RuntimeError('Variable "submit_attribute" does not exist.', 1, $this->source); })()) != false))) {
            // line 2
            yield "    ";
            $context["attribute"] = (isset($context["submit_attribute"]) || array_key_exists("submit_attribute", $context) ? $context["submit_attribute"] : (function () { throw new RuntimeError('Variable "submit_attribute" does not exist.', 2, $this->source); })());
            // line 3
            yield "    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 4
($context["column_meta"] ?? null), "Extra", [], "array", true, true, false, 4) && (CoreExtension::inFilter("on update current_timestamp", Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 5
(isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 5, $this->source); })()), "Extra", [], "array", false, false, false, 5))) || CoreExtension::inFilter("on update current_timestamp()", Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 5, $this->source); })()), "Extra", [], "array", false, false, false, 5)))))) {
            // line 6
            yield "    ";
            $context["attribute"] = "on update CURRENT_TIMESTAMP";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 7
($context["extracted_columnspec"] ?? null), "attribute", [], "array", true, true, false, 7)) {
            // line 8
            yield "    ";
            $context["attribute"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["extracted_columnspec"]) || array_key_exists("extracted_columnspec", $context) ? $context["extracted_columnspec"] : (function () { throw new RuntimeError('Variable "extracted_columnspec" does not exist.', 8, $this->source); })()), "attribute", [], "array", false, false, false, 8);
        } else {
            // line 10
            yield "    ";
            $context["attribute"] = "";
        }
        // line 12
        $context["attribute"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 12, $this->source); })()));
        // line 13
        yield "<select name=\"field_attribute[";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "]\"
    id=\"field_";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 14, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 14, $this->source); })())), "html", null, true);
        yield "\" class=\"form-select\">
    ";
        // line 15
        $context["cnt_attribute_types"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["attribute_types"]) || array_key_exists("attribute_types", $context) ? $context["attribute_types"] : (function () { throw new RuntimeError('Variable "attribute_types" does not exist.', 15, $this->source); })())) - 1);
        // line 16
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, (isset($context["cnt_attribute_types"]) || array_key_exists("cnt_attribute_types", $context) ? $context["cnt_attribute_types"] : (function () { throw new RuntimeError('Variable "cnt_attribute_types" does not exist.', 16, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 17
            yield "        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attribute_types"]) || array_key_exists("attribute_types", $context) ? $context["attribute_types"] : (function () { throw new RuntimeError('Variable "attribute_types" does not exist.', 17, $this->source); })()), $context["i"], [], "array", false, false, false, 17), "html", null, true);
            yield "\"";
            // line 18
            yield ((((isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 18, $this->source); })()) == Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["attribute_types"]) || array_key_exists("attribute_types", $context) ? $context["attribute_types"] : (function () { throw new RuntimeError('Variable "attribute_types" does not exist.', 18, $this->source); })()), $context["i"], [], "array", false, false, false, 18)))) ? (" selected") : (""));
            yield ">
            ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attribute_types"]) || array_key_exists("attribute_types", $context) ? $context["attribute_types"] : (function () { throw new RuntimeError('Variable "attribute_types" does not exist.', 19, $this->source); })()), $context["i"], [], "array", false, false, false, 19), "html", null, true);
            yield "
        </option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "</select>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "columns_definitions/column_attribute.twig";
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
        return array (  102 => 22,  93 => 19,  89 => 18,  85 => 17,  80 => 16,  78 => 15,  72 => 14,  67 => 13,  65 => 12,  61 => 10,  57 => 8,  55 => 7,  52 => 6,  50 => 5,  49 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if submit_attribute is defined and submit_attribute != false %}
    {% set attribute = submit_attribute %}
    {# MariaDB has additional parentheses #}
{% elseif column_meta['Extra'] is defined
    and ('on update current_timestamp' in column_meta['Extra']|lower or 'on update current_timestamp()' in column_meta['Extra']|lower) %}
    {% set attribute = 'on update CURRENT_TIMESTAMP' %}
{% elseif extracted_columnspec['attribute'] is defined %}
    {% set attribute = extracted_columnspec['attribute'] %}
{% else %}
    {% set attribute = '' %}
{% endif %}
{% set attribute = attribute|upper %}
<select name=\"field_attribute[{{ column_number }}]\"
    id=\"field_{{ column_number }}_{{ ci - ci_offset }}\" class=\"form-select\">
    {% set cnt_attribute_types = attribute_types|length - 1 %}
    {% for i in 0..cnt_attribute_types %}
        <option value=\"{{ attribute_types[i] }}\"
            {{- attribute == attribute_types[i]|upper ? ' selected' }}>
            {{ attribute_types[i] }}
        </option>
    {% endfor %}
</select>
", "columns_definitions/column_attribute.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/columns_definitions/column_attribute.twig");
    }
}
