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

/* table/zoom_search/index.twig */
class __TwigTemplate_3e559195dd9b218ec9ec37fead856cfc extends Template
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
        yield "<ul class=\"nav nav-pills m-2\">
  <li class=\"nav-item\">
    <a class=\"nav-link disableAjax\" href=\"";
        // line 3
        yield PhpMyAdmin\Url::getFromRoute("/table/search", ["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 3, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 3, $this->source); })()), "pos" => 0]);
        yield "\">
      ";
        // line 4
        yield PhpMyAdmin\Html\Generator::getIcon("b_search", \_gettext("Table search"), false, false, "TabsMode");
        yield "
    </a>
  </li>

  <li class=\"nav-item\">
    <a class=\"nav-link active disableAjax\" href=\"";
        // line 9
        yield PhpMyAdmin\Url::getFromRoute("/table/zoom-search", ["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 9, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 9, $this->source); })())]);
        yield "\">
      ";
        // line 10
        yield PhpMyAdmin\Html\Generator::getIcon("b_select", \_gettext("Zoom search"), false, false, "TabsMode");
        yield "
    </a>
  </li>

  <li class=\"nav-item\">
    <a class=\"nav-link disableAjax\" href=\"";
        // line 15
        yield PhpMyAdmin\Url::getFromRoute("/table/find-replace", ["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 15, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 15, $this->source); })())]);
        yield "\">
      ";
        // line 16
        yield PhpMyAdmin\Html\Generator::getIcon("b_find_replace", \_gettext("Find and replace"), false, false, "TabsMode");
        yield "
    </a>
  </li>
</ul>

<form method=\"post\" action=\"";
        // line 21
        yield PhpMyAdmin\Url::getFromRoute("/table/zoom-search", ["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 21, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 21, $this->source); })())]);
        yield "\" name=\"insertForm\" id=\"zoom_search_form\" class=\"ajax lock-page\">
  ";
        // line 22
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 22, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 22, $this->source); })()));
        yield "
  <input type=\"hidden\" name=\"goto\" value=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["goto"]) || array_key_exists("goto", $context) ? $context["goto"] : (function () { throw new RuntimeError('Variable "goto" does not exist.', 23, $this->source); })()), "html", null, true);
        yield "\">
  <input type=\"hidden\" name=\"back\" value=\"";
        // line 24
        yield PhpMyAdmin\Url::getFromRoute("/table/zoom-search", ["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 24, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 24, $this->source); })())]);
        yield "\">

  <div class=\"card mb-3\">
    <div class=\"card-header\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Do a \"query by example\" (wildcard: \"%\") for two different columns"), "html", null, true);
        yield "</div>

    <div class=\"card-body\" id=\"inputSection\">
      <table class=\"table table-striped table-hover table-sm w-auto\" id=\"tableFieldsId\">
        <thead>
          <tr>
            ";
        // line 33
        if ((($tmp = (isset($context["geom_column_flag"]) || array_key_exists("geom_column_flag", $context) ? $context["geom_column_flag"] : (function () { throw new RuntimeError('Variable "geom_column_flag" does not exist.', 33, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "              <th>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Function"), "html", null, true);
            yield "</th>
            ";
        }
        // line 36
        yield "            <th>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Column"), "html", null, true);
        yield "</th>
            <th>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Type"), "html", null, true);
        yield "</th>
            <th>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Collation"), "html", null, true);
        yield "</th>
            <th>";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Operator"), "html", null, true);
        yield "</th>
            <th>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Value"), "html", null, true);
        yield "</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 44
        $context["type"] = [];
        // line 45
        yield "          ";
        $context["collation"] = [];
        // line 46
        yield "          ";
        $context["func"] = [];
        // line 47
        yield "          ";
        $context["value"] = [];
        // line 48
        yield "
          ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 50
            yield "            ";
            // line 51
            yield "            ";
            if (($context["i"] == 2)) {
                // line 52
                yield "              <tr>
                <th>
                  ";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Additional search criteria"), "html", null, true);
                yield "
                </th>
              </tr>
            ";
            }
            // line 58
            yield "            <tr class=\"noclick\">
              <th>
                <select name=\"criteriaColumnNames[]\" id=\"tableid_";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\">
                  <option value=\"pma_null\">
                    ";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("None"), "html", null, true);
            yield "
                  </option>
                  ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 64, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                // line 65
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["criteria_column_names"] ?? null), $context["i"], [], "array", true, true, false, 65) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["criteria_column_names"]) || array_key_exists("criteria_column_names", $context) ? $context["criteria_column_names"] : (function () { throw new RuntimeError('Variable "criteria_column_names" does not exist.', 65, $this->source); })()), $context["i"], [], "array", false, false, false, 65) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 65, $this->source); })()), $context["j"], [], "array", false, false, false, 65)))) {
                    // line 66
                    yield "                      <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 66, $this->source); })()), $context["j"], [], "array", false, false, false, 66), "html", null, true);
                    yield "\" selected>
                        ";
                    // line 67
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 67, $this->source); })()), $context["j"], [], "array", false, false, false, 67), "html", null, true);
                    yield "
                      </option>
                    ";
                } else {
                    // line 70
                    yield "                      <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 70, $this->source); })()), $context["j"], [], "array", false, false, false, 70), "html", null, true);
                    yield "\">
                        ";
                    // line 71
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 71, $this->source); })()), $context["j"], [], "array", false, false, false, 71), "html", null, true);
                    yield "
                      </option>
                    ";
                }
                // line 74
                yield "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['j'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            yield "                </select>
              </th>
              ";
            // line 77
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["criteria_column_names"] ?? null), $context["i"], [], "array", true, true, false, 77) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["criteria_column_names"]) || array_key_exists("criteria_column_names", $context) ? $context["criteria_column_names"] : (function () { throw new RuntimeError('Variable "criteria_column_names" does not exist.', 77, $this->source); })()), $context["i"], [], "array", false, false, false, 77) != "pma_null"))) {
                // line 78
                yield "                ";
                $context["type"] = Twig\Extension\CoreExtension::merge((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 78, $this->source); })()), [ (string)$context["i"] => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 78, $this->source); })()), $context["i"], [], "array", false, false, false, 78), "type", [], "array", false, false, false, 78)]);
                // line 79
                yield "                ";
                $context["collation"] = Twig\Extension\CoreExtension::merge((isset($context["collation"]) || array_key_exists("collation", $context) ? $context["collation"] : (function () { throw new RuntimeError('Variable "collation" does not exist.', 79, $this->source); })()), [ (string)$context["i"] => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 79, $this->source); })()), $context["i"], [], "array", false, false, false, 79), "collation", [], "array", false, false, false, 79)]);
                // line 80
                yield "                ";
                $context["func"] = Twig\Extension\CoreExtension::merge((isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new RuntimeError('Variable "func" does not exist.', 80, $this->source); })()), [ (string)$context["i"] => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 80, $this->source); })()), $context["i"], [], "array", false, false, false, 80), "func", [], "array", false, false, false, 80)]);
                // line 81
                yield "                ";
                $context["value"] = Twig\Extension\CoreExtension::merge((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 81, $this->source); })()), [ (string)$context["i"] => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 81, $this->source); })()), $context["i"], [], "array", false, false, false, 81), "value", [], "array", false, false, false, 81)]);
                // line 82
                yield "              ";
            }
            // line 83
            yield "              ";
            // line 84
            yield "              <td dir=\"ltr\">
                ";
            // line 85
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["type"] ?? null), $context["i"], [], "array", true, true, false, 85)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 85, $this->source); })()), $context["i"], [], "array", false, false, false, 85), "html", null, true)) : (""));
            yield "
              </td>
              ";
            // line 88
            yield "              <td>
                ";
            // line 89
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["collation"] ?? null), $context["i"], [], "array", true, true, false, 89)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collation"]) || array_key_exists("collation", $context) ? $context["collation"] : (function () { throw new RuntimeError('Variable "collation" does not exist.', 89, $this->source); })()), $context["i"], [], "array", false, false, false, 89), "html", null, true)) : (""));
            yield "
              </td>
              ";
            // line 92
            yield "              <td>
                ";
            // line 93
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["func"] ?? null), $context["i"], [], "array", true, true, false, 93)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["func"]) || array_key_exists("func", $context) ? $context["func"] : (function () { throw new RuntimeError('Variable "func" does not exist.', 93, $this->source); })()), $context["i"], [], "array", false, false, false, 93)) : (""));
            yield "
              </td>
              ";
            // line 96
            yield "              <td>
                ";
            // line 97
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), $context["i"], [], "array", true, true, false, 97)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 97, $this->source); })()), $context["i"], [], "array", false, false, false, 97)) : (""));
            yield "
              </td>
              <td>
                ";
            // line 101
            yield "                <input type=\"hidden\" name=\"criteriaColumnTypes[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "]\" id=\"types_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\"";
            // line 102
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["criteria_column_types"] ?? null), $context["i"], [], "array", true, true, false, 102)) {
                yield " value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["criteria_column_types"]) || array_key_exists("criteria_column_types", $context) ? $context["criteria_column_types"] : (function () { throw new RuntimeError('Variable "criteria_column_types" does not exist.', 102, $this->source); })()), $context["i"], [], "array", false, false, false, 102), "html", null, true);
                yield "\"";
            }
            yield ">
                <input type=\"hidden\" name=\"criteriaColumnCollations[";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "]\" id=\"collations_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\">
              </td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        yield "        </tbody>
      </table>

      <table class=\"table table-borderless table-sm w-auto\">
        <tr>
          <td>
            <label for=\"dataLabel\">
              ";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Use this column to label each point"), "html", null, true);
        yield "
            </label>
          </td>
          <td>
            <select name=\"dataLabel\" id=\"dataLabel\">
              <option value=\"\">
                ";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("None"), "html", null, true);
        yield "
              </option>
              ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 122, $this->source); })())) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 123
            yield "                ";
            if ((array_key_exists("data_label", $context) && ((isset($context["data_label"]) || array_key_exists("data_label", $context) ? $context["data_label"] : (function () { throw new RuntimeError('Variable "data_label" does not exist.', 123, $this->source); })()) == $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 123, $this->source); })()), $context["i"], [], "array", false, false, false, 123))))) {
                // line 124
                yield "                  <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 124, $this->source); })()), $context["i"], [], "array", false, false, false, 124), "html", null, true);
                yield "\" selected>
                    ";
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 125, $this->source); })()), $context["i"], [], "array", false, false, false, 125), "html", null, true);
                yield "
                  </option>
                ";
            } else {
                // line 128
                yield "                  <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 128, $this->source); })()), $context["i"], [], "array", false, false, false, 128), "html", null, true);
                yield "\">
                    ";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 129, $this->source); })()), $context["i"], [], "array", false, false, false, 129), "html", null, true);
                yield "
                  </option>
                ";
            }
            // line 132
            yield "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        yield "            </select>
          </td>
        </tr>
        <tr>
          <td>
            <label for=\"maxRowPlotLimit\">
              ";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Maximum rows to plot"), "html", null, true);
        yield "
            </label>
          </td>
          <td>
            <input type=\"number\" name=\"maxPlotLimit\" id=\"maxRowPlotLimit\" required value=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["max_plot_limit"]) || array_key_exists("max_plot_limit", $context) ? $context["max_plot_limit"] : (function () { throw new RuntimeError('Variable "max_plot_limit" does not exist.', 143, $this->source); })()), "html", null, true);
        yield "\">
          </td>
        </tr>
      </table>

      ";
        // line 148
        yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/gis_editor.twig");
        yield "
    </div>

    <div class=\"card-footer\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"zoom_submit\" id=\"inputFormSubmitId\" value=\"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
        yield "\">
    </div>
  </div>
</form>
<div id=\"sqlqueryresultsouter\"></div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/zoom_search/index.twig";
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
        return array (  394 => 152,  387 => 148,  379 => 143,  372 => 139,  364 => 133,  358 => 132,  352 => 129,  347 => 128,  341 => 125,  336 => 124,  333 => 123,  329 => 122,  324 => 120,  315 => 114,  306 => 107,  294 => 103,  286 => 102,  280 => 101,  274 => 97,  271 => 96,  266 => 93,  263 => 92,  258 => 89,  255 => 88,  250 => 85,  247 => 84,  245 => 83,  242 => 82,  239 => 81,  236 => 80,  233 => 79,  230 => 78,  228 => 77,  224 => 75,  218 => 74,  212 => 71,  207 => 70,  201 => 67,  196 => 66,  193 => 65,  189 => 64,  184 => 62,  179 => 60,  175 => 58,  168 => 54,  164 => 52,  161 => 51,  159 => 50,  155 => 49,  152 => 48,  149 => 47,  146 => 46,  143 => 45,  141 => 44,  134 => 40,  130 => 39,  126 => 38,  122 => 37,  117 => 36,  111 => 34,  109 => 33,  100 => 27,  94 => 24,  90 => 23,  86 => 22,  82 => 21,  74 => 16,  70 => 15,  62 => 10,  58 => 9,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<ul class=\"nav nav-pills m-2\">
  <li class=\"nav-item\">
    <a class=\"nav-link disableAjax\" href=\"{{ url('/table/search', {'db': db, 'table': table, 'pos': 0}) }}\">
      {{ get_icon('b_search', t('Table search'), false, false, 'TabsMode') }}
    </a>
  </li>

  <li class=\"nav-item\">
    <a class=\"nav-link active disableAjax\" href=\"{{ url('/table/zoom-search', {'db': db, 'table': table}) }}\">
      {{ get_icon('b_select', t('Zoom search'), false, false, 'TabsMode') }}
    </a>
  </li>

  <li class=\"nav-item\">
    <a class=\"nav-link disableAjax\" href=\"{{ url('/table/find-replace', {'db': db, 'table': table}) }}\">
      {{ get_icon('b_find_replace', t('Find and replace'), false, false, 'TabsMode') }}
    </a>
  </li>
</ul>

<form method=\"post\" action=\"{{ url('/table/zoom-search', {'db': db, 'table': table}) }}\" name=\"insertForm\" id=\"zoom_search_form\" class=\"ajax lock-page\">
  {{ get_hidden_inputs(db, table) }}
  <input type=\"hidden\" name=\"goto\" value=\"{{ goto }}\">
  <input type=\"hidden\" name=\"back\" value=\"{{ url('/table/zoom-search', {'db': db, 'table': table}) }}\">

  <div class=\"card mb-3\">
    <div class=\"card-header\">{{ t('Do a \"query by example\" (wildcard: \"%\") for two different columns') }}</div>

    <div class=\"card-body\" id=\"inputSection\">
      <table class=\"table table-striped table-hover table-sm w-auto\" id=\"tableFieldsId\">
        <thead>
          <tr>
            {% if geom_column_flag %}
              <th>{{ t('Function') }}</th>
            {% endif %}
            <th>{{ t('Column') }}</th>
            <th>{{ t('Type') }}</th>
            <th>{{ t('Collation') }}</th>
            <th>{{ t('Operator') }}</th>
            <th>{{ t('Value') }}</th>
          </tr>
        </thead>
        <tbody>
          {% set type = [] %}
          {% set collation = [] %}
          {% set func = [] %}
          {% set value = [] %}

          {% for i in 0..3 %}
            {# After X-Axis and Y-Axis column rows, display additional criteria option #}
            {% if i == 2 %}
              <tr>
                <th>
                  {{ t('Additional search criteria') }}
                </th>
              </tr>
            {% endif %}
            <tr class=\"noclick\">
              <th>
                <select name=\"criteriaColumnNames[]\" id=\"tableid_{{ i }}\">
                  <option value=\"pma_null\">
                    {{ t('None') }}
                  </option>
                  {% for j in 0..column_names|length - 1 %}
                    {% if criteria_column_names[i] is defined and criteria_column_names[i] == column_names[j] %}
                      <option value=\"{{ column_names[j] }}\" selected>
                        {{ column_names[j] }}
                      </option>
                    {% else %}
                      <option value=\"{{ column_names[j] }}\">
                        {{ column_names[j] }}
                      </option>
                    {% endif %}
                  {% endfor %}
                </select>
              </th>
              {% if criteria_column_names[i] is defined and criteria_column_names[i] != 'pma_null' %}
                {% set type = type|merge({(i): properties[i]['type']}) %}
                {% set collation = collation|merge({(i): properties[i]['collation']}) %}
                {% set func = func|merge({(i): properties[i]['func']}) %}
                {% set value = value|merge({(i): properties[i]['value']}) %}
              {% endif %}
              {# Column type #}
              <td dir=\"ltr\">
                {{ type[i] is defined ? type[i] }}
              </td>
              {# Column Collation #}
              <td>
                {{ collation[i] is defined ? collation[i] }}
              </td>
              {# Select options for column operators #}
              <td>
                {{ func[i] is defined ? func[i]|raw }}
              </td>
              {# Inputbox for search criteria value #}
              <td>
                {{ value[i] is defined ? value[i]|raw }}
              </td>
              <td>
                {# Displays hidden fields #}
                <input type=\"hidden\" name=\"criteriaColumnTypes[{{ i }}]\" id=\"types_{{ i }}\"
                  {%- if criteria_column_types[i] is defined %} value=\"{{ criteria_column_types[i] }}\"{% endif %}>
                <input type=\"hidden\" name=\"criteriaColumnCollations[{{ i }}]\" id=\"collations_{{ i }}\">
              </td>
            </tr>
          {% endfor %}
        </tbody>
      </table>

      <table class=\"table table-borderless table-sm w-auto\">
        <tr>
          <td>
            <label for=\"dataLabel\">
              {{ t('Use this column to label each point') }}
            </label>
          </td>
          <td>
            <select name=\"dataLabel\" id=\"dataLabel\">
              <option value=\"\">
                {{ t('None') }}
              </option>
              {% for i in 0..column_names|length - 1 %}
                {% if data_label is defined and data_label == column_names[i]|e %}
                  <option value=\"{{ column_names[i] }}\" selected>
                    {{ column_names[i] }}
                  </option>
                {% else %}
                  <option value=\"{{ column_names[i] }}\">
                    {{ column_names[i] }}
                  </option>
                {% endif %}
              {% endfor %}
            </select>
          </td>
        </tr>
        <tr>
          <td>
            <label for=\"maxRowPlotLimit\">
              {{ t('Maximum rows to plot') }}
            </label>
          </td>
          <td>
            <input type=\"number\" name=\"maxPlotLimit\" id=\"maxRowPlotLimit\" required value=\"{{ max_plot_limit }}\">
          </td>
        </tr>
      </table>

      {{ include('modals/gis_editor.twig') }}
    </div>

    <div class=\"card-footer\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"zoom_submit\" id=\"inputFormSubmitId\" value=\"{{ t('Go') }}\">
    </div>
  </div>
</form>
<div id=\"sqlqueryresultsouter\"></div>
", "table/zoom_search/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/zoom_search/index.twig");
    }
}
