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

/* table/search/input_box.twig */
class __TwigTemplate_46c0893614f71c32037c1f7d719ab048 extends Template
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
        if ((($tmp = (isset($context["has_foreigner"]) || array_key_exists("has_foreigner", $context) ? $context["has_foreigner"] : (function () { throw new RuntimeError('Variable "has_foreigner" does not exist.', 2, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "    ";
            if (is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["foreign_data"]) || array_key_exists("foreign_data", $context) ? $context["foreign_data"] : (function () { throw new RuntimeError('Variable "foreign_data" does not exist.', 3, $this->source); })()), "dispRow", [], "any", false, false, false, 3))) {
                // line 4
                yield "        <select name=\"criteriaValues[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 4, $this->source); })()), "html", null, true);
                yield "]\"
            id=\"";
                // line 5
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_id"]) || array_key_exists("column_id", $context) ? $context["column_id"] : (function () { throw new RuntimeError('Variable "column_id" does not exist.', 5, $this->source); })()), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 5, $this->source); })()), "html", null, true);
                yield "\">
            ";
                // line 6
                yield (isset($context["foreign_dropdown"]) || array_key_exists("foreign_dropdown", $context) ? $context["foreign_dropdown"] : (function () { throw new RuntimeError('Variable "foreign_dropdown" does not exist.', 6, $this->source); })());
                yield "
        </select>
    ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 8
(isset($context["foreign_data"]) || array_key_exists("foreign_data", $context) ? $context["foreign_data"] : (function () { throw new RuntimeError('Variable "foreign_data" does not exist.', 8, $this->source); })()), "foreignLink", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 9
                yield "        <input type=\"text\"
            id=\"";
                // line 10
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_id"]) || array_key_exists("column_id", $context) ? $context["column_id"] : (function () { throw new RuntimeError('Variable "column_id" does not exist.', 10, $this->source); })()), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 10, $this->source); })()), "html", null, true);
                yield "\"
            name=\"criteriaValues[";
                // line 11
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 11, $this->source); })()), "html", null, true);
                yield "]\"
            id=\"field_";
                // line 12
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_name_hash"]) || array_key_exists("column_name_hash", $context) ? $context["column_name_hash"] : (function () { throw new RuntimeError('Variable "column_name_hash" does not exist.', 12, $this->source); })()), "html", null, true);
                yield "[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 12, $this->source); })()), "html", null, true);
                yield "]\"
            class=\"textfield\"
            ";
                // line 14
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["criteria_values"] ?? null), (isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 14, $this->source); })()), [], "array", true, true, false, 14)) {
                    // line 15
                    yield "                value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["criteria_values"]) || array_key_exists("criteria_values", $context) ? $context["criteria_values"] : (function () { throw new RuntimeError('Variable "criteria_values" does not exist.', 15, $this->source); })()), (isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 15, $this->source); })()), [], "array", false, false, false, 15), "html", null, true);
                    yield "\"
            ";
                }
                // line 16
                yield ">
        <a class=\"ajax browse_foreign\" href=\"";
                // line 17
                yield PhpMyAdmin\Url::getFromRoute("/browse-foreigners");
                yield "\" data-post=\"";
                // line 18
                yield PhpMyAdmin\Url::getCommon(["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 18, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 18, $this->source); })())], "", false);
                // line 19
                yield "&amp;field=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode((isset($context["column_name"]) || array_key_exists("column_name", $context) ? $context["column_name"] : (function () { throw new RuntimeError('Variable "column_name" does not exist.', 19, $this->source); })())), "html", null, true);
                yield "&amp;fieldkey=";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 20, $this->source); })()), "html", null, true);
                yield "&amp;fromsearch=1\">
            ";
                // line 21
                yield PhpMyAdmin\Html\Generator::getIcon("b_browse", \_gettext("Browse foreign values"));
                yield "
        </a>
    ";
            }
        } elseif (CoreExtension::inFilter(        // line 24
(isset($context["column_type"]) || array_key_exists("column_type", $context) ? $context["column_type"] : (function () { throw new RuntimeError('Variable "column_type" does not exist.', 24, $this->source); })()), PhpMyAdmin\Utils\Gis::getDataTypes())) {
            // line 25
            yield "    <input type=\"text\"
        name=\"criteriaValues[";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 26, $this->source); })()), "html", null, true);
            yield "]\"
        size=\"40\"
        class=\"textfield\"
        id=\"field_";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 29, $this->source); })()), "html", null, true);
            yield "\">
    ";
            // line 30
            if ((($tmp = (isset($context["in_fbs"]) || array_key_exists("in_fbs", $context) ? $context["in_fbs"] : (function () { throw new RuntimeError('Variable "in_fbs" does not exist.', 30, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 31
                yield "      <button type=\"button\" class=\"btn btn-link open_search_gis_editor\" data-bs-toggle=\"modal\" data-bs-target=\"#gisEditorModal\">
        ";
                // line 32
                yield PhpMyAdmin\Html\Generator::getIcon("b_edit", \_gettext("Edit/Insert"));
                yield "
      </button>
    ";
            }
        } elseif (((is_string($_v0 =         // line 35
(isset($context["column_type"]) || array_key_exists("column_type", $context) ? $context["column_type"] : (function () { throw new RuntimeError('Variable "column_type" does not exist.', 35, $this->source); })())) && is_string($_v1 = "enum") && str_starts_with($_v0, $_v1)) || ((is_string($_v2 =         // line 36
(isset($context["column_type"]) || array_key_exists("column_type", $context) ? $context["column_type"] : (function () { throw new RuntimeError('Variable "column_type" does not exist.', 36, $this->source); })())) && is_string($_v3 = "set") && str_starts_with($_v2, $_v3)) && (isset($context["in_zoom_search_edit"]) || array_key_exists("in_zoom_search_edit", $context) ? $context["in_zoom_search_edit"] : (function () { throw new RuntimeError('Variable "in_zoom_search_edit" does not exist.', 36, $this->source); })())))) {
            // line 37
            yield "    ";
            $context["in_zoom_search_edit"] = false;
            // line 38
            yield "    ";
            $context["value"] = PhpMyAdmin\Util::parseEnumSetValues((isset($context["column_type"]) || array_key_exists("column_type", $context) ? $context["column_type"] : (function () { throw new RuntimeError('Variable "column_type" does not exist.', 38, $this->source); })()));
            // line 39
            yield "    ";
            $context["cnt_value"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 39, $this->source); })()));
            // line 40
            yield "    ";
            // line 46
            yield "    ";
            if ((((is_string($_v4 = (isset($context["column_type"]) || array_key_exists("column_type", $context) ? $context["column_type"] : (function () { throw new RuntimeError('Variable "column_type" does not exist.', 46, $this->source); })())) && is_string($_v5 = "enum") && str_starts_with($_v4, $_v5)) &&  !(isset($context["in_zoom_search_edit"]) || array_key_exists("in_zoom_search_edit", $context) ? $context["in_zoom_search_edit"] : (function () { throw new RuntimeError('Variable "in_zoom_search_edit" does not exist.', 46, $this->source); })())) || ((is_string($_v6 =             // line 47
(isset($context["column_type"]) || array_key_exists("column_type", $context) ? $context["column_type"] : (function () { throw new RuntimeError('Variable "column_type" does not exist.', 47, $this->source); })())) && is_string($_v7 = "set") && str_starts_with($_v6, $_v7)) && (isset($context["in_zoom_search_edit"]) || array_key_exists("in_zoom_search_edit", $context) ? $context["in_zoom_search_edit"] : (function () { throw new RuntimeError('Variable "in_zoom_search_edit" does not exist.', 47, $this->source); })())))) {
                // line 48
                yield "        <select name=\"criteriaValues[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 48, $this->source); })()), "html", null, true);
                yield "]\"
            id=\"";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_id"]) || array_key_exists("column_id", $context) ? $context["column_id"] : (function () { throw new RuntimeError('Variable "column_id" does not exist.', 49, $this->source); })()), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 49, $this->source); })()), "html", null, true);
                yield "\">
    ";
            } else {
                // line 51
                yield "        <select name=\"criteriaValues[";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 51, $this->source); })()), "html", null, true);
                yield "]\"
            id=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_id"]) || array_key_exists("column_id", $context) ? $context["column_id"] : (function () { throw new RuntimeError('Variable "column_id" does not exist.', 52, $this->source); })()), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 52, $this->source); })()), "html", null, true);
                yield "\"
            multiple=\"multiple\"
            size=\"";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min(3, (isset($context["cnt_value"]) || array_key_exists("cnt_value", $context) ? $context["cnt_value"] : (function () { throw new RuntimeError('Variable "cnt_value" does not exist.', 54, $this->source); })())), "html", null, true);
                yield "\">
    ";
            }
            // line 56
            yield "    ";
            // line 57
            yield "    <option value=\"\"></option>
    ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, ((isset($context["cnt_value"]) || array_key_exists("cnt_value", $context) ? $context["cnt_value"] : (function () { throw new RuntimeError('Variable "cnt_value" does not exist.', 58, $this->source); })()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 59
                yield "        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["criteria_values"] ?? null), (isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 59, $this->source); })()), [], "array", true, true, false, 59) && is_iterable(CoreExtension::getAttribute($this->env, $this->source,                 // line 60
(isset($context["criteria_values"]) || array_key_exists("criteria_values", $context) ? $context["criteria_values"] : (function () { throw new RuntimeError('Variable "criteria_values" does not exist.', 60, $this->source); })()), (isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 60, $this->source); })()), [], "array", false, false, false, 60))) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,                 // line 61
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 61, $this->source); })()), $context["i"], [], "array", false, false, false, 61), CoreExtension::getAttribute($this->env, $this->source, (isset($context["criteria_values"]) || array_key_exists("criteria_values", $context) ? $context["criteria_values"] : (function () { throw new RuntimeError('Variable "criteria_values" does not exist.', 61, $this->source); })()), (isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 61, $this->source); })()), [], "array", false, false, false, 61)))) {
                    // line 62
                    yield "            <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 62, $this->source); })()), $context["i"], [], "array", false, false, false, 62);
                    yield "\" selected>
                ";
                    // line 63
                    yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 63, $this->source); })()), $context["i"], [], "array", false, false, false, 63);
                    yield "
            </option>
        ";
                } else {
                    // line 66
                    yield "            <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 66, $this->source); })()), $context["i"], [], "array", false, false, false, 66);
                    yield "\">
                ";
                    // line 67
                    yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 67, $this->source); })()), $context["i"], [], "array", false, false, false, 67);
                    yield "
            </option>
        ";
                }
                // line 70
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            yield "    </select>
";
        } else {
            // line 73
            yield "    ";
            $context["the_class"] = "textfield";
            // line 74
            yield "    ";
            if (((isset($context["column_type"]) || array_key_exists("column_type", $context) ? $context["column_type"] : (function () { throw new RuntimeError('Variable "column_type" does not exist.', 74, $this->source); })()) == "date")) {
                // line 75
                yield "        ";
                $context["the_class"] = ((isset($context["the_class"]) || array_key_exists("the_class", $context) ? $context["the_class"] : (function () { throw new RuntimeError('Variable "the_class" does not exist.', 75, $this->source); })()) . " datefield");
                // line 76
                yield "    ";
            } elseif ((((isset($context["column_type"]) || array_key_exists("column_type", $context) ? $context["column_type"] : (function () { throw new RuntimeError('Variable "column_type" does not exist.', 76, $this->source); })()) == "datetime") || (is_string($_v8 = (isset($context["column_type"]) || array_key_exists("column_type", $context) ? $context["column_type"] : (function () { throw new RuntimeError('Variable "column_type" does not exist.', 76, $this->source); })())) && is_string($_v9 = "timestamp") && str_starts_with($_v8, $_v9)))) {
                // line 77
                yield "        ";
                $context["the_class"] = ((isset($context["the_class"]) || array_key_exists("the_class", $context) ? $context["the_class"] : (function () { throw new RuntimeError('Variable "the_class" does not exist.', 77, $this->source); })()) . " datetimefield");
                // line 78
                yield "    ";
            } elseif ((is_string($_v10 = (isset($context["column_type"]) || array_key_exists("column_type", $context) ? $context["column_type"] : (function () { throw new RuntimeError('Variable "column_type" does not exist.', 78, $this->source); })())) && is_string($_v11 = "bit") && str_starts_with($_v10, $_v11))) {
                // line 79
                yield "        ";
                $context["the_class"] = ((isset($context["the_class"]) || array_key_exists("the_class", $context) ? $context["the_class"] : (function () { throw new RuntimeError('Variable "the_class" does not exist.', 79, $this->source); })()) . " bit");
                // line 80
                yield "    ";
            }
            // line 81
            yield "    <input
        ";
            // line 82
            if (((isset($context["is_integer"]) || array_key_exists("is_integer", $context) ? $context["is_integer"] : (function () { throw new RuntimeError('Variable "is_integer" does not exist.', 82, $this->source); })()) || (isset($context["is_float"]) || array_key_exists("is_float", $context) ? $context["is_float"] : (function () { throw new RuntimeError('Variable "is_float" does not exist.', 82, $this->source); })()))) {
                // line 83
                yield "            type=\"number\"
            ";
                // line 84
                if ((($tmp = (isset($context["is_integer"]) || array_key_exists("is_integer", $context) ? $context["is_integer"] : (function () { throw new RuntimeError('Variable "is_integer" does not exist.', 84, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 85
                    yield "                inputmode=\"numeric\"
            ";
                } else {
                    // line 87
                    yield "                inputmode=\"decimal\"
            ";
                }
                // line 89
                yield "        ";
            } else {
                // line 90
                yield "            type=\"text\"";
            }
            // line 92
            yield "
        name=\"criteriaValues[";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 93, $this->source); })()), "html", null, true);
            yield "]\"
        data-type=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_data_type"]) || array_key_exists("column_data_type", $context) ? $context["column_data_type"] : (function () { throw new RuntimeError('Variable "column_data_type" does not exist.', 94, $this->source); })()), "html", null, true);
            yield "\"
        ";
            // line 95
            yield (isset($context["html_attributes"]) || array_key_exists("html_attributes", $context) ? $context["html_attributes"] : (function () { throw new RuntimeError('Variable "html_attributes" does not exist.', 95, $this->source); })());
            yield "
        size=\"40\"
        class=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["the_class"]) || array_key_exists("the_class", $context) ? $context["the_class"] : (function () { throw new RuntimeError('Variable "the_class" does not exist.', 97, $this->source); })()), "html", null, true);
            yield "\"
        id=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_id"]) || array_key_exists("column_id", $context) ? $context["column_id"] : (function () { throw new RuntimeError('Variable "column_id" does not exist.', 98, $this->source); })()), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 98, $this->source); })()), "html", null, true);
            yield "\"
        ";
            // line 99
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["criteria_values"] ?? null), (isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 99, $this->source); })()), [], "array", true, true, false, 99)) {
                // line 100
                yield "           value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["criteria_values"]) || array_key_exists("criteria_values", $context) ? $context["criteria_values"] : (function () { throw new RuntimeError('Variable "criteria_values" does not exist.', 100, $this->source); })()), (isset($context["column_index"]) || array_key_exists("column_index", $context) ? $context["column_index"] : (function () { throw new RuntimeError('Variable "column_index" does not exist.', 100, $this->source); })()), [], "array", false, false, false, 100), "html", null, true);
                yield "\"";
            }
            // line 101
            yield ">
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/search/input_box.twig";
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
        return array (  310 => 101,  305 => 100,  303 => 99,  298 => 98,  294 => 97,  289 => 95,  285 => 94,  281 => 93,  278 => 92,  275 => 90,  272 => 89,  268 => 87,  264 => 85,  262 => 84,  259 => 83,  257 => 82,  254 => 81,  251 => 80,  248 => 79,  245 => 78,  242 => 77,  239 => 76,  236 => 75,  233 => 74,  230 => 73,  226 => 71,  220 => 70,  214 => 67,  209 => 66,  203 => 63,  198 => 62,  196 => 61,  195 => 60,  193 => 59,  189 => 58,  186 => 57,  184 => 56,  179 => 54,  173 => 52,  168 => 51,  162 => 49,  157 => 48,  155 => 47,  153 => 46,  151 => 40,  148 => 39,  145 => 38,  142 => 37,  140 => 36,  139 => 35,  133 => 32,  130 => 31,  128 => 30,  124 => 29,  118 => 26,  115 => 25,  113 => 24,  107 => 21,  103 => 20,  99 => 19,  97 => 18,  94 => 17,  91 => 16,  85 => 15,  83 => 14,  76 => 12,  72 => 11,  67 => 10,  64 => 9,  62 => 8,  57 => 6,  52 => 5,  47 => 4,  44 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Get inputbox based on different column types (Foreign key, geometrical, enum) #}
{% if has_foreigner %}
    {% if foreign_data.dispRow is iterable %}
        <select name=\"criteriaValues[{{ column_index }}]\"
            id=\"{{ column_id }}{{ column_index }}\">
            {{ foreign_dropdown|raw }}
        </select>
    {% elseif foreign_data.foreignLink %}
        <input type=\"text\"
            id=\"{{ column_id }}{{ column_index }}\"
            name=\"criteriaValues[{{ column_index }}]\"
            id=\"field_{{ column_name_hash }}[{{ column_index }}]\"
            class=\"textfield\"
            {% if criteria_values[column_index] is defined %}
                value=\"{{ criteria_values[column_index] }}\"
            {% endif %}>
        <a class=\"ajax browse_foreign\" href=\"{{ url('/browse-foreigners') }}\" data-post=\"
            {{- get_common({'db': db, 'table': table}, '', false) -}}
            &amp;field={{ column_name|url_encode }}&amp;fieldkey=
            {{- column_index }}&amp;fromsearch=1\">
            {{ get_icon('b_browse', t('Browse foreign values')) }}
        </a>
    {% endif %}
{% elseif column_type in get_gis_datatypes() %}
    <input type=\"text\"
        name=\"criteriaValues[{{ column_index }}]\"
        size=\"40\"
        class=\"textfield\"
        id=\"field_{{ column_index }}\">
    {% if in_fbs %}
      <button type=\"button\" class=\"btn btn-link open_search_gis_editor\" data-bs-toggle=\"modal\" data-bs-target=\"#gisEditorModal\">
        {{ get_icon('b_edit', t('Edit/Insert')) }}
      </button>
    {% endif %}
{% elseif column_type starts with 'enum'
    or (column_type starts with 'set' and in_zoom_search_edit) %}
    {% set in_zoom_search_edit = false %}
    {% set value = parse_enum_set_values(column_type) %}
    {% set cnt_value = value|length %}
    {#
    Enum in edit mode   --> dropdown
    Enum in search mode --> multiselect
    Set in edit mode    --> multiselect
    Set in search mode  --> input (skipped here, so the 'else' section would handle it)
    #}
    {% if (column_type starts with 'enum' and not in_zoom_search_edit)
        or (column_type starts with 'set' and in_zoom_search_edit) %}
        <select name=\"criteriaValues[{{ column_index }}]\"
            id=\"{{ column_id }}{{ column_index }}\">
    {% else %}
        <select name=\"criteriaValues[{{ column_index }}]\"
            id=\"{{ column_id }}{{ column_index }}\"
            multiple=\"multiple\"
            size=\"{{ min(3, cnt_value) }}\">
    {% endif %}
    {# Add select options #}
    <option value=\"\"></option>
    {% for i in 0..cnt_value - 1 %}
        {% if criteria_values[column_index] is defined
            and criteria_values[column_index] is iterable
            and value[i] in criteria_values[column_index] %}
            <option value=\"{{ value[i]|raw }}\" selected>
                {{ value[i]|raw }}
            </option>
        {% else %}
            <option value=\"{{ value[i]|raw }}\">
                {{ value[i]|raw }}
            </option>
        {% endif %}
    {% endfor %}
    </select>
{% else %}
    {% set the_class = 'textfield' %}
    {% if column_type == 'date' %}
        {% set the_class = the_class ~ ' datefield' %}
    {% elseif column_type == 'datetime' or column_type starts with 'timestamp' %}
        {% set the_class = the_class ~ ' datetimefield' %}
    {% elseif column_type starts with 'bit' %}
        {% set the_class = the_class ~ ' bit' %}
    {% endif %}
    <input
        {% if is_integer or is_float %}
            type=\"number\"
            {% if is_integer %}
                inputmode=\"numeric\"
            {% else %}
                inputmode=\"decimal\"
            {% endif %}
        {% else %}
            type=\"text\"
        {%- endif %}

        name=\"criteriaValues[{{ column_index }}]\"
        data-type=\"{{ column_data_type }}\"
        {{ html_attributes|raw }}
        size=\"40\"
        class=\"{{ the_class }}\"
        id=\"{{ column_id }}{{ column_index }}\"
        {% if criteria_values[column_index] is defined %}
           value=\"{{ criteria_values[column_index] }}\"
        {%- endif %}>
{% endif %}
", "table/search/input_box.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/search/input_box.twig");
    }
}
