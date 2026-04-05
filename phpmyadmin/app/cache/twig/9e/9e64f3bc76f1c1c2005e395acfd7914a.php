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

/* database/routines/index.twig */
class __TwigTemplate_82f12f7eb3763ea8c7a5176325ab7279 extends Template
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
        yield "<div class=\"container-fluid my-3\">
  <h2>
    ";
        // line 3
        yield PhpMyAdmin\Html\Generator::getIcon("b_routines", \_gettext("Routines"));
        yield "
    ";
        // line 4
        yield PhpMyAdmin\Html\MySQLDocumentation::show("STORED_ROUTINES");
        yield "
  </h2>

  <div class=\"d-flex flex-wrap my-3\">";
        // line 8
        if ((($tmp = (isset($context["has_any_routines"]) || array_key_exists("has_any_routines", $context) ? $context["has_any_routines"] : (function () { throw new RuntimeError('Variable "has_any_routines" does not exist.', 8, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "    <div>
      <div class=\"input-group\">
        <div class=\"input-group-text\">
          <div class=\"form-check mb-0\">
            <input class=\"form-check-input checkall_box\" type=\"checkbox\" value=\"\" id=\"checkAllCheckbox\" form=\"rteListForm\">
            <label class=\"form-check-label\" for=\"checkAllCheckbox\">";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Check all"), "html", null, true);
            yield "</label>
          </div>
        </div>
        <button class=\"btn btn-outline-secondary\" id=\"bulkActionExportButton\" type=\"submit\" name=\"submit_mult\" value=\"export\" form=\"rteListForm\" title=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Export"), "html", null, true);
            yield "\">
          ";
            // line 18
            yield PhpMyAdmin\Html\Generator::getIcon("b_export", \_gettext("Export"));
            yield "
        </button>
        <button class=\"btn btn-outline-secondary\" id=\"bulkActionDropButton\" type=\"submit\" name=\"submit_mult\" value=\"drop\" form=\"rteListForm\" title=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Drop"), "html", null, true);
            yield "\">
          ";
            // line 21
            yield PhpMyAdmin\Html\Generator::getIcon("b_drop", \_gettext("Drop"));
            yield "
        </button>
      </div>
    </div>

    <div class=\"ms-auto\">
      <div class=\"input-group\">
        <span class=\"input-group-text\">";
            // line 28
            yield PhpMyAdmin\Html\Generator::getImage("b_search", \_gettext("Search"));
            yield "</span>
        <input class=\"form-control\" name=\"filterText\" type=\"text\" id=\"filterText\" value=\"\" placeholder=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Search"), "html", null, true);
            yield "\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Search"), "html", null, true);
            yield "\">
      </div>
    </div>";
        }
        // line 33
        yield "
    <div";
        // line 34
        yield (((($tmp = (isset($context["has_any_routines"]) || array_key_exists("has_any_routines", $context) ? $context["has_any_routines"] : (function () { throw new RuntimeError('Variable "has_any_routines" does not exist.', 34, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" class=\"ms-2\"") : (""));
        yield ">
      <a class=\"ajax add_anchor btn btn-primary";
        // line 35
        yield (((($tmp =  !(isset($context["has_privilege"]) || array_key_exists("has_privilege", $context) ? $context["has_privilege"] : (function () { throw new RuntimeError('Variable "has_privilege" does not exist.', 35, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" disabled") : (""));
        yield "\" href=\"";
        yield PhpMyAdmin\Url::getFromRoute("/database/routines", ["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 35, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 35, $this->source); })()), "add_item" => true]);
        yield "\" role=\"button\"";
        yield (((($tmp =  !(isset($context["has_privilege"]) || array_key_exists("has_privilege", $context) ? $context["has_privilege"] : (function () { throw new RuntimeError('Variable "has_privilege" does not exist.', 35, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" tabindex=\"-1\" aria-disabled=\"true\"") : (""));
        yield ">
        ";
        // line 36
        yield PhpMyAdmin\Html\Generator::getIcon("b_routine_add", \_gettext("Create new routine"));
        yield "
      </a>
    </div>
  </div>";
        // line 41
        if ((($tmp = (isset($context["has_any_routines"]) || array_key_exists("has_any_routines", $context) ? $context["has_any_routines"] : (function () { throw new RuntimeError('Variable "has_any_routines" does not exist.', 41, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield (isset($context["list_navigator_html"]) || array_key_exists("list_navigator_html", $context) ? $context["list_navigator_html"] : (function () { throw new RuntimeError('Variable "list_navigator_html" does not exist.', 42, $this->source); })());
        }
        // line 45
        yield "<form id=\"rteListForm\" class=\"disableAjax\" action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/database/routines");
        yield "\">
    ";
        // line 46
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 46, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 46, $this->source); })()));
        yield "

    <div id=\"nothing2display\"";
        // line 48
        yield (((($tmp = (isset($context["has_any_routines"]) || array_key_exists("has_any_routines", $context) ? $context["has_any_routines"] : (function () { throw new RuntimeError('Variable "has_any_routines" does not exist.', 48, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" class=\"hide\"") : (""));
        yield ">
      ";
        // line 49
        yield PhpMyAdmin\Twig\MessageExtension::getNotice(\_gettext("There are no routines to display."));
        yield "
    </div>

    <table id=\"routinesTable\" class=\"table table-striped table-hover";
        // line 52
        yield (((($tmp =  !(isset($context["has_any_routines"]) || array_key_exists("has_any_routines", $context) ? $context["has_any_routines"] : (function () { throw new RuntimeError('Variable "has_any_routines" does not exist.', 52, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" hide") : (""));
        yield " data w-auto\">
      <thead>
      <tr>
        <th></th>
        <th>";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Name"), "html", null, true);
        yield "</th>
        <th>";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Type"), "html", null, true);
        yield "</th>
        <th>";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Returns"), "html", null, true);
        yield "</th>
        <th colspan=\"4\"></th>
      </tr>
      </thead>
      <tbody>
      <tr class=\"hide\">";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            yield "<td></td>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "</tr>";
        // line 65
        yield (isset($context["rows"]) || array_key_exists("rows", $context) ? $context["rows"] : (function () { throw new RuntimeError('Variable "rows" does not exist.', 65, $this->source); })());
        yield "
      </tbody>
    </table>
  </form>";
        // line 70
        if ((($tmp = (isset($context["has_any_routines"]) || array_key_exists("has_any_routines", $context) ? $context["has_any_routines"] : (function () { throw new RuntimeError('Variable "has_any_routines" does not exist.', 70, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 71
            yield (isset($context["list_navigator_html"]) || array_key_exists("list_navigator_html", $context) ? $context["list_navigator_html"] : (function () { throw new RuntimeError('Variable "list_navigator_html" does not exist.', 71, $this->source); })());
        }
        // line 74
        yield "<div class=\"modal fade\" id=\"routinesEditorModal\" tabindex=\"-1\" aria-labelledby=\"routinesEditorModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl modal-dialog-scrollable\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h1 class=\"modal-title fs-5\" id=\"routinesEditorModalLabel\">";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Routine editor"), "html", null, true);
        yield "</h1>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "\"></button>
        </div>
        <div class=\"modal-body\">
          <div class=\"spinner-border\" role=\"status\">
            <span class=\"visually-hidden\">";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Loading…"), "html", null, true);
        yield "</span>
          </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "</button>
          <button type=\"button\" class=\"btn btn-primary\" id=\"routinesEditorModalSaveButton\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Save changes"), "html", null, true);
        yield "</button>
        </div>
      </div>
    </div>
  </div>

  <div class=\"modal fade\" id=\"routinesExportModal\" tabindex=\"-1\" aria-labelledby=\"routinesExportModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h1 class=\"modal-title fs-5\" id=\"routinesExportModalLabel\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Export routine"), "html", null, true);
        yield "</h1>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "\"></button>
        </div>
        <div class=\"modal-body\"></div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "</button>
        </div>
      </div>
    </div>
  </div>

  <div class=\"modal fade\" id=\"routinesExecuteModal\" tabindex=\"-1\" aria-labelledby=\"routinesExecuteModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl modal-dialog-scrollable\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h1 class=\"modal-title fs-5\" id=\"routinesExecuteModalLabel\">";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Execute routine"), "html", null, true);
        yield "</h1>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "\"></button>
        </div>
        <div class=\"modal-body\">
          <div class=\"spinner-border\" role=\"status\">
            <span class=\"visually-hidden\">";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Loading…"), "html", null, true);
        yield "</span>
          </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "</button>
          <button type=\"button\" class=\"btn btn-primary\" id=\"routinesExecuteModalExecuteButton\">";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Execute"), "html", null, true);
        yield "</button>
        </div>
      </div>
    </div>
  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/routines/index.twig";
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
        return array (  283 => 123,  279 => 122,  272 => 118,  265 => 114,  261 => 113,  248 => 103,  241 => 99,  237 => 98,  224 => 88,  220 => 87,  213 => 83,  206 => 79,  202 => 78,  196 => 74,  193 => 71,  191 => 70,  185 => 65,  175 => 63,  167 => 58,  163 => 57,  159 => 56,  152 => 52,  146 => 49,  142 => 48,  137 => 46,  132 => 45,  129 => 42,  127 => 41,  121 => 36,  113 => 35,  109 => 34,  106 => 33,  98 => 29,  94 => 28,  84 => 21,  80 => 20,  75 => 18,  71 => 17,  65 => 14,  58 => 9,  56 => 8,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container-fluid my-3\">
  <h2>
    {{ get_icon('b_routines', t('Routines')) }}
    {{ show_mysql_docu('STORED_ROUTINES') }}
  </h2>

  <div class=\"d-flex flex-wrap my-3\">
    {%- if has_any_routines %}
    <div>
      <div class=\"input-group\">
        <div class=\"input-group-text\">
          <div class=\"form-check mb-0\">
            <input class=\"form-check-input checkall_box\" type=\"checkbox\" value=\"\" id=\"checkAllCheckbox\" form=\"rteListForm\">
            <label class=\"form-check-label\" for=\"checkAllCheckbox\">{{ t('Check all') }}</label>
          </div>
        </div>
        <button class=\"btn btn-outline-secondary\" id=\"bulkActionExportButton\" type=\"submit\" name=\"submit_mult\" value=\"export\" form=\"rteListForm\" title=\"{{ t('Export') }}\">
          {{ get_icon('b_export', t('Export')) }}
        </button>
        <button class=\"btn btn-outline-secondary\" id=\"bulkActionDropButton\" type=\"submit\" name=\"submit_mult\" value=\"drop\" form=\"rteListForm\" title=\"{{ t('Drop') }}\">
          {{ get_icon('b_drop', t('Drop')) }}
        </button>
      </div>
    </div>

    <div class=\"ms-auto\">
      <div class=\"input-group\">
        <span class=\"input-group-text\">{{ get_image('b_search', t('Search')) }}</span>
        <input class=\"form-control\" name=\"filterText\" type=\"text\" id=\"filterText\" value=\"\" placeholder=\"{{ t('Search') }}\" aria-label=\"{{ t('Search') }}\">
      </div>
    </div>
    {%- endif %}

    <div{{ has_any_routines ? ' class=\"ms-2\"' }}>
      <a class=\"ajax add_anchor btn btn-primary{{ not has_privilege ? ' disabled' }}\" href=\"{{ url('/database/routines', {'db': db, 'table': table, 'add_item': true}) }}\" role=\"button\"{{ not has_privilege ? ' tabindex=\"-1\" aria-disabled=\"true\"' }}>
        {{ get_icon('b_routine_add', t('Create new routine')) }}
      </a>
    </div>
  </div>

  {%- if has_any_routines -%}
    {{ list_navigator_html|raw }}
  {%- endif -%}

  <form id=\"rteListForm\" class=\"disableAjax\" action=\"{{ url('/database/routines') }}\">
    {{ get_hidden_inputs(db, table) }}

    <div id=\"nothing2display\"{{ has_any_routines ? ' class=\"hide\"' }}>
      {{ t('There are no routines to display.')|notice }}
    </div>

    <table id=\"routinesTable\" class=\"table table-striped table-hover{{ not has_any_routines ? ' hide' }} data w-auto\">
      <thead>
      <tr>
        <th></th>
        <th>{{ t('Name') }}</th>
        <th>{{ t('Type') }}</th>
        <th>{{ t('Returns') }}</th>
        <th colspan=\"4\"></th>
      </tr>
      </thead>
      <tbody>
      <tr class=\"hide\">{% for i in 0..7 %}<td></td>{% endfor %}</tr>

      {{- rows|raw }}
      </tbody>
    </table>
  </form>

  {%- if has_any_routines -%}
    {{ list_navigator_html|raw }}
  {%- endif -%}

  <div class=\"modal fade\" id=\"routinesEditorModal\" tabindex=\"-1\" aria-labelledby=\"routinesEditorModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl modal-dialog-scrollable\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h1 class=\"modal-title fs-5\" id=\"routinesEditorModalLabel\">{{ t('Routine editor') }}</h1>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{{ t('Close') }}\"></button>
        </div>
        <div class=\"modal-body\">
          <div class=\"spinner-border\" role=\"status\">
            <span class=\"visually-hidden\">{{ t('Loading…') }}</span>
          </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">{{ t('Close') }}</button>
          <button type=\"button\" class=\"btn btn-primary\" id=\"routinesEditorModalSaveButton\">{{ t('Save changes') }}</button>
        </div>
      </div>
    </div>
  </div>

  <div class=\"modal fade\" id=\"routinesExportModal\" tabindex=\"-1\" aria-labelledby=\"routinesExportModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h1 class=\"modal-title fs-5\" id=\"routinesExportModalLabel\">{{ t('Export routine') }}</h1>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{{ t('Close') }}\"></button>
        </div>
        <div class=\"modal-body\"></div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">{{ t('Close') }}</button>
        </div>
      </div>
    </div>
  </div>

  <div class=\"modal fade\" id=\"routinesExecuteModal\" tabindex=\"-1\" aria-labelledby=\"routinesExecuteModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl modal-dialog-scrollable\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h1 class=\"modal-title fs-5\" id=\"routinesExecuteModalLabel\">{{ t('Execute routine') }}</h1>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{{ t('Close') }}\"></button>
        </div>
        <div class=\"modal-body\">
          <div class=\"spinner-border\" role=\"status\">
            <span class=\"visually-hidden\">{{ t('Loading…') }}</span>
          </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">{{ t('Close') }}</button>
          <button type=\"button\" class=\"btn btn-primary\" id=\"routinesExecuteModalExecuteButton\">{{ t('Execute') }}</button>
        </div>
      </div>
    </div>
  </div>
</div>
", "database/routines/index.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/routines/index.twig");
    }
}
