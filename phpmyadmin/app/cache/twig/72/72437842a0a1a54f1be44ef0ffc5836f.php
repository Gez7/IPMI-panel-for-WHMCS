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

/* table/insert/value_column_for_other_datatype.twig */
class __TwigTemplate_04328a48303ba4e1022161dd062dcb74 extends Template
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
        yield (isset($context["backup_field"]) || array_key_exists("backup_field", $context) ? $context["backup_field"] : (function () { throw new RuntimeError('Variable "backup_field" does not exist.', 1, $this->source); })());
        yield "
";
        // line 2
        if ((($tmp = (isset($context["is_textarea"]) || array_key_exists("is_textarea", $context) ? $context["is_textarea"] : (function () { throw new RuntimeError('Variable "is_textarea" does not exist.', 2, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield (isset($context["textarea_html"]) || array_key_exists("textarea_html", $context) ? $context["textarea_html"] : (function () { throw new RuntimeError('Variable "textarea_html" does not exist.', 3, $this->source); })());
        } else {
            // line 5
            yield "  <input type=\"text\" name=\"fields";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_name_appendix"]) || array_key_exists("column_name_appendix", $context) ? $context["column_name_appendix"] : (function () { throw new RuntimeError('Variable "column_name_appendix" does not exist.', 5, $this->source); })()), "html", null, true);
            yield "\"
    value=\"";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new RuntimeError('Variable "input" does not exist.', 6, $this->source); })()), "value", [], "any", false, false, false, 6), "html", null, true);
            yield "\" size=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new RuntimeError('Variable "input" does not exist.', 6, $this->source); })()), "size", [], "any", false, false, false, 6), "html", null, true);
            yield "\"";
            // line 7
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new RuntimeError('Variable "input" does not exist.', 7, $this->source); })()), "is_char", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " data-maxlength=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new RuntimeError('Variable "input" does not exist.', 7, $this->source); })()), "size", [], "any", false, false, false, 7), "html", null, true);
                yield "\"";
            }
            // line 8
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new RuntimeError('Variable "input" does not exist.', 8, $this->source); })()), "is_integer", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " min=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new RuntimeError('Variable "input" does not exist.', 8, $this->source); })()), "min", [], "any", false, false, false, 8), "html", null, true);
                yield "\" max=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new RuntimeError('Variable "input" does not exist.', 8, $this->source); })()), "max", [], "any", false, false, false, 8), "html", null, true);
                yield "\"";
            }
            // line 9
            yield "    data-type=\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new RuntimeError('Variable "input" does not exist.', 9, $this->source); })()), "is_integer", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("INT") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new RuntimeError('Variable "input" does not exist.', 9, $this->source); })()), "data_type", [], "any", false, false, false, 9), "html", null, true)));
            yield "\"
    class=\"textfield";
            // line 10
            yield ((((isset($context["true_type"]) || array_key_exists("true_type", $context) ? $context["true_type"] : (function () { throw new RuntimeError('Variable "true_type" does not exist.', 10, $this->source); })()) == "date")) ? (" datefield") : (""));
            yield ((((isset($context["true_type"]) || array_key_exists("true_type", $context) ? $context["true_type"] : (function () { throw new RuntimeError('Variable "true_type" does not exist.', 10, $this->source); })()) == "time")) ? (" timefield") : (""));
            yield (((((isset($context["true_type"]) || array_key_exists("true_type", $context) ? $context["true_type"] : (function () { throw new RuntimeError('Variable "true_type" does not exist.', 10, $this->source); })()) == "datetime") || ((isset($context["true_type"]) || array_key_exists("true_type", $context) ? $context["true_type"] : (function () { throw new RuntimeError('Variable "true_type" does not exist.', 10, $this->source); })()) == "timestamp"))) ? (" datetimefield") : (""));
            yield "\"
    onchange=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new RuntimeError('Variable "input" does not exist.', 11, $this->source); })()), "on_change_clause", [], "any", false, false, false, 11), "html_attr");
            yield "\"
    tabindex=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new RuntimeError('Variable "input" does not exist.', 12, $this->source); })()), "field_index", [], "any", false, false, false, 12), "html", null, true);
            yield "\"";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new RuntimeError('Variable "input" does not exist.', 12, $this->source); })()), "is_integer", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" inputmode=\"numeric\"") : (""));
            yield "
    id=\"field_";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["input"]) || array_key_exists("input", $context) ? $context["input"] : (function () { throw new RuntimeError('Variable "input" does not exist.', 13, $this->source); })()), "field_index", [], "any", false, false, false, 13), "html", null, true);
            yield "_3\">";
            // line 15
            if ((CoreExtension::matches("/(VIRTUAL|PERSISTENT|GENERATED)/", (isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 15, $this->source); })())) && !CoreExtension::inFilter("DEFAULT_GENERATED", (isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 15, $this->source); })())))) {
                // line 16
                yield "<input type=\"hidden\" name=\"virtual";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_name_appendix"]) || array_key_exists("column_name_appendix", $context) ? $context["column_name_appendix"] : (function () { throw new RuntimeError('Variable "column_name_appendix" does not exist.', 16, $this->source); })()), "html", null, true);
                yield "\" value=\"1\">";
            }
            // line 18
            if (((isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 18, $this->source); })()) == "auto_increment")) {
                // line 19
                yield "<input type=\"hidden\" name=\"auto_increment";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_name_appendix"]) || array_key_exists("column_name_appendix", $context) ? $context["column_name_appendix"] : (function () { throw new RuntimeError('Variable "column_name_appendix" does not exist.', 19, $this->source); })()), "html", null, true);
                yield "\" value=\"1\">";
            }
            // line 21
            if (((((((isset($context["true_type"]) || array_key_exists("true_type", $context) ? $context["true_type"] : (function () { throw new RuntimeError('Variable "true_type" does not exist.', 21, $this->source); })()) == "bit") || ((isset($context["true_type"]) || array_key_exists("true_type", $context) ? $context["true_type"] : (function () { throw new RuntimeError('Variable "true_type" does not exist.', 21, $this->source); })()) == "uuid")) || ((isset($context["true_type"]) || array_key_exists("true_type", $context) ? $context["true_type"] : (function () { throw new RuntimeError('Variable "true_type" does not exist.', 21, $this->source); })()) == "timestamp")) || ((isset($context["true_type"]) || array_key_exists("true_type", $context) ? $context["true_type"] : (function () { throw new RuntimeError('Variable "true_type" does not exist.', 21, $this->source); })()) == "datetime")) || ((isset($context["true_type"]) || array_key_exists("true_type", $context) ? $context["true_type"] : (function () { throw new RuntimeError('Variable "true_type" does not exist.', 21, $this->source); })()) == "date"))) {
                // line 22
                yield "<input type=\"hidden\" name=\"fields_type";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_name_appendix"]) || array_key_exists("column_name_appendix", $context) ? $context["column_name_appendix"] : (function () { throw new RuntimeError('Variable "column_name_appendix" does not exist.', 22, $this->source); })()), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["true_type"]) || array_key_exists("true_type", $context) ? $context["true_type"] : (function () { throw new RuntimeError('Variable "true_type" does not exist.', 22, $this->source); })()), "html", null, true);
                yield "\">";
            }
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/insert/value_column_for_other_datatype.twig";
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
        return array (  115 => 22,  113 => 21,  108 => 19,  106 => 18,  101 => 16,  99 => 15,  96 => 13,  90 => 12,  86 => 11,  80 => 10,  75 => 9,  67 => 8,  61 => 7,  56 => 6,  51 => 5,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ backup_field|raw }}
{% if is_textarea %}
  {{- textarea_html|raw -}}
{% else %}
  <input type=\"text\" name=\"fields{{ column_name_appendix }}\"
    value=\"{{ input.value }}\" size=\"{{ input.size }}\"
    {%- if input.is_char %} data-maxlength=\"{{ input.size }}\"{% endif %}
    {%- if input.is_integer %} min=\"{{ input.min }}\" max=\"{{ input.max }}\"{% endif %}
    data-type=\"{{ input.is_integer ? 'INT' : input.data_type }}\"
    class=\"textfield{{ true_type == 'date' ? ' datefield' }}{{ true_type == 'time' ? ' timefield' }}{{ true_type == 'datetime' or true_type == 'timestamp' ? ' datetimefield' }}\"
    onchange=\"{{ input.on_change_clause|e('html_attr') }}\"
    tabindex=\"{{ input.field_index }}\"{{ input.is_integer ? ' inputmode=\"numeric\"' }}
    id=\"field_{{ input.field_index }}_3\">

  {%- if extra matches '/(VIRTUAL|PERSISTENT|GENERATED)/' and 'DEFAULT_GENERATED' not in extra -%}
    <input type=\"hidden\" name=\"virtual{{ column_name_appendix }}\" value=\"1\">
  {%- endif -%}
  {%- if extra == 'auto_increment' -%}
    <input type=\"hidden\" name=\"auto_increment{{ column_name_appendix }}\" value=\"1\">
  {%- endif -%}
  {%- if true_type == 'bit' or true_type == 'uuid' or true_type == 'timestamp' or true_type == 'datetime' or true_type == 'date' -%}
    <input type=\"hidden\" name=\"fields_type{{ column_name_appendix }}\" value=\"{{ true_type }}\">
  {%- endif -%}
{% endif %}
", "table/insert/value_column_for_other_datatype.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/insert/value_column_for_other_datatype.twig");
    }
}
