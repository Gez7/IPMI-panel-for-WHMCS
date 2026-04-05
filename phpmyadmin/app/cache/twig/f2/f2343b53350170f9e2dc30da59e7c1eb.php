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

/* columns_definitions/column_name.twig */
class __TwigTemplate_971d062d051d3578b7ad8ccdd2d4bf8e extends Template
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
        $context["title"] = "";
        // line 2
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "column_status", [], "array", true, true, false, 2)) {
            // line 3
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 3, $this->source); })()), "column_status", [], "array", false, false, false, 3), "isReferenced", [], "array", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 4
                yield "        ";
                $context["title"] = ((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })()) . Twig\Extension\CoreExtension::sprintf(\_gettext("Referenced by %s."), Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 5
(isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 5, $this->source); })()), "column_status", [], "array", false, false, false, 5), "references", [], "array", false, false, false, 5), ",")));
                // line 7
                yield "    ";
            }
            // line 8
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 8, $this->source); })()), "column_status", [], "array", false, false, false, 8), "isForeignKey", [], "array", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 9
                yield "        ";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 9, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 10
                    yield "            ";
                    $context["title"] = ((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 10, $this->source); })()) . "
");
                    // line 11
                    yield "        ";
                }
                // line 12
                yield "        ";
                $context["title"] = ((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 12, $this->source); })()) . \_gettext("Is a foreign key."));
                // line 13
                yield "    ";
            }
        }
        // line 15
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 15, $this->source); })()))) {
            // line 16
            yield "    ";
            $context["title"] = \_gettext("Column");
        }
        // line 18
        yield "
<input id=\"field_";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 19, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 19, $this->source); })())), "html", null, true);
        yield "\"
    ";
        // line 20
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "column_status", [], "array", true, true, false, 20) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 21
(isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 21, $this->source); })()), "column_status", [], "array", false, false, false, 21), "isEditable", [], "array", false, false, false, 21))) {
            // line 22
            yield "        disabled
    ";
        }
        // line 24
        yield "    type=\"text\"
    name=\"field_name[";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 25, $this->source); })()), "html", null, true);
        yield "]\"
    maxlength=\"64\"
    class=\"textfield form-control\"
    title=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "\"
    size=\"10\"
    value=\"";
        // line 30
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["column_meta"] ?? null), "Field", [], "array", true, true, false, 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 30, $this->source); })()), "Field", [], "array", false, false, false, 30), "html", null, true)) : (""));
        yield "\">

";
        // line 32
        if (((isset($context["has_central_columns_feature"]) || array_key_exists("has_central_columns_feature", $context) ? $context["has_central_columns_feature"] : (function () { throw new RuntimeError('Variable "has_central_columns_feature" does not exist.', 32, $this->source); })()) &&  !(CoreExtension::getAttribute($this->env, $this->source,         // line 33
($context["column_meta"] ?? null), "column_status", [], "array", true, true, false, 33) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 34
(isset($context["column_meta"]) || array_key_exists("column_meta", $context) ? $context["column_meta"] : (function () { throw new RuntimeError('Variable "column_meta" does not exist.', 34, $this->source); })()), "column_status", [], "array", false, false, false, 34), "isEditable", [], "array", false, false, false, 34)))) {
            // line 35
            yield "    <p class=\"column_name\" id=\"central_columns_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_number"]) || array_key_exists("column_number", $context) ? $context["column_number"] : (function () { throw new RuntimeError('Variable "column_number" does not exist.', 35, $this->source); })()), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["ci"]) || array_key_exists("ci", $context) ? $context["ci"] : (function () { throw new RuntimeError('Variable "ci" does not exist.', 35, $this->source); })()) - (isset($context["ci_offset"]) || array_key_exists("ci_offset", $context) ? $context["ci_offset"] : (function () { throw new RuntimeError('Variable "ci_offset" does not exist.', 35, $this->source); })())), "html", null, true);
            yield "\">
        <a data-maxrows=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["max_rows"]) || array_key_exists("max_rows", $context) ? $context["max_rows"] : (function () { throw new RuntimeError('Variable "max_rows" does not exist.', 36, $this->source); })()), "html", null, true);
            yield "\"
            href=\"#\"
            class=\"central_columns_dialog\">
            ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Pick from Central Columns"), "html", null, true);
            yield "
        </a>
    </p>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "columns_definitions/column_name.twig";
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
        return array (  134 => 39,  128 => 36,  121 => 35,  119 => 34,  118 => 33,  117 => 32,  112 => 30,  107 => 28,  101 => 25,  98 => 24,  94 => 22,  92 => 21,  91 => 20,  85 => 19,  82 => 18,  78 => 16,  76 => 15,  72 => 13,  69 => 12,  66 => 11,  62 => 10,  59 => 9,  56 => 8,  53 => 7,  51 => 5,  49 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set title = '' %}
{% if column_meta['column_status'] is defined %}
    {% if column_meta['column_status']['isReferenced'] %}
        {% set title = title ~ t('Referenced by %s.')|format(
            column_meta['column_status']['references']|join(',')
        ) %}
    {% endif %}
    {% if column_meta['column_status']['isForeignKey'] %}
        {% if title is not empty %}
            {% set title = title ~ '\\n'|raw %}
        {% endif %}
        {% set title = title ~ t('Is a foreign key.') %}
    {% endif %}
{% endif %}
{% if title is empty %}
    {% set title = t('Column') %}
{% endif %}

<input id=\"field_{{ column_number }}_{{ ci - ci_offset }}\"
    {% if column_meta['column_status'] is defined
        and not column_meta['column_status']['isEditable'] %}
        disabled
    {% endif %}
    type=\"text\"
    name=\"field_name[{{ column_number }}]\"
    maxlength=\"64\"
    class=\"textfield form-control\"
    title=\"{{ title }}\"
    size=\"10\"
    value=\"{{ column_meta['Field'] is defined ? column_meta['Field'] }}\">

{% if has_central_columns_feature
    and not (column_meta['column_status'] is defined
        and not column_meta['column_status']['isEditable']) %}
    <p class=\"column_name\" id=\"central_columns_{{ column_number }}_{{ ci - ci_offset }}\">
        <a data-maxrows=\"{{ max_rows }}\"
            href=\"#\"
            class=\"central_columns_dialog\">
            {{ t('Pick from Central Columns') }}
        </a>
    </p>
{% endif %}
", "columns_definitions/column_name.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/columns_definitions/column_name.twig");
    }
}
