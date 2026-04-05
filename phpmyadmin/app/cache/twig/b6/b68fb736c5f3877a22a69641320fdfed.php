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

/* triggers/list.twig */
class __TwigTemplate_4e6b179b0402d9ac95b0e8c2f929195d extends Template
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
        yield PhpMyAdmin\Html\Generator::getIcon("b_triggers", \_gettext("Triggers"));
        yield "
    ";
        // line 4
        yield PhpMyAdmin\Html\MySQLDocumentation::show("TRIGGERS");
        yield "
  </h2>

  <div class=\"d-flex flex-wrap my-3\">";
        // line 8
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["triggers"]) || array_key_exists("triggers", $context) ? $context["triggers"] : (function () { throw new RuntimeError('Variable "triggers" does not exist.', 8, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
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
    </div>";
        }
        // line 26
        yield "
    <div";
        // line 27
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["triggers"]) || array_key_exists("triggers", $context) ? $context["triggers"] : (function () { throw new RuntimeError('Variable "triggers" does not exist.', 27, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" class=\"ms-auto\"") : (""));
        yield ">
      <a class=\"ajax add_anchor btn btn-primary";
        // line 28
        yield (((($tmp =  !(isset($context["has_privilege"]) || array_key_exists("has_privilege", $context) ? $context["has_privilege"] : (function () { throw new RuntimeError('Variable "has_privilege" does not exist.', 28, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" disabled") : (""));
        yield "\" href=\"";
        yield PhpMyAdmin\Url::getFromRoute("/triggers", ["db" => (isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 28, $this->source); })()), "table" => (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 28, $this->source); })()), "add_item" => true]);
        yield "\" role=\"button\"";
        yield (((($tmp =  !(isset($context["has_privilege"]) || array_key_exists("has_privilege", $context) ? $context["has_privilege"] : (function () { throw new RuntimeError('Variable "has_privilege" does not exist.', 28, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" tabindex=\"-1\" aria-disabled=\"true\"") : (""));
        yield ">
        ";
        // line 29
        yield PhpMyAdmin\Html\Generator::getIcon("b_trigger_add", \_gettext("Create new trigger"));
        yield "
      </a>
    </div>
  </div>

  ";
        // line 34
        yield (isset($context["error_message"]) || array_key_exists("error_message", $context) ? $context["error_message"] : (function () { throw new RuntimeError('Variable "error_message" does not exist.', 34, $this->source); })());
        // line 36
        yield "<form id=\"rteListForm\" class=\"disableAjax\" action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/triggers");
        yield "\">
    ";
        // line 37
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 37, $this->source); })()), (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 37, $this->source); })()));
        yield "

    <div id=\"nothing2display\"";
        // line 39
        yield (((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["triggers"]) || array_key_exists("triggers", $context) ? $context["triggers"] : (function () { throw new RuntimeError('Variable "triggers" does not exist.', 39, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" class=\"hide\"") : (""));
        yield ">
      ";
        // line 40
        yield PhpMyAdmin\Twig\MessageExtension::getNotice(\_gettext("There are no triggers to display."));
        yield "
    </div>

    <table id=\"triggersTable\" class=\"table table-striped table-hover";
        // line 43
        yield ((Twig\Extension\CoreExtension::testEmpty((isset($context["triggers"]) || array_key_exists("triggers", $context) ? $context["triggers"] : (function () { throw new RuntimeError('Variable "triggers" does not exist.', 43, $this->source); })()))) ? (" hide") : (""));
        yield " w-auto data\">
      <thead>
        <tr>
          <th></th>
          <th>";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Name"), "html", null, true);
        yield "</th>
          ";
        // line 48
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 48, $this->source); })()))) {
            // line 49
            yield "            <th>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table"), "html", null, true);
            yield "</th>
          ";
        }
        // line 51
        yield "          <th>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Time"), "html", null, true);
        yield "</th>
          <th>";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Event"), "html", null, true);
        yield "</th>
          <th colspan=\"3\"></th>
        </tr>
      </thead>
      <tbody>
        <tr class=\"hide\">";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, ((Twig\Extension\CoreExtension::testEmpty((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 57, $this->source); })()))) ? (7) : (6))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            yield "<td></td>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "</tr>";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["triggers"]) || array_key_exists("triggers", $context) ? $context["triggers"] : (function () { throw new RuntimeError('Variable "triggers" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trigger"]) {
            // line 60
            yield Twig\Extension\CoreExtension::include($this->env, $context, "triggers/row.twig", ["db" =>             // line 63
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 63, $this->source); })()), "table" =>             // line 64
(isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 64, $this->source); })()), "trigger" =>             // line 65
$context["trigger"], "has_drop_privilege" =>             // line 66
(isset($context["has_privilege"]) || array_key_exists("has_privilege", $context) ? $context["has_privilege"] : (function () { throw new RuntimeError('Variable "has_privilege" does not exist.', 66, $this->source); })()), "has_edit_privilege" =>             // line 67
(isset($context["has_privilege"]) || array_key_exists("has_privilege", $context) ? $context["has_privilege"] : (function () { throw new RuntimeError('Variable "has_privilege" does not exist.', 67, $this->source); })()), "row_class" => (((($tmp =             // line 68
(isset($context["is_ajax"]) || array_key_exists("is_ajax", $context) ? $context["is_ajax"] : (function () { throw new RuntimeError('Variable "is_ajax" does not exist.', 68, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ajaxInsert hide") : (""))], false);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['trigger'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "      </tbody>
    </table>
  </form>

  <div class=\"modal fade\" id=\"triggersEditorModal\" tabindex=\"-1\" aria-labelledby=\"triggersEditorModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl modal-dialog-scrollable\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h1 class=\"modal-title fs-5\" id=\"triggersEditorModalLabel\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Trigger editor"), "html", null, true);
        yield "</h1>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "\"></button>
        </div>
        <div class=\"modal-body\">
          <div class=\"spinner-border\" role=\"status\">
            <span class=\"visually-hidden\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Loading…"), "html", null, true);
        yield "</span>
          </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "</button>
          <button type=\"button\" class=\"btn btn-primary\" id=\"triggersEditorModalSaveButton\">";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Save changes"), "html", null, true);
        yield "</button>
        </div>
      </div>
    </div>
  </div>

  <div class=\"modal fade\" id=\"triggersExportModal\" tabindex=\"-1\" aria-labelledby=\"triggersExportModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h1 class=\"modal-title fs-5\" id=\"triggersExportModalLabel\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Export trigger"), "html", null, true);
        yield "</h1>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
        yield "\"></button>
        </div>
        <div class=\"modal-body\"></div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Close"), "html", null, true);
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
        return "triggers/list.twig";
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
        return array (  250 => 106,  243 => 102,  239 => 101,  226 => 91,  222 => 90,  215 => 86,  208 => 82,  204 => 81,  194 => 73,  188 => 68,  187 => 67,  186 => 66,  185 => 65,  184 => 64,  183 => 63,  182 => 60,  178 => 59,  168 => 57,  160 => 52,  155 => 51,  149 => 49,  147 => 48,  143 => 47,  136 => 43,  130 => 40,  126 => 39,  121 => 37,  116 => 36,  114 => 34,  106 => 29,  98 => 28,  94 => 27,  91 => 26,  84 => 21,  80 => 20,  75 => 18,  71 => 17,  65 => 14,  58 => 9,  56 => 8,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container-fluid my-3\">
  <h2>
    {{ get_icon('b_triggers', t('Triggers')) }}
    {{ show_mysql_docu('TRIGGERS') }}
  </h2>

  <div class=\"d-flex flex-wrap my-3\">
    {%- if triggers is not empty %}
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
    {%- endif %}

    <div{{ triggers is not empty ? ' class=\"ms-auto\"' }}>
      <a class=\"ajax add_anchor btn btn-primary{{ not has_privilege ? ' disabled' }}\" href=\"{{ url('/triggers', {'db': db, 'table': table, 'add_item': true}) }}\" role=\"button\"{{ not has_privilege ? ' tabindex=\"-1\" aria-disabled=\"true\"' }}>
        {{ get_icon('b_trigger_add', t('Create new trigger')) }}
      </a>
    </div>
  </div>

  {{ error_message|raw -}}

  <form id=\"rteListForm\" class=\"disableAjax\" action=\"{{ url('/triggers') }}\">
    {{ get_hidden_inputs(db, table) }}

    <div id=\"nothing2display\"{{ triggers is not empty ? ' class=\"hide\"' }}>
      {{ t('There are no triggers to display.')|notice }}
    </div>

    <table id=\"triggersTable\" class=\"table table-striped table-hover{{ triggers is empty ? ' hide' }} w-auto data\">
      <thead>
        <tr>
          <th></th>
          <th>{{ t('Name') }}</th>
          {% if table is empty %}
            <th>{{ t('Table') }}</th>
          {% endif %}
          <th>{{ t('Time') }}</th>
          <th>{{ t('Event') }}</th>
          <th colspan=\"3\"></th>
        </tr>
      </thead>
      <tbody>
        <tr class=\"hide\">{% for i in 0..(table is empty ? 7 : 6) %}<td></td>{% endfor %}</tr>

        {%- for trigger in triggers %}
          {{- include(
            'triggers/row.twig',
            {
              'db': db,
              'table': table,
              'trigger': trigger,
              'has_drop_privilege': has_privilege,
              'has_edit_privilege': has_privilege,
              'row_class': is_ajax ? 'ajaxInsert hide' : '',
            },
            with_context = false
          ) }}
        {%- endfor %}
      </tbody>
    </table>
  </form>

  <div class=\"modal fade\" id=\"triggersEditorModal\" tabindex=\"-1\" aria-labelledby=\"triggersEditorModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl modal-dialog-scrollable\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h1 class=\"modal-title fs-5\" id=\"triggersEditorModalLabel\">{{ t('Trigger editor') }}</h1>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{{ t('Close') }}\"></button>
        </div>
        <div class=\"modal-body\">
          <div class=\"spinner-border\" role=\"status\">
            <span class=\"visually-hidden\">{{ t('Loading…') }}</span>
          </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">{{ t('Close') }}</button>
          <button type=\"button\" class=\"btn btn-primary\" id=\"triggersEditorModalSaveButton\">{{ t('Save changes') }}</button>
        </div>
      </div>
    </div>
  </div>

  <div class=\"modal fade\" id=\"triggersExportModal\" tabindex=\"-1\" aria-labelledby=\"triggersExportModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h1 class=\"modal-title fs-5\" id=\"triggersExportModalLabel\">{{ t('Export trigger') }}</h1>
          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{{ t('Close') }}\"></button>
        </div>
        <div class=\"modal-body\"></div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">{{ t('Close') }}</button>
        </div>
      </div>
    </div>
  </div>
</div>
", "triggers/list.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/triggers/list.twig");
    }
}
