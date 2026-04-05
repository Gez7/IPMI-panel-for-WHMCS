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

/* database/search/main.twig */
class __TwigTemplate_d10dad65ab28120d31b11b2286417f94 extends Template
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
        yield "<div class=\"container\">
  <h2>";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Search in database"), "html", null, true);
        yield "</h2>

  <a id=\"db_search\"></a>
  <form id=\"db_search_form\" method=\"post\" action=\"";
        // line 5
        yield PhpMyAdmin\Url::getFromRoute("/database/search");
        yield "\" name=\"db_search\" class=\"card mb-3 ajax lock-page\">
    ";
        // line 6
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 6, $this->source); })()));
        yield "
    <div class=\"card-body\">
      <div class=\"mb-3\">
        <label for=\"criteriaSearchString\" class=\"form-label\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Words or values to search for (wildcard: \"%\"):"), "html", null, true);
        yield "</label>
        <input type=\"text\" class=\"form-control\" id=\"criteriaSearchString\" name=\"criteriaSearchString\" value=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["criteria_search_string"]) || array_key_exists("criteria_search_string", $context) ? $context["criteria_search_string"] : (function () { throw new RuntimeError('Variable "criteria_search_string" does not exist.', 10, $this->source); })()), "html", null, true);
        yield "\">
      </div>

      <fieldset class=\"mb-3\">
        <legend>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Find:"), "html", null, true);
        yield "</legend>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio1\" value=\"1\"";
        // line 17
        yield ((((isset($context["criteria_search_type"]) || array_key_exists("criteria_search_type", $context) ? $context["criteria_search_type"] : (function () { throw new RuntimeError('Variable "criteria_search_type" does not exist.', 17, $this->source); })()) == "1")) ? (" checked") : (""));
        yield ">
          <label class=\"form-check-label\" for=\"criteriaSearchTypeRadio1\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("at least one of the words"), "html", null, true);
        yield " ";
        yield PhpMyAdmin\Html\Generator::showHint(\_gettext("Words are separated by a space character (\" \")."));
        yield "</label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio2\" value=\"2\"";
        // line 21
        yield ((((isset($context["criteria_search_type"]) || array_key_exists("criteria_search_type", $context) ? $context["criteria_search_type"] : (function () { throw new RuntimeError('Variable "criteria_search_type" does not exist.', 21, $this->source); })()) == "2")) ? (" checked") : (""));
        yield ">
          <label class=\"form-check-label\" for=\"criteriaSearchTypeRadio2\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("all of the words"), "html", null, true);
        yield " ";
        yield PhpMyAdmin\Html\Generator::showHint(\_gettext("Words are separated by a space character (\" \")."));
        yield "</label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio3\" value=\"3\"";
        // line 25
        yield ((((isset($context["criteria_search_type"]) || array_key_exists("criteria_search_type", $context) ? $context["criteria_search_type"] : (function () { throw new RuntimeError('Variable "criteria_search_type" does not exist.', 25, $this->source); })()) == "3")) ? (" checked") : (""));
        yield ">
          <label class=\"form-check-label\" for=\"criteriaSearchTypeRadio3\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("the exact phrase as substring"), "html", null, true);
        yield "</label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio4\" value=\"4\"";
        // line 29
        yield ((((isset($context["criteria_search_type"]) || array_key_exists("criteria_search_type", $context) ? $context["criteria_search_type"] : (function () { throw new RuntimeError('Variable "criteria_search_type" does not exist.', 29, $this->source); })()) == "4")) ? (" checked") : (""));
        yield ">
          <label class=\"form-check-label\" for=\"criteriaSearchTypeRadio4\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("the exact phrase as whole field"), "html", null, true);
        yield "</label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio5\" value=\"5\"";
        // line 33
        yield ((((isset($context["criteria_search_type"]) || array_key_exists("criteria_search_type", $context) ? $context["criteria_search_type"] : (function () { throw new RuntimeError('Variable "criteria_search_type" does not exist.', 33, $this->source); })()) == "5")) ? (" checked") : (""));
        yield ">
          <label class=\"form-check-label\" for=\"criteriaSearchTypeRadio5\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("as regular expression"), "html", null, true);
        yield " ";
        yield PhpMyAdmin\Html\MySQLDocumentation::show("Regexp");
        yield "</label>
        </div>
        <legend>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Options:"), "html", null, true);
        yield "</legend>
        <div class=\"form-check\">
          <input class=\"form-check-input\" value='0' type=\"hidden\" name=\"criteriaSearchOptionIncludeHex\" id=\"criteriaSearchOptionHidden1\">
          <input class=\"form-check-input\" value='1' type=\"checkbox\" name=\"criteriaSearchOptionIncludeHex\" id=\"criteriaSearchOptionCheckbox1\" ";
        // line 39
        yield (((($tmp = (isset($context["criteria_search_options_include_hex"]) || array_key_exists("criteria_search_options_include_hex", $context) ? $context["criteria_search_options_include_hex"] : (function () { throw new RuntimeError('Variable "criteria_search_options_include_hex" does not exist.', 39, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" checked") : (""));
        yield ">
          <label class=\"form-check-label\" for=\"criteriaSearchOptionCheckbox1\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("include hex matches"), "html", null, true);
        yield " ";
        yield PhpMyAdmin\Html\MySQLDocumentation::show("string-functions", false, null, null, "function_hex");
        yield "</label>
        </div>
      </fieldset>

      <fieldset class=\"mb-3\">
        <legend>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Inside tables:"), "html", null, true);
        yield "</legend>

        <div>
          <button type=\"button\" class=\"btn btn-link\" id=\"select_all\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Select all"), "html", null, true);
        yield "</button>
          <button type=\"button\" class=\"btn btn-link\" id=\"unselect_all\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Unselect all"), "html", null, true);
        yield "</button>
        </div>
        <select class=\"form-select\" id=\"criteriaTables\" name=\"criteriaTables[]\" multiple>
          ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tables_names_only"]) || array_key_exists("tables_names_only", $context) ? $context["tables_names_only"] : (function () { throw new RuntimeError('Variable "tables_names_only" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["each_table"]) {
            // line 53
            yield "            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["each_table"], "html", null, true);
            yield "\"
              ";
            // line 54
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["criteria_tables"]) || array_key_exists("criteria_tables", $context) ? $context["criteria_tables"] : (function () { throw new RuntimeError('Variable "criteria_tables" does not exist.', 54, $this->source); })())) > 0)) {
                // line 55
                yield ((CoreExtension::inFilter($context["each_table"], (isset($context["criteria_tables"]) || array_key_exists("criteria_tables", $context) ? $context["criteria_tables"] : (function () { throw new RuntimeError('Variable "criteria_tables" does not exist.', 55, $this->source); })()))) ? (" selected") : (""));
                yield "
              ";
            } else {
                // line 57
                yield " selected";
                yield "
              ";
            }
            // line 59
            yield "            >
              ";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["each_table"], "html", null, true);
            yield "
            </option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['each_table'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "        </select>
      </fieldset>

      <div>
        <label for=\"criteriaColumnName\" class=\"form-label\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Inside column:"), "html", null, true);
        yield "</label>
        <input type=\"text\" class=\"form-control\" id=\"criteriaColumnName\" name=\"criteriaColumnName\" value=\"";
        // line 68
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["criteria_column_name"]) || array_key_exists("criteria_column_name", $context) ? $context["criteria_column_name"] : (function () { throw new RuntimeError('Variable "criteria_column_name" does not exist.', 68, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["criteria_column_name"]) || array_key_exists("criteria_column_name", $context) ? $context["criteria_column_name"] : (function () { throw new RuntimeError('Variable "criteria_column_name" does not exist.', 68, $this->source); })()), "html", null, true)) : (""));
        yield "\">
      </div>
    </div>
    <div class=\"card-footer\">
      <input id=\"buttonGo\" class=\"btn btn-primary\" type=\"submit\" name=\"submit_search\" value=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Search"), "html", null, true);
        yield "\">
    </div>
  </form>
  <div id=\"togglesearchformdiv\">
    <button id=\"togglesearchformlink\" class=\"btn btn-primary my-1\"></button>
  </div>
  <div id=\"searchresults\"></div>
  <div id=\"togglesearchresultsdiv\">
    <button id=\"togglesearchresultlink\" class=\"btn btn-primary\"></button>
  </div>
  <br class=\"clearfloat\">
  ";
        // line 84
        yield "  <div id=\"table-info\">
    <a id=\"table-link\" class=\"item\"></a>
  </div>
  ";
        // line 88
        yield "  <div id=\"browse-results\">
    ";
        // line 90
        yield "  </div>
  <div id=\"sqlqueryform\" class=\"clearfloat\">
    ";
        // line 93
        yield "  </div>
  ";
        // line 95
        yield "  <button class=\"btn btn-secondary\" id=\"togglequerybox\"></button>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/search/main.twig";
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
        return array (  248 => 95,  245 => 93,  241 => 90,  238 => 88,  233 => 84,  219 => 72,  212 => 68,  208 => 67,  202 => 63,  193 => 60,  190 => 59,  185 => 57,  180 => 55,  178 => 54,  173 => 53,  169 => 52,  163 => 49,  159 => 48,  153 => 45,  143 => 40,  139 => 39,  133 => 36,  126 => 34,  122 => 33,  116 => 30,  112 => 29,  106 => 26,  102 => 25,  94 => 22,  90 => 21,  82 => 18,  78 => 17,  72 => 14,  65 => 10,  61 => 9,  55 => 6,  51 => 5,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container\">
  <h2>{{ t('Search in database') }}</h2>

  <a id=\"db_search\"></a>
  <form id=\"db_search_form\" method=\"post\" action=\"{{ url('/database/search') }}\" name=\"db_search\" class=\"card mb-3 ajax lock-page\">
    {{ get_hidden_inputs(db) }}
    <div class=\"card-body\">
      <div class=\"mb-3\">
        <label for=\"criteriaSearchString\" class=\"form-label\">{{ t('Words or values to search for (wildcard: \"%\"):') }}</label>
        <input type=\"text\" class=\"form-control\" id=\"criteriaSearchString\" name=\"criteriaSearchString\" value=\"{{ criteria_search_string }}\">
      </div>

      <fieldset class=\"mb-3\">
        <legend>{{ t('Find:') }}</legend>

        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio1\" value=\"1\"{{ criteria_search_type == '1' ? ' checked' }}>
          <label class=\"form-check-label\" for=\"criteriaSearchTypeRadio1\">{{ t('at least one of the words') }} {{ show_hint(t('Words are separated by a space character (\" \").')) }}</label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio2\" value=\"2\"{{ criteria_search_type == '2' ? ' checked' }}>
          <label class=\"form-check-label\" for=\"criteriaSearchTypeRadio2\">{{ t('all of the words') }} {{ show_hint(t('Words are separated by a space character (\" \").')) }}</label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio3\" value=\"3\"{{ criteria_search_type == '3' ? ' checked' }}>
          <label class=\"form-check-label\" for=\"criteriaSearchTypeRadio3\">{{ t('the exact phrase as substring') }}</label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio4\" value=\"4\"{{ criteria_search_type == '4' ? ' checked' }}>
          <label class=\"form-check-label\" for=\"criteriaSearchTypeRadio4\">{{ t('the exact phrase as whole field') }}</label>
        </div>
        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"criteriaSearchType\" id=\"criteriaSearchTypeRadio5\" value=\"5\"{{ criteria_search_type == '5' ? ' checked' }}>
          <label class=\"form-check-label\" for=\"criteriaSearchTypeRadio5\">{{ t('as regular expression') }} {{ show_mysql_docu('Regexp') }}</label>
        </div>
        <legend>{{ t('Options:') }}</legend>
        <div class=\"form-check\">
          <input class=\"form-check-input\" value='0' type=\"hidden\" name=\"criteriaSearchOptionIncludeHex\" id=\"criteriaSearchOptionHidden1\">
          <input class=\"form-check-input\" value='1' type=\"checkbox\" name=\"criteriaSearchOptionIncludeHex\" id=\"criteriaSearchOptionCheckbox1\" {{ criteria_search_options_include_hex ? ' checked' }}>
          <label class=\"form-check-label\" for=\"criteriaSearchOptionCheckbox1\">{{ t('include hex matches') }} {{ show_mysql_docu('string-functions',false,null,null,'function_hex') }}</label>
        </div>
      </fieldset>

      <fieldset class=\"mb-3\">
        <legend>{{ t('Inside tables:') }}</legend>

        <div>
          <button type=\"button\" class=\"btn btn-link\" id=\"select_all\">{{ t('Select all') }}</button>
          <button type=\"button\" class=\"btn btn-link\" id=\"unselect_all\">{{ t('Unselect all') }}</button>
        </div>
        <select class=\"form-select\" id=\"criteriaTables\" name=\"criteriaTables[]\" multiple>
          {% for each_table in tables_names_only %}
            <option value=\"{{ each_table }}\"
              {% if criteria_tables|length > 0 %}
                {{- each_table in criteria_tables ? ' selected' }}
              {% else %}
                {{- ' selected' }}
              {% endif %}
            >
              {{ each_table }}
            </option>
          {% endfor %}
        </select>
      </fieldset>

      <div>
        <label for=\"criteriaColumnName\" class=\"form-label\">{{ t('Inside column:') }}</label>
        <input type=\"text\" class=\"form-control\" id=\"criteriaColumnName\" name=\"criteriaColumnName\" value=\"{{ criteria_column_name is not empty ? criteria_column_name }}\">
      </div>
    </div>
    <div class=\"card-footer\">
      <input id=\"buttonGo\" class=\"btn btn-primary\" type=\"submit\" name=\"submit_search\" value=\"{{ t('Search') }}\">
    </div>
  </form>
  <div id=\"togglesearchformdiv\">
    <button id=\"togglesearchformlink\" class=\"btn btn-primary my-1\"></button>
  </div>
  <div id=\"searchresults\"></div>
  <div id=\"togglesearchresultsdiv\">
    <button id=\"togglesearchresultlink\" class=\"btn btn-primary\"></button>
  </div>
  <br class=\"clearfloat\">
  {# These two table-image and table-link elements display the table name in browse search results #}
  <div id=\"table-info\">
    <a id=\"table-link\" class=\"item\"></a>
  </div>
  {# Div for browsing results #}
  <div id=\"browse-results\">
    {# This browse-results div is used to load the browse and delete results in the db search #}
  </div>
  <div id=\"sqlqueryform\" class=\"clearfloat\">
    {# This sqlqueryform div is used to load the delete form in the db search #}
  </div>
  {# Toggle query box link #}
  <button class=\"btn btn-secondary\" id=\"togglequerybox\"></button>
</div>
", "database/search/main.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/search/main.twig");
    }
}
