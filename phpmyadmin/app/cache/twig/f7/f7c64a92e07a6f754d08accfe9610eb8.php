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

/* table/find_replace/index.twig */
class __TwigTemplate_436e6977dca280b30df87c105a802ec9 extends Template
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
    <a class=\"nav-link disableAjax\" href=\"";
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
    <a class=\"nav-link active disableAjax\" href=\"";
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
        yield PhpMyAdmin\Url::getFromRoute("/table/find-replace");
        yield "\" name=\"insertForm\" id=\"find_replace_form\" class=\"ajax lock-page\">
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
        yield PhpMyAdmin\Url::getFromRoute("/table/find-replace");
        yield "\">

  <div class=\"card\">
    <div class=\"card-header\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Find and replace"), "html", null, true);
        yield "</div>

    <div class=\"card-body\">
      <div class=\"mb-3\">
        <label class=\"form-label\" for=\"findInput\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Find:"), "html", null, true);
        yield "</label>
        <input class=\"form-control\" type=\"text\" value=\"\" name=\"find\" id=\"findInput\" required>
      </div>

      <div class=\"mb-3\">
        <label class=\"form-label\" for=\"replaceWithInput\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Replace with:"), "html", null, true);
        yield "</label>
        <input class=\"form-control\" type=\"text\" value=\"\" name=\"replaceWith\" id=\"replaceWithInput\">
      </div>

      <div class=\"mb-3\">
        <label class=\"form-label\" for=\"columnIndexSelect\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Column:"), "html", null, true);
        yield "</label>
        <select class=\"form-select\" name=\"columnIndex\" id=\"columnIndexSelect\">
          ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 43, $this->source); })())) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 44
            yield "            ";
            $context["type"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 44, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 44, $this->source); })()), $context["i"], [], "array", false, false, false, 44), [], "array", false, false, false, 44);
            // line 45
            yield "
            ";
            // line 46
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sql_types"]) || array_key_exists("sql_types", $context) ? $context["sql_types"] : (function () { throw new RuntimeError('Variable "sql_types" does not exist.', 46, $this->source); })()), "getTypeClass", [(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 46, $this->source); })())], "method", false, false, false, 46) == "CHAR")) {
                // line 47
                yield "              <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\">";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column_names"]) || array_key_exists("column_names", $context) ? $context["column_names"] : (function () { throw new RuntimeError('Variable "column_names" does not exist.', 48, $this->source); })()), $context["i"], [], "array", false, false, false, 48), "html", null, true);
                // line 49
                yield "</option>
            ";
            }
            // line 51
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "        </select>
      </div>

      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"useRegex\" id=\"useRegex\">
        <label class=\"form-check-label\" for=\"useRegex\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Use regular expression"), "html", null, true);
        yield "</label>
      </div>
    </div>

    <div class=\"card-footer\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"";
        // line 62
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
        return "table/find_replace/index.twig";
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
        return array (  171 => 62,  163 => 57,  156 => 52,  150 => 51,  146 => 49,  144 => 48,  140 => 47,  138 => 46,  135 => 45,  132 => 44,  128 => 43,  123 => 41,  115 => 36,  107 => 31,  100 => 27,  94 => 24,  90 => 23,  86 => 22,  82 => 21,  74 => 16,  70 => 15,  62 => 10,  58 => 9,  50 => 4,  46 => 3,  42 => 1,);
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
    <a class=\"nav-link disableAjax\" href=\"{{ url('/table/zoom-search', {'db': db, 'table': table}) }}\">
      {{ get_icon('b_select', t('Zoom search'), false, false, 'TabsMode') }}
    </a>
  </li>

  <li class=\"nav-item\">
    <a class=\"nav-link active disableAjax\" href=\"{{ url('/table/find-replace', {'db': db, 'table': table}) }}\">
      {{ get_icon('b_find_replace', t('Find and replace'), false, false, 'TabsMode') }}
    </a>
  </li>
</ul>

<form method=\"post\" action=\"{{ url('/table/find-replace') }}\" name=\"insertForm\" id=\"find_replace_form\" class=\"ajax lock-page\">
  {{ get_hidden_inputs(db, table) }}
  <input type=\"hidden\" name=\"goto\" value=\"{{ goto }}\">
  <input type=\"hidden\" name=\"back\" value=\"{{ url('/table/find-replace') }}\">

  <div class=\"card\">
    <div class=\"card-header\">{{ t('Find and replace') }}</div>

    <div class=\"card-body\">
      <div class=\"mb-3\">
        <label class=\"form-label\" for=\"findInput\">{{ t('Find:') }}</label>
        <input class=\"form-control\" type=\"text\" value=\"\" name=\"find\" id=\"findInput\" required>
      </div>

      <div class=\"mb-3\">
        <label class=\"form-label\" for=\"replaceWithInput\">{{ t('Replace with:') }}</label>
        <input class=\"form-control\" type=\"text\" value=\"\" name=\"replaceWith\" id=\"replaceWithInput\">
      </div>

      <div class=\"mb-3\">
        <label class=\"form-label\" for=\"columnIndexSelect\">{{ t('Column:') }}</label>
        <select class=\"form-select\" name=\"columnIndex\" id=\"columnIndexSelect\">
          {% for i in 0..column_names|length - 1 %}
            {% set type = types[column_names[i]] %}

            {% if sql_types.getTypeClass(type) == 'CHAR' %}
              <option value=\"{{ i }}\">
                {{- column_names[i] -}}
              </option>
            {% endif %}
          {% endfor %}
        </select>
      </div>

      <div class=\"form-check\">
        <input class=\"form-check-input\" type=\"checkbox\" name=\"useRegex\" id=\"useRegex\">
        <label class=\"form-check-label\" for=\"useRegex\">{{ t('Use regular expression') }}</label>
      </div>
    </div>

    <div class=\"card-footer\">
      <input class=\"btn btn-primary\" type=\"submit\" name=\"submit\" value=\"{{ t('Go') }}\">
    </div>
  </div>
</form>
<div id=\"sqlqueryresultsouter\"></div>
", "table/find_replace/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/find_replace/index.twig");
    }
}
